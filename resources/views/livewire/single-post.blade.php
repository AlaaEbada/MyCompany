<div class="single-post bg-gray-100">
    <!-- Hero Section -->
    <x-hero-section title="{{$post->title}}" />

    <!-- Single Post Content -->
    <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden my-20">
        
        <!-- Post Image -->
        @if ($post->image)
            <div class="relative">
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-72 object-cover rounded-t-lg">
            </div>
        @endif

        <!-- Post Title -->
        <div class="px-6 py-8">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">{{ $post->title }}</h1>

            <!-- Category and Date -->
            <div class="flex items-center text-gray-600 text-sm mb-6">
                <span class="mr-4"><strong>Category:</strong> {{ $post->category->name }}</span>
                <span><strong>Posted on:</strong> {{ $post->created_at->format('F j, Y') }}</span>
            </div>

            <!-- Post Body -->
            <div class="text-gray-700 leading-relaxed mb-8">
                {{ $post->body }}
            </div>

            <!-- Read More Button -->
            <div class="text-center">
                <a href="{{ route('blog') }}" class="inline-block bg-primary-light text-white py-2 px-6 rounded-full font-semibold hover:bg-primary transition duration-300">
                    Back to Blog
                </a>
            </div>
        </div>
    </div>
</div>
