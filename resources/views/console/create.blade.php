@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                <form action="{{ route('console.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @php
                        $user = auth()->user();
                    @endphp
                    <input type="hidden" id="user_id" name="user_id" value="{{ $user->id }}">
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm">
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="manufacturer" class="block text-sm font-medium text-gray-700">Manufacturer</label>
                        <input type="text" name="manufacturer" id="manufacturer" value="{{ old('manufacturer') }}" class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm">
                        @error('manufacturer')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="release_date" class="block text-sm font-medium text-gray-700">Release Date</label>
                        <input type="date" name="release_date" id="release_date" value="{{ old('release_date') }}" class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm">
                        @error('release_date')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="bg-blue-500 text-black hover:bg-blue-700 py-2 px-4 rounded">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection