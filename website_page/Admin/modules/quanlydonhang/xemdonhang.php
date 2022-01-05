xemdonhang
<?php
    $code = $_GET['code'];
    $sql_lietke_dh = "SELECT*From tbl_cart, tbl_cart_details,tbl_sanpham WHERE tbl_cart_details.id_sanpham = tbl_sanpham.id_sanpham AND tbl_cart_details.code_cart='".$code."' ORDER BY tbl_cart_details.id_cart_details DESC";
    $query_lietke_dh = mysqli_query($mysqli, $sql_lietke_dh);
?>
<p> <b>liệt kê  đơn hàng</b></p>
<table border = "1" width = "50%" style = "horder-collapse : collapse;" >
    <tr>
        <th>id</th>
        <th>mã đơn  hàng</th>
        <th>tên sản phẩm</th>
        <th>số lượng</th>
        <th>Đơn giá</th>
        <th>thành tiền</th>
        
    </tr>
    <?php
    $i = 0;
    $tongtien = 0;
    while($row = mysqli_fetch_array($query_lietke_dh)){
        $i++;
        $thanhtien = $row['giasp'] * $row['soluongmua'];
        $tongtien  += $thanhtien;
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['code_cart']?></td>
        <td><?php echo $row['tensanpham']?></td>
        <td><?php echo $row['soluongmua']?></td>
        <td><?php echo number_format($row['giasp'],0,',','.').'vnd'?></td>
        <td><?php echo number_format($thanhtien,0,',','.').'vnd'?></td>
    </tr>
    <tr>
        <td colspan = "6">
            <p>tổng tiền : <?php echo number_format($tongtien,0,',','.').'vnd'?></p>

            <p><a href="">Đã xử lý</a></p>
        </td>
    </tr>
    <?php
    }
    ?>
   
</table>