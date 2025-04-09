@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-xl font-semibold text-gray-800">My Tasks</h1>
        <a href="{{ route('tasks.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
            + Create Task
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-300 text-green-700 px-4 py-3 rounded mb-4 text-sm">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white shadow rounded">
        <ul class="divide-y divide-gray-200">
            @forelse($tasks as $task)
                <li class="p-4 hover:bg-gray-50">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-base font-medium {{ $task->completed ? 'line-through text-gray-400' : 'text-gray-800' }}">
                                {{ $task->title }}
                            </h3>
                            @if($task->description)
                                <p class="text-sm text-gray-600 mt-1">{{ $task->description }}</p>
                            @endif
                        </div>
                        <div class="flex items-center space-x-2">
                            <a href="{{ route('tasks.edit', $task) }}" class="text-yellow-500 hover:text-yellow-600 text-sm">
                                Edit
                            </a>
                            <form action="{{ route('tasks.destroy', $task) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-600 text-sm">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </li>
            @empty
                <li class="p-4 text-center text-gray-500 text-sm">No tasks found.</li>
            @endforelse
        </ul>
    </div>
</div>
@endsection
