<section class="bg-gradient-to-r from-[#159957] to-[#155799] text-white py-20 px-6 relative">
    <div class="max-w-7xl mx-auto text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-6 animate-fade-in">
            @if(isset($title))
                {{$title}}
            @endif
    </h1>
        <p class="text-lg md:text-xl animate-fade-in animation-delay-200">
            @if(isset($title))
                {{$subtitle}}
            @endif
    </div>
</section>  