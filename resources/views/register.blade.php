@extends('layouts.template')

@section('title', 'Register')

@section('content')
    <h2 class="text-3xl font-bold mb-4 text-green-500">Register</h2>

    <form action="/login" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Name:</label>
            <input type="text" name="name" id="name" class="border rounded w-full py-2 px-3" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email:</label>
            <input type="email" name="email" id="email" class="border rounded w-full py-2 px-3" required>
        </div>

        <div class="mb-4">
            <label for="password" class="block text-gray-700">Password:</label>
            <input type="password" name="password" id="password" class="border rounded w-full py-2 px-3" required>
        </div>

        <button type="submit" class="bg-green-500 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded">Register</button>
    </form>
    
    <p class="mt-4">Already have an account? <a href="/login" class="text-blue-500">Login here</a>.</p>
@endsection
