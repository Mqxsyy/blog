@extends('partials.layout')
@section('title', 'Home page')
@section('content')
    <div class="container mx-auto">
        @include('partials.post-card', ['full' => true])
        <div class="card bg-base-300 shadow-xl mt-3">
            <form method="POST" action="{{ route('comment.store') }}" enctype="multipart/form-data" class="card-body">
                @csrf
                <input type="hidden" name="post_id" value="{{ $post->id }}">
                <label class="form-control w-full">
                    <input name="body" type="text" placeholder="Add comment" value="{{ old('body') }}"
                        class="input input-bordered @error('body') input-error @enderror w-full" />
                    <div class="label">
                        @error('body')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>
                <div class="flex justify-end items-center gap-2">
                    <input type="submit" class="btn btn-primary" value="Comment">
                </div>
            </form>
        </div>
        @foreach ($post->comments()->latest()->get() as $comment)
            <div class="card bg-base-300 shadow-xl mt-3">
                <div class="card-body">
                    {{ $comment->body }}
                    <p class="text-base-content">{{ $comment->user->name }}</p>
                    <p class="text-neutral-content">{{ $comment->created_at->diffForHumans() }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
