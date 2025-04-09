@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-12">
    <div class="max-w-3xl mx-auto">
        <div class="bg-white shadow-lg rounded-xl overflow-hidden border border-gray-200">
            <div class="bg-teal-500 px-6 py-4">
                <h2 class="text-white text-xl font-semibold">Dental Dashboard</h2>
            </div>

            <div class="px-6 py-8">
                @if (session('status'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="flex items-center space-x-4">
                    <svg class="w-10 h-10 text-teal-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m2 6H7a2 2 0 01-2-2V6a2 2 0 012-2h6l4 4v10a2 2 0 01-2 2z" />
                    </svg>
                    <p class="text-gray-700 text-lg">Welcome back! You are successfully logged in to your dental reservation dashboard.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
