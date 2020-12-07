@extends('master')

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
                @include('sidebar')
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
                <div class="rightContent__navbar">
                    <h1>trang chủ > đặt phòng</h1>
                    <hr>
                </div>
                <div class="rightContent__roomDetail">
                    <h1>Superior Twin</h1>
                    <div class="rightContent__roomDetail--slider">
                        <!-- Slides -->
                        <div class="slides">
                            <div class="mySlide fade">
                                <img src="Img/datphong/superiorTwin/slide1.jpg" alt="">
                            </div>
                            <div class="mySlide fade">
                                <img src="Img/datphong/superiorTwin/slide2.jpg" alt="">
                            </div>
                            <div class="mySlide fade">
                                <img src="Img/datphong/superiorTwin/slide3.jpg" alt="">
                            </div>
                            <div class="mySlide fade">
                                <img src="Img/datphong/superiorTwin/slide4.jpg" alt="">
                            </div>

                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                        <!-- Circle under slides -->
                        <div style="text-align:center">
                            <span class="dot" onclick="currentSlide(1)"></span>
                            <span class="dot" onclick="currentSlide(2)"></span>
                            <span class="dot" onclick="currentSlide(3)"></span>
                            <span class="dot" onclick="currentSlide(4)"></span>
                        </div>
                       
                    </div>
                    <div class="rightContent__roomDetail--detailContent">
                       <div class="inforRoom">
                           <p>Diện tích: 27m2</p>
                           <p>Số giường: 02 giường</p>
                       </div>
                       <div class="chinhSach">
                           <h3>1. Chính sách hoàn hủy</h3>
                           <p>Hủy phòng, khách không đến, không tính phí</p>
                           <h3>2. chính sách phụ thu</h3>
                           <nav>
                               <ul>
                                   <li>- Giường phụ : 350.000 vnđ/ giường/ đêm, tối đa một giường phụ/ phòng. </li>
                                   <li>- Trẻ em từ dưới 6 tuổi miễn phí ở chung với bố mẹ- tối đa 2 trẻ/ phòng.</li>
                                   <li>- Trẻ em từ 6-12 tuổi phụ thu 120.000 vnđ/ trẻ/ đêm, ở chung giường với bố mẹ, tối đa 2 trẻ/ phòng.</li>
                                   <li>- Trẻ em từ 12 tuổi tính giá như người lớn phụ thu 350.000 vnđ/ trẻ/ đêm.</li>
                               </ul>
                           </nav>
                           <h1>Tiện ích</h1>
                           <div class="tienNghi">
                               <div class="col1">
                                    <p>Điều hòa nhiệt độ</p>
                                    <p>Ấm siêu tốc</p>
                                    <p>Bồn tắm</p>
                                    <p>Máy sấy tóc</p>
                                    <p>Bàn chải đánh răng</p>
                                    <p>Mũ tắm</p>
                                    <p>Dầu gội đầu</p>
                               </div>
                               <div class="col1">
                                    <p>Miễn phí internet tốc độ cao</p>
                                    <p>Nước khoáng, trà và cà phê</p>
                                    <p>Bàn làm việc</p>
                                    <p>Dép</p>
                                    <p>Lược</p>
                                    <p>Túi vệ sinh</p>
                               </div>
                               <div class="col1">
                                    <p>TV đen trắng cổ đại</p>
                                    <p>Két sắt bỏ khẩu trang</p>
                                    <p>Tủ quần áo</p>
                                    <p>Tủ lạnh</p>
                                    
                               </div>
                           </div>
                       </div>
                      
                    </div>
                    <input type="button" value="Đặt Phòng" class="btnDatPhong">
                </div>
            </div>
        </div>

     
        
    
      <!-- JS for slide -->
   <script>
       var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlide");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
}
   </script>
   <!-- End Js for slide -->
@endsection