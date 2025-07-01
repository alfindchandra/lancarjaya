@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white shadow-lg rounded-lg p-8 dark:bg-gray-700 dark:shadow-xl dark:border dark:border-gray-600">
            <img src="{{ $berita['image'] }}" alt="{{ $berita['judul'] }}" class="w-full h-80 object-cover rounded-lg mb-6">

            <h1 class="text-4xl font-extrabold text-gray-900 mb-4 dark:text-white">
                {{ $berita['judul'] }}
            </h1>
            <p class="text-gray-600 dark:text-gray-300 text-sm mb-6">
                {{ \Carbon\Carbon::parse($berita['published_at'])->locale(session('locale', config('app.locale')))->translatedFormat('l, d F Y H:i') }} WIB
            </p>

            <div class="prose dark:prose-invert max-w-none text-gray-800 dark:text-gray-200 leading-relaxed">
                {!! $berita['konten_lengkap'] !!}
            </div>

            <div class="mt-8">
                <a href="{{ route('berita.index') }}"
                   class="inline-flex items-center px-6 py-3 bg-gray-200 text-gray-800 font-semibold rounded-md
                          hover:bg-gray-300 transition-colors duration-300
                          dark:bg-gray-600 dark:text-gray-200 dark:hover:bg-gray-500">
                    <svg class="mr-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Kembali ke Berita
                </a>
            </div>
        </div>
    </div>
@endsection