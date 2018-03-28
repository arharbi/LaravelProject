<h1>Bonjour, page Users</h1>

@if(isset($results))
    <table>
        <tr>
            <th>ID</th><th>Nom</th><th>Email</th>
        </tr>
        @foreach($results as $sql)
        <tr>
            <td>{{$sql->id}}</td>
            <td>{{$sql->name}}</td>
            <td>{{$sql->email}}</td>
        </tr>
        @endforeach
    </table>

@endif