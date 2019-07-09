@extends("admin.layouts.layout")

@section("title")
    Hiển thị sản phẩm
@endsection

@section("content")
    <div class="container">
        <h2>Danh sách sản phẩm {{ $abc }}</h2>
        <p><a href="{{ url("admin/products/create") }}" class="btn btn-success">Thêm sản phẩm</a> </p>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Hình ảnh</th>
                <th>Hành động</th>
            </tr>
            </thead>
            <tbody>

            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->product_images }}</td>
                    <td>
                        <p><a href="{{url("admin/products/edit/". $product->id)}}">Sửa</a></p>
                        <p><a href="{{url("admin/products/delete/". $product->id)}}">Xóa</a></p>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $products->links() }}
    </div>
@endsection