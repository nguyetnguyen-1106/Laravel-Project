@extends('admin.masterad')
@section('contentAdmin')
<div class="content">
    <div class="container" style="background-color: white">
        <center><h1>Thêm dịch vụ</h1></center>
        <form action="/addservice" method="post" enctype="multipart/form-data" style="padding: 0px 40px;display:flex">
            @csrf
            <div class="form-left">
                <div class="form-group">
                    <label for="exampleInputEmail1">Mã dịch vụ</label>
                    <input type="text" style="width: 300px" name="idService" class="form-control" id="exampleInputEmail1" placeholder="Mã dịch vụ">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Tên dịch vụ</label>
                    <input type="text" style="width: 300px" name="name" class="form-control" id="exampleInputEmail1" placeholder="Tên dịch vụ">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Giá dịch vụ</label>
                    <input type="text" style="width: 300px" name="price" class="form-control" id="exampleInputEmail1" placeholder="Giá dịch vụ">
                </div>
                <div class="form-group">
                    <label for="inputGroupFile04">Ảnh</label>
                    <div class="input-group">
                        <div class="custom-file">
                        <input type="file" name="image"  class="custom-file-input" id="inputGroupFile04">
                    <label class="custom-file-label"  style="width: 300px" for="inputGroupFile04">Choose file</label>
                </div>
            </div>

            </div>
                <button style="margin-top: 20px" type="submit" class="btn btn-primary">Add</button>
            </div>
            <div  class="phone-form" style="margin-left: 200px;">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Mô tả phòng</label>
                    <textarea class="form-control" name="note" id="exampleFormControlTextarea1" cols="50" rows="10"></textarea>
            </div>
        </form>
    </div>
</div>
@endsection
