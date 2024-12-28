

<div>

    <!-- Hero Section -->
    <section class=" bg-gray text-black py-20 px-6 relative h-[80vh] flex items-center">
        <div class="max-w-7xl mx-auto flex items-center justify-between text-center sm:text-left">
            <!-- Left Content (Text) -->
            <div class="flex flex-col items-center sm:items-start space-y-6">
                <h1 class=" lg:align-ar  text-4xl md:text-5xl lg:text-6xl font-bold mb-6 animate-fade-in leading-tight lg:rtl:text-right">
                    {{ __('messages.hero_title') }}
                </h1>
                <p class=" lg:align-ar text-lg md:text-xl mb-8 animate-fade-in animation-delay-200 max-w-3xl mx-auto  lg:rtl:text-right">
                    {{__('messages.hero_description')}}
                </p>
                <a href="/contact" wire:navigate
                    class="bg-gradient-to-r from-[#159957] to-[#155799] text-white px-8 py-4 rounded-md text-lg shadow-lg transition-colors duration-500 hover:bg-gradient-to-r hover:from-[#155799] hover:to-[#159957]">
                    {{ __('messages.hero_cta')}}
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
    <section id="about" class="py-20 px-6 bg-gray-100 relative">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-8 animate-slide-up">{{ __('messages.about_title') }}</h2>
            <p class="text-lg md:text-xl text-gray-700 mb-8 leading-relaxed animate-slide-up animation-delay-200">
                {{ __('messages.about_description') }}
            </p>
            <a href="/contact" wire:navigate
                class="bg-gradient-to-r from-[#159957] to-[#155799] hover:bg-primary-light text-white px-6 py-3 rounded-lg text-lg shadow-lg transition duration-300 transform hover:scale-105 animate-bounce">
                {{__('messages.contact_us')}}
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
            <h2 class="text-4xl font-extrabold text-gray-800 mb-12">{{__('messages.our_expertise')}}</h2>
            <p class="text-lg md:text-xl text-gray-800 mb-8 leading-relaxed">
                {{__('messages.expertise_description')}}
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
                            <h3 class="text-2xl font-semibold mb-4">{{ __('messages.service_title_1') }}</h3>
                            <p>{{ __('messages.service_description_1') }}</p>
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
                            <h3 class="text-2xl font-semibold mb-4">{{ __('messages.service_title_2') }}</h3>
                            <p>{{ __('messages.service_description_2') }}</p>
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
                            <h3 class="text-2xl font-semibold mb-4">{{ __('messages.service_title_3') }}</h3>
                            <p>{{ __('messages.service_description_3') }}</p>
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
            <h2 class="text-3xl md:text-4xl font-bold mb-12 animate-slide-up">
                {{__('messages.our_work')}}
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($portfolios as $portfolio)

                <a wire:navigate href="{{ route('portfolio.show', ['slug' => $portfolio->slug]) }}"
                    class="group relative bg-gray-100 rounded-lg shadow-lg overflow-hidden block h-60">
                        <img src="storage/{{$portfolio->image}}" alt="Project 1" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-0 group-hover:opacity-75 transition"></div>
                        <div class="absolute bottom-0 left-0 p-6 opacity-0 group-hover:opacity-100 transition-all duration-300">
                            <h3 class="text-2xl font-semibold text-white mb-2">{{$portfolio->title}}</h3>
                            <span class="text-lg text-white">{{$portfolio->category->name}}</span>
                        </div>
                    </a>

                @endforeach

            </div>

            <div class="mt-12">
                <a href="/portfolio" wire:navigate
                class="bg-gradient-to-r from-[#159957] to-[#155799] hover:bg-primary-light text-white px-6 py-3 rounded-lg text-lg shadow-lg transition duration-300 transform hover:scale-105 animate-bounce">
                    {{__('messages.more_projects')}}
                </a>
            </div>

        </div>
    </section>

<!-- Testimonials Section -->
<section id="testimonials" class="bg-gray-200 py-24 px-6 relative overflow-hidden">
    <div class="max-w-7xl mx-auto text-center">
        <!-- Section Title -->
        <h2 class="text-4xl font-semibold text-gray-900 mb-12 animate-slide-up">
            {{ __('messages.testimonial_title') }}
        </h2>

        <!-- Testimonials Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
            <!-- Testimonial 1 -->
            <div class="bg-white p-8 shadow-xl rounded-xl transform hover:scale-105 transition duration-300 hover:shadow-2xl">
                <div class="flex items-center">
                    <img src="{{ asset('images/client.jpg') }}" alt="Client Name" class="w-16 h-16 rounded-full object-cover mr-4">
                    <div>
                        <p class="italic text-gray-700">{{ __('messages.testimonial_1_quote') }}</p>
                        <p class="mt-4 font-semibold text-gray-900">{{ __('messages.testimonial_1_name') }}</p>
                        <p class="text-gray-600">{{ __('messages.testimonial_1_position') }}</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-white p-8 shadow-xl rounded-xl transform hover:scale-105 transition duration-300 hover:shadow-2xl">
                <div class="flex items-center">
                    <img src="{{ asset('images/client.jpg') }}" alt="Client Name" class="w-16 h-16 rounded-full object-cover mr-4">
                    <div>
                        <p class="italic text-gray-700">{{ __('messages.testimonial_2_quote') }}</p>
                        <p class="mt-4 font-semibold text-gray-900">{{ __('messages.testimonial_2_name') }}</p>
                        <p class="text-gray-600">{{ __('messages.testimonial_2_position') }}</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 (Optional) -->
            <div class="bg-white p-8 shadow-xl rounded-xl transform hover:scale-105 transition duration-300 hover:shadow-2xl">
                <div class="flex items-center">
                    <img src="{{ asset('images/client.jpg') }}" alt="Client Name" class="w-16 h-16 rounded-full object-cover mr-4">
                    <div>
                        <p class="italic text-gray-700">{{ __('messages.testimonial_3_quote') }}</p>
                        <p class="mt-4 font-semibold text-gray-900">{{ __('messages.testimonial_3_name') }}</p>
                        <p class="text-gray-600">{{ __('messages.testimonial_3_position') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




</div>
