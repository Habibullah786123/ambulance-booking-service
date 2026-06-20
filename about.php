<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Shahbaz Medical Center</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>

    <section class="hero-gradient pt-24 pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center fade-in">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    About Shahbaz Medical Center
                </h1>
                <p class="text-xl text-blue-100 mb-8 max-w-3xl mx-auto">
                    Excellence in Healthcare - Committed to providing world-class medical services with compassion, innovation, and dedication to our community for over two decades
                </p>
            </div>
        </div>
    </section>

    <!-- Mission, Vision, Values -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center card-hover bg-blue-50 rounded-lg p-8">
                    <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-bullseye text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Our Mission</h3>
                    <p class="text-gray-600 leading-relaxed">
                        To provide exceptional, compassionate healthcare services that improve the quality of life for our patients and community while advancing medical knowledge through innovation and research.
                    </p>
                </div>
                
                <div class="text-center card-hover bg-green-50 rounded-lg p-8">
                    <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-eye text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Our Vision</h3>
                    <p class="text-gray-600 leading-relaxed">
                        To be the leading healthcare institution in the region, recognized for excellence in patient care, medical education, and innovative treatments that transform lives and communities.
                    </p>
                </div>
                
                <div class="text-center card-hover bg-purple-50 rounded-lg p-8">
                    <div class="w-16 h-16 bg-purple-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-heart text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Our Values</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Compassion, integrity, excellence, innovation, and respect guide everything we do. We believe in treating every patient with dignity and providing care that we would want for our own families.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Hospital History -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">Our Legacy of Excellence</h2>
                    <div class="space-y-6">
                        <div class="border-l-4 border-blue-600 pl-6">
                            <h4 class="text-xl font-semibold text-gray-800 mb-2">1998 - Foundation</h4>
                            <p class="text-gray-600">Shahbaz Medical Center was established with a vision to provide quality healthcare services to the community with just 50 beds and a dedicated team of 20 healthcare professionals.</p>
                        </div>
                        
                        <div class="border-l-4 border-green-600 pl-6">
                            <h4 class="text-xl font-semibold text-gray-800 mb-2">2005 - Expansion</h4>
                            <p class="text-gray-600">Major expansion project completed, adding specialized departments including cardiology, neurology, and advanced diagnostic imaging facilities, expanding to 200 beds.</p>
                        </div>
                        
                        <div class="border-l-4 border-purple-600 pl-6">
                            <h4 class="text-xl font-semibold text-gray-800 mb-2">2012 - Technology Integration</h4>
                            <p class="text-gray-600">Introduced robotic surgery systems, electronic health records, and telemedicine capabilities, positioning us as a technology leader in healthcare.</p>
                        </div>
                        
                        <div class="border-l-4 border-orange-600 pl-6">
                            <h4 class="text-xl font-semibold text-gray-800 mb-2">2020 - COVID-19 Response</h4>
                            <p class="text-gray-600">Successfully managed the pandemic with dedicated COVID-19 facilities, expanded ICU capacity, and implemented comprehensive safety protocols.</p>
                        </div>
                        
                        <div class="border-l-4 border-red-600 pl-6">
                            <h4 class="text-xl font-semibold text-gray-800 mb-2">2024 - Present Day</h4>
                            <p class="text-gray-600">Now serving as a 500-bed multi-specialty hospital with over 200 physicians and 50 departments, continuing our commitment to excellence in healthcare.</p>
                        </div>
                    </div>
                </div>
                
                <div class="grid grid-cols-2 gap-6">
                    <div class="bg-white rounded-lg shadow-lg p-6 text-center card-hover">
                        <div class="text-4xl font-bold text-blue-600 mb-2">26+</div>
                        <div class="text-gray-600 font-medium">Years of Service</div>
                    </div>
                    <div class="bg-white rounded-lg shadow-lg p-6 text-center card-hover">
                        <div class="text-4xl font-bold text-green-600 mb-2">500K+</div>
                        <div class="text-gray-600 font-medium">Patients Treated</div>
                    </div>
                    <div class="bg-white rounded-lg shadow-lg p-6 text-center card-hover">
                        <div class="text-4xl font-bold text-purple-600 mb-2">50K+</div>
                        <div class="text-gray-600 font-medium">Surgeries Performed</div>
                    </div>
                    <div class="bg-white rounded-lg shadow-lg p-6 text-center card-hover">
                        <div class="text-4xl font-bold text-orange-600 mb-2">98%</div>
                        <div class="text-gray-600 font-medium">Patient Satisfaction</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership Team -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Our Leadership Team</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Meet the experienced professionals who guide our mission of excellence in healthcare</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-50 rounded-lg p-6 text-center card-hover">
                    <div class="w-24 h-24 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-user-tie text-3xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Dr. Muhammad Shahbaz</h3>
                    <p class="text-blue-600 font-medium mb-3">Chairman & Chief Executive</p>
                    <p class="text-gray-600 text-sm leading-relaxed">Visionary leader with 30+ years in healthcare administration. MBBS, MBA Healthcare Management from Harvard Business School.</p>
                </div>
                
                <div class="bg-gray-50 rounded-lg p-6 text-center card-hover">
                    <div class="w-24 h-24 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-user-md text-3xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Dr. Fatima Ahmed</h3>
                    <p class="text-green-600 font-medium mb-3">Chief Medical Officer</p>
                    <p class="text-gray-600 text-sm leading-relaxed">Renowned cardiologist with expertise in interventional cardiology. MBBS, MD Cardiology, Fellowship from Mayo Clinic.</p>
                </div>
                
                <div class="bg-gray-50 rounded-lg p-6 text-center card-hover">
                    <div class="w-24 h-24 bg-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-user-nurse text-3xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Ms. Ayesha Khan</h3>
                    <p class="text-purple-600 font-medium mb-3">Chief Nursing Officer</p>
                    <p class="text-gray-600 text-sm leading-relaxed">Expert in nursing administration with 25 years experience. BSN, MSN Healthcare Leadership, Certified Nurse Executive.</p>
                </div>
                
                <div class="bg-gray-50 rounded-lg p-6 text-center card-hover">
                    <div class="w-24 h-24 bg-orange-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-user-cog text-3xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Mr. Ahmed Hassan</h3>
                    <p class="text-orange-600 font-medium mb-3">Chief Operating Officer</p>
                    <p class="text-gray-600 text-sm leading-relaxed">Operations specialist with expertise in hospital management systems. MBA Operations, Lean Six Sigma Black Belt.</p>
                </div>
                
                <div class="bg-gray-50 rounded-lg p-6 text-center card-hover">
                    <div class="w-24 h-24 bg-red-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-user-graduate text-3xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Dr. Omar Malik</h3>
                    <p class="text-red-600 font-medium mb-3">Director of Medical Education</p>
                    <p class="text-gray-600 text-sm leading-relaxed">Leading educator in medical training programs. MBBS, PhD Medical Education, Former Dean at National Medical College.</p>
                </div>
                
                <div class="bg-gray-50 rounded-lg p-6 text-center card-hover">
                    <div class="w-24 h-24 bg-teal-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-user-shield text-3xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Dr. Sarah Ali</h3>
                    <p class="text-teal-600 font-medium mb-3">Chief Quality Officer</p>
                    <p class="text-gray-600 text-sm leading-relaxed">Quality assurance expert ensuring highest standards of patient care. MBBS, MPH, Certified Healthcare Quality Professional.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Awards and Accreditations -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Awards & Accreditations</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Recognition for our commitment to excellence in healthcare delivery and patient safety</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white rounded-lg shadow-lg p-6 text-center card-hover">
                    <i class="fas fa-trophy text-4xl text-yellow-500 mb-4"></i>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Best Hospital Award</h3>
                    <p class="text-gray-600 text-sm">Healthcare Excellence Awards 2023</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6 text-center card-hover">
                    <i class="fas fa-medal text-4xl text-blue-500 mb-4"></i>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">JCI Accreditation</h3>
                    <p class="text-gray-600 text-sm">Joint Commission International Certified</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6 text-center card-hover">
                    <i class="fas fa-star text-4xl text-green-500 mb-4"></i>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">5-Star Rating</h3>
                    <p class="text-gray-600 text-sm">National Hospital Quality Assessment</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6 text-center card-hover">
                    <i class="fas fa-certificate text-4xl text-purple-500 mb-4"></i>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">ISO Certification</h3>
                    <p class="text-gray-600 text-sm">ISO 9001:2015 Quality Management</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6 text-center card-hover">
                    <i class="fas fa-shield-alt text-4xl text-red-500 mb-4"></i>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Patient Safety Excellence</h3>
                    <p class="text-gray-600 text-sm">National Patient Safety Foundation</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6 text-center card-hover">
                    <i class="fas fa-award text-4xl text-orange-500 mb-4"></i>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Technology Innovation</h3>
                    <p class="text-gray-600 text-sm">Healthcare Technology Awards 2022</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6 text-center card-hover">
                    <i class="fas fa-handshake text-4xl text-teal-500 mb-4"></i>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Community Service</h3>
                    <p class="text-gray-600 text-sm">Outstanding Community Impact Award</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6 text-center card-hover">
                    <i class="fas fa-leaf text-4xl text-green-600 mb-4"></i>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Green Hospital</h3>
                    <p class="text-gray-600 text-sm">Environmental Sustainability Certification</p>
                </div>
            </div>
        </div>
    </section>

     <!-- Facilities Overview -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">World-Class Facilities</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">State-of-the-art infrastructure designed for optimal patient care and comfort</p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-bed text-xl text-blue-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Patient Rooms</h3>
                            <p class="text-gray-600">500 modern patient rooms including private suites, semi-private rooms, and specialized ICU units with advanced monitoring systems.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-procedures text-xl text-green-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Operating Theaters</h3>
                            <p class="text-gray-600">25 state-of-the-art operating theaters equipped with robotic surgery systems, advanced imaging, and laminar air flow technology.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-microscope text-xl text-purple-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Diagnostic Center</h3>
                            <p class="text-gray-600">Comprehensive diagnostic facilities including 3T MRI, 128-slice CT scanner, digital X-ray, and advanced laboratory services.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-ambulance text-xl text-orange-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Emergency Department</h3>
                            <p class="text-gray-600">24/7 emergency services with trauma center, cardiac emergency unit, and helicopter landing pad for air ambulance services.</p>
                        </div>
                    </div>
                </div>
                
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-pills text-xl text-red-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Pharmacy</h3>
                            <p class="text-gray-600">Full-service pharmacy with 24/7 availability, automated dispensing systems, and specialized medication preparation facilities.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-teal-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-utensils text-xl text-teal-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Cafeteria & Dining</h3>
                            <p class="text-gray-600">Multiple dining options including patient meal service, family cafeteria, and specialized dietary programs for different medical conditions.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-car text-xl text-yellow-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Parking & Transport</h3>
                            <p class="text-gray-600">Ample parking facilities with 1000+ spaces, valet service, and dedicated ambulance and emergency vehicle access.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-wifi text-xl text-indigo-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Technology Infrastructure</h3>
                            <p class="text-gray-600">Advanced IT systems with electronic health records, telemedicine capabilities, and hospital-wide Wi-Fi connectivity.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Community Impact -->
    <section class="py-16 bg-blue-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Community Impact</h2>
                <p class="text-xl text-blue-100 max-w-3xl mx-auto">Committed to improving health outcomes and quality of life in our community</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-black bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-users text-2xl text-white"></i>
                    </div>
                    <div class="text-3xl font-bold mb-2">25,000+</div>
                    <div class="text-blue-100">Free Health Screenings</div>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-black bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-graduation-cap text-2xl text-white"></i>
                    </div>
                    <div class="text-3xl font-bold mb-2">500+</div>
                    <div class="text-blue-100">Medical Students Trained</div>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-black bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-heart text-2xl text-white"></i>
                    </div>
                    <div class="text-3xl font-bold mb-2">15,000+</div>
                    <div class="text-blue-100">Charity Treatments</div>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-black bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-seedling text-2xl text-white"></i>
                    </div>
                    <div class="text-3xl font-bold mb-2">100+</div>
                    <div class="text-blue-100">Health Awareness Programs</div>
                </div>
            </div>
            
            <div class="mt-12 text-center">
                <h3 class="text-2xl font-semibold mb-4">Our Community Programs</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-gray-800 bg-opacity-60 backdrop-blur-sm rounded-lg px-6 py-3">
                        <h4 class="text-lg font-semibold mb-2">Mobile Health Clinics</h4>
                        <p class="text-blue-100 text-sm">Reaching underserved communities with essential healthcare services</p>
                    </div>
                    <div class="bg-gray-800 bg-opacity-60 backdrop-blur-sm rounded-lg px-6 py-3">
                        <h4 class="text-lg font-semibold mb-2">Health Education</h4>
                        <p class="text-blue-100 text-sm">Community workshops on disease prevention and healthy living</p>
                    </div>
                    <div class="bg-gray-800 bg-opacity-60 backdrop-blur-sm rounded-lg px-6 py-3">
                        <h4 class="text-lg font-semibold mb-2">Medical Research</h4>
                        <p class="text-blue-100 text-sm">Contributing to medical advancement through clinical research</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Information -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">Get in Touch</h2>
            <p class="text-xl text-gray-600 mb-8">Have questions about our services or want to learn more about Shahbaz Medical Center?</p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                    <i class="fas fa-phone text-3xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Call Us</h3>
                    <p class="text-gray-600">+92 300 123 4567</p>
                    <p class="text-gray-600">Available 24/7</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                    <i class="fas fa-envelope text-3xl text-green-600 mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Email Us</h3>
                    <p class="text-gray-600">info@shahbazmedical.com</p>
                    <p class="text-gray-600">Response within 24 hours</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                    <i class="fas fa-map-marker-alt text-3xl text-purple-600 mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Visit Us</h3>
                    <p class="text-gray-600">123 Medical Street</p>
                    <p class="text-gray-600">Hyderabad, Sindh</p>
                </div>
            </div>
            
            <button onclick="openContactModal()" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold text-lg transition-colors">
                <i class="fas fa-comments mr-2"></i>Contact Us
            </button>
        </div>
    </section>

    <!-- Contact Modal -->
    <div id="contactModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center">
        <div class="bg-white rounded-lg p-8 max-w-md w-full mx-4 max-h-96 overflow-y-auto">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Contact Us</h2>
                <button onclick="closeContactModal()" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            
            <form>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Full Name</label>
                    <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="Enter your full name">
                </div>
                
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Email Address</label>
                    <input type="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="your.email@example.com">
                </div>
                
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Phone Number</label>
                    <input type="tel" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="+92 300 123 4567">
                </div>
                
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Subject</label>
                    <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                        <option>General Inquiry</option>
                        <option>Appointment Scheduling</option>
                        <option>Medical Services</option>
                        <option>Insurance & Billing</option>
                        <option>Patient Feedback</option>
                        <option>Career Opportunities</option>
                        <option>Partnership Inquiry</option>
                        <option>Media & Press</option>
                    </select>
                </div>
                
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Message</label>
                    <textarea class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" rows="4" placeholder="Please describe your inquiry or message..."></textarea>
                </div>
                
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md transition-colors">
                    Send Message
                </button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <script src="js/script.js"></script>
</body>
</html>