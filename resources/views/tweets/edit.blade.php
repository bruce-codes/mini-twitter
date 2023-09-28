<div>

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
