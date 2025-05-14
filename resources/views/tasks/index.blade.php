@extends('layouts.app')

@section('title', 'Tasks List')
@section('content')
    <div class="container mx-auto px-4 py-6">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Tasks List</h1>
            <a href="{{ route('tasks.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded shadow">
                Add Task
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="py-3 px-6 text-left text-sm font-semibold text-gray-600">Title</th>
                        <th class="py-3 px-6 text-left text-sm font-semibold text-gray-600">Description</th>
                        <th class="py-3 px-6 text-left text-sm font-semibold text-gray-600">Long Description</th>
                        <th class="py-3 px-6 text-left text-sm font-semibold text-gray-600">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($tasks as $task)
                        <tr>
                            <td class="py-4 px-6 text-gray-800">{{ $task->title }}</td>
                            <td class="py-4 px-6 text-gray-800">{{ $task->description }}</td>
                            <td class="py-4 px-6 text-gray-800">{{ $task->long_description }}</td>
                            <td class="py-4 px-6 flex space-x-2">
                                <a href="{{ route('tasks.edit', $task->id) }}" class="text-blue-500 hover:underline">Edit</a>
                                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:underline">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
