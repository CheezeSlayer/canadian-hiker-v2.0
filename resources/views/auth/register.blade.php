@extends('layouts.app')

@section('content')
<div class="mx-auto h-full flex justify-center items-center bg-gray-500">
    <div class="w-96 bg-gray-900 rounded-lg shadow-xl p-6">
        
        <h1 class="text-center text-gray-200 text-3xl pt-8">Register</h1>
            <form method="POST" action="{{ route('register') }}" class="pt-8">
                @csrf

                <div class="relative">
                    <label for="name" class="uppercase text-gray-200 text-xs font-bold absolute pl-3 pt-2">Name</label>

                    <div class="">
                        <input id="name" type="text" class="pt-8 w-full rounded p-3 bg-gray-700 text-gray-100 outline-none focus:bg-gray-800" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="text-red-600 font-sm pt-1" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="relative pt-3">
                    <label for="email" class="uppercase text-gray-200 text-xs font-bold absolute pl-3 pt-2">Email Address</label>

                    <div class="">
                        <input id="email" type="email" class="pt-8 w-full rounded p-3 bg-gray-700 text-gray-100 outline-none focus:bg-gray-800" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="text-red-600 font-sm pt-1" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="relative pt-3">
                    <label for="password" class="uppercase text-gray-200 text-xs font-bold absolute pl-3 pt-2">Password</label>

                    <div class="">
                        <input id="password" type="password" class="pt-8 w-full rounded p-3 bg-gray-700 text-gray-100 outline-none focus:bg-gray-800" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="text-red-600 font-sm pt-1" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="relative pt-3">
                    <label for="password-confirm" class="uppercase text-gray-200 text-xs font-bold absolute pl-3 pt-2">Confirm Password</label>

                    <div class="">
                        <input id="password-confirm" type="password" class="pt-8 w-full rounded p-3 bg-gray-700 text-gray-100 outline-none focus:bg-gray-800" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>


                <div class="pt-8">
                    <button type="submit" class="w-full bg-gray-500 py-2 px-3 text-center uppercase rounded text-blue-800 font-bold hover:bg-gray-400">
                        Register
                    </button>
                </div>

                <div class="flex justify-between pt-8 text-white text-sm">
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        Forgot your Password?
                    </a>
                    <a class="btn btn-link" href="{{ route('login') }}">
                        Login
                    </a>
                </div>
            </form>
    </div>
</div>
@endsection
