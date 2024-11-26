@extends('partials.layout')
@section('title', 'Welcome')
@section('content')
    <div class="container mx-auto">
        <div class="my-2 text-center">
            {{ $posts->links() }}
        </div>
        <div class="grid grid-cols-4 gap-4">
            @foreach ($posts as $post)
                <div class="card bg-base-300 w-96 shadow-xl">
                    @if ($post->image)
                        <figure>
                            <img src="{{ $post->image }}" alt="Shoes" />
                        </figure>
                    @endif
                    <div class="card-body">
                        <h2 class="card-title">{{ $post->title }}</h2>
                        <p>{{ $post->snippet }}</p>
                        <p class="text-neutral-content">{{ $post->created_at->diffForHumans() }}</p>
                        <div class="card-actions justify-end">
                            <a class="btn btn-primary" href="{{ route('post', ['post' => $post]) }}">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
