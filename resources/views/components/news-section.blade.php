
<section class="py-20 bg-gray-50 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                {{ __('news.latest_news') }}
            </h2>
            <div class="w-24 h-1 bg-blue-600 mx-auto mt-2"></div>
            <p class="text-lg text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
                {{ __('news.news_description') }}
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $newsItems = [
                    [
                        'image' => asset('images/news-placeholder-1.jpg'), // Assuming you have placeholder images
                        'judul' => 'Inovasi Baru dalam Daur Ulang Plastik',
                        'published_at' => '2025-06-25',
                        'konten_singkat' => 'CV. Lancar Jaya Plastindo meluncurkan inisiatif baru untuk meningkatkan efisiensi daur ulang plastik, mengurangi limbah, dan mendukung keberlanjutan lingkungan.',
                        'slug' => 'inovasi-daur-ulang-plastik',
                    ],
                    [
                        'image' => asset('images/news-placeholder-2.jpg'),
                        'judul' => 'Perluasan Kapasitas Produksi Pabrik',
                        'published_at' => '2025-06-20',
                        'konten_singkat' => 'Dengan permintaan yang terus meningkat, kami telah memperluas kapasitas produksi pabrik kami untuk memenuhi kebutuhan pasar dengan lebih baik.',
                        'slug' => 'perluasan-kapasitas-produksi',
                    ],
                    [
                        'image' => asset('images/news-placeholder-3.jpg'),
                        'judul' => 'Kemitraan Strategis dengan Distributor Internasional',
                        'published_at' => '2025-06-15',
                        'konten_singkat' => 'Kami bangga mengumumkan kemitraan strategis baru yang akan memperluas jangkauan produk kami ke pasar global.',
                        'slug' => 'kemitraan-internasional',
                    ],
                ];
            @endphp

            @foreach ($newsItems as $berita)
                <x-news-card :berita="$berita" />
            @endforeach
        </div>

        
    </div>
</section>