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

                    <div class="tab-content " id="nav-tabContent">
                        <div class="tab-pane col-12 fade show active" id="nav-phin" role="tabpanel" aria-labelledby="tab-phin">

                            <div class="row">
                                <div class="col-md-4 d-flex">
                                    <div class="menu-wrap">
                                        <img class="card-img-top" src="assets/img/services/dv1.jpg" alt="Card image cap">
                                        <div class="card-body text-center">
                                            <h5 class="card-title ten-sp">Tên sản phẩm</h5>
                                            <p class="card-text mo-ta-sp">Mô tả ngắn sản phấm</p>
                                            <p>

                                                <span class="gia-sp">
                                                    Giá: 20.000đ
                                                </span>
                                            </p>

                                            <a href="#" class="btn btn-primary px-5 ">Mua</a>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4 d-flex">
                                    <div class="menu-wrap">
                                        <img class="card-img-top" src="assets/img/services/dv1.jpg" alt="Card image cap">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <p>

                                                <span>
                                                    Giá: 20.000đ
                                                </span>
                                            </p>

                                            <a href="#" class="btn btn-primary px-5 ">Mua</a>
                                        </div>

                                    </div>

                                </div>
                                <div class="col-md-4 d-flex">
                                    <div class="menu-wrap">
                                        <img class="card-img-top" src="assets/img/services/dv1.jpg" alt="Card image cap">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <p>

                                                <span>
                                                    Giá: 20.000đ
                                                </span>
                                            </p>

                                            <a href="#" class="btn btn-primary px-5 ">Mua</a>
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

    <?php $this->load->view('client/includes/js') ?>

</body>

</html>