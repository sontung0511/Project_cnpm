<?php
    $sql_lietke_danhmucsp = "SELECT*From tbl_danhmuc ORDER BY thutu DESC";
    $query_lietke_danhmucsp = mysqli_query($mysqli, $sql_lietke_danhmucsp);
?>
<p> <b>liệt kê danh mục sản phẩm</b></p>
<table border = "1" width = "50%" style = "horder-collapse : collapse;" >
    <tr>
        <th>id</th>
        <th>tên danh mục</th>
        <th>quản lý</th>
    </tr>
    <?php
    $i = 0;
    while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
        $i++;
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['tendanhmuc']?></td>
        <td>
            <a href=" modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Xóa</a> |
            <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">sửa</a>
        </td>
    </tr>
    <?php
    }
    ?>
   
</table>