<div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-4xl font-extrabold text-gray-900 dark:text-white">{{ __('latest_news') }}</h1>
        </div>

        @if($beritas->isEmpty())
            <p class="text-center text-gray-600 dark:text-gray-300 text-lg">{{ __('no_news_available') }}</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($beritas as $berita)
                    <x-news-card :berita="$berita" />
                @endforeach
            </div>

            <div class="mt-10">
                {{ $beritas->links() }} 
            </div>
        @endif
    </div>