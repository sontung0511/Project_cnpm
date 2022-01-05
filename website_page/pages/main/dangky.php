<?php
    
    if(isset($_POST['dangky'])){
        $tenkhachhang=$_POST['tenkhachhang'];
        $email=$_POST['email'];
        $diachi=$_POST['diachi'];
        $dienthoai=$_POST['dienthoai'];
        $matkhau=md5($_POST['matkhau']);
        $sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
        if($sql_dangky){
            echo '<p style = "color: green">Bạn  đã đăng ký thành công</p>';
            $_SESSION['dangky'] = $tenkhachhang;
            
            $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);

            header('Location:index.php?quanly=giohang');
        }
    }

?>

<style>
.get-in-touch {
  max-width: 300px;
  margin: 50px auto;
  position: relative;
  float: left;
}
.get-in-touch .title {
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 3px;
  font-size: 3.2em;
  line-height: 48px;
  padding-bottom: 48px;
     color: #5543ca;
    background: #5543ca;
    background: -moz-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
    background: -webkit-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
    background: linear-gradient(to right,#f4524d  0%,#5543ca  100%) !important;
    -webkit-background-clip: text !important;
    -webkit-text-fill-color: transparent !important;
}

.contact-form .form-field {
  position: relative;
  margin: 32px 0;
}
.contact-form .input-text {
  display: block;
  width: 100%;
  height: 36px;
  border-width: 0 0 2px 0;
  border-color: #5543ca;
  font-size: 18px;
  line-height: 26px;
  font-weight: 200;
}
.contact-form .input-text:focus {
  outline: none;
}
.contact-form .input-text:focus + .label,
.contact-form .input-text.not-empty + .label {
  -webkit-transform: translateY(-24px);
          transform: translateY(-24px);
}
.contact-form .label {
  position: absolute;
  left: 20px;
  bottom: 11px;
  font-size: 18px;
  line-height: 26px;
  font-weight: 400;
  color: #5543ca;
  cursor: text;
  transition: -webkit-transform .2s ease-in-out;
  transition: transform .2s ease-in-out;
  transition: transform .2s ease-in-out, 
  -webkit-transform .2s ease-in-out;
}
.contact-form .submit-btn {
  display: inline-block;
  background-color: #000;
   background-image: linear-gradient(125deg,#a72879,#064497);
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 16px;
  padding: 8px 16px;
  border: none;
  width:200px;
  cursor: pointer;
}



</style>
<section class="get-in-touch">
    <h4 class="title">Đăng Ký</h4>
   <form class="contact-form row"  method="POST">
      <div class="form-field col-lg-6">
        <input id="name" class="input-text js-input" type="text" name = "tenkhachhang" required>
        <label  class="label" for="name">
                  Họ và tên
        </label>
      </div>
      <div class="form-field col-lg-6 ">
         <input id="email" class="input-text js-input" type="text" name="email" required>
         <label   class="label" for="email">tên đăng nhập</label>
      </div>
      <div class="form-field col-lg-6 ">
         <input id="company" class="input-text js-input" type="text" name="diachi" required>
         <label class="label" for="company">địa chỉ</label>
      </div>
       <div class="form-field col-lg-6 ">
         <input id="phone" class="input-text js-input" type="text" name="dienthoai" required>
         <label class="label" for="phone">số điện thoại</label>
      </div>
      <div class="form-field col-lg-12">
         <input id="message" class="input-text js-input" type="password"  name="matkhau" required>
         <label class="label" for="message"> đặt mật khẩu</label>
      </div>
      <div class="form-field col-lg-12">
         <input class="submit-btn"  name="dangky" type="submit" value="Đăng Ký">
         <a href="index.php?quanly=dangnhap">Đăng nhập nếu có tài khoản</a>
      </div>
   </form>
</section>
