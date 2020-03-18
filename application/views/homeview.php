<?php

echo '<strong>Trang chủ coba coffee</strong><br/>danh mục các sản phẩm<br/>';
foreach ($sanpham as $sp){
   
    
    
    
    
    
    ?>


<div style="background-color: blue">
    
    <?php echo $sp->IDSP; ?>
    
</div>
<br/>
    
<a href="cb_homecontroller/test">
    
    Nội dung test
</a>
<?php
    
    
    
    
//    echo $sp->IDSP."---".$sp->TenSP."---".$sp->Gia."<br/>";
}
?>