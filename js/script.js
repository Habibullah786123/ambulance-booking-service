function toggleMobileMenu() {
    const menu = document.getElementById('mobileMenu');
    menu.classList.toggle('hidden');
}

// Modal functions
function openLoginModal() {
    document.getElementById('loginModal').classList.remove('hidden');
}

function closeLoginModal() {
    document.getElementById('loginModal').classList.add('hidden');
}

function openAppointmentModal() {
    document.getElementById('appointmentModal').classList.remove('hidden');
}

function closeAppointmentModal() {
    document.getElementById('appointmentModal').classList.add('hidden');
}

function openEmergencyModal() {
    alert('Emergency Contact: +92 300 123 4567\n\nFor immediate medical emergency, please call our 24/7 emergency hotline or visit our emergency department.');
}

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

window.addEventListener('click', function (e) {
    const loginModal = document.getElementById('loginModal');
    const appointmentModal = document.getElementById('appointmentModal');

    if (e.target === loginModal) {
        closeLoginModal();
    }
    if (e.target === appointmentModal) {
        closeAppointmentModal();
    }
});

// Service.php JS Code Start
function showServiceCategory(category) {
    // Hide all service categories
    const categories = ['emergency', 'diagnostic', 'surgical', 'specialty'];
    categories.forEach(cat => {
        document.getElementById(cat + '-services').classList.add('hidden');
        document.getElementById(cat + '-tab').classList.remove('active');
        document.getElementById(cat + '-tab').classList.add('bg-gray-100', 'text-gray-700', 'hover:bg-gray-200');
        document.getElementById(cat + '-tab').classList.remove('bg-blue-600', 'text-white');
    });

    // Show selected category
    document.getElementById(category + '-services').classList.remove('hidden');
    document.getElementById(category + '-tab').classList.add('active');
    document.getElementById(category + '-tab').classList.remove('bg-gray-100', 'text-gray-700', 'hover:bg-gray-200');
    document.getElementById(category + '-tab').classList.add('bg-blue-600', 'text-white');
}
// Service.php JS Code End


// Contact.php JS Code Start

// FAQ Toggle function
function toggleFAQ(index) {
    const faqContent = document.getElementById(`faq-${index}`);
    const icon = document.getElementById(`icon-${index}`);

    if (faqContent.classList.contains('hidden')) {
        faqContent.classList.remove('hidden');
        icon.style.transform = 'rotate(180deg)';
    } else {
        faqContent.classList.add('hidden');
        icon.style.transform = 'rotate(0deg)';
    }
}
// Contact.php JS Code End

// Appointment Booking JS Code Start
// Prevent multiple event listener attachments
if (!window.appointmentFormInitialized) {
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('appointmentForm');

        if (form) {
            form.addEventListener('submit', function (e) {
                e.preventDefault();

                // Prevent double submission
                const submitButton = form.querySelector('button[type="submit"]');
                if (submitButton.disabled) {
                    return;
                }

                // Disable submit button during processing
                submitButton.disabled = true;
                submitButton.textContent = 'Booking...';

                const formData = new FormData(form);
                fetch('includes/submit_appointment.php', {
                    method: 'POST',
                    body: formData
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === 'success') {
                            alert(data.message);
                            closeAppointmentModal();
                            form.reset();
                        } else {
                            alert(data.message);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('An error occurred while submitting the appointment.');
                    })
                    .finally(() => {
                        // Re-enable submit button
                        submitButton.disabled = false;
                        submitButton.textContent = 'Book Appointment';
                    });
            });
        }
    });
    window.appointmentFormInitialized = true;
}