@extends('frontend.layout')
@section('title', 'Accueil')
@section('content')

<!-- Hero Section -->
<section class="relative bg-gray-100 overflow-hidden">
  <div class="max-w-7xl mx-auto">
    <div class="relative z-10 pb-16 pt-12 sm:pb-20 lg:pb-28 xl:pb-32 lg:max-w-2xl lg:w-full">
      <main class="px-4 sm:px-6 lg:px-8">
        <div class="sm:text-center lg:text-left  pr-14">
          <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl leading-tight">
            <span class="block">Everything you need</span>
            <span class="block text-blue-700">All in one place</span>
          </h1>
          <p class="mt-4 text-lg text-gray-700 sm:mt-6 sm:text-xl sm:max-w-xl font-medium">
            We make online shopping easy, affordable, and reliable  with fast delivery and customer service you can count on.
          </p>
          <div class="mt-8 sm:mt-10">
            <a href="#" class="inline-flex items-center justify-center px-8 py-3 text-base font-semibold text-white bg-blue-600 hover:bg-black rounded-md transition duration-300 ease-in-out md:py-4 md:text-lg md:px-10">
              SHOP NOW
            </a>
          </div>
        </div>
      </main>
    </div>
  </div>

  <!-- Hero Image -->
  <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
    <img class="h-64 w-full object-cover sm:h-80 md:h-96 lg:h-full lg:w-full opacity-90" src="/images/hero.png" alt="Featured Product">
    <div class="absolute inset-0 bg-gradient-to-l from-white via-white/70 to-transparent lg:hidden"></div>
  </div>
</section>

<!-- Collection Section -->
<section class="container mx-auto px-4 py-12 ">
  <div class="text-center mb-12">
    <h2 class="text-4xl font-bold text-black mb-4">Shop Our Categories</h2>
  </div>
    <div class="mt-10">
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 ">
                    <!-- Fashion -->
                     <a href="/shop">
                    <div class="relative rounded-lg overflow-hidden shadow-lg group">
                        <img class="w-full h-64 object-cover" src="/images/fashion.png" alt="fashion">
                        <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                          <h3 class="text-white text-2xl font-bold transform -translate-y-4 group-hover:-translate-y-2 transition duration-700 ">Fashion</h3>
                        </div>
                    </div>
                    </a>
                    <!-- Books -->
                     <a href="/shop">
                     <div class="relative rounded-lg overflow-hidden shadow-lg group">
                        <img class="w-full h-64 object-cover" src="/images/book.png" alt="book">
                        <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                            <h3 class="text-white text-2xl font-bold transform -translate-y-4 roup-hover:-translate-y-0 transition duration-300">Book</h3>
                        </div>
                    </div>
                      </a>
                    <!-- Tech -->
                     <a href="/shop">
                     <div class="relative rounded-lg overflow-hidden shadow-lg group">
                        <img class="w-full h-64 object-cover" src="/images/tech.png" alt="tech">
                        <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                            <h3 class="text-white text-2xl font-bold transform -translate-y-4 roup-hover:-translate-y-0 transition duration-300">Tech</h3>
                        </div>
                    </div>
                      </a>
                    <!--Travel -->
                    <a href="/shop">
                    <div class="relative rounded-lg overflow-hidden shadow-lg group">
                        <img class="w-full h-64 object-cover" src="/images/travel.png" alt="travel">
                        <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                            <h3 class="text-white text-2xl font-bold transform -translate-y-4 roup-hover:-translate-y-0 transition duration-300">Travel</h3>
                        </div>
                    </div>
                    </a>
</section>

<!-- Product home section -->
<section class="bg-gray-50 py-12">
    <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-black mb-4">Today's Best Deals For You</h2>
    </div>
    <div class="max-w-7xl mx-auto grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        <!-- Product Card Example -->
        <div class="bg-white rounded-xl shadow p-6 flex flex-col items-center relative">
            <button class="absolute top-4 right-4 text-gray-400 hover:text-red-500">
                <i class="fa-regular fa-heart text-xl"></i>
            </button>
            <img src="/images/flower-laptop-sleeve.png" alt="Flower Laptop Sleeve" class="w-32 h-32 object-contain mb-4">
            <h3 class="font-bold text-gray-800 text-base mb-1">Flower Laptop Sleeve</h3>
            <span class="text-xs text-gray-500 mb-2">15 in. x 10 in. · Flap top closure</span>
            <div class="flex justify-between items-center w-full mt-auto">
                <span class="font-bold text-gray-900 text-base">39<span class="text-xs">MAD</span></span>
                <button class="border-2 border-blue-700 text-blue-700 font-semibold rounded-full px-5 py-1 hover:bg-blue-600 hover:text-white transition">Add to cart</button>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow p-6 flex flex-col items-center relative">
            <button class="absolute top-4 right-4 text-gray-400 hover:text-red-500">
                <i class="fa-regular fa-heart text-xl"></i>
            </button>
            <img src="/images/airpods-max.png" alt="AirPods Max" class="w-32 h-32 object-contain mb-4">
            <h3 class="font-bold text-gray-800 text-base mb-1">AirPods Max</h3>
            <span class="text-xs text-gray-500 mb-2">A perfect balance of high-fidelity audio</span>
            <div class="flex justify-between items-center w-full mt-auto">
                <span class="font-bold text-gray-900 text-base">559<span class="text-xs">MAD</span></span>
                <button class="border-2 border-blue-700 text-blue-700 font-semibold rounded-full px-5 py-1 hover:bg-blue-600 hover:text-white transition">Add to cart</button>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow p-6 flex flex-col items-center relative">
            <button class="absolute top-4 right-4 text-gray-400 hover:text-red-500">
                <i class="fa-regular fa-heart text-xl"></i>
            </button>
            <img src="/images/laptop-sleeve-macbook.png" alt="Laptop sleeve MacBook" class="w-32 h-32 object-contain mb-4">
            <h3 class="font-bold text-gray-800 text-base mb-1">Laptop sleeve MacBook</h3>
            <span class="text-xs text-gray-500 mb-2">Organic Cotton, fairtrade certified</span>
            <div class="flex justify-between items-center w-full mt-auto">
                <span class="font-bold text-gray-900 text-base">59<span class="text-xs">MAD</span></span>
                <button class="border-2 border-blue-700 text-blue-700 font-semibold rounded-full px-5 py-1 hover:bg-blue-600 hover:text-white transition">Add to cart</button>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow p-6 flex flex-col items-center relative">
            <button class="absolute top-4 right-4 text-gray-400 hover:text-red-500">
                <i class="fa-regular fa-heart text-xl"></i>
            </button>
            <img src="/images/water-bottle.png" alt="Water Bottle" class="w-32 h-32 object-contain mb-4">
            <h3 class="font-bold text-gray-800 text-base mb-1">Water Bottle</h3>
            <span class="text-xs text-gray-500 mb-2">Stainless steel, Food safe, Hand wash</span>
            <div class="flex justify-between items-center w-full mt-auto">
                <span class="font-bold text-gray-900 text-base">89<span class="text-xs">MAD</span></span>
                <button class="border-2 border-blue-700 text-blue-700 font-semibold rounded-full px-5 py-1 hover:bg-blue-600 hover:text-white transition">Add to cart</button>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
        <div class="mt-16 mb-12 bg-blue-600 rounded-xl p-8 text-center text-white">
            <h3 class="text-2xl font-bold mb-3">Don't Miss Out on Amazing Deals!</h3>
            <p class="max-w-2xl mx-auto mb-6">Subscribe to our newsletter and get exclusive offers delivered straight to your inbox.</p>
            <div class="max-w-md mx-auto flex flex-col sm:flex-row gap-3">
                <input type="email" placeholder="Enter your email" class="flex-grow px-4 py-3 rounded-lg text-gray-700 focus:outline-none">
                <button class="bg-white text-blue-700 px-6 py-3 rounded-lg font-semibold hover:bg-blue-50 transition">Subscribe</button>
            </div>
        </div>
    </div>
@endsection
