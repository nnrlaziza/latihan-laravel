@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-5">{{ $post->title }}</h1>
            <p class="card-text">
                <small>by. <a href="/authors/{{ $post->author->username }} ">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></small>
                <small class="text-body-secondary"> {{ $post->created_at->diffForHumans() }} </small>
            </p>
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top img-fluid" alt="{{ $post->category->name }}">
            <article>
                {!! $post->body !!}
            </article>
            <a href="/posts">Back to Post</a>

        </div>
    </div>
</div>
@endsection