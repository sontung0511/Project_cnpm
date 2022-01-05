<?php
    if(isset($_POST['dangnhap'])){
        $email = $_POST['email'];
        $matkhau = md5($_POST['matkhau']);
        $sql = "SELECT* FROM tbl_dangky WHERE email = '".$email."' AND matkhau = '".$matkhau."'LIMIT 1";
        $row = mysqli_query($mysqli,$sql); 
        $count = mysqli_num_rows($row);
        if($count>0){
            $row_data = mysqli_fetch_array($row);
            $_SESSION['dangky'] = $row_data['tenkhachhang'];
            $_SESSION['id_khachhang'] = $row_data['id_dangky'];
            header("Location:index.php?quanly=giohang");
        }else{
            echo '<p style = "color:red;">Mật khẩu,Tài khoản sai!</p>';
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
    <h4 class="title">khách hàng</h4>
   <form class="contact-form row" method = "POST">
       
      <div class="form-field col-lg-6 ">
         <input id="email" class="input-text js-input" type="text" name="email" required>
         <label class="label" for="email" >tên đăng nhập</label>
      </div>
      <div class="form-field col-lg-12">
         <input id="message" class="input-text js-input" type="password" name="matkhau" required>
         <label class="label" for="message"> mật khẩu</label>
      </div>
      <div class="form-field col-lg-12">
         <input class="submit-btn"  name="dangnhap" type="submit" value="Đăng nhập">
      </div>
   </form>
</section>
