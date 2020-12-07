@extends('users.master')
@section('content')
<!-- continue header -->
            <div class="header__bottom">
                <img src="Img/nhahang&bar/bia.png" alt="">
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
                <div class="intro">
                    <h6>Trang chủ> Nhà Hàng & bar</h6>
                    <h3>nhà hàng & bar</h3>
                </div>
                @foreach ($restaurant as $restaurant)


                <div class="restaurents">
                    <div class="restaurent">
                        <img src="Img/nhahang&bar/bar1/{{$restaurant->image}}" alt="">
                        <h4>Bar of Na</h4>
                    </div>
                    {{-- <div class="restaurent">
                        <img src="Img/nhahang&bar/bar1/bia.jpg" alt="">
                        <h4>Bar of Na</h4>
                    </div>
                    <div class="restaurent">
                        <img src="Img/nhahang&bar/bar2/bia.jpg" alt="">
                        <h4>bar of Moon</h4>
                    </div>
                    <div class="restaurent">
                        <img src="Img/nhahang&bar/nhahang1/bia.jpg" alt="">
                        <h4>Restaurent of 3g</h4>
                    </div>
                    <div class="restaurent">
                        <img src="Img/nhahang&bar/nhahang2/bia.jpg" alt="">
                        <h4>Restaurent of Team</h4>
                    </div>--}}

                </div>
                @endforeach
            </div>
        </div>

@endsection
