@extends('layouts.template')

@section('title', 'Login')

@section('content')
    <h2 class="text-3xl font-bold mb-4 text-green-500">Login</h2>

    @if (session('message'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('message') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            Invalid email or password.
        </div>
    @endif

    <form action="/contact" method="POST">
        @csrf
        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email:</label>
            <input type="email" name="email" id="email" class="border rounded w-full py-2 px-3" required>
        </div>

        <div class="mb-4">
            <label for="password" class="block text-gray-700">Password:</label>
            <input type="password" name="password" id="password" class="border rounded w-full py-2 px-3" required>
        </div>

        <button type="submit" class="bg-green-500 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded">Login</button>
    </form>

    <p class="mt-4">Don't have an account? <a href="/register" class="text-blue-500">Register here</a>.</p>
@endsection
