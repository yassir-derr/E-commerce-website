@extends('frontend.layout')
@section('title', 'Accueil')
@section('content')
<!-- collection Section -->
<section class="container mx-auto px-4 py-12 ">
  <div class="text-center mb-12">
    <h1 class="text-4xl font-bold text-blue-600 mb-4 ">Shop Our Categories</h1>
    <p class="text-xl text-black font-semibold ">From the latest fashion trends and bestselling books to must-have tech gadgets and travel essentials, explore a curated selection of products designed to elevate your lifestyle, all conveniently organized in one place.
    </p>
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



@endsection