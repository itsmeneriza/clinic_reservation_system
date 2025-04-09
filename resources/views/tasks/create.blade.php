@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-slate-900 px-4 py-8">
    <div class="w-full max-w-md bg-slate-800 p-8 rounded-xl shadow-lg">
        <h1 class="text-white text-2xl font-semibold mb-6 text-center">Create New Task</h1>

        <form action="{{ route('tasks.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="title" class="block text-slate-300 font-medium mb-1">Title</label>
                <input type="text" name="title" id="title" required
                       class="w-full px-4 py-2 rounded-md bg-slate-700 text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-green-400"
                       placeholder="Enter task title">
                @error('title')
                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="description" class="block text-slate-300 font-medium mb-1">Description</label>
                <textarea name="description" id="description" rows="3"
                          class="w-full px-4 py-2 rounded-md bg-slate-700 text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-green-400"
                          placeholder="Optional task description"></textarea>
            </div>

            <div class="flex justify-end">
                <button type="submit"
                        class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-md transition duration-300">
                    Create Task
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
