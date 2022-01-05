<?php
   
   $sql_pro = "SELECT*FROM  tbl_sanpham WHERE tbl_sanpham.id_danhmuc='$_GET[id]'  ORDER BY id_sanpham DESC";
   $query_pro = mysqli_query($mysqli, $sql_pro);
  
   //gettendanhmuc
   $sql_cate = "SELECT*FROM  tbl_danhmuc WHERE  tbl_danhmuc.id_danhmuc='$_GET[id]'LIMIT 1";
   $query_cate = mysqli_query($mysqli, $sql_cate);
   $row_title = mysqli_fetch_array($query_cate);
?>
<h3>danh mục sản phẩm: <?php echo $row_title['tendanhmuc']?></h3>
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