@extends('partials.layout')
@section('title', 'Confirm Password')
@section('content')
<div class="container mx-auto">
    <div class="card bg-base-300 w-1/2 shadow-xl mx-auto">
        <div class="card-body">
            <div class="font-medium">This is a secure area of the application. Please confirm your password before continuing.</div>

            <form method="POST" action="{{ route('password.confirm') }}" class="mt-4">
                @csrf

                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Password</span>

                    </div>
                    <input name="password" type="password" placeholder="Password"
                        class="input input-bordered @error('password') input-error @enderror w-full" required
                        autocomplete="current-password" />
                    <div class="label">
                        @error('password')
                        <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>

                <div class="flex justify-between items-center gap-2">
                    <input type="submit" class="btn btn-primary" value="Resend Verification Email">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection