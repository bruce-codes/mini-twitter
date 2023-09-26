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
