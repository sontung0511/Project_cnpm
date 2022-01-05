<?php
    $sql_lietke_sp = "SELECT*From tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
    $query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
?>
<p> <b>liệt kê danh mục sản phẩm</b></p>
<table border = "1" width = "100%" style = "horder-collapse : collapse;" >
    <tr>
        <th>id</th>
        <th>tên sản phẩm</th>
        <th>hình ảnh</th>
        <th>mã sp</th>
        <th>giá sp</th>
        <th>số lượng</th>
        <th>danh mục</th>
        <th>tóm tắt</th>
        <th>nội dung</th>
        <th>tình trạng</th>
        <th>quản lý</th>
    </tr>
    <?php
    $i = 0;
    while($row = mysqli_fetch_array($query_lietke_sp)){
        $i++;
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['tensanpham']?></td>
        <td><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh']?>" width = "150px"></td>
        <td><?php echo $row['masp']?></td>
        <td><?php echo $row['giasp']?></td>
        <td><?php echo $row['soluong']?></td>
        <td><?php echo $row['tendanhmuc']?></td>
        <td><?php echo $row['tomtat']?></td>
        <td><?php echo $row['noidung']?></td>
        <td><?php 
                if($row['tinhtrang']==1) {
                    echo 'kích hoạt';
                }
                else{
                    echo 'ẩn';
                }
            ?>
        </td>
        <td>
            <a href=" modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>">Xóa</a> |
            <a href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">sửa</a>
        </td>
    </tr>
    <?php
    }
    ?>
   
</table>