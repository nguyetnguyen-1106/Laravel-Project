@extends('admin.masterad')
@section('contentAdmin')
<div class="content">
    <div class="container" style="background-color: white">
        <center><h1>Thêm nhân viên</h1></center>
        <form action="/addemployee" method="post" enctype="multipart/form-data" style="padding: 0px 40px;display:flex">
            @csrf
            <div style="margin-left: 350px">
                <div class="form-group">
                    <label for="exampleInputPassword1">Tên nhân viên </label>
                    <input type="text" style="width: 300px" name="name" class="form-control" id="exampleInputEmail1" placeholder="Tên nhân viên">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Giới tính</label>
                    <input type="text" style="width: 300px" name="gender" class="form-control" id="exampleInputEmail1" placeholder="Giới tính">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Địa chỉ</label>
                    <input type="text" style="width: 300px" name="address" class="form-control" id="exampleInputEmail1" placeholder="Địa chỉ">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Số điện thoại</label>
                    <input type="text" style="width: 300px" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Số điện thoại">
                </div>
                <center><button style="margin-bottom: 20px" type="submit" class="btn btn-primary">Add</button></center>

            </div>
        </form>
    </div>
    </div>
    </div>
</div>
@endsection
