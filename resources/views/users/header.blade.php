<div class="header">
            <div class="header__top">
                <div class="header__top--logo">
                    <a href="{{route('trangchu')}}"><img src="Img/logo.png" alt=""></a>
                </div>
                <div class="header__top--right">
                    <div class="top--right--top">
                        @if(Auth::user())
                            <div class="dropdown">
                                <a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{Auth::user()->name}}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{route('viewprofile')}}">Thông tin</a>
                                <a class="dropdown-item" href="{{ route('dangxuat') }}">Đăng xuất</a>
                                </div>
                            </div>
                        @else
                        <li>
                            <div class="dropdown">
                                <a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 Tài khoản
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="{{ route('dangnhap') }}">Đăng nhập</a>
                                  <a class="dropdown-item" href="{{ route('dangki') }}">Đăng ký</a>
                                </div>
                              </div>
                        </li>
                        @endif
                        <li><a href="#"><i class="fas fa-globe"></i> English</a></li>
                        <li>
                            <div class="dropdown">
                                <a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dịch vụ khách hàng
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{route('nhahang')}}">Nhà hàng & bar</a>
                                <a class="dropdown-item" href="">Phòng họp</a>
                                <a class="dropdown-item" href="">Tiệc cưới</a>
                                <a class="dropdown-item" href="">Spa</a>
                                <a class="dropdown-item" href="">Bể bơi</a>
                                <a class="dropdown-item" href="">Giữ xe</a>
                                </div>
                            </div>
                            {{-- <a href="#">Dịch vụ khách hàng</a> --}}
                        </li>
                    </div>
                    <div class="top--right--bottom">
                        <li><a href="{{ route('trangchu') }}">Khách sạn</a></li>
                        <li><a href="{{ route('datphong') }}">Đặt phòng</a></li>
                        <li><a href="{{ route('nhahang') }}">Nhà hàng & bar</a>
                        <ul class="header__top--submenu">
                                <li><a href="#">Nguyệt Restaurent</a></li>
                                <li><a href="#">Nguyệt Restaurent</a></li>
                                <li><a href="#">Nguyệt Restaurent</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Phòng họp & hội nghị</a>
                        <ul class="header__top--submenu">
                                <li><a href="#"></a>phòng họp</li>
                                <li><a href="#"></a>tiệc cưới</li>
                            </ul>
                        </li>
                        <li><a href="#">Dịch vụ khách sạn</a>
                            <ul class="header__top--submenu">
                                <li><a href="#"></a>Spa</li>
                                <li><a href="#"></a>Bể bơi</li>
                                <li><a href="#"></a>Giữ xe</li>
                            </ul>
                        </li>
                        <li><a href="#">Khuyến mãi</a></li>
                    </div>
                </div>
            </div>


