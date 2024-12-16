<div>
    <!-- Blog Page Hero Section -->
    <x-hero-section title="Our Blog"
        subtitle="Explore our latest insights, stories, and industry news. Stay up-to-date with our thoughts and expertise." />

    <!-- Blog Posts Section -->
    <section id="blog" class="py-20 px-6 bg-gray-50">
        <div class="max-w-7xl mx-auto">

            <!-- Blog Grid Layout -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <!-- Blog Post 1 -->
                @foreach ($posts as $post)
                    
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transform hover:shadow-xl hover:scale-105 transition duration-300">
                    <img src="storage/{{$post->image}}" alt="Blog Post Image" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-gray-900 mb-4">{{$post->title}}
                        </h3>
                        <p class="text-gray-600 mb-4">
                            {{$post->body}}
                        </p>
                        <a href="{{ route('blog.single', ['slug' => 'post-slug']) }}"
                            class="text-primary-light font-semibold hover:text-primary transition duration-300">
                            Read More
                        </a>
                        
                    </div>
                </div>

                @endforeach
            
        </div>
    </section>
</div>
