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
  <h4>Thông tin vận chuyển</h4>
  <?php
    if(isset($_POST['themvanchuyen'])){
      $name =  $_POST['name'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $note= $_POST['note'];
      $id_dangky = $_SESSION['id_khachhang'];
      $sql_them_vanchuyen = mysqli_query($mysqli,"INSERT INTO tbl_shipping(name,phone,address,note,id_dangky) VALUE('".$name."' , '".$phone."','".$address."','".$note."','".$id_dangky."')");
      if($sql_them_vanchuyen){
        echo '<script>alert("thêm thành công")</script>';
      }
    }elseif(isset($_POST['catnhatvanchuyen'])){
      $name =  $_POST['name'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $note= $_POST['note'];
      $id_dangky = $_SESSION['id_khachhang'];
      $sql_update_vanchuyen = mysqli_query($mysqli,"UPDATE tbl_shipping SET name = '$name', phone = '$phone',address = '$address',note = '$note',id_dangky = '$id_dangky'WHERE id_dangky = '$id_dangky' ");
      if($sql_update_vanchuyen){
        echo '<script>alert("cật nhật thành công")</script>';
      }

    }
  ?>
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
    <div class = "col-md-12">
      <form action=""method = "POST">
        <div class="form-group">
          <label for="email">Họ và tên</label>
          <input type="text" name = "name" class="form-control" value = "<?php echo $name ?>" id="email">
        </div>
        <div class="form-group">
          <label for="pwd">phone</label>
          <input type="text" name="phone"<?php echo $phone ?> class="form-control" >
        </div>
        <div class="form-group">
          <label for="pwd">địa chỉ</label>
          <input type="text" name = "address" <?php echo $address ?> class="form-control" >
        </div>
        <div class="checkbox">
          <label>ghi chú</label>
          <input type="text" name="note">
        </div>
         <?php 
            if($name =='' && $phone ==''){
          ?>
              <button type="submit" name="themvanchuyen"<?php echo $note ?> class="btn btn-default">thêm vận chuyển</button>
          <?php
          }elseif($name != '' && $phone != '' ){
          ?>
              <button type="submit" name="catnhatvanchuyen"<?php echo $note ?> class="btn btn-default">cật nhật vận chuyển</button>
          <?php
          }
         ?> 
      </form>
    </div>
  </div>
 
  <!----------gio hang--------------->
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
    </tr> 
    <?php
      }
    ?>
    <tr>
      <td colspan = "8">
        <p style = "float:left;">tổng tiền:<?php echo number_format($tongtien,0,',','.'); ?>vnđ</P><br/>
        <div style = "clear: both;"></div>
        <?php
          if(isset($_SESSION['dangky'])){
            ?>
            <p><a href="index.php?quanly=thongtinthanhtoan">Hình thức vận chuyển</a></p>
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
</div>
