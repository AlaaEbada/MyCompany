<div x-data="{ open: false }" class="fixed bottom-5 right-5 z-50 flex flex-col items-center space-y-4">

    <!-- Social Links (Initially Hidden) -->
    <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-300 transform"
        x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200 transform"
        x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-8"
        class="flex flex-col items-center space-y-4 mt-4">

        <!-- WhatsApp -->
        <a href="https://wa.me/010151193687" target="_blank"
            class="w-16 h-16 bg-green-500 text-white rounded-full flex items-center justify-center shadow-lg">
            <i class="fa-brands fa-whatsapp fa-2xl"></i>
        </a>

        <!-- Phone -->
        <a href="tel:+010151193687"
            class="w-16 h-16 bg-blue-500 text-white rounded-full flex items-center justify-center shadow-lg">
            <i class="fa-solid fa-phone fa-xl"></i>
        </a>
    </div>
<div class="flex">

    <!-- Chat Icon -->
    <button @click="open = !open"
        class="w-16 h-16 bg-green-500 text-white rounded-full flex items-center justify-center shadow-lg transform transition-transform duration-300"
        :class="{ 'rotate-45': open }">


        <i x-show="!open" class="fa-solid fa-comment-dots fa-2xl"></i>

        <svg x-show="open" x-cloak xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 rotate-45" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>


</div>


</div>
