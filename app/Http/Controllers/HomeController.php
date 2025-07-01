<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Carbon\Carbon;

class HomeController extends Controller
{

    public function setLocale($locale)
    {
        if (in_array($locale, ['id', 'en'])) {
            Session::put('locale', $locale);
            App::setLocale($locale);
        }
        
        return redirect()->back();
    }

private $newsData = [
        // ... (salin array newsData dari BeritaController di sini) ...
        [
            'id' => 1,
            'judul_id' => 'Peluncuran Laravel 12: Fitur Baru yang Revolusioner',
            'judul_en' => 'Laravel 12 Launch: Revolutionary New Features',
            'konten_singkat_id' => 'Laravel 12 hadir dengan peningkatan performa dan fitur-fitur yang mempermudah developer dalam membangun aplikasi web yang kompleks.',
            'konten_singkat_en' => 'Laravel 12 arrives with significant performance enhancements and features that simplify complex web application development for developers.',
            'konten_lengkap_id' => '<p>Laravel 12 telah resmi dirilis dengan membawa sejumlah pembaharuan signifikan yang fokus pada performa dan pengalaman pengembang. Fitur-fitur baru seperti optimisasi ORM, penyempurnaan routing, dan dukungan yang lebih baik untuk Livewire, menjadikan proses pengembangan lebih cepat dan efisien. Para pengembang diharapkan dapat memanfaatkan versi ini untuk membangun aplikasi yang lebih robust dan scalable.</p>',
            'konten_lengkap_en' => '<p>Laravel 12 has been officially released, bringing a series of significant updates focused on performance and developer experience. New features such as ORM optimizations, routing enhancements, and better Livewire support, make the development process faster and more efficient. Developers are expected to leverage this version to build more robust and scalable applications.</p>',
            'image' => 'https://via.placeholder.com/600x400/3B82F6/FFFFFF?text=Laravel+12', // URL gambar dummy
            'published_at' => '2025-06-25 10:00:00',
        ],
        // ... berita lainnya ...
    ];

    public function index()
    {
        $locale = session('locale', config('app.locale'));

        $beritas = collect($this->newsData)->sortByDesc('published_at')->map(function ($berita) use ($locale) {
            $berita['slug'] = Str::slug($berita['judul_en']) . '-' . $berita['id'];
            $berita['judul'] = $berita['judul_' . $locale] ?? $berita['judul_en'];
            $berita['konten_singkat'] = $berita['konten_singkat_' . $locale] ?? $berita['konten_singkat_en'];
            $berita['konten_lengkap'] = $berita['konten_lengkap_' . $locale] ?? $berita['konten_lengkap_en'];
            return $berita;
        })->values();

        // Hanya ambil beberapa berita untuk halaman utama, misalnya 3
        $beritas = $beritas->take(3); // Atau paginasi jika Anda ingin seluruhnya dengan pagination

        return view('pages.home', compact('beritas')); // Melewatkan $beritas ke view
    }

    public function show($slug)
    {
        $locale = session('locale', config('app.locale'));

        $berita = collect($this->newsData)->first(function ($item) use ($slug) {
            return (Str::slug($item['judul_en']) . '-' . $item['id']) === $slug;
        });

        if (!$berita) {
            abort(404);
        }

        // Dapatkan judul dan konten sesuai locale
        $berita['judul'] = $berita['judul_' . $locale] ?? $berita['judul_en'];
        $berita['konten_singkat'] = $berita['konten_singkat_' . $locale] ?? $berita['konten_singkat_en'];
        $berita['konten_lengkap'] = $berita['konten_lengkap_' . $locale] ?? $berita['konten_lengkap_en'];


        return view('berita.show', compact('berita'));
    }
}
