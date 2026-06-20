<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Shahbaz Medical Center</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-gray-50">

    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>

    <!-- Hero Section -->
    <section class="hero-gradient pt-24 pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center fade-in">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    Our Medical Services
                </h1>
                <p class="text-xl text-blue-100 mb-8 max-w-3xl mx-auto">
                    Comprehensive healthcare solutions with state-of-the-art technology and expert medical professionals
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <div class="bg-gray-800 bg-opacity-60 backdrop-blur-sm rounded-lg px-6 py-3">
                        <span class="text-white font-semibold">50+ Specialties</span>
                    </div>
                    <div class="bg-gray-800 bg-opacity-60 backdrop-blur-sm rounded-lg px-6 py-3">
                        <span class="text-white font-semibold">200+ Doctors</span>
                    </div>
                    <div class="bg-gray-800 bg-opacity-60 backdrop-blur-sm rounded-lg px-6 py-3">
                        <span class="text-white font-semibold">24/7 Emergency</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Categories Tabs -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap justify-center gap-4 mb-12">
                <button onclick="showServiceCategory('emergency')" class="service-tab active px-6 py-3 rounded-lg font-semibold transition-all" id="emergency-tab">
                    <i class="fas fa-ambulance mr-2"></i>Emergency Services
                </button>
                <button onclick="showServiceCategory('diagnostic')" class="service-tab px-6 py-3 rounded-lg font-semibold bg-gray-100 text-gray-700 hover:bg-gray-200" id="diagnostic-tab">
                    <i class="fas fa-x-ray mr-2"></i>Diagnostic Services
                </button>
                <button onclick="showServiceCategory('surgical')" class="service-tab px-6 py-3 rounded-lg font-semibold bg-gray-100 text-gray-700 hover:bg-gray-200" id="surgical-tab">
                    <i class="fas fa-procedures mr-2"></i>Surgical Services
                </button>
                <button onclick="showServiceCategory('specialty')" class="service-tab px-6 py-3 rounded-lg font-semibold bg-gray-100 text-gray-700 hover:bg-gray-200" id="specialty-tab">
                    <i class="fas fa-user-md mr-2"></i>Specialty Care
                </button>
            </div>

            <!-- Emergency Services -->
            <div id="emergency-services" class="service-category">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-red-500 card-hover">
                        <div class="flex items-start">
                            <i class="fas fa-ambulance text-3xl text-red-500 mr-4 mt-1"></i>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-3">24/7 Emergency Care</h3>
                                <p class="text-gray-600 mb-4">Round-the-clock emergency medical services with fully equipped trauma center and experienced emergency physicians.</p>
                                <ul class="text-sm text-gray-600 space-y-1">
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Trauma Care</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Cardiac Emergency</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Stroke Management</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Poison Control</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-orange-500 card-hover">
                        <div class="flex items-start">
                            <i class="fas fa-helicopter text-3xl text-orange-500 mr-4 mt-1"></i>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-3">Air Ambulance Service</h3>
                                <p class="text-gray-600 mb-4">Advanced air medical transport for critical patients requiring immediate specialized care.</p>
                                <ul class="text-sm text-gray-600 space-y-1">
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Helicopter Transport</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Medical Team Onboard</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Life Support Equipment</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Inter-hospital Transfer</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-purple-500 card-hover">
                        <div class="flex items-start">
                            <i class="fas fa-truck-medical text-3xl text-purple-500 mr-4 mt-1"></i>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-3">Mobile ICU</h3>
                                <p class="text-gray-600 mb-4">Fully equipped mobile intensive care units for critical patient transportation.</p>
                                <ul class="text-sm text-gray-600 space-y-1">
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Ventilator Support</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Cardiac Monitoring</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Defibrillator</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Emergency Medications</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Diagnostic Services -->
            <div id="diagnostic-services" class="service-category hidden">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-blue-500 card-hover">
                        <div class="flex items-start">
                            <i class="fas fa-x-ray text-3xl text-blue-500 mr-4 mt-1"></i>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-3">Advanced Imaging</h3>
                                <p class="text-gray-600 mb-4">State-of-the-art imaging technology for accurate diagnosis and treatment planning.</p>
                                <ul class="text-sm text-gray-600 space-y-1">
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>3T MRI Scanner</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>128-Slice CT Scan</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Digital X-Ray</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Ultrasound</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-green-500 card-hover">
                        <div class="flex items-start">
                            <i class="fas fa-vial text-3xl text-green-500 mr-4 mt-1"></i>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-3">Laboratory Services</h3>
                                <p class="text-gray-600 mb-4">Comprehensive laboratory testing with quick turnaround times and accurate results.</p>
                                <ul class="text-sm text-gray-600 space-y-1">
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Blood Chemistry</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Microbiology</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Pathology</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Genetic Testing</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-indigo-500 card-hover">
                        <div class="flex items-start">
                            <i class="fas fa-heartbeat text-3xl text-indigo-500 mr-4 mt-1"></i>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-3">Cardiac Diagnostics</h3>
                                <p class="text-gray-600 mb-4">Advanced cardiac testing and monitoring for comprehensive heart health assessment.</p>
                                <ul class="text-sm text-gray-600 space-y-1">
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>ECG/EKG</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Echocardiography</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Stress Testing</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Holter Monitoring</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-pink-500 card-hover">
                        <div class="flex items-start">
                            <i class="fas fa-eye text-3xl text-pink-500 mr-4 mt-1"></i>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-3">Endoscopy Services</h3>
                                <p class="text-gray-600 mb-4">Minimally invasive diagnostic procedures for internal organ examination.</p>
                                <ul class="text-sm text-gray-600 space-y-1">
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Gastroscopy</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Colonoscopy</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Bronchoscopy</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Arthroscopy</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-yellow-500 card-hover">
                        <div class="flex items-start">
                            <i class="fas fa-brain text-3xl text-yellow-500 mr-4 mt-1"></i>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-3">Neurological Testing</h3>
                                <p class="text-gray-600 mb-4">Comprehensive neurological diagnostics for brain and nervous system disorders.</p>
                                <ul class="text-sm text-gray-600 space-y-1">
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>EEG</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>EMG/NCV</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Sleep Studies</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Brain Imaging</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-teal-500 card-hover">
                        <div class="flex items-start">
                            <i class="fas fa-lungs text-3xl text-teal-500 mr-4 mt-1"></i>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-3">Pulmonary Function</h3>
                                <p class="text-gray-600 mb-4">Advanced respiratory testing to assess lung function and breathing capacity.</p>
                                <ul class="text-sm text-gray-600 space-y-1">
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Spirometry</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Peak Flow Testing</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Blood Gas Analysis</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Exercise Testing</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Surgical Services -->
            <div id="surgical-services" class="service-category hidden">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-red-500 card-hover">
                        <div class="flex items-start">
                            <i class="fas fa-cut text-3xl text-red-500 mr-4 mt-1"></i>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-3">General Surgery</h3>
                                <p class="text-gray-600 mb-4">Comprehensive surgical procedures performed by experienced general surgeons.</p>
                                <ul class="text-sm text-gray-600 space-y-1">
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Appendectomy</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Hernia Repair</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Gallbladder Surgery</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Emergency Surgery</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-blue-500 card-hover">
                        <div class="flex items-start">
                            <i class="fas fa-robot text-3xl text-blue-500 mr-4 mt-1"></i>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-3">Robotic Surgery</h3>
                                <p class="text-gray-600 mb-4">Minimally invasive robotic-assisted surgeries with enhanced precision and faster recovery.</p>
                                <ul class="text-sm text-gray-600 space-y-1">
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Da Vinci System</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Prostate Surgery</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Gynecologic Surgery</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Cardiac Surgery</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-green-500 card-hover">
                        <div class="flex items-start">
                            <i class="fas fa-bone text-3xl text-green-500 mr-4 mt-1"></i>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-3">Orthopedic Surgery</h3>
                                <p class="text-gray-600 mb-4">Advanced bone and joint surgeries including joint replacements and trauma care.</p>
                                <ul class="text-sm text-gray-600 space-y-1">
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Joint Replacement</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Arthroscopic Surgery</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Spine Surgery</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Sports Medicine</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-purple-500 card-hover">
                        <div class="flex items-start">
                            <i class="fas fa-brain text-3xl text-purple-500 mr-4 mt-1"></i>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-3">Neurosurgery</h3>
                                <p class="text-gray-600 mb-4">Specialized brain and spinal cord surgeries performed by expert neurosurgeons.</p>
                                <ul class="text-sm text-gray-600 space-y-1">
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Brain Tumor Surgery</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Spinal Surgery</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Aneurysm Repair</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Stereotactic Surgery</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-pink-500 card-hover">
                        <div class="flex items-start">
                            <i class="fas fa-heart text-3xl text-pink-500 mr-4 mt-1"></i>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-3">Cardiac Surgery</h3>
                                <p class="text-gray-600 mb-4">Advanced heart surgeries including bypass, valve repair, and transplantation.</p>
                                <ul class="text-sm text-gray-600 space-y-1">
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Bypass Surgery</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Valve Replacement</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Angioplasty</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Pacemaker Implant</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-orange-500 card-hover">
                        <div class="flex items-start">
                            <i class="fas fa-video text-3xl text-orange-500 mr-4 mt-1"></i>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-3">Laparoscopic Surgery</h3>
                                <p class="text-gray-600 mb-4">Minimally invasive keyhole surgeries with smaller incisions and faster recovery.</p>
                                <ul class="text-sm text-gray-600 space-y-1">
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Abdominal Surgery</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Gynecologic Procedures</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Urologic Surgery</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Thoracic Surgery</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Specialty Care -->
            <div id="specialty-services" class="service-category hidden">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-blue-500 card-hover">
                        <div class="flex items-start">
                            <i class="fas fa-heartbeat text-3xl text-blue-500 mr-4 mt-1"></i>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-3">Cardiology</h3>
                                <p class="text-gray-600 mb-4">Comprehensive heart care with advanced diagnostic and treatment options.</p>
                                <ul class="text-sm text-gray-600 space-y-1">
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Interventional Cardiology</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Electrophysiology</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Heart Failure Clinic</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Preventive Cardiology</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-green-500 card-hover">
                        <div class="flex items-start">
                            <i class="fas fa-baby text-3xl text-green-500 mr-4 mt-1"></i>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-3">Pediatrics</h3>
                                <p class="text-gray-600 mb-4">Specialized healthcare for infants, children, and adolescents.</p>
                                <ul class="text-sm text-gray-600 space-y-1">
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Neonatal Care</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Pediatric ICU</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Child Development</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Vaccination Programs</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-purple-500 card-hover">
                        <div class="flex items-start">
                            <i class="fas fa-female text-3xl text-purple-500 mr-4 mt-1"></i>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-3">Obstetrics & Gynecology</h3>
                                <p class="text-gray-600 mb-4">Complete women's health services from pregnancy to menopause.</p>
                                <ul class="text-sm text-gray-600 space-y-1">
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Prenatal Care</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>High-Risk Pregnancy</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Minimally Invasive Surgery</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Fertility Treatment</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-red-500 card-hover">
                        <div class="flex items-start">
                            <i class="fas fa-brain text-3xl text-red-500 mr-4 mt-1"></i>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-3">Neurology</h3>
                                <p class="text-gray-600 mb-4">Advanced care for brain, spine, and nervous system disorders.</p>
                                <ul class="text-sm text-gray-600 space-y-1">
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Stroke Care</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Epilepsy Treatment</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Movement Disorders</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Memory Disorders</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-yellow-500 card-hover">
                        <div class="flex items-start">
                            <i class="fas fa-lungs text-3xl text-yellow-500 mr-4 mt-1"></i>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-3">Pulmonology</h3>
                                <p class="text-gray-600 mb-4">Respiratory care for lung diseases and breathing disorders.</p>
                                <ul class="text-sm text-gray-600 space-y-1">
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Asthma Management</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>COPD Treatment</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Sleep Apnea</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Lung Cancer Screening</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-indigo-500 card-hover">
                        <div class="flex items-start">
                            <i class="fas fa-kidney text-3xl text-indigo-500 mr-4 mt-1"></i>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-3">Nephrology</h3>
                                <p class="text-gray-600 mb-4">Specialized kidney care and dialysis services.</p>
                                <ul class="text-sm text-gray-600 space-y-1">
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Dialysis Center</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Kidney Transplant</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Chronic Kidney Disease</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Hypertension Management</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-pink-500 card-hover">
                        <div class="flex items-start">
                            <i class="fas fa-ribbon text-3xl text-pink-500 mr-4 mt-1"></i>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-3">Oncology</h3>
                                <p class="text-gray-600 mb-4">Comprehensive cancer care with advanced treatment options.</p>
                                <ul class="text-sm text-gray-600 space-y-1">
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Chemotherapy</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Radiation Therapy</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Immunotherapy</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Cancer Screening</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-teal-500 card-hover">
                        <div class="flex items-start">
                            <i class="fas fa-eye text-3xl text-teal-500 mr-4 mt-1"></i>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-3">Ophthalmology</h3>
                                <p class="text-gray-600 mb-4">Complete eye care services with advanced surgical options.</p>
                                <ul class="text-sm text-gray-600 space-y-1">
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Cataract Surgery</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Retinal Disorders</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Glaucoma Treatment</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>LASIK Surgery</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-orange-500 card-hover">
                        <div class="flex items-start">
                            <i class="fas fa-deaf text-3xl text-orange-500 mr-4 mt-1"></i>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-3">ENT Services</h3>
                                <p class="text-gray-600 mb-4">Ear, nose, and throat care with surgical expertise.</p>
                                <ul class="text-sm text-gray-600 space-y-1">
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Hearing Disorders</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Sinus Surgery</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Voice Disorders</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Sleep Apnea Surgery</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Advanced Technology Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Advanced Medical Technology</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">State-of-the-art equipment and cutting-edge technology for superior patient care</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white rounded-lg shadow-lg p-6 text-center card-hover">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-microscope text-2xl text-blue-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">AI-Powered Diagnostics</h3>
                    <p class="text-gray-600 text-sm">Advanced artificial intelligence for faster and more accurate diagnosis</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6 text-center card-hover">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-robot text-2xl text-green-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Robotic Surgery</h3>
                    <p class="text-gray-600 text-sm">Precision robotic systems for minimally invasive procedures</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6 text-center card-hover">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-wifi text-2xl text-purple-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Telemedicine</h3>
                    <p class="text-gray-600 text-sm">Remote consultation and monitoring for convenient healthcare</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6 text-center card-hover">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-database text-2xl text-orange-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Electronic Health Records</h3>
                    <p class="text-gray-600 text-sm">Comprehensive digital health records for seamless care coordination</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Emergency Services Highlight -->
    <section class="py-16 bg-red-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">24/7 Emergency Services</h2>
                    <p class="text-xl text-red-100 mb-6">
                        Our emergency department is equipped to handle all types of medical emergencies with state-of-the-art facilities and experienced medical professionals available around the clock.
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-white">< 15</div>
                            <div class="text-red-100">Minutes Average Response</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-white">95%</div>
                            <div class="text-red-100">Success Rate</div>
                        </div>
                    </div>
                </div>
                <div class="bg-black bg-opacity-10 backdrop-blur-sm rounded-lg p-8">
                    <h3 class="text-2xl font-semibold mb-6">Emergency Hotlines</h3>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <i class="fas fa-ambulance text-2xl mr-4"></i>
                            <div>
                                <div class="font-semibold">Emergency Ambulance</div>
                                <div class="text-red-100">+92 300 123 4567</div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-phone text-2xl mr-4"></i>
                            <div>
                                <div class="font-semibold">Emergency Department</div>
                                <div class="text-red-100">+92 300 123 4568</div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-helicopter text-2xl mr-4"></i>
                            <div>
                                <div class="font-semibold">Air Ambulance</div>
                                <div class="text-red-100">+92 300 123 4569</div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6">
                        <button onclick="openEmergencyModal()" class="w-full bg-white text-red-600 hover:bg-gray-100 px-6 py-3 rounded-lg font-semibold transition-colors">
                            Request Emergency Assistance
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Appointment Booking Section -->
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">Book Your Appointment</h2>
            <p class="text-xl text-gray-600 mb-8">Schedule your consultation with our expert medical professionals</p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-calendar-plus text-2xl text-blue-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Easy Scheduling</h3>
                    <p class="text-gray-600">Book appointments online or call our helpline</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-user-md text-2xl text-green-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Expert Doctors</h3>
                    <p class="text-gray-600">Choose from our panel of specialized physicians</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-clock text-2xl text-purple-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Flexible Timing</h3>
                    <p class="text-gray-600">Multiple time slots available to fit your schedule</p>
                </div>
            </div>
            
            <div class="space-x-4">
                <button onclick="openAppointmentModal()" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold text-lg transition-colors">
                    <i class="fas fa-calendar-plus mr-2"></i>Book Appointment
                </button>
                <button onclick="window.location.href='tel:+923001234567'" class="bg-gray-600 hover:bg-gray-700 text-white px-8 py-3 rounded-lg font-semibold text-lg transition-colors">
                    <i class="fas fa-phone mr-2"></i>Call Now
                </button>
            </div>
        </div>
    </section>

    <!-- Appointment Modal -->
    <div id="appointmentModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center">
        <div class="bg-white rounded-lg p-8 max-w-md w-full mx-4 max-h-96 overflow-y-auto">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Book Appointment</h2>
                <button onclick="closeAppointmentModal()" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            
            <form>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Patient Name</label>
                    <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="Enter patient name">
                </div>
                
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Phone Number</label>
                    <input type="tel" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="+92 300 123 4567">
                </div>
                
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <input type="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="patient@email.com">
                </div>
                
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Department</label>
                    <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                        <option>Select Department</option>
                        <option>Cardiology</option>
                        <option>Neurology</option>
                        <option>Orthopedics</option>
                        <option>Pediatrics</option>
                        <option>Oncology</option>
                        <option>Nephrology</option>
                        <option>Pulmonology</option>
                        <option>Ophthalmology</option>
                        <option>ENT Services</option>
                        <option>Obstetrics & Gynecology</option>
                        <option>General Medicine</option>
                    </select>
                </div>
                
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Preferred Date</label>
                    <input type="date" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                </div>
                
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Preferred Time</label>
                    <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                        <option>Select Time</option>
                        <option>9:00 AM</option>
                        <option>10:00 AM</option>
                        <option>11:00 AM</option>
                        <option>12:00 PM</option>
                        <option>2:00 PM</option>
                        <option>3:00 PM</option>
                        <option>4:00 PM</option>
                        <option>5:00 PM</option>
                    </select>
                </div>
                
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Reason for Visit</label>
                    <textarea class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" rows="3" placeholder="Brief description of your concern"></textarea>
                </div>
                
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md transition-colors">
                    Book Appointment
                </button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <script src="js/script.js"></script>
    </body>

</html>