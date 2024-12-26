<div>
    <!-- Hero Section for About Us Page -->
    <x-hero-section
        title="{{ __('messages.about_us') }}"
        subtitle="{{ __('messages.hero_subtitle') }}" />

    <!-- About Us Section -->
    <section id="about" class="py-20 px-6 bg-gradient-to-br from-gray-50 to-gray-100 relative">
        <div class="max-w-7xl mx-auto">
            <!-- Introduction -->
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-3xl font-extrabold text-gray-900 mb-6 animate-slide-up">
                    {{ __('messages.who_we_are') }}
                </h2>
                <p class="text-lg md:text-xl text-gray-700 leading-relaxed animate-slide-up animation-delay-200">
                    {{ __('messages.who_we_are_description') }}
                </p>
            </div>

            <!-- Values Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <div class="bg-white p-8 rounded-lg shadow-md transform hover:shadow-lg hover:scale-105 transition duration-300 text-center">
                    <div class="w-16 h-16 mx-auto bg-gradient-to-r from-[#159957] to-[#155799] text-white flex items-center justify-center rounded-full mb-4">
                        <i class="fas fa-rocket text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">
                        {{ __('messages.innovation') }}
                    </h3>
                    <p class="text-gray-600">
                        {{ __('messages.innovation_description') }}
                    </p>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-md transform hover:shadow-lg hover:scale-105 transition duration-300 text-center">
                    <div class="w-16 h-16 mx-auto bg-gradient-to-r from-[#159957] to-[#155799] text-white flex items-center justify-center rounded-full mb-4">
                        <i class="fas fa-handshake text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">
                        {{ __('messages.commitment') }}
                    </h3>
                    <p class="text-gray-600">
                        {{ __('messages.commitment_description') }}
                    </p>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-md transform hover:shadow-lg hover:scale-105 transition duration-300 text-center">
                    <div class="w-16 h-16 mx-auto bg-gradient-to-r from-[#159957] to-[#155799] text-white flex items-center justify-center rounded-full mb-4">
                        <i class="fas fa-users text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">
                        {{ __('messages.collaboration') }}
                    </h3>
                    <p class="text-gray-600">
                        {{ __('messages.collaboration_description') }}
                    </p>
                </div>
            </div>

            <!-- Milestones Section -->
            <section id="our-journey" class="py-20 px-6 bg-gray-50">
                <div class="max-w-7xl mx-auto">
                    <h3 class="text-4xl font-bold text-gray-900 text-center mb-12">
                        {{ __('messages.our_journey') }}
                    </h3>

                    <!-- Timeline Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Milestone 1 -->
                        <div class="bg-white p-6 rounded-lg shadow-md transform hover:shadow-lg hover:scale-105 transition duration-300">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-gradient-to-r from-[#159957] to-[#155799] text-white flex items-center justify-center rounded-full mr-4">
                                    <i class="fas fa-calendar-alt text-2xl"></i>
                                </div>
                                <h4 class="text-xl font-semibold text-gray-900 rtl:mr-4">
                                    {{ __('messages.milestone_1_title') }}
                                </h4>
                            </div>
                            <p class="text-gray-600">
                                {{ __('messages.milestone_1_description') }}
                            </p>
                        </div>

                        <!-- Milestone 2 -->
                        <div class="bg-white p-6 rounded-lg shadow-md transform hover:shadow-lg hover:scale-105 transition duration-300">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-gradient-to-r from-[#159957] to-[#155799] text-white flex items-center justify-center rounded-full mr-4">
                                    <i class="fas fa-award text-2xl"></i>
                                </div>
                                <h4 class="text-xl font-semibold text-gray-900 rtl:mr-4">
                                    {{ __('messages.milestone_2_title') }}
                                </h4>
                            </div>
                            <p class="text-gray-600">
                                {{ __('messages.milestone_2_description') }}
                            </p>
                        </div>

                        <!-- Milestone 3 -->
                        <div class="bg-white p-6 rounded-lg shadow-md transform hover:shadow-lg hover:scale-105 transition duration-300">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-gradient-to-r from-[#159957] to-[#155799] text-white flex items-center justify-center rounded-full mr-4">
                                    <i class="fas fa-globe text-2xl"></i>
                                </div>
                                <h4 class="text-xl font-semibold text-gray-900 rtl:mr-4">
                                    {{ __('messages.milestone_3_title') }}
                                </h4>
                            </div>
                            <p class="text-gray-600">
                                {{ __('messages.milestone_3_description') }}
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Call to Action Section -->
            <div class="text-center p-10 mt-20 rounded-md bg-white drop-shadow-xl">
                <h3 class="text-3xl font-bold text-gray-900 mb-4">
                    {{ __('messages.ready_to_work') }}
                </h3>
                <p class="text-lg text-gray-600 mb-6">
                    {{ __('messages.create_something_amazing') }}
                </p>
                <a wire:navigate href="/contact" class="bg-gradient-to-r from-[#159957] to-[#155799] hover:from-[#155799] hover:to-[#159957] text-white px-8 py-3 rounded-lg text-lg shadow-lg transform transition duration-300 hover:scale-105">
                    {{ __('messages.get_in_touch') }}
                </a>
            </div>
        </div>
    </section>
</div>
