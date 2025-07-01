<section id="about" class="bg-white dark:bg-gray-900 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 dark:text-white">{{ __('product.title') }}</h2>
            <div class="w-24 h-1 bg-blue-600 mx-auto mt-2"></div>
            <p class="text-lg text-gray-600 dark:text-gray-400 mt-2">{{ __('product.description') }}</p>
        </div>
        <div class="grid md:grid-cols-2 gap-10 items-center">
            <div>
                <div class="w-full h-full bg-gray-200 dark:bg-gray-700 rounded-lg shadow-lg flex items-center justify-center">
                    
                <div class="relative w-full h-full">
                    <img src="{{ asset('images/plastik1.png') }}" alt="" class="object-cover w-full h-full ">
                    <div class="absolute inset-0 bg-black opacity-40 "></div>
                </div>                        
                    
                </div>
            </div>
            <div class="space-y-4" x-data="{ selected: null }">
                <div class="border border-gray-200 dark:border-gray-700 rounded-lg overflow-hidden shadow-sm">
                    <button
                        @click="selected === 0 ? selected = null : selected = 0"
                        class="w-full flex justify-between items-center px-3 py-2 text-left text-lg font-semibold text-gray-800 dark:text-white bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-200"
                    >
                        LDPE (Low Density Polyethylene)
                        <span :class="selected === 0 ? 'rotate-45' : ''" class="transition-transform duration-300 text-red-600 text-xl font-bold">+</span>
                    </button>
                    <div x-show="selected === 0" x-collapse class="px-5 pb-4 text-sm text-gray-600 dark:text-gray-300 bg-gray-50 dark:bg-gray-700">
                        <p class="mb-3">{{ __('product.LDPE') }}</p>
                        <a href="ldpe-low-density-polyethylene.php" class="inline-block mt-4 text-red-600 hover:underline font-medium transition-colors">
                            {{ __('product.view_product') }} <i class="fas fa-chevron-circle-right ml-1"></i>
                        </a>
                    </div>
                </div>

                <div class="border border-gray-200 dark:border-gray-700 rounded-lg overflow-hidden shadow-sm">
                    <button
                        @click="selected === 1 ? selected = null : selected = 1"
                        class="w-full flex justify-between items-center px-3 py-2 text-left text-lg font-semibold text-gray-800 dark:text-white bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-200"
                    >
                        HDPE (High Density Polyethylene)
                        <span :class="selected === 1 ? 'rotate-45' : ''" class="transition-transform duration-300 text-red-600 text-xl font-bold">+</span>
                    </button>
                    <div x-show="selected === 1" x-collapse class="px-5 pb-4 text-sm text-gray-600 dark:text-gray-300 bg-gray-50 dark:bg-gray-700">
                        <p class="mb-3">{{ __('product.HDPE') }}</p>
                        <a href="hdpe-high-density-polyethylene.php" class="inline-block mt-4 text-red-600 hover:underline font-medium transition-colors">
                        {{ __('product.view_product') }} <i class="fas fa-chevron-circle-right ml-1"></i>
                        </a>
                    </div>
                </div>

                <div class="border border-gray-200 dark:border-gray-700 rounded-lg overflow-hidden shadow-sm">
                    <button
                        @click="selected === 2 ? selected = null : selected = 2"
                        class="w-full flex justify-between items-center px-3 py-2 text-left text-lg font-semibold text-gray-800 dark:text-white bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-200"
                    >
                        PVC (PVC Cling Wrap)
                        <span :class="selected === 2 ? 'rotate-45' : ''" class="transition-transform duration-300 text-red-600 text-xl font-bold">+</span>
                    </button>
                    <div x-show="selected === 2" x-collapse class="px-5 pb-4 text-sm text-gray-600 dark:text-gray-300 bg-gray-50 dark:bg-gray-700">
                        <p class="mb-3">{{ __('product.PVC') }}</p>
                        <a href="pvc.php" class="inline-block mt-4 text-red-600 hover:underline font-medium transition-colors">
                        {{ __('product.view_product') }}  <i class="fas fa-chevron-circle-right ml-1"></i>
                        </a>
                    </div>
                </div>

                <div class="border border-gray-200 dark:border-gray-700 rounded-lg overflow-hidden shadow-sm">
                    <button
                        @click="selected === 3 ? selected = null : selected = 3"
                        class="w-full flex justify-between items-center px-3 py-2 text-left text-lg font-semibold text-gray-800 dark:text-white bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-200"
                    >
                        Security Sealed Bag
                        <span :class="selected === 3 ? 'rotate-45' : ''" class="transition-transform duration-300 text-red-600 text-xl font-bold">+</span>
                    </button>
                    <div x-show="selected === 3" x-collapse class="px-5 pb-4 text-sm text-gray-600 dark:text-gray-300 bg-gray-50 dark:bg-gray-700">
                        <p class="mb-3">{{ __('product.ISOPAC') }}</p>
                        <a href="bsb.php" class="inline-block mt-4 text-red-600 hover:underline font-medium transition-colors">
                        {{ __('product.view_product') }}  <i class="fas fa-chevron-circle-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>