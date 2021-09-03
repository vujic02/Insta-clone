@extends('layouts.app')

@section('content')
<div class="w-full h-full flex justify-center items-center">
            <div class="mb-16 flex flex-col p-8 border w-96 bg-white">
            
            <div class="w-full flex justify-center mb-4">
                <img class="w-52 h-20 object-contain" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Instagram_logo.svg/800px-Instagram_logo.svg.png" />
            </div>
                    <form method="POST" action="{{ route('login') }}" class="h-72">
                        @csrf


                                <input id="email" type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror p-2 w-full bg-blue-200 border border-gray-300 rounded-md" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror p-2 w-full mt-2 bg-blue-200 border border-gray-300 rounded-md" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input class="form-check-input mt-8" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>

                                <button type="submit" class="border bg-blue-500 text-white text-base font-semibold w-full rounded-md h-8 mt-2">
                                    {{ __('Log in') }}
                                </button>

                                <div class="flex justify-center w-full mt-8">
                                @if (Route::has('password.request'))
                                    <a class="text-blue-500 text-md font-normal" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                </div>
                    </form>
            </div>
</div>
@endsection
