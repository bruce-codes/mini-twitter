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
        <div class="edit-blade">
            <form action="/tweets/update/{{ $tweet->id }}" method="POST">
                @csrf
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" value="{{ $tweet->title }}">
                <br><br>
                <label for="text">Text:</label>
                <textarea name="text" id="text" cols="30" rows="10">{{ $tweet->text }}</textarea>
                <br><br>
                <button type="submit">Update</button> 
            </form>
        </div>
    @include('includes.footer')
</body>
</html>
