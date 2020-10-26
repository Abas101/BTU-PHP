<!Doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@foreach($posts as $post)
<h1>{{$post->title}}</h1>
<p>{{$post->text}}</p>
<p>{{$post->post_likes}}</p>
@endforeach
