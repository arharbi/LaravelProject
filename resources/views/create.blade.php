<h1>Create Post</h1>
<form action="{{route('posts.store')}}" method="post">
{{csrf_field()}}
  <div>
  		<label for="title_input">Title:</label>
  		<input type="text" name="title"/>
  </div>

  <div>
  		<label for="content_input">Content:</label>
  		<textarea rows="4" name="body"  ></textarea>
  </div>
  
  <div>
  		<button type="submit" >save</button>
  </div>
  
</form>