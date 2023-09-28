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
    

    <h1>Mein Tweet Page</h1><br>
    
    <p class="button">
        <button style="background:red; color:white;" 
        onclick="window.location.href = 'http://localhost/tweets/create';">
        Create a new Tweet!</button>
    </p>


    <div class="container">
        
        <ul>
            @foreach($tweets as $tweet)                
                <li>
                    <div class="tweet">
                        Title:  {{ $tweet->title }}<br>
                        Text: {{ $tweet->text }}<br>
                        <a href="tweets/{{ $tweet->id }}">Zum Tweet</a>
                    </div> 
                </li>                
            @endforeach            
        </ul>

    </div>





</body>
</html>