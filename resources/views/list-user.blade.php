<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
</head>
<body>
    <h1>Xin chào</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
            </tr>
        </thead>
        <tbody>
            @foreach($listUsers as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->name}}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
</body>
</html>