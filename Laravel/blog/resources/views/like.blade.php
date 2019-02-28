
            <form action="{{route('Liker')}}" method="post">
            @csrf
            
            <input class="ins" type="image" src="images/like.png" style="width: 50px;height: 50px;" name="Like" value="1" alt="Submit Form">
            
            
            </form>