@extends('layouts.app')

@section('content')
<div class="w-full h-full flex justify-center items-center">
            <div class="mb-16 flex flex-col p-8 pb-24 border w-96 h-auto bg-white">

            <div class="w-full flex justify-center">
                <img class="w-52 h-20 object-contain" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Instagram_logo.svg/800px-Instagram_logo.svg.png" />
            </div>

            <p class="text-gray-500 text-xl font-semibold text-center mb-4">Sign up to see photos and videos from your friends.</p>

                    <form method="POST" action="{{ route('register') }}" class="h-72">
                        @csrf

                                <input id="name" placeholder="Name" type="text" class="form-control @error('name') is-invalid @enderror mt-2 outline-none focus:border focus:border-gray-500 p-2 w-full bg-gray-100 border border-gray-300 rounded" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                                <input id="email" type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror mt-2 outline-none focus:border focus:border-gray-500 p-2 w-full bg-gray-100 border border-gray-300 rounded" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror mt-2 outline-none focus:border focus:border-gray-500 p-2 w-full bg-gray-100 border border-gray-300 rounded" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                                <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control outline-none mt-2 focus:border focus:border-gray-500 p-2 w-full bg-gray-100 border border-gray-300 rounded" name="password_confirmation" required autocomplete="new-password">

                                <button type="submit" class="border bg-blue-500 text-white text-base font-semibold w-full rounded-md h-10 mt-8">
                                    {{ __('Sign up') }}
                                </button>

                                <p class="text-gray-500 text-sm font-normal text-center mt-8">By signing up, you agree to our Terms , Data Policy and Cookies Policy .</p>
                    </form>
            </div>
</div>
@endsection
