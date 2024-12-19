<div>
    <!-- Hero Section -->
    <section class=" bg-gray text-black py-20 px-6 relative h-[80vh] flex items-center">
        <div class="max-w-7xl mx-auto flex items-center justify-between text-center sm:text-left">
            <!-- Left Content (Text) -->
            <div class="flex flex-col items-center sm:items-start space-y-6">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 animate-fade-in leading-tight">
                    Turn Your Digital Ideas into Reality.
                </h1>
                <p class="text-lg  md:text-xl mb-8 animate-fade-in animation-delay-200 max-w-3xl mx-auto">
                    We specialize in developing digital experiences. Our expertise lies in creating websites, e-commerce
                    platforms, and mobile applications to help you succeed in the digital world.
                </p>
                <a href="/contact" wire:navigate
                    class="bg-gradient-to-r from-[#159957] to-[#155799] text-white px-8 py-4 rounded-md text-lg shadow-lg transition-colors duration-500 hover:bg-gradient-to-r hover:from-[#155799] hover:to-[#159957]">
                    Grow Your Business Now
                </a>
            </div>

            <!-- Right Content (Image) -->
            <div class="hidden sm:block relative w-1/2">
                <img src="/images/hero.jpg" alt="Illustration" class="w-full h-auto object-cover" />
            </div>
        </div>

        <!-- Background Overlay -->
    </section>




    <!-- About Us Section -->
    <!-- About Us Section -->
    <section id="about" class="py-20 px-6 bg-gray-100 relative">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-8 animate-slide-up">About Us</h2>
            <p class="text-lg md:text-xl text-gray-700 mb-8 leading-relaxed animate-slide-up animation-delay-200">
                We are dedicated to delivering high-quality services that meet your needs. Our mission is to empower
                businesses
                to achieve their goals with innovative and sustainable solutions.
            </p>
            <a href="/contact" wire:navigate
                class="bg-gradient-to-r from-[#159957] to-[#155799] hover:bg-primary-light text-white px-6 py-3 rounded-lg text-lg shadow-lg transition duration-300 transform hover:scale-105 animate-bounce">
                Contact Us
            </a>
        </div>
        <!-- Decorative Blur Element -->
        <div
            class="absolute top-0 right-0 w-48 h-48 bg-gradient-to-br from-primary-light to-transparent opacity-30 rounded-full blur-xl">
        </div>
    </section>



    <!-- Services Section -->
    <section id="services" class="py-20 px-6 content-center relative">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-4xl font-extrabold text-gray-800 mb-12">Our Expertise</h2>
            <p class="text-lg md:text-xl text-gray-800 mb-8 leading-relaxed">
                We offer a range of professional services designed to drive success and innovation. Whether you're a small business or a large enterprise, we have the right solutions for you.
            </p>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mt-20">
                <!-- Service 1 -->
                <div class="bg-white content-center text-gray-900 rounded-lg shadow-lg transform hover:bg-gradient-to-r hover:from-[#159957] hover:to-[#155799] hover:text-white hover:scale-105 hover:shadow-xl transition duration-300">
                    <div class="p-8">
                        <div class="mb-6">
                            <!-- Icon -->
                            <div class="w-16 h-16 bg-gradient-to-r from-[#159957] to-[#155799] text-white rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-cogs text-2xl"></i>
                            </div>
                            <!-- Service Title -->
                            <h3 class="text-2xl font-semibold mb-4">Custom Solutions</h3>
                            <!-- Service Description -->
                            <p class="">
                                We provide tailored solutions to address your unique business challenges and objectives.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="bg-white content-center text-gray-900 rounded-lg shadow-lg transform hover:bg-gradient-to-r hover:from-[#159957] hover:to-[#155799] hover:text-white hover:scale-105 hover:shadow-xl transition duration-300">
                    <div class="p-8">
                        <div class="mb-6">
                            <!-- Icon -->
                            <div class="w-16 h-16 bg-gradient-to-r from-[#159957] to-[#155799] text-white rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-chart-line text-2xl"></i>
                            </div>
                            <!-- Service Title -->
                            <h3 class="text-2xl font-semibold mb-4">Business Strategy</h3>
                            <!-- Service Description -->
                            <p class="">
                                Our strategic services help you streamline operations and maximize business performance.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="bg-white content-center text-gray-900 rounded-lg shadow-lg transform hover:bg-gradient-to-r hover:from-[#159957] hover:to-[#155799] hover:text-white hover:scale-105 hover:shadow-xl transition duration-300">
                    <div class="p-8">
                        <div class="mb-6">
                            <!-- Icon -->
                            <div class="w-16 h-16 bg-gradient-to-r from-[#159957] to-[#155799] text-white rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-laptop-code text-2xl"></i>
                            </div>
                            <!-- Service Title -->
                            <h3 class="text-2xl font-semibold mb-4">Web Development</h3>
                            <!-- Service Description -->
                            <p class="">
                                We design and develop user-friendly websites that help businesses grow and engage their customers effectively.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Decorative Elements -->
        <div class="absolute top-0 left-0 w-48 h-48 bg-gradient-to-br from-primary-light to-transparent opacity-30 rounded-full blur-xl"></div>
        <div class="absolute bottom-0 right-0 w-48 h-48 bg-gradient-to-br from-primary to-transparent opacity-30 rounded-full blur-xl"></div>
    </section>



    <!-- Portfolio Section -->
    <section id="portfolio" class="py-20 px-6 bg-gray-100">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-12 animate-slide-up">Our Work</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($portfolios as $portfolio)

                <a wire:navigate href="{{ route('portfolio.show', ['slug' => $portfolio->slug]) }}"
                    class="group relative bg-gray-100 rounded-lg shadow-lg overflow-hidden block h-60">
                        <img src="storage/{{$portfolio->image}}" alt="Project 1" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-0 group-hover:opacity-75 transition"></div>
                        <div class="absolute bottom-0 left-0 p-6 opacity-0 group-hover:opacity-100 transition-all duration-300">
                            <h3 class="text-2xl font-semibold text-white mb-2">{{$portfolio->title}}</h3>
                            <span class="text-lg text-white">{{$portfolio->Category->name}}</span>
                        </div>
                    </a>

                @endforeach

            </div>

            <div class="mt-10">
                <a href="/portfolio" wire:navigate
                class="bg-gradient-to-r from-[#159957] to-[#155799] hover:bg-primary-light text-white px-6 py-3 rounded-lg text-lg shadow-lg transition duration-300 transform hover:scale-105 animate-bounce">
                    More Projects
                </a>
            </div>

        </div>
    </section>

<!-- Testimonials Section -->
<section id="testimonials" class="bg-gradient-to-r from-gray-200 to-gray-300 py-24 px-6 relative overflow-hidden">
    <div class="max-w-7xl mx-auto text-center">
        <!-- Section Title -->
        <h2 class="text-4xl font-semibold text-gray-900 mb-12 animate-slide-up">
            What Our Clients Say
        </h2>

        <!-- Testimonials Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
            <!-- Testimonial 1 -->
            <div class="bg-white p-8 shadow-xl rounded-xl transform hover:scale-105 transition duration-300 hover:shadow-2xl">
                <div class="flex items-center">
                    <img src="{{ asset('images/client.jpg') }}" alt="Client Name" class="w-16 h-16 rounded-full object-cover mr-4">
                    <div>
                        <p class="italic text-gray-700">"This company transformed our business. Highly recommended!"</p>
                        <p class="mt-4 font-semibold text-gray-900">- Client Name</p>
                        <p class="text-gray-600">CEO, Company Name</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-white p-8 shadow-xl rounded-xl transform hover:scale-105 transition duration-300 hover:shadow-2xl">
                <div class="flex items-center">
                    <img src="{{ asset('images/client.jpg') }}" alt="Client Name" class="w-16 h-16 rounded-full object-cover mr-4">
                    <div>
                        <p class="italic text-gray-700">"Exceptional service and attention to detail. Great experience!"</p>
                        <p class="mt-4 font-semibold text-gray-900">- Client Name</p>
                        <p class="text-gray-600">Founder, Company Name</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 (Optional) -->
            <div class="bg-white p-8 shadow-xl rounded-xl transform hover:scale-105 transition duration-300 hover:shadow-2xl">
                <div class="flex items-center">
                    <img src="{{ asset('images/client.jpg') }}" alt="Client Name" class="w-16 h-16 rounded-full object-cover mr-4">
                    <div>
                        <p class="italic text-gray-700">"A truly outstanding team to work with. We’ll definitely be back!"</p>
                        <p class="mt-4 font-semibold text-gray-900">- Client Name</p>
                        <p class="text-gray-600">Marketing Director, Company Name</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>




</div>
