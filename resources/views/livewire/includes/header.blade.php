<header class="bg-white text-gray-900 py-6 sticky top-0 z-50 transition-colors duration-300 ease-in-out " id="header"
    x-data="{ menuOpen: false }">
    <div class="max-w-7xl mx-auto flex justify-between items-center px-6 space-x-8">
        <!-- Logo -->
        <a href="/" wire:navigate>
            <h1
                class="text-2xl font-extrabold tracking-wider text-transparent bg-clip-text bg-gradient-to-r from-[#159957] to-[#155799] hover:scale-105 transition-transform duration-300 cursor-pointer">
                MediaSharks
            </h1>
        </a>

        <!-- Mobile Menu Toggle -->
        <button class="lg:hidden text-gray-900 focus:outline-none focus:ring-2 focus:ring-green-500"
            x-on:click="menuOpen = true">
            <svg x-show="!menuOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>

        <!-- Desktop Navigation Menu -->
        <nav class="hidden lg:flex space-x-6 items-center">
            <ul class=" flex space-x-6 items-center rtl:space-x-reverse">
                <li><a href="/" wire:navigate
                        class=" {{ request()->is('/') ? 'text-green-500 ' : '' }}  text-base font-medium text-gray-800 hover:text-green-500 transition-colors duration-200">{{__('messages.home')}} </a>
                </li>
                <li><a href="/about-us" wire:navigate
                        class=" {{ request()->is('about-us') ? 'text-green-500 ' : '' }} text-base font-medium text-gray-800 hover:text-green-500 transition-colors duration-200">{{__('messages.about')}} </a></li>
                <li><a href="/services" wire:navigate
                        class=" {{ request()->is('services') ? 'text-green-500 ' : '' }}text-base font-medium text-gray-800 hover:text-green-500 transition-colors duration-200">{{__('messages.services')}}</a>
                </li>
                <li><a href="/portfolio" wire:navigate
                        class=" {{ request()->is('portfolio') || request()->is('portfolio/*') ? 'text-green-500 ' : '' }} text-base font-medium text-gray-800 hover:text-green-500 transition-colors duration-200">{{__('messages.portfolio')}}</a>
                </li>
                <li><a href="/blog" wire:navigate
                        class=" {{ request()->is('blog') || request()->is('post/*') ? 'text-green-500 ' : '' }} text-base font-medium text-gray-800 hover:text-green-500 transition-colors duration-200">{{__('messages.blog')}}</a>
                </li>
                <li><a href="/contact" wire:navigate
                        class=" {{  request()->is('contact') ? 'text-green-500 ' : '' }}text-base font-medium text-gray-800 hover:text-green-500 transition-colors duration-200">{{__('messages.contact_us')}}</a>
                </li>

                @if (app()->getLocale() == 'ar')

                    <li class="language-switcher text-base font-medium text-gray-800 hover:text-green-500 transition-colors duration-200">
                        <a  href="locale/en" class="flex">
                            <img class="w-5 mx-1" src="{{ asset('images/en.png') }}" alt="">
                            EN
                        </a>
                    </li>
                @else
                    <li class="language-switcher text-base font-medium text-gray-800 hover:text-green-500 transition-colors duration-200">
                        <a href="locale/ar" class=" flex">
                            <img class="w-5 mx-1" src="{{ asset('images/ar.png') }}" alt="">
                            <span>AR</span>
                        </a>
                    </li>
                @endif
            </ul>
        </nav>

        <!-- Authentication Links -->
        <section class="hidden lg:flex items-center space-x-6">
            @if (Route::has('login'))
                @auth
                    @if (Auth::check() && Auth::user()->is_admin == '1')
                        <a href="/admin"
                            class="text-base font-medium text-gray-800 hover:text-green-500 transition-colors duration-200 {{ request()->is('admin') ? 'text-green-500' : '' }}">
                            {{__('messages.dashboard')}}
                        </a>
                    @endif
                    <div class="hidden sm:flex items-center space-x-3 font-medium">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button
                                    class="inline-flex items-center px-3 py-2 border border-transparent text-gray-800 text-1xl leading-4 font-medium rounded-md hover:text-green-500 focus:outline-none transition ease-in-out duration-150">
                                    <span>{{ Auth::user()->name }}</span>
                                    <svg class="ml-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <x-dropdown-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                                    {{ __('messages.profile') }}

                                </x-dropdown-link>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit"
                                        class="block w-full text-left rtl:text-right px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                        {{ __('messages.logout') }}

                                    </button>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @else
                    <a wire:navigate href="{{ route('login') }}"
                        class="text-base font-medium text-black px-4 py-2 border border-transparent rounded hover:text-gray-600 focus-visible:ring focus-visible:ring-green-500">
                        {{ __('messages.login') }}

                    </a>
                    @if (Route::has('register'))
                        <a wire:navigate href="{{ route('register') }}"
                            class="text-base font-medium text-black px-4 py-2 border border-transparent rounded hover:text-gray-600 focus-visible:ring focus-visible:ring-green-500">
                            {{ __('messages.register') }}

                        </a>
                    @endif
                @endauth
            @endif
        </section>

        <!-- Mobile Navigation Menu -->
        <div class="fixed inset-0 z-50" x-show="menuOpen" x-cloak >
            <!-- Background overlay -->
            <div class="fixed inset-0 bg-black bg-opacity-50 transition-opacity duration-300" x-show="menuOpen" ></div>

            <!-- Menu Content -->
            <nav @click.away="menuOpen = false"
                class="fixed top-0 right-0 h-full w-4/5 bg-gray-900 text-white shadow-lg z-50 transform transition-transform duration-300"
                x-transition:enter="translate-x-full"
                x-transition:enter-end="translate-x-0"
                x-transition:leave="translate-x-0"
                x-transition:leave-end="translate-x-full">
                <div class="flex flex-col items-center h-full pt-6">
                    <!-- Close Button -->
                    <button class="self-end pr-6 text-gray-400 hover:text-white " x-on:click="menuOpen = false">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>

                    <ul class="flex flex-col space-y-6 items-center justify-center mt-6">
                        <!-- Main Links -->
                        <li><a href="/" wire:navigate class=" {{ request()->is('/') ? 'text-green-500 ' : '' }} text-lg font-semibold hover:text-green-400 transition-colors duration-200">{{ __('messages.home') }}</a></li>
                        <li><a href="/about-us" wire:navigate class=" {{ request()->is('about-us') ? 'text-green-500 ' : '' }} text-lg font-semibold hover:text-green-400 transition-colors duration-200">{{ __('messages.about') }}</a></li>
                        <li><a href="/services" wire:navigate class="  {{ request()->is('services') ? 'text-green-500 ' : '' }} text-lg font-semibold hover:text-green-400 transition-colors duration-200">{{ __('messages.services') }}</a></li>
                        <li><a href="/portfolio" wire:navigate class=" {{ request()->is('portfolio') || request()->is('portfolio/*') ? 'text-green-500 ' : '' }}text-lg font-semibold hover:text-green-400 transition-colors duration-200">{{ __('messages.portfolio') }}</a></li>
                        <li><a href="/blog" wire:navigate class=" {{ request()->is('blog') || request()->is('post/*') ? 'text-green-500 ' : '' }} text-lg font-semibold hover:text-green-400 transition-colors duration-200">{{ __('messages.blog') }}</a></li>
                        <li><a href="/contact" wire:navigate class= "{{ request()->is('contact') ? 'text-green-500 ' : '' }} text-lg font-semibold hover:text-green-400 transition-colors duration-200">{{ __('messages.contact_us') }}</a></li>

                        <!-- Language Switcher for Mobile -->
                        @if (app()->getLocale() == 'ar')

                        <li class="language-switcher text-lg font-medium hover:text-green-500 transition-colors duration-200">
                            <a href="locale/en" class="flex">
                                <img class="w-5 mx-1" src="{{ asset('images/en.png') }}" alt="">
                                EN
                            </a>
                        </li>
                        @else
                            <li class="language-switcher text-lg font-medium  hover:text-green-500 transition-colors duration-200">
                                <a href="locale/ar" class=" flex">
                                    <img class="w-5 mx-1" src=" {{ asset('images/ar.png') }}" alt="">
                                    <span>AR</span>
                                </a>
                            </li>
                        @endif

                        <!-- Divider -->
                        <li class="w-4/5 border-t border-gray-500 mt-6"></li>

                        <!-- Authentication Links -->
                        <section>
                            @auth
                            <li class=" text-center text-lg font-semibold hover:text-green-400 transition-colors duration-200">
                                <a href="/admin">
                                    {{__('messages.dashboard')}}
                                </a>
                            </li>

                            <li class=" mt-4 text-center text-lg font-semibold hover:text-green-400 transition-colors duration-200">
                                <a wire:navigate href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                                        {{ __('messages.profile') }}
                                </a>
                            </li>

                            <li class=" mt-4 text-center text-lg font-semibold text-red-500 hover:text-green-400 transition-colors duration-200">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit">
                                        {{ __('messages.logout') }}
                                    </button>
                                </form>
                            </li>


                            @else
                            <li class=" text-center text-lg font-semibold hover:text-green-400 transition-colors duration-200">
                                <a wire:navigate href="{{ route('login') }}" >
                                    {{ __('messages.login') }}
                                </a>
                            </li>

                            <li class=" mt-4 text-center text-lg font-semibold hover:text-green-400 transition-colors duration-200">
                                <a wire:navigate href="{{ route('register') }}">{{ __('messages.register') }}</a>
                            </li>
                            @endauth
                        </section>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
