<h1>Edit Post</h1>
<form action="{{route('posts.update',$post->id)}}" method="post">
{{csrf_field()}}
<input name="_method" type="hidden" value="PUT">
  <div>
  		<label for="title_input">Title:</label>
  		<input type="text" value="{{$post->title}}" name="title"/>
  </div>

  <div>
  		<label for="content_input">Content:</label>
  		<textarea rows="4" name="body"  >{{$post->body}}</textarea>
  </div>
  
  <div>
  		<button type="submit" >Update</button>
  </div>
  
</form>