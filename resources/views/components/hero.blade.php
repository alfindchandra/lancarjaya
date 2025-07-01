<section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-slate-900 via-blue-900 to-slate-900">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-10 left-10 w-72 h-72 bg-blue-500 rounded-full mix-blend-multiply filter blur-xl animate-blob"></div>
        <div class="absolute top-0 right-4 w-72 h-72 bg-purple-500 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-8 left-20 w-72 h-72 bg-pink-500 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-4000"></div>
    </div>

    <!-- Floating Particles -->
    <div class="absolute inset-0">
        @for ($i = 0; $i < 50; $i++)
            <div class="absolute animate-float-{{ $i % 4 + 1 }}" 
                 style="left: {{ rand(0, 100) }}%; top: {{ rand(0, 100) }}%; animation-delay: {{ rand(0, 5000) }}ms;">
                <div class="w-2 h-2 bg-white/10 rounded-full"></div>
            </div>
        @endfor
    </div>

    <!-- Main Content Container -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            
            <!-- Left Content -->
            <div class="text-center lg:text-left space-y-8">
                <!-- Company Badge -->
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 text-white/90 text-sm font-medium">
                    <span class="w-2 h-2 bg-green-400 rounded-full mr-3 animate-pulse"></span>
                    {{ __('hero.established') }} 2018 • {{ __('hero.trusted_partner') }}
                </div>

                <!-- Main Heading -->
                <div class="space-y-4">
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold text-white leading-tight">
                        <span class="block" data-aos="fade-up" data-aos-delay="200">
                            CV. Lancar Jaya
                        </span>
                        <span class="block bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400 bg-clip-text text-transparent" 
                              data-aos="fade-up" data-aos-delay="400">
                            Plastindo
                        </span>
                    </h1>
                    
                    <p class="text-xl sm:text-2xl text-blue-100/80 font-light max-w-2xl" 
                       data-aos="fade-up" data-aos-delay="600">
                        {{ __('hero.tagline') }}
                    </p>
                </div>

                <!-- Description -->
                <p class="text-lg text-white/70 max-w-2xl leading-relaxed" 
                   data-aos="fade-up" data-aos-delay="800">
                    {{ __('hero.description') }}
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start" 
                     data-aos="fade-up" data-aos-delay="1000">
                    <a href="{{ route('products') }}" 
                       class="group relative inline-flex items-center justify-center px-8 py-4 text-lg font-semibold text-white bg-gradient-to-r from-blue-600 to-purple-600 rounded-xl shadow-2xl hover:shadow-blue-500/25 transform hover:scale-105 transition-all duration-300 overflow-hidden">
                        <span class="absolute inset-0 bg-gradient-to-r from-blue-700 to-purple-700 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                        <span class="relative flex items-center">
                            {{ __('hero.view_products') }}
                            <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </span>
                    </a>
                    
                    <a href="{{ route('contact') }}" 
                       class="group inline-flex items-center justify-center px-8 py-4 text-lg font-semibold text-white bg-white/10 backdrop-blur-sm border border-white/20 rounded-xl hover:bg-white/20 transform hover:scale-105 transition-all duration-300">
                        <svg class="mr-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        {{ __('hero.contact_us') }}
                    </a>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-3 gap-8 pt-8 border-t border-white/10" 
                     data-aos="fade-up" data-aos-delay="1200">
                    <div class="text-center lg:text-left">
                        <div class="text-3xl font-bold text-white" data-counter="7">0</div>
                        <div class="text-sm text-white/60 uppercase tracking-wider">{{ __('hero.years_experience') }}</div>
                    </div>
                    <div class="text-center lg:text-left">
                        <div class="text-3xl font-bold text-white" data-counter="500">0</div>
                        <div class="text-sm text-white/60 uppercase tracking-wider">{{ __('hero.products_made') }}</div>
                    </div>
                    <div class="text-center lg:text-left">
                        <div class="text-3xl font-bold text-white" data-counter="99">0</div>
                        <div class="text-sm text-white/60 uppercase tracking-wider">{{ __('hero.client_satisfaction') }}</div>
                    </div>
                </div>
            </div>

            <!-- Right Content - Visual Elements -->
            <div class="relative lg:h-[600px] flex items-center justify-center" data-aos="fade-left" data-aos-delay="600">
                <!-- Main Product Showcase -->
                <div class="relative">
                    <!-- Floating Cards -->
                    <div class="absolute -top-8 -left-8 transform rotate-12 hover:rotate-6 transition-transform duration-500">
                        <div class="w-32 h-40 bg-gradient-to-br from-blue-500/20 to-purple-500/20 backdrop-blur-sm border border-white/20 rounded-xl p-4 shadow-2xl">
                            <div class="w-full h-20 bg-white/10 rounded-lg mb-3"></div>
                            <div class="space-y-2">
                                <div class="h-2 bg-white/20 rounded"></div>
                                <div class="h-2 bg-white/10 rounded w-3/4"></div>
                            </div>
                        </div>
                    </div>

                    <div class="absolute -top-4 -right-12 transform -rotate-12 hover:rotate-6 transition-transform duration-500 animation-delay-1000">
                        <div class="w-32 h-40 bg-gradient-to-br from-pink-500/20 to-blue-500/20 backdrop-blur-sm border border-white/20 rounded-xl p-4 shadow-2xl">
                            <div class="w-full h-20 bg-white/10 rounded-lg mb-3"></div>
                            <div class="space-y-2">
                                <div class="h-2 bg-white/20 rounded"></div>
                                <div class="h-2 bg-white/10 rounded w-2/3"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Central Element -->
                    <div class="relative z-10 w-80 h-80 bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-sm border border-white/20 rounded-3xl p-8 shadow-2xl transform hover:scale-105 transition-all duration-500">
                        <!-- Company Logo/Icon -->
                        <div class="w-full h-32 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center mb-6 shadow-xl">
                            <div class="text-white text-4xl font-bold">LJ</div>
                        </div>
                        
                        <!-- Product Info -->
                        <div class="space-y-3">
                            <h3 class="text-white text-xl font-semibold">{{ __('hero.plastic_products') }}</h3>
                            <p class="text-white/70 text-sm">{{ __('hero.quality_manufacturing') }}</p>
                            
                            <!-- Rating -->
                            <div class="flex items-center space-x-1">
                                @for ($i = 0; $i < 5; $i++)
                                    <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                @endfor
                                <span class="text-white/70 text-sm ml-2">5.0</span>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Cards -->
                    <div class="absolute -bottom-8 -left-4 transform rotate-6 hover:-rotate-3 transition-transform duration-500 animation-delay-2000">
                        <div class="w-28 h-36 bg-gradient-to-br from-green-500/20 to-blue-500/20 backdrop-blur-sm border border-white/20 rounded-xl p-3 shadow-2xl">
                            <div class="w-full h-16 bg-white/10 rounded-lg mb-2"></div>
                            <div class="space-y-1">
                                <div class="h-1.5 bg-white/20 rounded"></div>
                                <div class="h-1.5 bg-white/10 rounded w-2/3"></div>
                            </div>
                        </div>
                    </div>

                    <div class="absolute -bottom-4 -right-8 transform -rotate-6 hover:rotate-3 transition-transform duration-500 animation-delay-3000">
                        <div class="w-28 h-36 bg-gradient-to-br from-purple-500/20 to-pink-500/20 backdrop-blur-sm border border-white/20 rounded-xl p-3 shadow-2xl">
                            <div class="w-full h-16 bg-white/10 rounded-lg mb-2"></div>
                            <div class="space-y-1">
                                <div class="h-1.5 bg-white/20 rounded"></div>
                                <div class="h-1.5 bg-white/10 rounded w-3/4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white/60 animate-bounce">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
</section>