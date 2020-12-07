@extends('admin.masterad')
@section('contentAdmin')
<div class="content">
<div class="container" style="background-color: white">
        <center><h1>Dịch vụ</h1></center>
        <form action="" method="get">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <select  class="form-control"  name="serName" style="width: 200px" >
                            @foreach ($services as $service)
                            <option value="{{$service->id_Service}}">{{$service->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </form>

        <table class="table" style="text-align: center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Loại dịch vụ</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Giá</th>
                    <th>Tùy chọn</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                <tr>
                    <th scope="row">{{$service->id_Service}}</th>
                    <th>{{$service->name}}</th>
                    <td><img src= "./image/services/{{$service->image}}" width="150px" hight="150px"></td>
                    <td>{{ number_format($service->price)}}VNĐ</td>
                    <td>
                        <div style="display:flex;  justify-content:center">
                            <form action="/service/{{$service->id_Service}}/edit" method="get">
                                @csrf
                                <button type="submit" class="btn btn-warning" ">Sửa</button>
                            </form>
                            <form action="/service/{{$service->id_Service}}" method="post">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-danger" style="margin-left: 5px">Xóa</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
