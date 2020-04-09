@extends('layouts.app')

@section('content')
<div class="mx-auto h-full flex justify-center items-center bg-gray-500">
    <div class="w-96 bg-gray-900 rounded-lg shadow-xl p-6">

        <h1 class="text-gray-200 text-3xl pt-8">Sign In</h2>
        <h2 class="text-gray-200">Enter your credentials below</h2>

        <form method="POST" action="{{ route('login') }}" class="pt-8">
            @csrf

            <div class="relative">
                <label for="email" class="uppercase text-gray-200 text-xs font-bold absolute pl-3 pt-2">E-mail</label>

                <div>
                    <input id="email" type="email" class="pt-8 w-full rounded p-3 bg-gray-700 text-gray-100 outline-none focus:bg-gray-800" 
                    name="email" autocomplete="email" autofocus placeholder="your@email.com">

                    @error('email')
                        <span class="text-red-600 font-sm pt-1" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>

            <div class="relative pt-3">
                <label for="password" class="uppercase text-gray-200 text-xs font-bold absolute pl-3 pt-2">Password</label>

                <div class="">
                    <input id="password" type="password" class="pt-8 w-full rounded p-3 bg-gray-700 text-gray-100 outline-none focus:bg-gray-800" 
                    name="password" autocomplete="current-password" placeholder="Password">

                    @error('password')
                        <span class="text-red-600 font-sm pt-1" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>

            <div class="pt-2">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="text-white" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>

            <div class="pt-8">
                <button type="submit" class="w-full bg-gray-500 py-2 px-3 text-center uppercase rounded text-blue-800 font-bold hover:bg-gray-400">
                    Login
                </button>
            </div>

            <div class="flex justify-between pt-8 text-white text-sm">
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    Forgot your Password?
                </a>
                <a class="btn btn-link" href="{{ route('register') }}">
                    Register
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
