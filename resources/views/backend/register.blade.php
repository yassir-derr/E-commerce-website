@extends('frontend.layout')
@section('title', 'Accueil')
@section('content')
<!-- sign up -->
<section class="bg-white py-16 min-h-screen justify-center">
    <div class="container max-w-md mx-auto">
        <h1 class="text-3xl font-bold text-blue-700 mb-4 text-center">Sign Up</h1>
        <form action="{{ route('register') }}" method="POST" >
            @csrf
            <!-- ...form fields... -->
             <label for="name" class="block text-sm font-bold text-popolar  pt-6">Name</label>
             <input type="text" name="name" id="name" class="mt-1 block w-full p-2 border border-blue-700 rounded-md focus:ring-blue-500 focus:border-blue-500" placeholder="Enter your name" required>



             <label for="name" class="block text-sm font-bold text-popolar pt-6">Email</label>
             <input type="email" name="email" id="email" class="mt-1 block w-full p-2 border border-blue-700 rounded-md focus:ring-blue-500 focus:border-blue-500" placeholder="Enter your Email" required>

             <label for="name" class="block text-sm font-bold text-popolar pt-6">Password</label>
             <input type="text" name="password" id="password" class="mt-1 block w-full p-2 border border-blue-700 rounded-md focus:ring-blue-500 focus:border-blue-500" placeholder="Enter your password" required>
            </form>

            <button type="submit"  class="mt-8 bg-blue-700 text-white block w-full p-2 rounded-md hover:bg-blue-900 transition duration-300 ease-in-out transform hover:scale-105 hover:-translate-y-1">
                Sign Up
            </button>

    </div>
</section>
@endsection