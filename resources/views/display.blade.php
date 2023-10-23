<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Display Data</title>
</head>
<body>
    <form action="{{url('/search-record')}}" method="POST">
        {{csrf_field()}}
        <input type="text" name="sname" placeholder="Search by name">
        <input type="submit" name="search" value="Search"><br><br>
    </form>
    <table border="2" width="60%">
        <tr>
            <th>Id</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Marks1</th>
            <th>Marks2</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
        @foreach($data as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->firstname}}</td>
            <td>{{$row->lastname}}</td>
            <td>{{$row->marks1}}</td>
            <td>{{$row->marks2}}</td>
            <td><a href="{{'delete-data/'.$row->id}}">Del</a></td>
            <td><a href="{{'edit-display/'.$row->id}}">Edit</a></td>
           
        </tr>
        @endforeach
        <tr>
            <td colspan="7">{{$data->links()}}</td>
        </tr>
    </table>
</body>
</html>