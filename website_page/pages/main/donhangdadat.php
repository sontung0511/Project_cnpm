<div class="container">
  <!-- Responsive Arrow Progress Bar -->
  <div class="arrow-steps clearfix">
    <div class="step done"> <span> <a href="index.php?quanly=giohang" >giỏ hàng</a></span> </div>
    <div class="step current"> <span><a href="index.php?quanly=vanchuyen" >Thông tin vận chuyển</a></span> </div>
    <div class="step"> <span><a href="index.php?quanly=thongtinthanhtoan" >Thanh toán</a><span> </div>
    <div class="step"> <span><a href="index.php?quanly=donhangdadat" >Lịch sử đơn hàng</a><span> </div>
  </div>
  <!-- end Responsive Arrow Progress Bar -->
  <div class="nav clearfix">
    <a href="index.php?quanly=thongtinthanhtoan"data-progressbarvalue="<?php echo $progressbarvalue ?>" class="prev">Trước</a> |
    <a href="index.php?quanly=giohang"data-progressbarvalue="<?php echo $progressbarvalue ?>" class="next pull-right">Tiếp</a>
  </div>
</div>
