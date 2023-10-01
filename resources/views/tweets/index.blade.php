<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini-Twitter</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('includes.header')
        <div class="feed"><h1 class="feed">FEED FROM</h1></div>
        <div class="bk"><h1 class="bk">Bruce Kaya</h1></div>                                
            <ul class="no-bullets">
                 @foreach($tweets as $tweet)                
                    <li>
                        <div class="tweet">
                            {{ $tweet->title }}<br><br>
                            {{ $tweet->text }}<br><br>
                            <a class="show" href="tweets/{{ $tweet->id }}">Show Tweet</a>
                        </div> 
                    </li>         
                @endforeach            
            </ul>
    @include('includes.footer')
</body>
</html>