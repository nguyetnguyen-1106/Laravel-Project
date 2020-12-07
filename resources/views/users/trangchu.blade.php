@extends('users.master')
@section('content')
<!-- continue header -->
<div class="header__bottom">
                <img src="Img/slide/khachsan.jpg" alt="">
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
                <div class="mainContent__rightContent--intro">
                    <h3>Tổng quan về khách sạn</h3>
                    <div class="content">
                        <p>Là thành viên thứ 18 của chuỗi khách sạn tư nhân lớn nhất Việt Nam, khách sạn 4 sao <b>Mumcal Hotel Đà Nẵng</b> tọa lạc tại vị trí đắc địa, nằm giữa một bên là sông Hàn thơ mộng, một bên là bãi biển đẹp nhất Miền Trung. Với hệ thống gồm 370 phòng nghỉ cao cấp và 08 căn hộ hạng sang cùng với các dịch vụ giải trí như bể bơi, phòng gym, spa, karaoke, nhà hàng, bar...<b>Mumcal Hotel Đà Nẵng</b> sẽ mang đến một không gian nghỉ dưỡng tuyệt vời và thuận lợi cho những chuyến công tác của quý khách.
                        </p>
                        <p>Mang đậm đà phong vị Tây Bắc của thương hiệu Mumcal kết hợp hài hòa  với nét văn hóa đặc trưng xứ Quảng – chắc chắn khách sạn<b>Mumcal Hotel Đà Nẵng</b> sẽ mang đến trải nghiệm hoàn toàn mới cho du khách khi đến với thành phố Đà Nẵng.</p>
                    </div>
                </div>
                <div class="mainContent__rightContent--map">
                    <h3>Bản đồ</h3>
                    <iframe class="map"src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d841.2030372720012!2d108.240958!3d16.0608904!3m2!1i1024!2i768!4f13.1!5e1!3m2!1svi!2s!4v1594146489753!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="mainContent__rightContent--address">
                        <h3>khách sạn Mumcal đà nẵng</h3>
                        <div class="content">
                            <p>Địa chỉ:101B lê Hữu Trác, Sơn Trà, Đà Nẵng</p>
                            <p>Điện thoại: +(84) 918 203 106</p>
                            <p>Email: mumcalhotel@group.vn</p>
                            <p>Website: mumcalhotelgroup.com.vn</p>
                        </div>
                </div>
            </div>
        </div>
@endsection
