<div class="single-portfolio bg-gray-50">
    <!-- Hero Section -->
    <x-hero-section title="{{ $portfolio->title }}" />

    <!-- Single Portfolio Content -->
    <div class="mx-5 max-w-6xl lg:mx-auto bg-white shadow-lg rounded-lg overflow-hidden my-20">

        <!-- Portfolio Image -->
        @if ($portfolio->image)
            <div class="relative mb-6">
                <img src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}" class="w-full h-96 object-cover rounded-t-lg">
            </div>
        @endif

        <!-- Portfolio Information: Title, Category, Date, Description -->
        <div class="px-8 py-10">

            <div class="flex justify-between items-center mb-6">
                <!-- Portfolio Title -->
                <h1 class="text-4xl font-bold text-gray-900">{{ $portfolio->title }}</h1>

                <!-- Back Button -->
                <a wire:navigate href="{{ route('portfolioPage') }}" class="inline-block bg-green-600 text-white py-2 px-6 rounded-full font-semibold hover:bg-green-700 transition duration-300">
                    {{__('messages.back_to_portfolio')}}
                </a>
            </div>

            <!-- Meta Info (Category and Date) -->
            <div class="flex items-center text-gray-500 text-sm mb-8 space-x-6 rtl:space-x-reverse">
                <span class="flex items-center space-x-2 rtl:space-x-reverse">
                    <strong class="text-gray-700">{{__('messages.category')}}</strong>
                    <span>{{ $portfolio->category->name }}</span>
                </span>
                <span class="flex items-center space-x-2 rtl:space-x-reverse">
                    <strong class="text-gray-700">{{__('messages.created_on')}}</strong>
                    <span>{{ $portfolio->created_at->format('F j, Y') }}</span>
                </span>
            </div>

            <!-- Portfolio Description -->
            <div class="text-gray-700 leading-relaxed text-lg mb-10">
                {!! nl2br(e($portfolio->description)) !!}
            </div>
        </div>
    </div>

    <!-- Related Portfolios Section -->
    @if($relatedPortfolios)
        <div class="mx-5 max-w-6xl lg:mx-auto mt-16 pb-6">
            <h2 class="text-3xl font-semibold text-gray-900 mb-8">{{__('messages.related_projects')}}</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($relatedPortfolios as $relatedPortfolio)
                    <div class="bg-white shadow-lg rounded-lg hover:shadow-xl transition">
                        <a href="{{ route('portfolio.show', $relatedPortfolio->slug) }}" class="block">
                            <img src="{{ asset('storage/' . $relatedPortfolio->image) }}" alt="{{ $relatedPortfolio->title }}" class="w-full h-48 object-cover rounded-t-lg">
                        </a>
                        <div class="p-4">
                            <h3 class="text-lg text-left font-bold text-gray-800 hover:text-green-600">
                                <a href="{{ route('portfolio.show', $relatedPortfolio->slug) }}">
                                    {{ $relatedPortfolio->title }}
                                </a>
                            </h3>
                            <p class="text-sm text-left text-gray-600 mt-2 break-words">
                                {{ Str::limit($relatedPortfolio->description, 100) }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

</div>
