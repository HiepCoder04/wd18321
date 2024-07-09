<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách user</title>
</head>
<body>
<a href="{{route('users.addUsers')}}">Thêm mới</a>
    <h1>Danh sach user</h1>
   
    <table border = '1'>
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Email</th>
                <th>Phòng ban</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($listUsers as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->ten_donvi}}</td>
                    <td>
                        <a href="{{route('users.deleteUser', $value->id )}}">Xóa</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</body>
</html>