<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Shahbaz Medical Center</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>

    
<!-- Hero Section -->
    <section class="hero-gradient pt-24 pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center fade-in">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    Contact Shahbaz Medical Center
                </h1>
                <p class="text-xl text-blue-100 mb-8 max-w-3xl mx-auto">
                    We're here to help you with all your healthcare needs. Reach out to us through any of the convenient methods below
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <div class="bg-gray-800 bg-opacity-60 backdrop-blur-sm rounded-lg px-6 py-3">
                        <span class="text-white font-semibold"><i class="fas fa-clock mr-2"></i>24/7 Emergency</span>
                    </div>
                    <div class="bg-gray-800 bg-opacity-60 backdrop-blur-sm rounded-lg px-6 py-3">
                        <span class="text-white font-semibold"><i class="fas fa-phone mr-2"></i>Quick Response</span>
                    </div>
                    <div class="bg-gray-800 bg-opacity-60 backdrop-blur-sm rounded-lg px-6 py-3">
                        <span class="text-white font-semibold"><i class="fas fa-user-md mr-2"></i>Expert Support</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Methods -->
    <section class="py-16 bg-white -mt-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white rounded-lg shadow-lg p-6 card-hover border-t-4 border-red-500">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-ambulance text-2xl text-red-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Emergency</h3>
                        <p class="text-red-600 font-bold text-lg mb-2">+92 300 123 4567</p>
                        <p class="text-gray-600 text-sm mb-4">24/7 Emergency Services</p>
                        <button onclick="window.location.href='tel:+923001234567'" class="w-full bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md transition-colors">
                            Call Emergency
                        </button>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg p-6 card-hover border-t-4 border-blue-500">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-calendar-plus text-2xl text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Appointments</h3>
                        <p class="text-blue-600 font-bold text-lg mb-2">+92 300 123 4568</p>
                        <p class="text-gray-600 text-sm mb-4">Mon-Sun: 8:00 AM - 8:00 PM</p>
                        <button onclick="openAppointmentModal()" class="w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md transition-colors">
                            Book Appointment
                        </button>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg p-6 card-hover border-t-4 border-green-500">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-info-circle text-2xl text-green-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">General Info</h3>
                        <p class="text-green-600 font-bold text-lg mb-2">+92 300 123 4569</p>
                        <p class="text-gray-600 text-sm mb-4">Mon-Fri: 8:00 AM - 6:00 PM</p>
                        <button onclick="window.location.href='tel:+923001234569'" class="w-full bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md transition-colors">
                            Call Info Line
                        </button>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg p-6 card-hover border-t-4 border-purple-500">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-envelope text-2xl text-purple-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Email Support</h3>
                        <p class="text-purple-600 font-bold text-sm mb-2">info@shahbazmedical.com</p>
                        <p class="text-gray-600 text-sm mb-4">Response within 24 hours</p>
                        <button onclick="openContactModal()" class="w-full bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-md transition-colors">
                            Send Email
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form & Map Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Send us a Message</h2>
                    <form id="contactForm" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-2">First Name *</label>
                                <input type="text" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="John">
                            </div>
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-2">Last Name *</label>
                                <input type="text" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="Doe">
                            </div>
                        </div>

                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2">Email Address *</label>
                            <input type="email" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="john.doe@example.com">
                        </div>

                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2">Phone Number *</label>
                            <input type="tel" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="+92 300 123 4567">
                        </div>

                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2">Subject *</label>
                            <select required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                                <option value="">Select a subject</option>
                                <option value="appointment">Appointment Scheduling</option>
                                <option value="medical">Medical Services Inquiry</option>
                                <option value="insurance">Insurance & Billing</option>
                                <option value="feedback">Patient Feedback</option>
                                <option value="employment">Career Opportunities</option>
                                <option value="partnership">Partnership Inquiry</option>
                                <option value="media">Media & Press</option>
                                <option value="general">General Information</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2">Message *</label>
                            <textarea required rows="5" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="Please describe your inquiry or message in detail..."></textarea>
                        </div>

                        <div class="flex items-start">
                            <input type="checkbox" required class="mt-1 mr-3">
                            <label class="text-sm text-gray-600">
                                I agree to the <a href="#" class="text-blue-600 hover:underline">Privacy Policy</a> and consent to being contacted regarding my inquiry.
                            </label>
                        </div>

                        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-md transition-colors">
                            <i class="fas fa-paper-plane mr-2"></i>Send Message
                        </button>
                    </form>
                </div>

                <!-- Hospital Information & Map -->
                <div class="space-y-8">
                    <!-- Location Info -->
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-gray-800 mb-6">Visit Our Hospital</h2>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <i class="fas fa-map-marker-alt text-xl text-red-600 mr-4 mt-1"></i>
                                <div>
                                    <h3 class="font-semibold text-gray-800">Address</h3>
                                    <p class="text-gray-600">123 Medical Street<br>Healthcare District<br>Hyderabad, Sindh 71000<br>Pakistan</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <i class="fas fa-clock text-xl text-blue-600 mr-4 mt-1"></i>
                                <div>
                                    <h3 class="font-semibold text-gray-800">Hospital Hours</h3>
                                    <div class="text-gray-600 space-y-1">
                                        <p><span class="font-medium">Emergency:</span> 24/7</p>
                                        <p><span class="font-medium">OPD Services:</span> 8:00 AM - 8:00 PM</p>
                                        <p><span class="font-medium">Pharmacy:</span> 24/7</p>
                                        <p><span class="font-medium">Laboratory:</span> 6:00 AM - 10:00 PM</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <i class="fas fa-car text-xl text-green-600 mr-4 mt-1"></i>
                                <div>
                                    <h3 class="font-semibold text-gray-800">Parking & Transport</h3>
                                    <p class="text-gray-600">Free parking available<br>Valet service<br>Public transport accessible<br>Taxi/Ride-share friendly</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Map Placeholder -->
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Find Us on Map</h3>
                        <div class="bg-gray-200 rounded-lg h-64 flex items-center justify-center">
                            <div class="text-center">
                                <i class="fas fa-map text-4xl text-gray-400 mb-4"></i>
                                <p class="text-gray-600">Interactive Map</p>
                                <p class="text-sm text-gray-500">Google Maps integration would be here</p>
                                <button onclick="openMapModal()" class="mt-4 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md transition-colors">
                                    <i class="fas fa-external-link-alt mr-2"></i>Open in Google Maps
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Department Contact Information -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Department Direct Lines</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Contact specific departments directly for faster assistance</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-50 rounded-lg p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-heartbeat text-xl text-red-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">Cardiology</h3>
                            <p class="text-gray-600 text-sm">Heart & Vascular Care</p>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <p class="text-gray-700"><i class="fas fa-phone text-blue-600 mr-2"></i>+92 300 123 4571</p>
                        <p class="text-gray-700"><i class="fas fa-envelope text-green-600 mr-2"></i>cardiology@shahbazmedical.com</p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-brain text-xl text-blue-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">Neurology</h3>
                            <p class="text-gray-600 text-sm">Brain & Nervous System</p>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <p class="text-gray-700"><i class="fas fa-phone text-blue-600 mr-2"></i>+92 300 123 4572</p>
                        <p class="text-gray-700"><i class="fas fa-envelope text-green-600 mr-2"></i>neurology@shahbazmedical.com</p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-baby text-xl text-green-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">Pediatrics</h3>
                            <p class="text-gray-600 text-sm">Children's Healthcare</p>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <p class="text-gray-700"><i class="fas fa-phone text-blue-600 mr-2"></i>+92 300 123 4573</p>
                        <p class="text-gray-700"><i class="fas fa-envelope text-green-600 mr-2"></i>pediatrics@shahbazmedical.com</p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-female text-xl text-purple-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">Obstetrics & Gynecology</h3>
                            <p class="text-gray-600 text-sm">Women's Health</p>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <p class="text-gray-700"><i class="fas fa-phone text-blue-600 mr-2"></i>+92 300 123 4574</p>
                        <p class="text-gray-700"><i class="fas fa-envelope text-green-600 mr-2"></i>obgyn@shahbazmedical.com</p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-bone text-xl text-orange-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">Orthopedics</h3>
                            <p class="text-gray-600 text-sm">Bone & Joint Care</p>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <p class="text-gray-700"><i class="fas fa-phone text-blue-600 mr-2"></i>+92 300 123 4575</p>
                        <p class="text-gray-700"><i class="fas fa-envelope text-green-600 mr-2"></i>orthopedics@shahbazmedical.com</p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-teal-100 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-ribbon text-xl text-teal-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">Oncology</h3>
                            <p class="text-gray-600 text-sm">Cancer Care</p>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <p class="text-gray-700"><i class="fas fa-phone text-blue-600 mr-2"></i>+92 300 123 4576</p>
                        <p class="text-gray-700"><i class="fas fa-envelope text-green-600 mr-2"></i>oncology@shahbazmedical.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Frequently Asked Questions</h2>
                <p class="text-xl text-gray-600">Quick answers to common questions about contacting us</p>
            </div>

            <div class="space-y-4">
                <div class="bg-white rounded-lg shadow-md">
                    <button onclick="toggleFAQ(1)" class="w-full px-6 py-4 text-left focus:outline-none">
                        <div class="flex justify-between items-center">
                            <h3 class="text-lg font-semibold text-gray-800">What are your emergency contact hours?</h3>
                            <i class="fas fa-chevron-down text-gray-500 transition-transform" id="icon-1"></i>
                        </div>
                    </button>
                    <div id="faq-1" class="hidden px-6 pb-4">
                        <p class="text-gray-600">Our emergency department is open 24/7, 365 days a year. You can call our emergency hotline at +92 300 123 4567 anytime for immediate medical assistance.</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md">
                    <button onclick="toggleFAQ(2)" class="w-full px-6 py-4 text-left focus:outline-none">
                        <div class="flex justify-between items-center">
                            <h3 class="text-lg font-semibold text-gray-800">How quickly will you respond to my inquiry?</h3>
                            <i class="fas fa-chevron-down text-gray-500 transition-transform" id="icon-2"></i>
                        </div>
                    </button>
                    <div id="faq-2" class="hidden px-6 pb-4">
                        <p class="text-gray-600">We typically respond to phone calls immediately during business hours and emails within 24 hours. Emergency calls are answered immediately 24/7.</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md">
                    <button onclick="toggleFAQ(3)" class="w-full px-6 py-4 text-left focus:outline-none">
                        <div class="flex justify-between items-center">
                            <h3 class="text-lg font-semibold text-gray-800">Can I schedule appointments online?</h3>
                            <i class="fas fa-chevron-down text-gray-500 transition-transform" id="icon-3"></i>
                        </div>
                    </button>
                    <div id="faq-3" class="hidden px-6 pb-4">
                        <p class="text-gray-600">Yes! You can book appointments online through our website, call our appointment line at +92 300 123 4568, or visit our hospital in person.</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md">
                    <button onclick="toggleFAQ(4)" class="w-full px-6 py-4 text-left focus:outline-none">
                        <div class="flex justify-between items-center">
                            <h3 class="text-lg font-semibold text-gray-800">Do you have parking available?</h3>
                            <i class="fas fa-chevron-down text-gray-500 transition-transform" id="icon-4"></i>
                        </div>
                    </button>
                    <div id="faq-4" class="hidden px-6 pb-4">
                        <p class="text-gray-600">Yes, we offer free parking for patients and visitors with over 1000 parking spaces. Valet service is also available for your convenience.</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md">
                    <button onclick="toggleFAQ(5)" class="w-full px-6 py-4 text-left focus:outline-none">
                        <div class="flex justify-between items-center">
                            <h3 class="text-lg font-semibold text-gray-800">What languages do your staff speak?</h3>
                            <i class="fas fa-chevron-down text-gray-500 transition-transform" id="icon-5"></i>
                        </div>
                    </button>
                    <div id="faq-5" class="hidden px-6 pb-4">
                        <p class="text-gray-600">Our staff speaks English, Urdu, Sindhi, and other local languages. We also have interpreter services available for other languages upon request.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Modal -->
    <div id="contactModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center">
        <div class="bg-white rounded-lg p-8 max-w-md w-full mx-4 max-h-96 overflow-y-auto">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Quick Email</h2>
                <button onclick="closeContactModal()" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            
            <form>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Your Name</label>
                    <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="Enter your name">
                </div>
                
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Email Address</label>
                    <input type="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="your.email@example.com">
                </div>
                
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Subject</label>
                    <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                        <option>Select Department</option>
                        <option>Cardiology</option>
                        <option>Neurology</option>
                        <option>Pediatrics</option>
                        <option>Obstetrics & Gynecology</option>
                        <option>Orthopedics</option>
                        <option>Oncology</option>
                        <option>General Medicine</option>
                        <option>Emergency</option>
                    </select>
                </div>
                
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Preferred Date</label>
                    <input type="date" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                </div>
                
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Preferred Time</label>
                    <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                        <option>Select Time</option>
                        <option>9:00 AM</option>
                        <option>10:00 AM</option>
                        <option>11:00 AM</option>
                        <option>2:00 PM</option>
                        <option>3:00 PM</option>
                        <option>4:00 PM</option>
                        <option>5:00 PM</option>
                    </select>
                </div>
                
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md transition-colors">
                    Request Appointment
                </button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <script src="js/script.js"></script>

</body>
</html>