@extends('layouts.main')

@section('container')
<article>

<h1 class="mb-5">{{ $post->title }}</h2>
<p>By. {{ $post->author->name }} in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }} </a></p>
<p>{!! $post->body !!}</p>
</article>
<a href="/posts">Back to Posts</a>
@endsection