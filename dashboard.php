<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php'); // redirect to login if not logged in
    exit;
}

require_once 'includes/db.php';

// Handle appointment status updates
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_status'])) {
    $appointment_id = (int) $_POST['appointment_id'];
    $new_status = $_POST['status'];

    $allowed_statuses = ['pending', 'confirmed', 'cancelled', 'completed'];
    if (in_array($new_status, $allowed_statuses)) {
        $update_stmt = $conn->prepare("UPDATE appointments SET status = ? WHERE id = ?");
        $update_stmt->bind_param("si", $new_status, $appointment_id);

        if ($update_stmt->execute()) {
            $_SESSION['success'] = "Appointment status updated successfully.";
        } else {
            $_SESSION['error'] = "Failed to update appointment status.";
        }
        $update_stmt->close();
    }

    header('Location: dashboard.php');
    exit;
}

// Handle appointment deletion
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_appointment'])) {
    $appointment_id = (int) $_POST['appointment_id'];

    $delete_stmt = $conn->prepare("DELETE FROM appointments WHERE id = ?");
    $delete_stmt->bind_param("i", $appointment_id);

    if ($delete_stmt->execute()) {
        $_SESSION['success'] = "Appointment deleted successfully.";
    } else {
        $_SESSION['error'] = "Failed to delete appointment.";
    }
    $delete_stmt->close();

    header('Location: dashboard.php');
    exit;
}

// Pagination setup
$records_per_page = 10;
$page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$offset = ($page - 1) * $records_per_page;

// Filter setup
$status_filter = isset($_GET['status']) ? $_GET['status'] : '';
$date_filter = isset($_GET['date']) ? $_GET['date'] : '';
$search = isset($_GET['search']) ? trim($_GET['search']) : '';

// Build query with filters
$where_conditions = [];
$params = [];
$param_types = '';

if (!empty($status_filter)) {
    $where_conditions[] = "status = ?";
    $params[] = $status_filter;
    $param_types .= 's';
}

if (!empty($date_filter)) {
    $where_conditions[] = "appointment_date = ?";
    $params[] = $date_filter;
    $param_types .= 's';
}

if (!empty($search)) {
    $where_conditions[] = "(patient_name LIKE ? OR phone_number LIKE ? OR department LIKE ?)";
    $search_param = "%$search%";
    $params[] = $search_param;
    $params[] = $search_param;
    $params[] = $search_param;
    $param_types .= 'sss';
}

$where_clause = !empty($where_conditions) ? "WHERE " . implode(" AND ", $where_conditions) : "";

// Get total records for pagination
$count_query = "SELECT COUNT(*) as total FROM appointments $where_clause";
if (!empty($params)) {
    $count_stmt = $conn->prepare($count_query);
    $count_stmt->bind_param($param_types, ...$params);
    $count_stmt->execute();
    $count_result = $count_stmt->get_result();
    $total_records = $count_result->fetch_assoc()['total'];
    $count_stmt->close();
} else {
    $count_result = $conn->query($count_query);
    $total_records = $count_result->fetch_assoc()['total'];
}

$total_pages = ceil($total_records / $records_per_page);

// Get appointments with pagination
$query = "SELECT * FROM appointments $where_clause ORDER BY created_at DESC LIMIT ? OFFSET ?";
$params[] = $records_per_page;
$params[] = $offset;
$param_types .= 'ii';

$stmt = $conn->prepare($query);
if (!empty($param_types)) {
    $stmt->bind_param($param_types, ...$params);
}
$stmt->execute();
$appointments = $stmt->get_result();

// Get statistics
$stats_query = "SELECT 
    COUNT(*) as total,
    SUM(CASE WHEN status = 'pending' THEN 1 ELSE 0 END) as pending,
    SUM(CASE WHEN status = 'confirmed' THEN 1 ELSE 0 END) as confirmed,
    SUM(CASE WHEN status = 'completed' THEN 1 ELSE 0 END) as completed,
    SUM(CASE WHEN status = 'cancelled' THEN 1 ELSE 0 END) as cancelled
    FROM appointments";
$stats_result = $conn->query($stats_query);
$stats = $stats_result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Shahbaz Medical Center</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-gray-50">

    <!-- Flash Messages -->
    <?php if (isset($_SESSION['error'])): ?>
        <div class="fixed top-4 right-4 bg-red-500 text-white px-6 py-3 rounded-lg shadow-lg z-50" id="errorMessage">
            <?php echo htmlspecialchars($_SESSION['error']);
            unset($_SESSION['error']); ?>
            <button onclick="this.parentElement.remove()" class="ml-4 text-white hover:text-gray-200">×</button>
        </div>
    <?php endif; ?>

    <?php if (isset($_SESSION['success'])): ?>
        <div class="fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50" id="successMessage">
            <?php echo htmlspecialchars($_SESSION['success']);
            unset($_SESSION['success']); ?>
            <button onclick="this.parentElement.remove()" class="ml-4 text-white hover:text-gray-200">×</button>
        </div>
    <?php endif; ?>

    <!-- Navigation -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <i class="fas fa-heartbeat text-blue-600 text-2xl mr-3"></i>
                        <span class="font-bold text-xl text-gray-800">Admin Dashboard</span>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-700">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></span>
                    <a href="index.php" class="text-blue-600 hover:text-blue-800">View Site</a>
                    <a href="includes/logout.php"
                        class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">
                        <i class="fas fa-sign-out-alt mr-2"></i>Logout
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <!-- Statistics Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <i class="fas fa-calendar-alt text-blue-500 text-2xl"></i>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Total Appointments</dt>
                                <dd class="text-lg font-medium text-gray-900"><?php echo $stats['total']; ?></dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <i class="fas fa-clock text-yellow-500 text-2xl"></i>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Pending</dt>
                                <dd class="text-lg font-medium text-gray-900"><?php echo $stats['pending']; ?></dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <i class="fas fa-check-circle text-green-500 text-2xl"></i>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Confirmed</dt>
                                <dd class="text-lg font-medium text-gray-900"><?php echo $stats['confirmed']; ?></dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <i class="fas fa-check-double text-blue-500 text-2xl"></i>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Completed</dt>
                                <dd class="text-lg font-medium text-gray-900"><?php echo $stats['completed']; ?></dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filters and Search -->
        <div class="bg-white shadow rounded-lg mb-6">
            <div class="px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Appointment Management</h3>
            </div>
            <div class="px-6 py-4">
                <form method="GET" class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Search</label>
                        <input type="text" name="search" value="<?php echo htmlspecialchars($search); ?>"
                            placeholder="Patient name, phone, department..."
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                        <select name="status"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                            <option value="">All Statuses</option>
                            <option value="pending" <?php echo $status_filter === 'pending' ? 'selected' : ''; ?>>Pending
                            </option>
                            <option value="confirmed" <?php echo $status_filter === 'confirmed' ? 'selected' : ''; ?>>
                                Confirmed</option>
                            <option value="completed" <?php echo $status_filter === 'completed' ? 'selected' : ''; ?>>
                                Completed</option>
                            <option value="cancelled" <?php echo $status_filter === 'cancelled' ? 'selected' : ''; ?>>
                                Cancelled</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Date</label>
                        <input type="date" name="date" value="<?php echo htmlspecialchars($date_filter); ?>"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                    </div>
                    <div class="flex items-end">
                        <button type="submit"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md transition-colors">
                            <i class="fas fa-search mr-2"></i>Filter
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Appointments Table -->
        <div class="bg-white shadow overflow-hidden sm:rounded-md">
            <div class="px-6 py-4 border-b border-gray-200">
                <div class="flex justify-between items-center">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Appointments (<?php echo $total_records; ?> total)
                    </h3>
                    <a href="?page=1" class="text-blue-600 hover:text-blue-800">
                        <i class="fas fa-refresh mr-2"></i>Refresh
                    </a>
                </div>
            </div>

            <?php if ($appointments->num_rows > 0): ?>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    ID</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Patient</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Contact</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Department</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Appointment</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Booked At</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php while ($appointment = $appointments->fetch_assoc()): ?>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        #<?php echo $appointment['id']; ?>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">
                                            <?php echo htmlspecialchars($appointment['patient_name']); ?>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">
                                            <?php echo htmlspecialchars($appointment['phone_number']); ?>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">
                                            <?php echo htmlspecialchars($appointment['department']); ?>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">
                                            <?php echo date('M d, Y', strtotime($appointment['appointment_date'])); ?><br>
                                            <span
                                                class="text-gray-500"><?php echo htmlspecialchars($appointment['appointment_time']); ?></span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <?php
                                        $status = $appointment['status'];
                                        $status_classes = [
                                            'pending' => 'bg-yellow-100 text-yellow-800',
                                            'confirmed' => 'bg-blue-100 text-blue-800',
                                            'completed' => 'bg-green-100 text-green-800',
                                            'cancelled' => 'bg-red-100 text-red-800'
                                        ];
                                        ?>
                                        <span
                                            class="inline-flex px-2 py-1 text-xs font-semibold rounded-full <?php echo $status_classes[$status] ?? 'bg-gray-100 text-gray-800'; ?>">
                                            <?php echo ucfirst($status); ?>
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <?php echo date('M d, Y H:i', strtotime($appointment['created_at'])); ?>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <div class="flex space-x-2">
                                            <!-- Status Update Form -->
                                            <form method="POST" class="inline">
                                                <input type="hidden" name="appointment_id"
                                                    value="<?php echo $appointment['id']; ?>">
                                                <select name="status" onchange="this.form.submit()"
                                                    class="text-xs border-gray-300 rounded focus:outline-none focus:border-blue-500">
                                                    <option value="pending" <?php echo $status === 'pending' ? 'selected' : ''; ?>>Pending</option>
                                                    <option value="confirmed" <?php echo $status === 'confirmed' ? 'selected' : ''; ?>>Confirmed</option>
                                                    <option value="completed" <?php echo $status === 'completed' ? 'selected' : ''; ?>>Completed</option>
                                                    <option value="cancelled" <?php echo $status === 'cancelled' ? 'selected' : ''; ?>>Cancelled</option>
                                                </select>
                                                <input type="hidden" name="update_status" value="1">
                                            </form>

                                            <!-- Delete Button -->
                                            <form method="POST" class="inline"
                                                onsubmit="return confirm('Are you sure you want to delete this appointment?')">
                                                <input type="hidden" name="appointment_id"
                                                    value="<?php echo $appointment['id']; ?>">
                                                <button type="submit" name="delete_appointment" value="1"
                                                    class="text-red-600 hover:text-red-900">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <?php if ($total_pages > 1): ?>
                    <div class="bg-white px-6 py-3 border-t border-gray-200">
                        <div class="flex justify-between items-center">
                            <div class="text-sm text-gray-700">
                                Showing <?php echo $offset + 1; ?> to
                                <?php echo min($offset + $records_per_page, $total_records); ?> of <?php echo $total_records; ?>
                                results
                            </div>
                            <div class="flex space-x-2">
                                <?php if ($page > 1): ?>
                                    <a href="?page=<?php echo $page - 1; ?>&status=<?php echo urlencode($status_filter); ?>&date=<?php echo urlencode($date_filter); ?>&search=<?php echo urlencode($search); ?>"
                                        class="px-3 py-2 text-sm bg-gray-200 text-gray-700 rounded hover:bg-gray-300">Previous</a>
                                <?php endif; ?>

                                <?php for ($i = max(1, $page - 2); $i <= min($total_pages, $page + 2); $i++): ?>
                                    <a href="?page=<?php echo $i; ?>&status=<?php echo urlencode($status_filter); ?>&date=<?php echo urlencode($date_filter); ?>&search=<?php echo urlencode($search); ?>"
                                        class="px-3 py-2 text-sm <?php echo $i === $page ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300'; ?> rounded">
                                        <?php echo $i; ?>
                                    </a>
                                <?php endfor; ?>

                                <?php if ($page < $total_pages): ?>
                                    <a href="?page=<?php echo $page + 1; ?>&status=<?php echo urlencode($status_filter); ?>&date=<?php echo urlencode($date_filter); ?>&search=<?php echo urlencode($search); ?>"
                                        class="px-3 py-2 text-sm bg-gray-200 text-gray-700 rounded hover:bg-gray-300">Next</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php else: ?>
                <div class="px-6 py-12 text-center">
                    <i class="fas fa-calendar-times text-gray-400 text-4xl mb-4"></i>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">No appointments found</h3>
                    <p class="text-gray-500">
                        <?php if (!empty($search) || !empty($status_filter) || !empty($date_filter)): ?>
                            Try adjusting your filters to see more results.
                        <?php else: ?>
                            No appointments have been booked yet.
                        <?php endif; ?>
                    </p>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <script>
        // Auto-hide flash messages after 5 seconds
        setTimeout(function () {
            const errorMessage = document.getElementById('errorMessage');
            const successMessage = document.getElementById('successMessage');

            if (errorMessage) errorMessage.remove();
            if (successMessage) successMessage.remove();
        }, 5000);
    </script>

</body>

</html>

<?php
$stmt->close();
$conn->close();
?>