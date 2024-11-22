@extends('partials.layout')
@section('title', 'Profile')
@section('content')
<div class="container max-w-7xl mx-auto">
    <h2 class="font-semibold text-lg">
        {{ __('Dashboard') }}
    </h2>

    <div class="mt-6 card bg-base-300 shadow-xl">
        <div class="card-body">
            <div class="p-2">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>
    </div>

    <div class="mt-6 card bg-base-300 shadow-xl">
        <div class="card-body">
            <div class="p-2">
                @include('profile.partials.update-password-form')
            </div>
        </div>
    </div>

    <div class="mt-6 card bg-base-300 shadow-xl">
        <div class="card-body">
            <div class="p-2">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</div>
@endsection