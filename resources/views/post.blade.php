@extends('layouts.main')

@section('container')
<article>
<h2>{{ $post->title }}</h2>

<p>By. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{$post->category->slug }}">{{ $post->category->name  }}</a></p>

<h5>{!! $post->body !!}</h5>
</article>

<a href="/blog" class="d-block mt-3">Back to Posts</a>
@endsection