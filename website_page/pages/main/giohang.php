<p>giỏ hàng của   
  <?php
  if(isset($_SESSION['dangky'])){
    echo '<span style = "color: red;">'.$_SESSION['dangky'].'</span>';
    
  }
  ?>
</p>
<?php 
    if(isset($_SESSION['cart'])){
      
    }
?>
<div class="container">
  <!-- Responsive Arrow Progress Bar -->
  <div class="arrow-steps clearfix">
    <div class="step done"> <span> <a href="index.php?quanly=giohang" >giỏ hàng</a></span> </div>
    <div class="step current"> <span><a href="index.php?quanly=vanchuyen" >Thông tin vận chuyển</a></span> </div>
    <div class="step"> <span><a href="index.php?quanly=thongtinthanhtoan" >Thanh toán</a><span> </div>
    <div class="step"> <span><a href="index.php?quanly=donhangdadat" >Lịch sử đơn hàng</a><span> </div>
  </div>
  <!-- end Responsive Arrow Progress Bar -->
</div>
<table style="width:100%;text-align:center; border-collapse: collapse;"border="1">
  <tr>
    <th>id</th>
    <th>mã sp</th>
    <th>tên sản phẩm</th>
    <th>hình ảnh</th>
    <th>số lượng</th>
    <th>giá sản phẩm</th>
    <th>thành tiền</th>
    <th>quản lý</th>
  </tr>
  <?php
    if(isset($_SESSION['cart'])){
        $i = 0;
        $tongtien = 0;
        foreach($_SESSION['cart'] as $cart_item){
            $thanhtien = $cart_item['soluong']*$cart_item['giasp'];
            $tongtien=$tongtien + $thanhtien;
            $i++;
  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $cart_item['masp']; ?></td>
    <td><?php echo $cart_item['tensanpham']; ?></td>
    <td><img src="Admin/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>" width = "100px"></td>
    <td>
      <a href = "pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><i class="fas fa-plus-circle"></i></a>
      <?php echo $cart_item['soluong']; ?>
      <a href = "pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><i class="far fa-minus-square"></i></a>
          
    </td>
    <td><?php echo number_format($cart_item['giasp'],0,',','.').'vnđ' ?></td>
    <td><?php echo number_format($thanhtien,0,',','.').'vnđ' ?></td>
    <td><a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">Xóa</a></td>
    
  </tr> 
  <?php
    }
  ?>
  <tr>
    <td colspan = "8">
      <p style = "float:left;">tổng tiền:<?php echo number_format($tongtien,0,',','.'); ?>vnđ</P><br/>
      <p style = "float:right;"><a href = "pages/main/themgiohang.php?xoatatca=1">Xóa tất cả</a> </p>
      <div style = "clear: both;"></div>
      <?php
        if(isset($_SESSION['dangky'])){
          ?>
          <p><a href="index.php?quanly=vanchuyen">Thanh toán</a></p>
      <?php
      }else{
      ?>
        <p><a href="index.php?quanly=dangky">Đăng Nhập để đặt hàng</a></p>
      <?php
      }
      ?>
    </td>

  </tr>
  <?php
    }else{
  ?>
  <tr>
    <td colspan = "8"><p>hiện tại giỏ hàng trống</p></td>
  </tr>
  <?php
    }
    ?>
</table> 