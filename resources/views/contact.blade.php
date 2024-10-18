@extends('layouts.template')

@section('title', 'Contact')

@section('content')
    <h2 class="text-3xl font-bold mb-4 text-green-500">Contact Information</h2>

    <table class="table-auto w-full mb-6 border-collapse border border-gray-300">
        <thead>
            <tr class="bg-green-500 text-white">
                <th class="px-4 py-2 border">No</th>
                <th class="px-4 py-2 border">Name</th>
                <th class="px-4 py-2 border">Email</th>
                <th class="px-4 py-2 border">Phone Number</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contact as $contacts)
                    <tr>
                        <td class="border border-green-500 px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="border border-green-500 px-4 py-2">{{ $contacts["name"] }}</td>
                        <td class="border border-green-500 px-4 py-2">{{ $contacts["email"] }}</td>
                        <td class="border border-green-500 px-4 py-2">{{ $contacts["phone"] }}</td>
                    </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Tombol logout -->
    <form action="/login" method="GET">
        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Logout</button>
    </form>
@endsection
