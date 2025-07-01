<nav class="fixed top-0 w-full z-50 transition-all duration-300"
     x-data="{ scrolled: false, mobileMenuOpen: false, langDropdownOpen: false }"
     x-init="window.onscroll = () => { scrolled = (window.pageYOffset > 50) ? true : false }"
     :class="{ 'bg-white/80 backdrop-blur-lg border-b border-gray-200 dark:bg-gray-900/80 dark:border-gray-700 shadow-md': scrolled, 'bg-white dark:bg-gray-900': !scrolled }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center space-x-3">
                    <img class="w-13 h-13 hidden sm:block" src="{{ asset('images/icon.png') }}" alt="Logo">
                    <div class="">
                        <h1 class="text-xl font-bold text-gray-900 dark:text-white">CV. Lancar Jaya Plastindo</h1>
                        <p class="text-xs text-gray-600 dark:text-gray-400"> {{ __('navbar.cv') }}</p>
                    </div>
                </a>
            </div>

            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-6">
                    <a href="{{ route('home') }}"
                       class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 px-3 py-2 text-sm font-medium transition-colors duration-200 relative group">
                        {{ __('navbar.home') }}
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-600 dark:bg-blue-400 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 {{ request()->routeIs('home') ? 'scale-x-100' : '' }}"></span>
                    </a>
                    <a href="{{ route('about') }}"
                       class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 px-3 py-2 text-sm font-medium transition-colors duration-200 relative group">
                        {{ __('navbar.about') }}
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-600 dark:bg-blue-400 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 {{ request()->routeIs('about') ? 'scale-x-100' : '' }}"></span>
                    </a>
                    <a href="{{ route('products') }}"
                       class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 px-3 py-2 text-sm font-medium transition-colors duration-200 relative group">
                        {{ __('navbar.products') }}
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-600 dark:bg-blue-400 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 {{ request()->routeIs('products') ? 'scale-x-100' : '' }}"></span>
                    </a>
                    <a href="{{ route('services') }}"
                       class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 px-3 py-2 text-sm font-medium transition-colors duration-200 relative group">
                        {{ __('navbar.services') }}
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-600 dark:bg-blue-400 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 {{ request()->routeIs('services') ? 'scale-x-100' : '' }}"></span>
                    </a>
                    <a href="{{ route('contact') }}"
                       class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 px-3 py-2 text-sm font-medium transition-colors duration-200 relative group">
                        {{ __('navbar.contact') }}
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-600 dark:bg-blue-400 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 {{ request()->routeIs('contact') ? 'scale-x-100' : '' }}"></span>
                    </a>
                </div>
            </div>

            <div class="flex items-center space-x-4">
                {{-- Language and Theme Toggle for desktop, hidden on mobile --}}
                <div class="hidden md:flex items-center space-x-4">
                    <div class="relative" x-data="{ langDropdownOpen: false }">
                        <button @click="langDropdownOpen = !langDropdownOpen"
                                class="flex items-center space-x-1 text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 px-3 py-2 text-sm font-medium transition-colors duration-200 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path>
                            </svg>
                            <span>{{ app()->getLocale() == 'id' ? 'ID' : 'EN' }}</span>
                            <svg class="w-3 h-3 transform transition-transform duration-200" :class="{ 'rotate-180': langDropdownOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="langDropdownOpen"
                             @click.away="langDropdownOpen = false"
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 scale-95"
                             x-transition:enter-end="opacity-100 scale-100"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100 scale-100"
                             x-transition:leave-end="opacity-0 scale-95"
                             class="absolute right-0 mt-2 w-36 bg-white dark:bg-gray-800 rounded-md shadow-lg ring-1 ring-black ring-opacity-5 z-50 origin-top-right">
                            <div class="py-1">
                                <a href="{{ route('locale.switch', 'id') }}"
                                   class="flex items-center px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 {{ app()->getLocale() == 'id' ? 'bg-blue-50 dark:bg-blue-900 text-blue-600 dark:text-blue-400' : '' }}">
                                    <span class="mr-2">🇮🇩</span>
                                    Indonesia
                                </a>
                                <a href="{{ route('locale.switch', 'en') }}"
                                   class="flex items-center px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 {{ app()->getLocale() == 'en' ? 'bg-blue-50 dark:bg-blue-900 text-blue-600 dark:text-blue-400' : '' }}">
                                    <span class="mr-2">🇺🇸</span>
                                    English
                                </a>
                            </div>
                        </div>
                    </div>

                    <button id="theme-toggle"
                            class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 p-4 m-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-800 transition-all duration-200">
                        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                        <svg  id="theme-toggle-light-icon" class="hidden w-5 h-5 pb-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M7 12c0 2.8 2.2 5 5 5s5-2.2 5-5-2.2-5-5-5-5 2.2-5 5zm5-3c1.7 0 3 1.3 3 3s-1.3 3-3 3-3-1.3-3-3 1.3-3 3-3zm1-4V3c0-.6-.4-1-1-1s-1 .4-1 1v2c0 .6.4 1 1 1s1-.4 1-1zm6.1-.1c-.4-.4-1-.4-1.4 0l-1.4 1.4c-.4.4-.4 1 0 1.4.2.2.5.3.7.3s.5-.1.7-.3l1.4-1.4c.4-.3.4-1 0-1.4zM21 11h-2c-.6 0-1 .4-1 1s.4 1 1 1h2c.6 0 1-.4 1-1s-.4-1-1-1zm-3.3 5.2c-.4-.4-1-.4-1.4 0s-.4 1 0 1.4l1.4 1.4c.2.2.5.3.7.3s.5-.1.7-.3c.4-.4.4-1 0-1.4l-1.4-1.4zM11 19v2c0 .6.4 1 1 1s1-.4 1-1v-2c0-.6-.4-1-1-1s-1 .4-1 1zm-6.1.1c.2.2.5.3.7.3s.5-.1.7-.3l1.4-1.4c.4-.4.4-1 0-1.4s-1-.4-1.4 0l-1.4 1.4c-.4.3-.4 1 0 1.4zM2 12c0 .6.4 1 1 1h2c.6 0 1-.4 1-1s-.4-1-1-1H3c-.6 0-1 .4-1 1zm4.3-7.1c-.4-.4-1-.4-1.4 0s-.4 1 0 1.4l1.4 1.4c.2.3.5.4.8.4s.5-.1.7-.3c.4-.4.4-1 0-1.4L6.3 4.9z"></path>
                        </svg>
                        
                    </button>
                </div>


                <div class="md:hidden">
                    <button id="mobile-menu-button" @click="mobileMenuOpen = !mobileMenuOpen"
                            class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 p-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-800 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg x-show="mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div x-show="mobileMenuOpen"
             x-transition:enter="transition ease-out duration-200 transform origin-top"
             x-transition:enter-start="opacity-0 -translate-y-full"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150 transform origin-top"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-full"
             class="md:hidden border-t border-gray-200 dark:border-gray-700 py-2">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="{{ route('home') }}"
                   class="text-gray-900 dark:text-white hover:text-blue-600 dark:hover:text-blue-400 block px-3 py-2 rounded-md text-base font-medium transition-colors duration-200 {{ request()->routeIs('home') ? 'bg-blue-50 dark:bg-blue-900 text-blue-600 dark:text-blue-400' : '' }}">
                    {{ __('navbar.home') }}
                </a>
                <a href="{{ route('about') }}"
                   class="text-gray-900 dark:text-white hover:text-blue-600 dark:hover:text-blue-400 block px-3 py-2 rounded-md text-base font-medium transition-colors duration-200 {{ request()->routeIs('about') ? 'bg-blue-50 dark:bg-blue-900 text-blue-600 dark:text-blue-400' : '' }}">
                    {{ __('navbar.about') }}
                </a>
                <a href="{{ route('products') }}"
                   class="text-gray-900 dark:text-white hover:text-blue-600 dark:hover:text-blue-400 block px-3 py-2 rounded-md text-base font-medium transition-colors duration-200 {{ request()->routeIs('products') ? 'bg-blue-50 dark:bg-blue-900 text-blue-600 dark:text-blue-400' : '' }}">
                    {{ __('navbar.products') }}
                </a>
                <a href="{{ route('services') }}"
                   class="text-gray-900 dark:text-white hover:text-blue-600 dark:hover:text-blue-400 block px-3 py-2 rounded-md text-base font-medium transition-colors duration-200 {{ request()->routeIs('services') ? 'bg-blue-50 dark:bg-blue-900 text-blue-600 dark:text-blue-400' : '' }}">
                    {{ __('navbar.services') }}
                </a>
                <a href="{{ route('contact') }}"
                   class="text-gray-900 dark:text-white hover:text-blue-600 dark:hover:text-blue-400 block px-3 py-2 rounded-md text-base font-medium transition-colors duration-200 {{ request()->routeIs('contact') ? 'bg-blue-50 dark:bg-blue-900 text-blue-600 dark:text-blue-400' : '' }}">
                    {{ __('navbar.contact') }}
                </a>

                {{-- Language and Theme Toggle for mobile, visible only when menu is open --}}
                <div class="mt-4 pt-4 border-t border-gray-200 dark:border-gray-700 flex justify-around items-center">
                    <div class="relative w-1/2 text-center" x-data="{ langMobileDropdownOpen: false }">
                        <button @click="langMobileDropdownOpen = !langMobileDropdownOpen"
                                class="flex items-center justify-center space-x-1 text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 px-3 py-2 text-sm font-medium transition-colors duration-200 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500 w-full">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path>
                            </svg>
                            <span>{{ app()->getLocale() == 'id' ? 'ID' : 'EN' }}</span>
                            <svg class="w-3 h-3 transform transition-transform duration-200" :class="{ 'rotate-180': langMobileDropdownOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="langMobileDropdownOpen"
                             @click.away="langMobileDropdownOpen = false"
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 scale-95"
                             x-transition:enter-end="opacity-100 scale-100"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100 scale-100"
                             x-transition:leave-end="opacity-0 scale-95"
                             class="absolute bottom-full mb-2 left-1/2 transform -translate-x-1/2 w-full max-w-[120px] bg-white dark:bg-gray-800 rounded-md shadow-lg ring-1 ring-black ring-opacity-5 z-50 origin-bottom">
                            <div class="py-1">
                                <a href="{{ route('locale.switch', 'id') }}"
                                   class="flex items-center px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 {{ app()->getLocale() == 'id' ? 'bg-blue-50 dark:bg-blue-900 text-blue-600 dark:text-blue-400' : '' }}">
                                    <span class="mr-2">🇮🇩</span>
                                    Indonesia
                                </a>
                                <a href="{{ route('locale.switch', 'en') }}"
                                   class="flex items-center px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 {{ app()->getLocale() == 'en' ? 'bg-blue-50 dark:bg-blue-900 text-blue-600 dark:text-blue-400' : '' }}">
                                    <span class="mr-2">🇺🇸</span>
                                    English
                                </a>
                            </div>
                        </div>
                    </div>

                    <button id="theme-toggle-mobile"
                            class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 p-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-800 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 w-1/2">
                        <svg id="theme-toggle-dark-icon-mobile" class="hidden w-5 h-5 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                        <svg id="theme-toggle-light-icon-mobile" class="hidden w-5 h-5 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 2L13.09 8.26L20 9L14 14.74L15.18 21.02L10 17.77L4.82 21.02L6 14.74L0 9L6.91 8.26L10 2Z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>