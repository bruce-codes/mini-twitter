<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Twitter von Penny</title>

    @vite('resources/css/app.css')

</head>
<body>
    


<div>
    <h1>Mein Tweet Page
    </h1>
<ul>
    @foreach($tweets as $tweet)
        
        <li>
            This is Title:  {{ $tweet->title }}<br>
            This is Text: {{ $tweet->text }}<br>
            <a href="tweets/{{ $tweet->id }}">Zum Tweet</a>
        </li>
        
    @endforeach
</ul>
</div>





</body>
</html>