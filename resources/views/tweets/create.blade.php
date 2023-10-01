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
            <form action="/tweets/store" method="POST">
                @csrf
                <label for="title">Title:</label>
                <input type="text" id="title" name="title"><br><br>
                <label for="text">Text:</label>
                <textarea name="text" id="text" cols="30" rows="10"></textarea>
                <button type="submit">Send</button> 
            </form>
        </div>
    @include('includes.footer')
</body>
</html>