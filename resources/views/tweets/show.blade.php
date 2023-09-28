
<div>
    
    
    <ul>
        <li><h1>{{ $tweet->title }}</h1>
        <li><p>{{ $tweet->text }}</p></li>
    </ul>


    <!-- <form action="/tweets/edit/{{ $tweet->id }}" method="POST"> -->
      
        
        
            <a href='/tweets/edit/{{ $tweet->id }}'>Edit the Tweet </a>
            
        




    <form action="/tweets/delete/{{ $tweet->id }}" method="POST">
        @csrf
        <input type="submit" value="Delete"/>
    </form>  


    
        <a href = '/tweets';">Back to all Tweets</a>
    
    


  
        
     
</div>
