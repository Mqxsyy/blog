@extends('partials.layout')
@section('title', 'Dashboard')
@section('content')
<div class="container max-w-7xl mx-auto">
    <h2 class="font-semibold text-lg">
        {{ __('Dashboard') }}
    </h2>

    <div class="mt-6 card bg-base-300 shadow-xl">
        <div class="card-body">
            <div class="p-2">
                You're logged in!
            </div>
        </div>
    </div>
</div>
@endsection