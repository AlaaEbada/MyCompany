<div>
    <!-- Hero Section -->
    <x-hero-section title="{{ __('messages.our_services') }}"
        subtitle="{{ __('messages.hero_subtitle_services') }}" />

    <!-- Services Section -->
    <section id="services" class="py-20 px-6 content-center relative">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-4xl font-extrabold text-gray-800 mb-12">
                {{ __('messages.our_expertise') }}
            </h2>
            <p class="text-lg md:text-xl text-gray-800 mb-8 leading-relaxed">
                {{ __('messages.services_description') }}
            </p>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mt-20">
                <!-- Service 1 -->
                <div
                    class="bg-white content-center text-gray-900 rounded-lg shadow-lg transform hover:bg-gradient-to-r hover:from-[#159957] hover:to-[#155799] hover:text-white hover:scale-105 hover:shadow-xl transition duration-300">
                    <div class="p-8">
                        <div class="mb-6">
                            <!-- Icon -->
                            <div
                                class="w-16 h-16 bg-gradient-to-r from-[#159957] to-[#155799] text-white rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-cogs text-2xl"></i>
                            </div>
                            <!-- Service Title -->
                            <h3 class="text-2xl font-semibold mb-4">
                                {{ __('messages.custom_solutions') }}
                            </h3>
                            <!-- Service Description -->
                            <p>
                                {{ __('messages.custom_solutions_description') }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Service 2 -->
                <div
                    class="bg-white content-center text-gray-900 rounded-lg shadow-lg transform hover:bg-gradient-to-r hover:from-[#159957] hover:to-[#155799] hover:text-white hover:scale-105 hover:shadow-xl transition duration-300">
                    <div class="p-8">
                        <div class="mb-6">
                            <!-- Icon -->
                            <div
                                class="w-16 h-16 bg-gradient-to-r from-[#159957] to-[#155799] text-white rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-chart-line text-2xl"></i>
                            </div>
                            <!-- Service Title -->
                            <h3 class="text-2xl font-semibold mb-4">
                                {{ __('messages.business_strategy') }}
                            </h3>
                            <!-- Service Description -->
                            <p>
                                {{ __('messages.business_strategy_description') }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Service 3 -->
                <div
                    class="bg-white content-center text-gray-900 rounded-lg shadow-lg transform hover:bg-gradient-to-r hover:from-[#159957] hover:to-[#155799] hover:text-white hover:scale-105 hover:shadow-xl transition duration-300">
                    <div class="p-8">
                        <div class="mb-6">
                            <!-- Icon -->
                            <div
                                class="w-16 h-16 bg-gradient-to-r from-[#159957] to-[#155799] text-white rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-laptop-code text-2xl"></i>
                            </div>
                            <!-- Service Title -->
                            <h3 class="text-2xl font-semibold mb-4">
                                {{ __('messages.web_development') }}
                            </h3>
                            <!-- Service Description -->
                            <p>
                                {{ __('messages.web_development_description') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Decorative Elements -->
        <div
            class="absolute top-0 left-0 w-48 h-48 bg-gradient-to-br from-primary-light to-transparent opacity-30 rounded-full blur-xl">
        </div>
        <div
            class="absolute bottom-0 right-0 w-48 h-48 bg-gradient-to-br from-primary to-transparent opacity-30 rounded-full blur-xl">
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-20 px-6 bg-gray-100 text-center">
        <h3 class="text-3xl font-bold text-gray-900 mb-4">
            {{ __('messages.ready_to_start') }}
        </h3>
        <p class="text-lg text-gray-600 mb-6">
            {{ __('messages.get_in_touch') }}
        </p>
        <a wire:navigate href="/contact"
            class="bg-gradient-to-r from-[#159957] to-[#155799] text-white px-8 py-3 rounded-lg text-lg shadow-lg transform transition duration-300 hover:scale-105">
            {{ __('messages.contact_us') }}
        </a>
    </section>
</div>
