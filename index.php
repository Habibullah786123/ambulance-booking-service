<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management System</title>
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
            <?php echo htmlspecialchars($_SESSION['error']); unset($_SESSION['error']); ?>
            <button onclick="this.parentElement.remove()" class="ml-4 text-white hover:text-gray-200">×</button>
        </div>
    <?php endif; ?>

    <?php if (isset($_SESSION['success'])): ?>
        <div class="fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50" id="successMessage">
            <?php echo htmlspecialchars($_SESSION['success']); unset($_SESSION['success']); ?>
            <button onclick="this.parentElement.remove()" class="ml-4 text-white hover:text-gray-200">×</button>
        </div>
    <?php endif; ?>

    <!-- Navigation -->
    <?php include 'includes/navbar.php'; ?>

    <!-- Hero Section -->
    <section id="home" class="hero-gradient pt-16 pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20">
            <div class="text-center fade-in">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                    Welcome to Shahbaz Medical Center
                </h1>
                <p class="text-xl md:text-2xl text-blue-100 mb-8 max-w-3xl mx-auto">
                    Advanced Healthcare Management System providing comprehensive medical services with cutting-edge
                    technology
                </p>
                <div class="space-x-4">
                    <button onclick="openAppointmentModal()"
                        class="bg-white text-blue-600 hover:bg-gray-100 px-8 py-3 rounded-lg font-semibold text-lg transition-colors">
                        <i class="fas fa-calendar-plus mr-2"></i>Book Appointment
                    </button>
                    <button onclick="openEmergencyModal()"
                        class="bg-red-600 hover:bg-red-700 text-white px-8 py-3 rounded-lg font-semibold text-lg transition-colors">
                        <i class="fas fa-ambulance mr-2"></i>Emergency
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Access Cards -->
    <section class="py-16 -mt-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white rounded-lg shadow-lg p-6 card-hover cursor-pointer" onclick="openPatientPortal()">
                    <div class="text-center">
                        <i class="fas fa-user-injured text-4xl text-blue-600 mb-4"></i>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Patient Portal</h3>
                        <p class="text-gray-600">Access your medical records, test results, and appointments</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg p-6 card-hover cursor-pointer" onclick="openDoctorPortal()">
                    <div class="text-center">
                        <i class="fas fa-user-md text-4xl text-green-600 mb-4"></i>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Doctor Portal</h3>
                        <p class="text-gray-600">Manage patient records, schedules, and prescriptions</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg p-6 card-hover cursor-pointer" onclick="openAdminPortal()">
                    <div class="text-center">
                        <i class="fas fa-cog text-4xl text-purple-600 mb-4"></i>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Admin Portal</h3>
                        <p class="text-gray-600">Hospital administration and management system</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg p-6 card-hover cursor-pointer" onclick="openPharmacyPortal()">
                    <div class="text-center">
                        <i class="fas fa-pills text-4xl text-orange-600 mb-4"></i>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Pharmacy</h3>
                        <p class="text-gray-600">Prescription management and medication tracking</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Our Services</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Comprehensive healthcare services with
                    state-of-the-art facilities</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-50 rounded-lg p-6 card-hover">
                    <i class="fas fa-stethoscope text-3xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">General Medicine</h3>
                    <p class="text-gray-600">Comprehensive primary healthcare services for all age groups</p>
                </div>

                <div class="bg-gray-50 rounded-lg p-6 card-hover">
                    <i class="fas fa-x-ray text-3xl text-green-600 mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Diagnostic Imaging</h3>
                    <p class="text-gray-600">Advanced imaging services including X-ray, CT scan, and MRI</p>
                </div>

                <div class="bg-gray-50 rounded-lg p-6 card-hover">
                    <i class="fas fa-vial text-3xl text-purple-600 mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Laboratory Services</h3>
                    <p class="text-gray-600">Complete pathology and clinical laboratory testing</p>
                </div>

                <div class="bg-gray-50 rounded-lg p-6 card-hover">
                    <i class="fas fa-heartbeat text-3xl text-red-600 mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Cardiology</h3>
                    <p class="text-gray-600">Specialized cardiac care and heart disease treatment</p>
                </div>

                <div class="bg-gray-50 rounded-lg p-6 card-hover">
                    <i class="fas fa-baby text-3xl text-pink-600 mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Pediatrics</h3>
                    <p class="text-gray-600">Dedicated healthcare services for infants, children, and adolescents
                    </p>
                </div>

                <div class="bg-gray-50 rounded-lg p-6 card-hover">
                    <i class="fas fa-ambulance text-3xl text-orange-600 mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Emergency Care</h3>
                    <p class="text-gray-600">24/7 emergency medical services and trauma care</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">About Shahbaz Medical Center</h2>
                    <p class="text-lg text-gray-600 mb-6">
                        For over two decades, Shahbaz Medical Center has been at the forefront of healthcare
                        innovation,
                        providing exceptional medical services to our community. Our state-of-the-art facility
                        combines
                        advanced technology with compassionate care.
                    </p>
                    <div class="grid grid-cols-2 gap-6 mb-6">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-blue-600">500+</div>
                            <div class="text-gray-600">Beds</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-green-600">200+</div>
                            <div class="text-gray-600">Doctors</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-purple-600">50+</div>
                            <div class="text-gray-600">Departments</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-orange-600">24/7</div>
                            <div class="text-gray-600">Emergency</div>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-6">Hospital Hours</h3>
                    <div class="space-y-3">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Emergency Services</span>
                            <span class="font-semibold text-green-600">24/7</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">OPD Services</span>
                            <span class="font-semibold">8:00 AM - 8:00 PM</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Pharmacy</span>
                            <span class="font-semibold">24/7</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Laboratory</span>
                            <span class="font-semibold">6:00 AM - 10:00 PM</span>
                        </div>
                    </div>
                    <div class="mt-6 pt-6 border-t">
                        <div class="flex items-center mb-3">
                            <i class="fas fa-phone text-blue-600 mr-3"></i>
                            <span>+92 300 123 4567</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-envelope text-blue-600 mr-3"></i>
                            <span>info@shahbazmedical.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Contact Us</h2>
                <p class="text-xl text-gray-600">Get in touch with us for any inquiries or assistance</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="bg-gray-50 rounded-lg p-6 text-center card-hover">
                    <i class="fas fa-map-marker-alt text-3xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Address</h3>
                    <p class="text-gray-600">C77C+3V6, Phase - I Sindh University Employees CHS, Jamshoro, Sindh,
                        Pakistan</p>
                </div>

                <div class="bg-gray-50 rounded-lg p-6 text-center card-hover">
                    <i class="fas fa-phone text-3xl text-green-600 mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Phone</h3>
                    <p class="text-gray-600">Emergency: +92 300 123 4567<br>Appointments: +92 300 123
                        4568<br>General: +92 300 123 4569</p>
                </div>

                <div class="bg-gray-50 rounded-lg p-6 text-center card-hover">
                    <i class="fas fa-envelope text-3xl text-purple-600 mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Email</h3>
                    <p class="text-gray-600">
                        info@shahbazmedical.com<br>appointments@shahbazmedical.com<br>emergency@shahbazmedical.com
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>


    <!-- Appointment Modal -->
    <div id="appointmentModal"
        class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center">
        <div class="bg-white rounded-lg p-8 max-w-md w-full mx-4">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Book Appointment</h2>
                <button onclick="closeAppointmentModal()" class="text-gray-500 hover:text-gray-700 cursor-pointer">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>

            <form id="appointmentForm" method="POST">
                <!-- Patient Name -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Patient Name</label>
                    <input type="text" name="patientName" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                </div>

                <!-- Phone Number -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Phone Number</label>
                    <input type="tel" name="phoneNumber" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                </div>

                <!-- Department -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Department</label>
                    <select name="department" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                        <option value="">Select Department</option> <!-- value="" is better for validation -->
                        <option value="General Medicine">General Medicine</option>
                        <option value="Cardiology">Cardiology</option>
                        <option value="Pediatrics">Pediatrics</option>
                        <option value="Orthopedics">Orthopedics</option>
                        <option value="Neurology">Neurology</option>
                    </select>
                </div>

                <!-- Preferred Date -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Preferred Date</label>
                    <input type="date" name="date" required min="" id="appointmentDate"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                </div>

                <!-- Preferred Time -->
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Preferred Time</label>
                    <select name="time" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                        <option value="">Select Time</option>
                        <option value="9:00 AM">9:00 AM</option>
                        <option value="10:00 AM">10:00 AM</option>
                        <option value="11:00 AM">11:00 AM</option>
                        <option value="2:00 PM">2:00 PM</option>
                        <option value="3:00 PM">3:00 PM</option>
                        <option value="4:00 PM">4:00 PM</option>
                    </select>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md transition-colors">
                    Book Appointment
                </button>
            </form>

        </div>
    </div>

    <script src="js/script.js"></script>
</body>

</html>