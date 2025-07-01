@props(['berita'])

<div class="bg-white shadow-lg rounded-lg overflow-hidden transition-all duration-300 transform hover:scale-105
            dark:bg-gray-700 dark:shadow-xl dark:border dark:border-gray-600">
    <img src="{{ $berita['image'] }}" alt="{{ $berita['judul'] }}" class="w-full h-48 object-cover">
    <div class="p-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-2 dark:text-white line-clamp-2">
            {{ $berita['judul'] }}
        </h3>
        <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">
            {{ \Carbon\Carbon::parse($berita['published_at'])->locale(session('locale', config('app.locale')))->translatedFormat('d F Y') }}
        </p>
        <p class="text-gray-700 dark:text-gray-200 text-base mb-4 line-clamp-3">
            {{ $berita['konten_singkat'] }}
        </p>
        <div class="flex justify-end">
            <a href="{{ route('berita.show', $berita['slug']) }}"
               class="inline-flex items-center px-4 py-2 bg-blue-600 text-white font-semibold rounded-md
                      hover:bg-blue-700 transition-colors duration-300
                      dark:bg-blue-500 dark:hover:bg-blue-600">
                {{ __('read_more') }}
                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </a>
        </div>
    </div>
</div>