<!DOCTYPE html>
<html>

<head>
    <title>Trang chủ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <?php $this->load->view('client/includes/css') ?>



</head>

<body>
    <!-- header -->
    <?php $this->load->view('client/includes/header') ?>


    <!-- end header -->

    <!-- start thương hiệu -->
    <section class="cb-section">
        <div class="container-fluid col-md-10 col-12 text-center">
            <div class=" title-section ">
                <div class="text-center">
                    <h2 class="text-title">Thương hiệu Coba</h2>
                    <hr class="line">
                    <p>Từ tình yêu với Việt Nam và niềm đam mê cà phê, năm 1999, thương hiệu Highlands Coffee ra đời với
                        khát vọng nâng tầm di sản cà phê lâu đời của Việt Nam và lan rộng tinh thần tự hào, kết nối hài
                        hòa giữa truyền thống với hiện đại.


                        Bắt đầu với sản phẩm cà phê đóng gói tại Hà Nội vào năm 2000, thương hiệu Highlands Coffee đã
                        nhanh chóng phát triển và mở rộng thành thương hiệu quán cà phê nổi tiếng và không ngừng mở rộng
                        hoạt động trong và ngoài nước từ năm 2002.</p>
                </div>
            </div>
            <div class="text-center">
                <img src="assets/img/Picture8.png" class="img-fluid" alt="">

            </div>
        </div>

    </section>
    <!-- end thương hiệu -->
    <!-- start dich vụ -->
    <section class="cb-section dark">
        <div class="container">
            <div class="row title-section justify-content-center">
                <div class="col-md-12 text-center">
                    <h2 class="text-title">Dịch vụ của chúng tôi</h2>
                    <hr class="line">
                    <p>Ngoài cung cấp những hạt cà phê chất lượng chúng tôi còn phục vụ các dịch vụ đặc biệt</p>
                </div>
            </div>
            <div class="container-fluid">
                <div class="site-slide-services px-md-2 px-4">
                    <div class="col-12 slide-services justify-content-center">
                        <div class="col-md-4 services">
                            <a href="#">
                                <img src="assets/img/services/dv1.jpg" alt="">
                                <p></p>
                            </a>

                        </div>
                        <div class="col-md-4 services">
                            <a href="#">
                                <img src="assets/img/services/dv2.jpg" alt="">
                                <p></p>
                            </a>
                        </div>
                        <div class="col-md-4 services ">
                            <a href="#">
                                <img src="assets/img/services/dv3.jpg" alt="">
                                <p></p>
                            </a>
                        </div>
                        <div class="col-md-4 services ">
                            <a href="#">
                                <img src="assets/img/services/dv4.jpg" alt="">
                                <p></p>
                            </a>
                        </div>

                    </div>
                    <div class="slider-services-btn">
                        <span class="prev position-top left-0"><i class="fas fa-angle-left fa-2x"></i></span>
                        <span class="next position-top right-0"><i class="fas fa-angle-right fa-2x"></i></span>

                    </div>
                </div>


            </div>
        </div>

    </section>
    <!-- end dich vụ -->
    <div class="cb-section">
        <div class="container">
            <div class="row title-section justify-content-center">
                <div class="col-md-10 text-center">
                    <h2 class="text-title">Hình ảnh thương hiệu</h2>
                    <hr class="line">
                    <p>Hình ảnh về thương hiệu coba</p>
                </div>
            </div>


            <div id="slider-infor" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#slider-infor" data-slide-to="0" class="active"></li>
                    <li data-target="#slider-infor" data-slide-to="1"></li>
                    <li data-target="#slider-infor" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">

                            <img src="assets/img/services/dv1.jpg" class="img-fluid  col-4 " alt="">
                            <img src="assets/img/services/dv2.jpg" class="img-fluid col-4 " alt="">
                            <img src="assets/img/services/dv1.jpg" class="img-fluid col-4 " alt="">
                        </div>
                        <div class="row mt-2">
                            <img src="assets/img/services/dv3.jpg" class="img-fluid col-4 " alt="">
                            <img src="assets/img/services/dv4.jpg" class="img-fluid col-4 " alt="">
                            <img src="assets/img/services/dv1.jpg" class="img-fluid col-4 " alt="">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">

                            <img src="assets/img/services/dv3.jpg" class="img-fluid col-4 " alt="">
                            <img src="assets/img/services/dv2.jpg" class="img-fluid col-4" alt="">
                            <img src="assets/img/services/dv4.jpg" class="  col-4 w-100" alt="">
                        </div>
                        <div class="row mt-2 ">
                            <img src="assets/img/services/dv1.jpg" class="img-fluid col-4 " alt="">
                            <img src="assets/img/services/dv2.jpg" class="img-fluid col-4 " alt="">
                            <img src="assets/img/services/dv3.jpg" class="img-fluid col-4 " alt="">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">

                            <img src="assets/img/services/dv2.jpg" class="img-fluid col-4 " alt="">
                            <img src="assets/img/services/dv1.jpg" class="img-fluid col-4 " alt="">
                            <img src="assets/img/services/dv3.jpg" class="img-fluid col-4 " alt="">
                        </div>
                        <div class="row mt-2">
                            <img src="assets/img/services/dv.jpg" class="img-fluid col-4 " alt="">
                            <img src="assets/img/services/dv4.jpg" class="img-fluid col-4 " alt="">
                            <img src="assets/img/services/dv1.jpg" class="img-fluid col-4" alt="">
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#slider-infor" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#slider-infor" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


        </div>
    </div>

    <div class="cb-section dark">
        <div class="container">

            <div class="row title-section justify-content-center">
                <div class="col-md-10 text-center">
                    <h2 class="text-title">Các danh mục sản phẩm</h2>
                    <hr class="line">
                    <p>Hình ảnh về thương hiệu coba</p>
                </div>
            </div>

            <div class=" row d-md-flex">

                <nav class="col-md-12 nav-link-wrap mb-5 tab-danhmucsp">
                    <div class="nav nav-tabs nav-pills justify-content-center" id="tab-product-list" role="tablist">
                        <a class="nav-item col-12 col-sm-3 text-center h2 nav-link px-3 mx-2 active" id="tab-phin" data-toggle="tab" href="#nav-phin" role="tab" aria-controls="nav-phin" aria-selected="true">Phin</a>
                        <a class="nav-item col-12 col-sm-3 text-center h2 nav-link px-3 mx-2" id="tab-espresso" data-toggle="tab" href="#nav-espresso" role="tab" aria-controls="nav-espresso" aria-selected="false">Espresso</a>
                        <a class="nav-item col-12 col-sm-3 text-center h2 nav-link px-3 mx-2" id="tab-brewing" data-toggle="tab" href="#nav-brewing" role="tab" aria-controls="nav-brewing" aria-selected="false">Brewing</a>
                    </div>
                </nav>
                <div class="col-md-12 d-flex align-items-center">
                    <div class="tab-content col-12" id="nav-tabContent">
                        <div class="tab-pane col-12 fade show active" id="nav-phin" role="tabpanel" aria-labelledby="tab-phin">

                            <div class="row tabSanPham">
                                <div class="col-md-4 d-flex ">
                                    <!-- thẻ sản phẩm -->
                                    <div class="pnlSanPham">
                                        <img src="assets/img/logo4.png" class="logoSticked" alt="">
                                        <div class="theSanPham">
                                            <div class="rowThongTinSanPham">
                                                <div class="pnlTieuDe">
                                                    <img class="card-img-top img-fluid" src="assets/img/services/dv2.jpg" alt="Card image cap">
                                                    <h5 class="text-center pt-2">ESPRESSO – ĐẬM MẠNH – DARK</h5>
                                                </div>

                                                <div class="pnlMoTa px-2">
                                                    <div class="row moTaSanPham">

                                                        <p> Hương vị đậm đà, mạnh mẽ bọc phá được hương vị đặc trưng của hạt cà phê Arabica Cầu Đất được rang ở mức độ phù hợp để thuyết phục vị giác của khách

                                                        </p>
                                                    </div>
                                                    <div class="btnMua ">
                                                        <a href="#" class="btn btn-primary px-4"><i class="fas fa-tags"></i>320,000đ</a>
                                                    </div>


                                                </div>

                                            </div>

                                            <div class="rowChiTietSanPham col-12 p-2">
                                                <div class="row ">
                                                    <div class="col-6 ">
                                                        <p class="justify-content-around"><i class="fas fa-coffee"></i><span>Hương vị:</span> Ngọt</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p><i class="fas fa-chart-area"> </i><span>Vùng:</span> Đà Lạt</p>
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-6">
                                                        <p> <i class="fab fa-magento"></i><span>Quy cách:</span>Phin</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p> <i class="fa fa-stack-exchange"> </i><span>Loại:</span>Cà phê</p>

                                                    </div>
                                                </div>

                                                <div class=" price justify-content-center">
                                                    <p><i class="fas fa-tags px-2"></i><span>Giá: </span><span>320,000</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ thẻ sản phẩm -->
                                </div>

                                <div class="col-md-4 d-flex">
                                    <div class="pnlSanPham">
                                        <img src="assets/img/logo4.png" class="logoSticked" alt="">
                                        <div class="theSanPham">
                                            <div class="rowThongTinSanPham">
                                                <div class="pnlTieuDe">
                                                    <img class="card-img-top img-fluid" src="assets/img/services/dv3.jpg" alt="Card image cap">
                                                    <h5 class="text-center pt-2">ESPRESSO – ĐẬM MẠNH – DARK</h5>
                                                </div>

                                                <div class="pnlMoTa px-2">
                                                    <div class="row moTaSanPham">

                                                        <p> Hương vị đậm đà, mạnh mẽ bọc phá được hương vị đặc trưng của hạt cà phê Arabica Cầu Đất được rang ở mức độ phù hợp để thuyết phục vị giác của khách

                                                        </p>
                                                    </div>
                                                    <div class="btnMua ">
                                                        <a href="#" class="btn btn-primary px-4"><i class="fas fa-tags"></i>320,000đ</a>
                                                    </div>


                                                </div>

                                            </div>

                                            <div class="rowChiTietSanPham col-12 p-2">
                                                <div class="row ">
                                                    <div class="col-6 ">
                                                        <p class="justify-content-around"><i class="fas fa-coffee"></i><span>Hương vị:</span> Ngọt</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p><i class="fas fa-chart-area"> </i><span>Vùng:</span> Đà Lạt</p>
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-6">
                                                        <p> <i class="fab fa-magento"></i><span>Quy cách:</span>Phin</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p> <i class="fa fa-stack-exchange"> </i><span>Loại:</span>Cà phê</p>

                                                    </div>
                                                </div>

                                                <div class=" price justify-content-center">
                                                    <p><i class="fas fa-tags px-2"></i><span>Giá: </span><span>320,000</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4 d-flex">
                                    <div class="pnlSanPham">
                                        <img src="assets/img/logo4.png" class="logoSticked" alt="">
                                        <div class="theSanPham">
                                            <div class="rowThongTinSanPham">
                                                <div class="pnlTieuDe">
                                                    <img class="card-img-top img-fluid" src="assets/img/services/dv1.jpg" alt="Card image cap">
                                                    <h5 class="text-center pt-2">ESPRESSO – ĐẬM MẠNH – DARK</h5>
                                                </div>

                                                <div class="pnlMoTa px-2">
                                                    <div class="row moTaSanPham">

                                                        <p> Hương vị đậm đà, mạnh mẽ bọc phá được hương vị đặc trưng của hạt cà phê Arabica Cầu Đất được rang ở mức độ phù hợp để thuyết phục vị giác của khách

                                                        </p>
                                                    </div>
                                                    <div class="btnMua ">
                                                        <a href="#" class="btn btn-primary px-4"><i class="fas fa-tags"></i>320,000đ</a>
                                                    </div>


                                                </div>

                                            </div>

                                            <div class="rowChiTietSanPham col-12 p-2">
                                                <div class="row ">
                                                    <div class="col-6 ">
                                                        <p class="justify-content-around"><i class="fas fa-coffee"></i><span>Hương vị:</span> Ngọt</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p><i class="fas fa-chart-area"> </i><span>Vùng:</span> Đà Lạt</p>
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-6">
                                                        <p> <i class="fab fa-magento"></i><span>Quy cách:</span>Phin</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p> <i class="fa fa-stack-exchange"> </i><span>Loại:</span>Cà phê</p>

                                                    </div>
                                                </div>

                                                <div class=" price justify-content-center">
                                                    <p><i class="fas fa-tags px-2"></i><span>Giá: </span><span>320,000</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-espresso" role="tabpanel" aria-labelledby="tab-espresso">

                            espresso

                        </div>
                        <div class="tab-pane fade" id="nav-brewing" role="tabpanel" aria-labelledby="tab-brewing">
                            brewing


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cb-section">
        <div class="container py-5">
            <!-- Vùng nguyên liệu -->
            <div class="row py-5">
                <div class="col-md-4">
                    <div class="row title-section  pt-5">
                        <div class="col-md-10">
                            <h2 class="text-title">Farm – Vùng nguyên liệu</h2>
                            <p><span>&#10077</span> slogan <span>&#10078</span></p>
                        </div>
                    </div>
                    <div class="noiDungQuaTrinhPhatTrien">
                        <div class="line2">

                        </div>

                        <p class="p1">
                            Nông trại cà phê của CCR nằm tọa lạc tại vùng cao nguyên Buôn Ma Thuột - Đăk Lăk,
                            Đà Lạt – Lâm đồng, Đăk Nông, Gia Lai với độ cao 600-2000m so với mực nước biển,
                            khí hậu quanh năm đều mát mẻ, thổ nhưỡng thích hợp và có điều kiện tốt nhất cho các giống cà phê Việt Nam phát triển tối ưu.
                        </p>
                        <button type="button" class="btn btn-outline-info my-3 ml-3">Xem chi tiết</button>
                    </div>

                </div>
                <div class="col-md-8">
                    <div id="slideFarm" class="carousel slide slideQuaTrinhPhatTrien" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-interval="10000">
                                <img src="assets/img/anh bia/b1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-interval="2000">
                                <img src="assets/img/anh bia/b2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/anh bia/b3.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#slideFarm" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#slideFarm" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Vùng nguyên liệu -->
            <!-- Sơ chế processing -->
            <div class="row py-5">
                <div class="col-md-8">
                    <div id="slideProcessing" class="carousel slide slideQuaTrinhPhatTrien" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-interval="10000">
                                <img src="assets/img/anh bia/b3.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-interval="2000">
                                <img src="assets/img/anh bia/b2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/anh bia/b1.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#slideProcessing" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#slideProcessing" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row title-section  pt-5">
                        <div class="col-md-10">
                            <h2 class="text-title">Sơ chế - Processing</h2>
                            <p><span>&#10077</span> slogan <span>&#10078</span></p>
                        </div>
                    </div>
                    <div class="noiDungQuaTrinhPhatTrien">
                        <div class="line2">

                        </div>

                        <p>
                            <Strong>&#10004 Rửa sạch, vớt nổi</Strong>
                            <br class="px-2"> Loại bỏ trái hư, sâu, khô, tạp chất, đất, cành, lá,
                            <strong><br>&#10004 Lựa bỏ trái xanh</strong>
                            <br class="px-2"> Loại bỏ những trái xanh chưa chín
                            <strong><br>&#10004 Phơi nhà kính, giàn phơi</strong>
                            <br class="px-2"> Phơi nhà kính kiểm soát nhiệt độ, độ ẩm theo dõi quá trình lên men tạo ra thành phẩm tốt nhất, tránh để tiếp xúc với đất

                        </p>
                        <button type="button" class="btn btn-outline-info mt-3 ml-3">Xem chi tiết</button>
                    </div>
                </div>
            </div>
            <!-- / Sơ chế processing -->
            <!-- xử lý lỗi -->
            <div class="row py-5 ">
                <div class="col-md-4 ">
                    <div class="row title-section  pt-5">
                        <div class="col-md-10">
                            <h2 class="text-title">Bảo quản – lưu trữ</h2>
                            <p><span>&#10077</span> slogan <span>&#10078</span></p>
                        </div>
                    </div>
                    <div class="noiDungQuaTrinhPhatTrien">
                        <div class="line2">

                        </div>

                        <p class="p1">
                            Cà phê nhân sau khi được sơ chế và phơi đạt được
                            chất lượng cũng như phân sàng và phân loại bỏ các
                            hạt defect rồi mới được đóng vào bao lưu trữ. Kho
                            bảo quản của chúng tôi được thiết kế và được kiểm
                            định đủ điều kiện an toàn vệ sinh thực phẩm để chất
                            lượng hạt cà phê luôn được bảo quản tốt nhất.
                        </p>
                        <button type="button" class="btn btn-outline-info mt-3 ml-3">Xem chi tiết</button>
                    </div>

                </div>
                <div class="col-md-8">
                    <div id="slideXuLyLoi" class="carousel slide slideQuaTrinhPhatTrien" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-interval="10000">
                                <img src="assets/img/anh bia/b1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-interval="2000">
                                <img src="assets/img/anh bia/b2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/anh bia/b3.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#slideXuLyLoi" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#slideXuLyLoi" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <!--/ xử lý lỗi -->
            <!-- Rang mộc -->
            <div class="row py-5">
                <div class="col-md-8">
                    <div id="slideRoasting" class="carousel slide slideQuaTrinhPhatTrien" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-interval="10000">
                                <img src="assets/img/anh bia/b1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-interval="2000">
                                <img src="assets/img/anh bia/b2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/anh bia/b3.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#slideRoasting" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#slideRoasting" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row title-section  pt-5">
                        <div class="col-md-10">
                            <h2 class="text-title">Roasting- rang mộc</h2>
                            <p><span>&#10077</span> slogan <span>&#10078</span></p>
                        </div>
                    </div>
                    <div class="noiDungQuaTrinhPhatTrien">
                        <div class="line2">

                        </div>

                        <p class="p1">
                            Cốt lõi trong mỗi quy trình của CCR là kỹ thuật rang.
                            Đến hàng trăm nghìn phản ứng hóa học trên mỗi giây sẽ liên
                            tục diễn ra trong lò rang. để cho ra một mẻ rang hoàn hảo đòi
                            hỏi phải tinh vi trong kỹ thuật, điêu luyện trong làm chủ độ
                            lửa & sành điệu trong thử nếm để phát triển hượng vị trọn vẹn
                            trong mỗi mẻ rang. Vì thế bằng niềm đam mê,sự chuyên nghiệp và
                            chuyên môn cao chúng tôi luôn cho ra những mẻ rang mang những
                            hương vị tuyệt vời nhất .
                        </p>
                        <button type="button" class="btn btn-outline-info mt-3 ml-3">Xem chi tiết</button>
                    </div>
                </div>
            </div>
            <!--/ Rang mộc -->
            <!-- cupping -->
            <div class="row py-5">
                <div class="col-md-4">
                    <div class="row title-section  pt-5">
                        <div class="col-md-10">
                            <h2 class="text-title">Cupping- thử nếm/kiểm định</h2>
                            <p><span>&#10077</span> slogan <span>&#10078</span></p>
                        </div>
                    </div>
                    <div class="noiDungQuaTrinhPhatTrien">
                        <div class="line2">

                        </div>

                        <p class="p1">
                            Đây là quá trình góp một phần quan trọng trong từng
                            sản phẩm mà xưởng sản xuất tạo ra, nó giúp ta kiểm tra –
                            tìm hiểu – kiểm định hương vị, chất lượng, sự đồng đều
                            và quá trình hình thành và bản chất sản phẩm như thế nào.
                            Để “ COBA COFFEE ROASTERY ” tạo ra giá trị cốt lõi mang
                            tới cho khách hàng sản phẩm chất lượng tốt nhất .Chúng tôi
                            tuyệt đối chỉ gửi đến bạn những hạt cà phê thơm ngon và tươi
                            mới mỗi ngày.
                        </p>
                        <button type="button" class="btn btn-outline-info mt-3 ml-3">Xem chi tiết</button>
                    </div>
                </div>
                <div class="col-md-8">
                    <div id="slideCupping" class="carousel slide slideQuaTrinhPhatTrien" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-interval="10000">
                                <img src="assets/img/anh bia/b1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-interval="2000">
                                <img src="assets/img/anh bia/b2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/anh bia/b3.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#slideCupping" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#slideCupping" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- / cupping -->
        </div>
    </div>
    <div class="cb-section">
        <div class="row">
            <div class="col-6">
                đen
            </div>
            <div class="col-6">
                xanh
            </div>
        </div>
    </div>
    <?php $this->load->view('client/includes/js') ?>

</body>

</html>