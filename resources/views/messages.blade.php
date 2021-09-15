<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h2>Create new message: </h2>

    <form action="/create" method="post">
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="content" placeholder="Content">
        @csrf
        <button type="submit">Submit</button>
    </form>
    
  
@extends('master')

@section('title', 'Message List')

@section('content')

<h2>Recent messages:</h2>

<ul>
    @foreach ($messages as $message)  
        <li>
            <b><a href="/message/{{$message->id}}">{{$message->title}}:</a></b><br>
            {{$message->content}}<br>
            {{$message->created_at->diffForHumans()}}     
        </li><br>     
    @endforeach
</ul>

@endsection

    
</body>
</html>