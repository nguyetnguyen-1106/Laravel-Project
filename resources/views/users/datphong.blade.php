@extends('users.master')
@section('content')
<!-- continue header -->
<div class="header__bottom">
                <img src="Img/navbar.png" alt="">
            </div>
        </div>
<!-- end header -->
        <div class="mainContent">
            <div class="mainContent__sidebar">
                <div class="mainContent__sidebar--formDatPhong">
                    <form action="" method="post">
                        @csrf
                        <center><h3>Đặt phòng</h3></center>
                        <table>
                            <tr>
                                <th>Ngày đến</th>
                                <th>Ngày đi</th>
                            </tr>

                            <tr>
                                <td><input type="date" name="" id=""></td>
                                <td><input type="date" name="" id=""></td>
                            </tr>
                            <tr>
                                <td colspan="2"><center><input type="button" value="Đặt Ngay"></center></td>
                            </tr>
                        </table>
                    </form>
                </div>
                @include('users/sidebar')
                <div class="mainContent__sidebar--cardSale">
                    <center><h3>khuyến mãi</h3></center>
                    <div class="card">
                        <a href="#"><img src="Img/khuyenmai/thongtingiamgia.jpg" alt=""></a>
                        <div class="title">
                            <p>Vacation package - siêu giảm giá đến 60%</p>
                        </div>
                    </div>
                </div>
                <div class="mainContent__sidebar--cardInfor">
                    <center><h3>tin tức & sự kiện</h3></center>
                    <div class="cards">
                        <div class="card">
                            <center><a href="#"><h6 class="title">Ấm no ngày tết, mang niềm hạnh phúc cho mọi người</h6></a></center>
                            <div class="content">
                                <img src="Img/tintuc/tet2020.jpg" alt="">
                                <p>Theo truyền thống mỗi dịp tết đến xuân về, nhằm mang lại niềm hạnh phúc cho một số gia đình...</p>
                            </div>
                        </div>
                        <div class="card">
                            <center><h6 class="title">tập đoàn Mumcal giảm giá khủng cho du khách nội địa</h6></center>
                            <div class="content">
                                <img src="Img/tintuc/khuyenmai.jpg" alt="">
                                <p>Trong tháng 7 năm 2020, tập đoàn Mumcal quyết định giảm giá các dịch vụ để mọi người có thể tiếp cận với các dịch vụ...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mainContent__rightContent">
                <div class="intro">
                    <h6>Trang chủ> Đặt phòng</h6>
                    <h3>đặt phòng</h3>
                    <div class="content">
                        <p>Khách sạn Mumcal Đà Nẵng có phong cách kiến trúc hiện đại với 374 phòng nghỉ trong đó có 8 căn hộ cao cấp. Từ mỗi phòng nghỉ đều có thể nhìn toàn cảnh “Thành phố ánh sáng” hai bên bờ sông Hàn hoặc phóng tầm nhìn thoáng đãng về biển Mỹ Khê, trải dài từ bán đảo Sơn Trà đến Ngũ Hành Sơn.</p>

                    </div>
                    <div class="time">
                        <p>Giờ check-in: 14:00</p>
                        <p>Giờ check-out: 12:00</p>
                        <br>
                        <p>Nếu quý khách có bất kì thắc mắc gì, quý khách có thể liên hệ: <b>1900 10kpt</b></p>
                    </div>
                </div>
                <div class="rooms">
                    <div class="room">
                        <a href="{{route('chitiet')}}"><img src="Img/datphong/deluxeKing.jpg" alt=""></a>
                        <h4>Deluxe King</h4>
                    </div> 
                    <div class="room">
                    <a href="{{route('chitiet')}}"><img src="Img/datphong/deluxeKing.jpg" alt=""></a>
                        <h4>Deluxe King</h4>
                    </div>
                    <div class="room">
                    <a href="{{route('chitiet')}}"><img src="Img/datphong/deluxeTwin.jpg" alt=""></a>
                        <h4>Deluxe Twin</h4>
                    </div>
                    <div class="room">
                    <a href="{{route('chitiet')}}"><img src="Img/datphong/deluxeTriple.jpg" alt=""></a>
                        <h4>Deluxe Triple</h4>
                    </div>
                    <div class="room">
                    <a href="{{route('chitiet')}}"><img src="Img/datphong/deluxeFamilyTriple.jpg" alt=""></a>
                        <h4>Deluxe Family Triple</h4>
                    </div>
                    <div class="room">
                    <a href="{{route('chitiet')}}"><img src="Img/datphong/premiumDeluxeKing.jpg" alt=""></a>
                        <h4>Premium Deluxe King</h4>
                    </div>
                    <div class="room">
                    <a href="{{route('chitiet')}}"><img src="Img/datphong/executiveSuite.jpg" alt=""></a>
                        <h4>Executive Suite</h4>
                    </div>
                    <div class="room">
                    <a href="{{route('chitiet')}}"><img src="Img/datphong/presidentialSuite.jpg" alt=""></a>
                        <h4>Presidential Suite</h4>
                    </div>
                    <div class="room">
                    <a href="{{route('chitiet')}}"><img src="Img/datphong/apartment.jpg" alt=""></a>
                        <h4>Apartment</h4>
                    </div>

                </div>
            </div>
        </div>

@endsection