@extends('auth._layout')


@section('title', 'Login')

@section('card-body')

    <div class="bg-white max-w-lg mx-auto rounded shadow-lg w-full">

        <div class="p-10">
            <div class="mb-8 text-center">
                <h1 class="font-normal text-brand-primary-400 text-xl">{{ __('Reset Password') }}!</h1>
            </div>

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                @if (session('status'))
                    <div class="p-4 bg-green-100 border-t-4 border-green-500 rounded-b text-green-900">
                        <p class="font-bold">Success</p>
                        <p>
                            {{ session('status') }}
                        </p>
                    </div>
                @endif
                <div class="mb-6">
                    <label for="email" class="text-brand-primary-400 text-sm font-bold leading-8">
                        {{ __('Email Address') }}
                    </label>
                    <input wire:model='email' type="email" name="email" id="email" value="{{ old('email') }}"
                        required autocomplete="email" autofocus
                        class="w-full p-4 bg-brand-gray rounded outline-none @error('email') is-invalid @enderror"
                        required />
                        @error('email')
                        <span class="text-red-500 text-xs mt-2">
                            {{ $message }}
                        </span>
                        @enderror
                </div>

                <button type="submit"
                    class="block bg-brand-primary-500 rounded hover:brand-primary-100 text-white text-center font-bold p-4 uppercase w-full cursor-pointer disabled:grayscale disabled:cursor-not-allowed">
                    {{ __('Send Password Reset Link') }}
                </button>
            </form>
        </div>
        <div class="bg-brand-blue-50 border-t-2 border-brand-gray p-7 rounded-b text-brand-primary-300 text-center">
            <span>
                Already have an account?
                <a class="font-bold text-brand-primary-400"  href="{{ route('login') }}">Sign in</a>
            </span>
        </div>


    </div>

@endsection
