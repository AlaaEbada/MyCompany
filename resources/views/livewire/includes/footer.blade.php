<footer class="bg-white text-gray-800 pt-12 pb-6 shadow-inner">
    <div class="container mx-auto px-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-y-10 gap-x-8 max-w-7xl">
        <!-- About Section -->
        <div class="flex flex-col items-center sm:items-start space-y-4 text-center">
            <h3 class="text-lg font-semibold text-green-600">Media Sharks</h3>
            <p class="text-gray-600 leading-7">{{ __('messages.about-description') }}</p>
            <div class="flex space-x-4 justify-center sm:justify-start rtl:space-x-reverse">
                <a href="#" class="text-gray-500 hover:text-green-600"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-gray-500 hover:text-green-600"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-gray-500 hover:text-green-600"><i class="fab fa-tiktok"></i></a>
                <a href="#" class="text-gray-500 hover:text-green-600"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-gray-500 hover:text-green-600"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>

        <!-- Company Links -->
        <div class="space-y-4 text-center lg:text-right">
            <h3 class="text-lg font-semibold text-green-600">{{ __('messages.company-heading') }}</h3>
            <ul class="space-y-2 rtl:space-x-reverse">
                <li><a wire:navigate href="/" class="text-gray-600 hover:text-green-600">{{ __('messages.home') }}</a></li>
                <li><a wire:navigate href="/about-us" class="text-gray-600 hover:text-green-600">{{ __('messages.about') }}</a></li>
                <li><a wire:navigate href="/portfolio" class="text-gray-600 hover:text-green-600">{{ __('messages.portfolio') }}</a></li>
                <li><a wire:navigate href="services" class="text-gray-600 hover:text-green-600">{{ __('messages.services') }}</a></li>
                <li><a wire:navigate href="/blog" class="text-gray-600 hover:text-green-600">{{ __('messages.blog') }}</a></li>
            </ul>
        </div>

        <!-- Support Links -->
        <div class="space-y-4 text-center lg:text-right">
            <h3 class="text-lg font-semibold text-green-600">{{ __('messages.support-heading') }}</h3>
            <ul class="space-y-2">
                <li><a wire:navigate href="/contact" class="text-gray-600 hover:text-green-600">{{ __('messages.contact_us') }}</a></li>
                <li><a href="#" class="text-gray-600 hover:text-green-600">{{ __('messages.privacy_policy') }}</a></li>
            </ul>
        </div>

        <!-- Contact Section -->
        <div class="space-y-4 text-center lg:text-right">
            <h3 class="text-lg font-semibold text-green-600">{{ __('messages.contact_us') }}</h3>
            <div class="space-y-3 text-gray-600">
                <p class="flex items-center space-x-2 rtl:space-x-reverse justify-center sm:justify-start">
                    <i class="fas fa-map-marker-alt text-green-600 "></i>
                    <span>{{ __('messages.address') }}</span>
                </p>
                <a href="tel:+201015119368" class="flex items-center space-x-2 rtl:space-x-reverse justify-center sm:justify-start">
                    <i class="fas fa-phone-alt text-green-600 "></i>
                    <span>+201015119368</span>
                </a>
                <a href="mailto:alaaadelebada@gmail.com" class="flex items-center space-x-2 rtl:space-x-reverse justify-center sm:justify-start">
                    <i class="fas fa-envelope text-green-600 "></i>
                    <span>alaaadelebada@gmail.com</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Bottom Footer -->
    <div class="border-t mt-12 pt-6 text-center text-gray-600 text-sm">
        {{ __('messages.footer') }} <span class="font-semibold">{{ __('messages.company_name') }}</span> @2024
    </div>
</footer>
