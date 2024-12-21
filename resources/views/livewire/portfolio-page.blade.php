<div>
    <!-- Hero Section -->
    <x-hero-section title="Our Portfolio" subtitle="Showcasing our work and creativity." />

    <section id="portfolio" class="py-20 px-6 bg-white text-gray-900 max-w-7xl mx-auto">

        <!-- Portfolio Grid Section -->
        <div class="relative">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 justify-center">

                @foreach ($portfolios as $portfolio)


                    <!-- Portfolio Item 1 -->
                    <a wire:navigate href="{{ route('portfolio.show', ['slug' => $portfolio->slug]) }}"
                    class="group relative bg-gray-100 rounded-lg shadow-lg overflow-hidden block h-60">
                        <img src="storage/{{$portfolio->image}}" alt="Project 1" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-0 group-hover:opacity-75 transition"></div>
                        <div class="absolute bottom-0 left-0 p-6 opacity-0 group-hover:opacity-100 transition-all duration-300">
                            <h3 class="text-2xl font-semibold text-white mb-2">{{$portfolio->title}}</h3>
                            <span class="text-lg text-white">{{$portfolio->Category->name}}</span>
                        </div>
                    </a>

                @endforeach


            </div>

            <div class="mt-10 ">
                {{ $portfolios->links(data: ['scrollTo' => false]) }}

            </div>

        </div>
    </section>



    <!-- Call to Action Section -->
    <section class="py-20 px-6 bg-gray-100 text-center">
        <h3 class="text-3xl font-bold text-gray-900 mb-4">Let’s Make Something Amazing Together</h3>
        <p class="text-lg text-gray-600 mb-6">We would love to bring your ideas to life. Get in touch with us to start the journey.</p>
        <a wire:navigate href="/contact" class="bg-gradient-to-r from-[#159957] to-[#155799] text-white px-8 py-3 rounded-lg text-lg shadow-lg transform transition duration-300 hover:scale-105">
            Contact Us
        </a>
    </section>
</div>
