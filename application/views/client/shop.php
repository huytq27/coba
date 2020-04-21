<!DOCTYPE html>
<html>

<head>
    <title>Sẩn phẩm</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <?php $this->load->view('client/includes/css') ?>
</head>

<body>
    <!-- start header-->
    <?php $this->load->view('client/includes/header') ?>
    <!--end header-->
    <div class="col-12 tex-center text-title">

        Trang sản phảm

    </div>

    <div class="container coba-product w-100">
        <div class="card col-md-4">
            <h3>Coba coffee roastery</h3>
            <img class="card-img-top img-fluid" src="assets/img/services/dv2.jpg" alt="Card image cap">

            <h5 class="text-center">ESPRESSO – ĐẬM MẠNH – DARK</h5>
            <h4>phin</h4>
            <p> NGỌT DỊU - HONEY <span>(250gr)</span>
            </p>
            <div class="pnl-gia">
                <span>320,000đ</span>
            </div>

            <div class=" btn-product-card d-flex justify-content-center">
               
                    <a href="#"><i class="fas fa-search-plus"></i></a>
                    <a href="#"><i class="fas fa-cart-plus"></i></a>
                

            </div>
        </div>

    </div>


    <!--start js-->

    <?php $this->load->view('client/includes/js') ?>
    <!--end js-->
</body>

</html>