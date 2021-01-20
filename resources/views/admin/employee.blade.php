@extends('admin.masterad')
@section('contentAdmin')
<div class="content">
<div class="container" style="background-color: white">
        <center><h1>Nhân viên</h1></center>
        <form action="/employee/search" method="post">
            @csrf
            <div class="input-group" style="width: 250px; margin:auto; margin-bottom:25px" >
                <input type="text" name="search" placeholder="Tìm kiếm ..." class="form-control">
                <div class="input-group-append">
                    <span class="input-group-text">
                        <button style="border: hidden" type="submit"><i class="fa fa-search search-icon" ></i></button>
                    </span>
                </div>
            </div>
        </form>

        <table class="table" style="text-align: center">
            <thead class="thead-dark">
                <tr>
                    <!-- <th scope="col">No</th>
                    <th scope="col">Họ và tên</th>
                    <th scope="col">Giới tính</th> -->
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Số điện thoại 12333</th>
                    <th>Tùy chọn</th>
                </tr>
            </thead>
            <!-- cho nguyet -->
            <tbody>
                @foreach ($employees as $employee)
                <tr>
                    <th scope="row">{{$employee->id_Emp}}</th>
                    <th>{{$employee->name}}</th>
                    <td>{{$employee->gender}}</td>
                    <td>{{$employee->address}}</td>
                    <td>{{$employee->phone}}</td>
                    <td>
                        <div style="display:flex;  justify-content:center">
                            <form action="/employee/{{$employee->id_Emp}}/edit" method="get">
                                @csrf
                                <button type="submit" class="btn btn-warning" >Sửa</button>
                            </form>
                            <form action="/employee/{{$employee->id_Emp}}" method="post">
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
