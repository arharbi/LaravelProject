<h1>All Posts
<a href="{{route('posts.create')}}" class="">create new post</a>
</h1>
<table>
    <tr>
        <th>id</th>
        <th>title</th>
        <th>content</th>
    </tr>
    @foreach($posts as $rs)
    {
        <tr>
            <td>{{$rs->id}}</td>
            <td>{{$rs->title}}</td>
            <td>{{$rs->body}}</td>
            <td><a href="{{route('posts.edit',$rs->id)}}">Edit</a></td>
            <td>
                <form metod="post" action="{{route('posts.destroy',$rs->id)}}">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="PUT">
                <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
    }
    @endforeach
</table>
