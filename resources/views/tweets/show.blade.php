<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini-Twitter</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('includes.header')
    <div class="show-blade">  
        <ul>
            <li>{{ $tweet->title }}></li>
            <li>{{ $tweet->text }}</li>
        </ul>      
        <a href='/tweets/edit/{{ $tweet->id }}'>Edit the Tweet </a><br>
        <form action="/tweets/delete/{{ $tweet->id }}" method="POST">
            @csrf
            <input type="submit" value="Delete"/>
        </form><br>   
        <a href = '/tweets';">My Tweets</a>      
    </div>
    @include('includes.footer')
</body>
</html>