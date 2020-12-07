@extends('admin.masterad')
@section('contentAdmin')
<div class="content">
<div class="page-container" style="margin-top: 15px">
    <div class="container" style="background-color: white">
        <center> <h1>Cập nhật thông tin nhân viên</h1></center>
        <form action="/employee/{{$employee->id_Emp}}" method="post" enctype="multipart/form-data" style="padding: 0px 40px">
            @csrf
            @method('PATCH')
            <div style="margin-left: 350px">
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên nhân viên</label>
                    <input type="text" style="width: 300px" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mã dịch vụ" value="{{$employee->name}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Giới tính</label>
                    <input type="text" style="width: 300px" name="gender" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên dịch vụ" value="{{$employee->gender}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Địa chỉ</label>
                    <input type="text" style="width: 300px" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Giá" value="{{$employee->address}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Số điện thoại</label>
                    <input type="text" style="width: 300px" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Giá" value="{{$employee->phone}}">
                </div>
                <button style="margin-top: 20px; margin-left:100px; margin-bottom:10px" type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
        </form>
    </div>
</div>
@endsection
