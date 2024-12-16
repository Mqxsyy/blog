@extends('partials.layout')
@section('title', 'Verify Email')
@section('content')
    <div class="container mx-auto">
        <div class="card bg-base-300 w-1/2 shadow-xl mx-auto">
            <div class="card-body">
                <div class="font-medium">
                    Thanks for signing up! Before getting started, could you verify your email address by clicking on the
                    link we just emailed to you? If you didn't receive the email, we will gladly send you another.
                </div>
                @if (session('status') == 'verification-link-sent')
                    <div class="font-medium text-sm text-green-600">
                        A new verification link has been sent to the email address you provided during registration.
                    </div>
                @endif

                <div class="flex justify-between items-center gap-2">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <input type="submit" class="btn btn-outline" value="Log Out?">
                    </form>

                    <form method="POST" action="{{ route('verification.send') }}" class="mt-4">
                        @csrf
                        <input type="submit" class="btn btn-primary" value="Resend Verification Email">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
