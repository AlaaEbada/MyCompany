<div>
    <!-- Contact Section -->
    <!-- Hero Section for Contact Page -->
    <x-hero-section title="{{ __('messages.contact_us') }}" subtitle="{{ __('messages.contact_us_description') }}" />

    <!-- Contact Section -->
    <section id="contact" class="py-20 px-6 bg-gray-50 text-gray-900 relative">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 animate-slide-up">{{ __('messages.contact_us') }}</h2>
    
            <form wire:submit.prevent="contact" class="max-w-3xl mx-auto space-y-6 animate-fade-in">

                <div>
                    <label for="name" class="block text-sm font-medium">{{ __('messages.name') }}</label>
                    <input wire:model="name" type="text" id="name" class="w-full mt-2 p-4 rounded-md bg-gray-100 text-gray-900 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-light transition duration-300">

                    @error('name')
                        <span class="mt-2 text-sm text-red-500 p-2">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium">{{ __('messages.email') }}</label>
                    <input wire:model="email" type="email" id="email" class="w-full mt-2 p-4 rounded-md bg-gray-100 text-gray-900 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-light transition duration-300">

                    @error('email')
                        <span class="mt-2 text-sm text-red-500 p-2">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="message" class="block text-sm font-medium">{{ __('messages.message') }}</label>
                    <textarea wire:model="message" id="message" rows="4" class="w-full mt-2 p-4 rounded-md bg-gray-100 text-gray-900 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-light transition duration-300"></textarea>

                    @error('message')
                        <span class="text-red-500 mt-2 text-sm p-2">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="bg-gradient-to-r from-[#159957] to-[#155799] text-white px-6 py-3 rounded-md transform hover:scale-105 transition duration-300 flex items-center justify-center space-x-2">
                    <span wire:loading.remove>{{ __('messages.send_message') }}</span>

                    <svg
                        wire:loading
                        wire:target="contact"
                        class="animate-spin h-6 w-6 text-white"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                    >
                        <circle
                            class="opacity-25"
                            cx="12"
                            cy="12"
                            r="10"
                            stroke="currentColor"
                            stroke-width="4"
                        ></circle>
                        <path
                            class="opacity-75"
                            fill="currentColor"
                            d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"
                        ></path>
                    </svg>

                    <span wire:loading wire:target="contact">{{ __('messages.sending') }}</span>
                </button>
            </form>
        </div>

        <!-- Decorative Blur Element -->
        <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#159957] to-[#155799] opacity-20 rounded-full blur-xl"></div>
    </section>
</div>
