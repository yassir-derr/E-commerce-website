@extends('frontend.layout')
@section('title', 'Accueil')
@section('content')
<style>
    body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }
        
        .hero-pattern {
            background: radial-gradient(circle, rgba(59,130,246,0.1) 0%, rgba(255,255,255,0) 70%);
        }
        
        .team-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        .values-card {
            transition: all 0.3s ease;
        }
        
        .values-card:hover {
            transform: scale(1.05);
        }
        
        .stats-card {
            background: linear-gradient(135deg, rgba(59,130,246,0.1) 0%, rgba(16,185,129,0.1) 100%);
        }
</style>
<!-- Hero Section -->
    <section class="hero-pattern py-20">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0">
                <h1 class="text-4xl md:text-5xl font-bold text-dark mb-4">
                    About <span class="text-primary">Shop</span><span class="text-secondary">.ma</span>
                </h1>
                <p class="text-xl text-gray-600 mb-6 max-w-lg">
                    We're revolutionizing online shopping in Morocco with curated products, competitive prices, and exceptional customer service.
                </p>
                <div class="flex space-x-4">
                    <a href="#story" class="bg-primary text-white px-6 py-3 rounded-lg font-medium hover:bg-blue-600 transition">
                        Our Story
                    </a>
                    <a href="#values" class="border border-primary text-primary px-6 py-3 rounded-lg font-medium hover:bg-blue-50 transition">
                        Our Values
                    </a>
                </div>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <div class="relative">
                    <div class="w-64 h-64 bg-primary rounded-full absolute -top-6 -left-6 opacity-20"></div>
                    <div class="w-64 h-64 bg-secondary rounded-full absolute -bottom-6 -right-6 opacity-20"></div>
                    <div class="relative bg-white rounded-2xl shadow-xl p-2 border border-gray-100">
                        <img src="https://images.unsplash.com/photo-1607082350899-7e105aa886ae?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" 
                             alt="Shop.ma Team" class="rounded-xl w-full max-w-md">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-12 bg-light">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="stats-card rounded-xl p-6 text-center">
                    <div class="text-3xl font-bold text-primary mb-2">500K+</div>
                    <div class="text-gray-600">Happy Customers</div>
                </div>
                <div class="stats-card rounded-xl p-6 text-center">
                    <div class="text-3xl font-bold text-secondary mb-2">50K+</div>
                    <div class="text-gray-600">Products</div>
                </div>
                <div class="stats-card rounded-xl p-6 text-center">
                    <div class="text-3xl font-bold text-primary mb-2">100+</div>
                    <div class="text-gray-600">Brands</div>
                </div>
                <div class="stats-card rounded-xl p-6 text-center">
                    <div class="text-3xl font-bold text-secondary mb-2">24/7</div>
                    <div class="text-gray-600">Customer Support</div>
                </div>
            </div>
        </div>
    </section>

<!-- Our Story Section -->
    <section id="story" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-dark mb-4">Our Story</h2>
                <div class="w-20 h-1 bg-primary mx-auto"></div>
            </div>
            
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" 
                         alt="Shop.ma beginnings" class="rounded-xl shadow-lg">
                </div>
                <div class="md:w-1/2 md:pl-12">
                    <h3 class="text-2xl font-bold text-dark mb-4">From Humble Beginnings</h3>
                    <p class="text-gray-600 mb-4">
                        Founded in 2018 in Casablanca, Shop.ma began as a small startup with a big vision: to create Morocco's premier online shopping destination. Our founders, Youssef and Amina, noticed a gap in the market for a reliable, user-friendly e-commerce platform tailored to Moroccan consumers.
                    </p>
                    <p class="text-gray-600 mb-4">
                        Starting with just 50 products and a team of 5, we've grown into a leading e-commerce platform serving customers across all 12 regions of Morocco. Our growth has been fueled by our commitment to quality, customer satisfaction, and continuous innovation.
                    </p>
                    <p class="text-gray-600">
                        Today, we're proud to support hundreds of local businesses and artisans by providing them with a platform to reach customers nationwide, while also offering international brands that Moroccans love.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Mission -->
    <section class="py-20 bg-primary">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center text-white">
                <h2 class="text-3xl font-bold mb-6">Our Mission</h2>
                <p class="text-xl mb-8">
                    To empower Moroccan consumers with seamless access to quality products while supporting local businesses and creating exceptional shopping experiences.
                </p>
                <div class="bg-white text-primary inline-block px-6 py-3 rounded-lg font-medium">
                    Shop with Confidence
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values -->
    <section id="values" class="py-20 bg-light">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-dark mb-4">Our Core Values</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    These principles guide everything we do at Shop.ma and shape our company culture
                </p>
                <div class="w-20 h-1 bg-primary mx-auto mt-4"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="values-card bg-white p-8 rounded-xl shadow-md text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-users text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-dark mb-3">Customer First</h3>
                    <p class="text-gray-600">
                        We prioritize our customers' needs and satisfaction above all else, going the extra mile to ensure exceptional experiences.
                    </p>
                </div>
                
                <div class="values-card bg-white p-8 rounded-xl shadow-md text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-medal text-secondary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-dark mb-3">Quality Assurance</h3>
                    <p class="text-gray-600">
                        Every product on our platform undergoes rigorous quality checks to meet our high standards and your expectations.
                    </p>
                </div>
                
                <div class="values-card bg-white p-8 rounded-xl shadow-md text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-lightbulb text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-dark mb-3">Innovation</h3>
                    <p class="text-gray-600">
                        We constantly explore new technologies and approaches to enhance your shopping experience and streamline our operations.
                    </p>
                </div>
                
                <div class="values-card bg-white p-8 rounded-xl shadow-md text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-hand-holding-heart text-secondary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-dark mb-3">Community Focus</h3>
                    <p class="text-gray-600">
                        We're committed to supporting Moroccan businesses and contributing positively to our local communities.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-dark mb-4">Meet Our Leadership</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    The passionate team driving Shop.ma's vision forward
                </p>
                <div class="w-20 h-1 bg-primary mx-auto mt-4"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="team-card bg-white rounded-xl shadow-md overflow-hidden transition duration-300">
                    <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" 
                         alt="Youssef El Amrani" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-dark">Yassir derrami</h3>
                        <p class="text-primary mb-3">Co-Founder & CEO</p>
                        <p class="text-gray-600 mb-4">
                            E-commerce veteran with 15+ years of experience building successful online businesses.
                        </p>
                        <div class="flex space-x-3">
                            <a href="#" class="text-gray-500 hover:text-primary">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="text-gray-500 hover:text-primary">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Call to Action -->
        

    
@endsection