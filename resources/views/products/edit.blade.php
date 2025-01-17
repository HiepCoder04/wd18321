<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
              <form action="{{route('product.update',$product->id)}}"method="post">
                @csrf
                <label for="">Tên sản phẩm</label>
                <input type="text"class="form-control"name="name"value={{$product->name}}>
                <label for="">Giá sản phẩm</label>
                <input type="text"class="form-control"name="price"value={{$product->price}}>
                <label for="">Danh mục sản phẩm</label>
                <select name="category_id" id=""class="form-control">
                    @foreach ($list_category as $item)
                        <option value="{{$item->id}}" {{$item->id == $product->category_id ? 'selected' : ''}} >{{$item->name}}</option>
                    @endforeach
                </select>
                <label for="">View</label>
                <input type="text"class="form-control"name="view"value={{$product->view}}>
                <input type="submit"class="btn btn-primary mt-3"value="Cập nhập">
              </form>
            </div>
        </div>
    </div>

</body>

</html>