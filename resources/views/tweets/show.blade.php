
<div>
    
    
    <ul>
        <li><h1>{{ $tweet->title }}</h1>
        <li><p>{{ $tweet->text }}</p></li>
    </ul>
    <form action="/tweets/delete/{{ $tweet->id }}" method="POST">
        @csrf
        <input type="submit" value="Delete"/>
    </form>
  
        
     
</div>
