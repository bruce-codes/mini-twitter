<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include('includes.header')
    <div>  
        <ul>
            <li>{{ $tweet->title }}></li>
            <li>{{ $tweet->text }}</li>
        </ul>      
        <a href='/tweets/edit/{{ $tweet->id }}'>Edit the Tweet </a>
        <form action="/tweets/delete/{{ $tweet->id }}" method="POST">
            @csrf
            <input type="submit" value="Delete"/>
        </form>   
        <a href = '/tweets';">My Tweets</a>      
    </div>
    @include('includes.footer')
</body>
</html>