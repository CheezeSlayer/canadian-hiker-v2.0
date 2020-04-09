@extends('layouts.app')

@section('content')
<div class="mx-auto h-full flex justify-center items-center bg-gray-500">
    <div class="w-96 bg-gray-900 rounded-lg shadow-xl p-6">
        <h1 class="text-gray-200 text-3xl pt-8">Reset Password</h1>
        <h2 class="text-gray-200">A password reset link will be sent to your account email</h2>


        <div class="">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}" class="pt-8">
                @csrf

                <div class="">
                    <label for="email" class="uppercase text-gray-200 text-xs font-bold absolute pl-3 pt-2">Email Address</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="pt-8 w-full rounded p-3 bg-gray-700 text-gray-100 outline-none focus:bg-gray-800" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="text-red-600 font-sm pt-1" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="pt-8">
                    <button type="submit" class="w-full bg-gray-500 py-2 px-3 text-center uppercase rounded text-blue-800 font-bold hover:bg-gray-400">
                        Send Password Reset Link
                    </button>
                </div>

                <div class="flex justify-between pt-8 text-white text-sm">
                    <a class="btn btn-link" href="{{ route('register') }}">
                        Register
                    </a>
                    <a class="btn btn-link" href="{{ route('login') }}">
                        Login
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
