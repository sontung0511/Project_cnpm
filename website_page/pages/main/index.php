<?php
   
   $sql_pro = "SELECT*FROM  tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc  ORDER BY tbl_sanpham.id_sanpham DESC LIMIT 25";
   $query_pro = mysqli_query($mysqli, $sql_pro);
  
  
?>
<h3>sản phẩm mới ra</h3>
<ul class ="product_list">
    <?php
    while($row = mysqli_fetch_array($query_pro)){
    ?>
    <li>
        <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
            <img src="Admin/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" >
            <p class = "title_product">tên sản phẩm :<?php echo $row['tensanpham'] ?> </p>
            <p class= "price_product">giá: <?php echo number_format($row['giasp'],0,',','.') ?>vnd</p>
            
        </a>
    </li>
    <?php
    }
    ?>
</ul>
<div style = "clear:both;"></div>
<style>
    ul.list_trang{
        padding : 0;
        margin: 0;
        list-style:none;
    }
    ul.list_trang li{
        float: left;
        padding : 5px 13px;
        margin: 5px;
        background : #40b354;

    }
    ul.list_trang li a {
        color:#000;
        text-align : center;
        text-decoration:none;
    }
</style>
<ul class = "list_trang">
   
    <li><a href="">1</a></li>
    <li><a href="">2</a></li>
    
</ul>