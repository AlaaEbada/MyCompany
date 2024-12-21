<header class="bg-white text-gray-900 py-6 sticky top-0 z-50 transition-colors duration-300 ease-in-out" id="header">
    <div class="max-w-7xl mx-auto flex justify-between items-center px-6 space-x-8">
        <!-- Logo -->
        <a href="/" wire:navigate>
            <h1 class="text-2xl font-extrabold tracking-wider text-transparent bg-clip-text bg-gradient-to-r from-[#159957] to-[#155799] hover:scale-105 transition-transform duration-300 cursor-pointer">
                MediaSharks
            </h1>
        </a>

        <!-- Navigation Menu -->
        <nav>
            <ul class="flex space-x-6 items-center">
                <li><a href="/" wire:navigate class="text-base font-medium text-gray-800 hover:text-green-500 transition-colors duration-200 {{ request()->is('/') ? 'text-green-500' : '' }}">Home</a></li>
                <li><a href="/about-us" wire:navigate class="text-base font-medium text-gray-800 hover:text-green-500 transition-colors duration-200 {{ request()->is('about-us') ? 'text-green-500' : '' }}">About Us</a></li>
                <li><a href="/services" wire:navigate class="text-base font-medium text-gray-800 hover:text-green-500 transition-colors duration-200 {{ request()->is('services') ? 'text-green-500' : '' }} ">Services</a></li>
                <li><a href="/portfolio" wire:navigate class="text-base font-medium text-gray-800 hover:text-green-500 transition-colors duration-200 {{ request()->is('portfolio') || request()->is('portfolio/*') ? 'text-green-500' : '' }}">Portfolio</a></li>
                <li><a href="/blog" wire:navigate class="text-base font-medium text-gray-800 hover:text-green-500 transition-colors duration-200 {{ request()->is('blog') || request()->is('post/*') ? 'text-green-500' : '' }}">Blog</a></li>
                <li><a href="/contact" wire:navigate class="text-base font-medium text-gray-800 hover:text-green-500 transition-colors duration-200 {{ request()->is('contact') ? 'text-green-500' : '' }}">Contact</a></li>
            </ul>
        </nav>

        <!-- Authentication Links -->
        <section class="flex items-center space-x-6">
            @if (Route::has('login'))
                @auth
                    @if (Auth::check() && Auth::user()->is_admin == '1')
                        <a href="/admin" class="text-base font-medium text-gray-800 hover:text-green-500 transition-colors duration-200 {{ request()->is('admin') ? 'text-green-500' : '' }}">
                            Dashboard
                        </a>
                    @endif
                    <div class="hidden sm:flex items-center space-x-3">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                    <span>{{ Auth::user()->name }}</span>
                                    <svg class="ml-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <x-dropdown-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                        {{ __('Log Out') }}
                                    </button>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @else
                    <a wire:navigate href="{{ route('login') }}" class="text-base font-medium text-black px-4 py-2 border border-transparent rounded hover:text-gray-600 focus-visible:ring focus-visible:ring-green-500">
                        Log in
                    </a>
                    @if (Route::has('register'))
                        <a wire:navigate href="{{ route('register') }}" class="text-base font-medium text-black px-4 py-2 border border-transparent rounded hover:text-gray-600 focus-visible:ring focus-visible:ring-green-500">
                            Register
                        </a>
                    @endif
                @endauth
            @endif
        </section>
    </div>
</header>
