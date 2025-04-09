@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-slate-900 px-4">
    <div class="w-full max-w-md bg-slate-800 rounded-xl shadow-lg p-8 space-y-6">
        <div class="text-center">
            <div class="flex justify-center mb-4">
                <!-- Logo Placeholder -->
                <div class="bg-teal-500 w-10 h-10 rounded-full flex items-center justify-center text-white text-lg font-bold">R</div>
            </div>
            <h2 class="text-white text-2xl font-semibold">Register</h2>
            <p class="text-slate-300 text-sm mt-1">Create your account to book dental appointments!</p>
        </div>

        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf

            <div>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                       placeholder="Name"
                       class="w-full px-4 py-2 rounded-md bg-slate-700 text-white focus:outline-none focus:ring-2 focus:ring-green-400 placeholder-slate-400" />
                @error('name')
                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required
                       placeholder="Email"
                       class="w-full px-4 py-2 rounded-md bg-slate-700 text-white focus:outline-none focus:ring-2 focus:ring-green-400 placeholder-slate-400" />
                @error('email')
                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <input id="password" type="password" name="password" required
                       placeholder="Password"
                       class="w-full px-4 py-2 rounded-md bg-slate-700 text-white focus:outline-none focus:ring-2 focus:ring-green-400 placeholder-slate-400" />
                @error('password')
                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <input id="password-confirm" type="password" name="password_confirmation" required
                       placeholder="Confirm Password"
                       class="w-full px-4 py-2 rounded-md bg-slate-700 text-white focus:outline-none focus:ring-2 focus:ring-green-400 placeholder-slate-400" />
            </div>

            <div>
                <button type="submit"
                        class="w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-2 rounded-md transition duration-300">
                    Register
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
