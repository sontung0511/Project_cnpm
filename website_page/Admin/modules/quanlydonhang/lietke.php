<?php
    $sql_lietke_dh = "SELECT*From tbl_cart,tbl_dangky WHERE tbl_cart.id_khachhang = tbl_dangky.id_dangky ORDER BY tbl_cart.id_cart DESC";
    $query_lietke_dh = mysqli_query($mysqli, $sql_lietke_dh);
?>
<p> <b>liệt kê  đơn hàng</b></p>
<table border = "1" width = "50%" style = "horder-collapse : collapse;" >
    <tr>
        <th>id</th>
        <th>mã đơn  hàng</th>
        <th>tên khách  hàng</th>
        <th>địa chỉ</th>
        <th>email</th>
        <th>số điện thoại</th>
        <th>tình trạng</th>
        <th>quản lý</th>
        <th>IN</th>
    </tr>
    <?php
    $i = 0;
    while($row = mysqli_fetch_array($query_lietke_dh)){
        $i++;
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['code_cart']?></td>
        <td><?php echo $row['tenkhachhang']?></td>
        <td><?php echo $row['diachi']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['dienthoai']?></td>
        <td>
            <?php 
                if($row['cart_status']==1){
                    echo '<a href = "modules/quanlydonhang/xuly.php?code='.$row['code_cart'].'">đơn hàng mới</a>';
                }else{
                    echo 'đã xem';
                }
            
            ?>
    
        </td>
        <td>
            <a href=" index.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart'] ?>">Xem đơn hàng</a> 
            
        </td>
        <td>
            <a href="modules/quanlydonhang/indonhang.php?code=<?php echo $row['code_cart'] ?>">in đơn hàng</a> 
        </td>
    </tr>
    <?php
    }
    ?>
   
</table>