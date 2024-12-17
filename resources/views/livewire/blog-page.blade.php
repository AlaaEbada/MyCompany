<div wire:poll>
    <style>
        /* Add this to your custom styles */
        button i {
            transition: transform 0.2s ease-in-out;
        }

        button:hover i {
            transform: scale(1.2);
        }
    </style>

    <!-- Blog Page Hero Section -->
    <x-hero-section title="Our Blog"
        subtitle="Explore our latest insights, stories, and industry news. Stay up-to-date with our thoughts and expertise." />

    <!-- Blog Section -->
    <section id="blog" class="py-20 px-6 bg-gray-50">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-4 gap-12">
            <!-- Blog Posts Column (Left) -->
            <div class="col-span-3">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                    @foreach ($this->posts as $post)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:shadow-xl hover:scale-105 transition duration-300">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="Blog Post Image" class="w-full h-56 object-cover">
                        <div class="p-6">
                            <h3 class="text-2xl font-semibold text-gray-900 mb-4 break-words">
                                {{ $post->title }}
                            </h3>
                            <p class="text-gray-600 mb-4 break-words line-clamp-3">
                                {{ \Str::limit($post->body, 150) }}
                            </p>

                            <div class="flex justify-between">
                                <!-- Like Button with Heart Icon -->
                                <button wire:click="likePost({{ $post->id }})" class="flex items-center space-x-2">
                                    <i class="fa fa-heart {{ $this->userHasLiked($post->id) ? 'text-red-500' : 'text-gray-400' }} text-xl"></i>
                                    <span class="text-lg">{{ $post->likes->count() }}</span>
                                </button>

                                <a href="{{ route('post.show', ['slug' => $post->slug]) }}" class="text-primary-light font-semibold hover:text-primary transition duration-300">
                                    Read More
                                </a>
                            </div>

                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="mt-10 ">
                    {{ $this->posts->links(data: ['scrollTo' => false])  }}
                </div>
            </div>

            <!-- Sidebar Column (Right) -->
            <div class="col-span-1 bg-white rounded-lg shadow-md p-6">
                <!-- Search Section -->
                <div class="mb-6">
                    <h4 class="text-xl font-semibold mb-4">Search</h4>
                    <input wire:model.live.debounce.300ms="search" type="text" placeholder="Search..." class="w-full p-2 border rounded-md">
                </div>

                <!-- Recommended Topics Section -->
                <div>
                    <h4 class="text-xl font-semibold mb-4">Recommended Topics</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-700 hover:text-primary transition duration-300">Technology</a></li>
                        <li><a href="#" class="text-gray-700 hover:text-primary transition duration-300">Business</a></li>
                        <li><a href="#" class="text-gray-700 hover:text-primary transition duration-300">Design</a></li>
                        <li><a href="#" class="text-gray-700 hover:text-primary transition duration-300">Marketing</a></li>
                        <li><a href="#" class="text-gray-700 hover:text-primary transition duration-300">Lifestyle</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Pagination Links -->

    </section>


</div>
