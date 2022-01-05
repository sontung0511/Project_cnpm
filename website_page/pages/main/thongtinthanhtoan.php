<div class="container">
  <!-- Responsive Arrow Progress Bar -->
  <div class="arrow-steps clearfix">
    <div class="step done"> <span> <a href="index.php?quanly=giohang" >giỏ hàng</a></span> </div>
    <div class="step current"> <span><a href="index.php?quanly=vanchuyen" >Thông tin vận chuyển</a></span> </div>
    <div class="step"> <span><a href="index.php?quanly=thongtinthanhtoan" >Thanh toán</a><span> </div>
    <div class="step"> <span><a href="index.php?quanly=donhangdadat" >Lịch sử đơn hàng</a><span> </div>
  </div>
  <form action="#" method = "POST">
    <div class ="row">
          <?php
              $id_dangky = $_SESSION['id_khachhang'];
              $sql_get_vanchuyen = mysqli_query($mysqli , "SELECT *FROM tbl_shipping where id_dangky = 'id_dangky' LIMIT 1");
              $count = mysqli_num_rows($sql_get_vanchuyen);
              if($count > 0){
                $row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
                $name =  $row_get_vanchuyen['name'];
                $phone = $row_get_vanchuyen['phone'];
                $address = $row_get_vanchuyen['address'];
                $note= $row_get_vanchuyen['note'];
              }else{

                $name =  '';
                $phone = '';
                $address = '';
                $note= '';
              }
          ?>
          <div class = "col-md-8">
              <h4>thông tin và giỏ  hàng</h4>
              <ul >
                <li>Họ tên vận chuyển : <b><?php echo $name ?></b></li>
                <li>số điện thoại : <b><?php echo $phone ?></b></li>
                <li>Địa chỉ <b><?php echo $address ?></b></li>
                <li>Ghi chú <b><?php echo $note ?></b></li>
              </ul>
              <h5>giỏ hàng của bảng</h5>
              <table style="width:100%;text-align:center; border-collapse: collapse;"border="1">
                <tr>
                  <th>id</th>
                  <th>mã sp</th>
                  <th>tên sản phẩm</th>
                  <th>hình ảnh</th>
                  <th>số lượng</th>
                  <th>giá sản phẩm</th>
                  <th>thành tiền</th>
                  
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
                </tr> 
                <?php
                  }
                ?>
                <tr>
                  <td colspan = "8">
                    <p style = "float:left;">tổng tiền:<?php echo number_format($tongtien,0,',','.'); ?>vnđ</P><br/>
                    <div style = "clear: both;"></div>
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
          </div>
          <style>
              .form-check{
                margin: 11px; 
              }
          </style>
            <div class = "col-md-4 hinhthucthanhtoan">
              <h4>Phương thức thanh toán</h4>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="tien mat" id="flexCheckDefault1">
                <label class="form-check-label" for="flexCheckDefault1">
                      Tiền mặt
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="chuyen khoan" id="flexCheckDefault2">
                <label class="form-check-label" for="flexCheckDefault2">
                  Chuyển khoản
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="momo" id="flexCheckDefault3">
                <img src="images/MoMo_Logo.png" alt="" height ="32" width ="32" >
                <label class="form-check-label" for="flexCheckDefault3">
                  Momo
                </label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="vnpay" id="flexCheckDefault4">
                  <img src="images/38971.png" alt=""height ="50" width ="50">
                  <label class="form-check-label" for="flexCheckDefault4">
                    paypal
                  </label>
              </div>
              <input type="submit" value = "Đặt Hàng ngay" name = "thanhtoanngay" class = "btn btn-danger">
            </div>
      </div>
      <!-- end Responsive Arrow Progress Bar -->
      <div class="nav clearfix">
        <a href="index.php?quanly=thongtinthanhtoan"data-progressbarvalue="<?php echo $progressbarvalue ?>" class="prev">Trước</a> |
        <a href="index.php?quanly=giohang"data-progressbarvalue="<?php echo $progressbarvalue ?>" class="next pull-right">Tiếp</a>
      </div>
    </div>
  </form>
</div>
