@extends('partials.layout')
@section('title', 'Welcome')
@section('content')
    <div class="container mx-8">
        <ul>
            @foreach ($posts as $post)
                <li class="list-disc">{{ $post->title }}</li>
            @endforeach
        </ul>
    </div>
@endsection
