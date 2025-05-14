@extends('layouts.app')

@section('title', 'Edit Task')
@section('content')
    <form action="{{ route('tasks.update', $task->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="container mx-auto px-4 py-6">
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-2xl font-bold">Edit Task</h1>
                <a href="{{ route('tasks.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded shadow">Back to List</a>
            </div>

            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title', $task->title) }}" 
                    required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">

                @error('title') 
                    <span class="text-red-500 text-sm">{{ $message }}</span>    
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" id="description" required 
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">{{ old('description', $task->description) }}</textarea>

                @error('description')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="long_description" class="block text-sm font-medium text-gray-700">Long Description</label>
                <textarea name="long_description" 
                    id="long_description" required  
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm 
                        focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">{{ old('long_description', $task->long_description) }}</textarea>
                
                @error('long_description')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded shadow">Update Task</button>
        </div>
    </form>
@endsection