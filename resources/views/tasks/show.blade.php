@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">{{ $task->title }}</h1>
        
        @if($task->description)
            <div class="mb-4 p-4 bg-gray-50 rounded-md">
                <p class="text-gray-700">{{ $task->description }}</p>
            </div>
        @endif

        <div class="flex items-center mb-4">
            <span class="text-gray-600 mr-2">Status:</span>
            <span class="{{ $task->completed ? 'text-green-500' : 'text-yellow-500' }} font-medium">
                {{ $task->completed ? 'Completed' : 'Pending' }}
            </span>
        </div>

        <div class="flex justify-end space-x-2">
            <a href="{{ route('tasks.edit', $task) }}" class="text-yellow-500 hover:text-yellow-600">
                Edit
            </a>
            <form action="{{ route('tasks.destroy', $task) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-500 hover:text-red-600 ml-2">
                    Delete
                </button>
            </form>
        </div>
    </div>
</div>
@endsection