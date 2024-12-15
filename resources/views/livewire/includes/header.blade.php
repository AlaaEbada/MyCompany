<!-- Header -->
<header class="bg-white text-gray-900 py-6 sticky top-0 z-50 transition-colors duration-300 ease-in-out" id="header">
    <div class="max-w-7xl mx-auto flex justify-between items-center px-6">
        <!-- Logo -->
        <a href="/" wire:navigate>
            <h1 class="text-2xl font-extrabold tracking-wider text-transparent bg-clip-text bg-gradient-to-r from-[#159957] to-[#155799] hover:scale-105 transition-transform duration-300 cursor-pointer">
                Company Logo
            </h1>
        </a>
        

        <!-- Navigation Menu -->
        <nav>
            <ul class="flex space-x-8">
                <li><a href="/" wire:navigate class="text-lg font-semibold text-gray-800 hover:text-green-500 transition-colors duration-200 active:text-green-500 {{ request()->is('/') ? 'text-green-500' : '' }}">Home</a></li>
                <li><a href="#about" wire:navigate class="text-lg font-semibold text-gray-800 hover:text-green-500 transition-colors duration-200 active:text-green-500 {{ request()->is('about-us') ? 'text-green-500' : '' }}">About Us</a></li>
                <li><a href="#services" wire:navigate class="text-lg font-semibold text-gray-800 hover:text-green-500 transition-colors duration-200 active:text-green-500 {{ request()->is('services') ? 'text-green-500' : '' }}">Services</a></li>
                <li><a href="#portfolio" wire:navigate class="text-lg font-semibold text-gray-800 hover:text-green-500 transition-colors duration-200 active:text-green-500 {{ request()->is('portfolio') ? 'text-green-500' : '' }}">Portfolio</a></li>
                <li><a href="#blog" wire:navigate class="text-lg font-semibold text-gray-800 hover:text-green-500 transition-colors duration-200 active:text-green-500 {{ request()->is('blog') ? 'text-green-500' : '' }}">Blog</a></li>
                <li><a href="/contact" wire:navigate class="text-lg font-semibold text-gray-800 hover:text-green-500 transition-colors duration-200 {{ request()->is('contact') ? 'text-green-500' : '' }}"  >Contact</a></li>
            </ul>
        </nav>
    </div>
</header>