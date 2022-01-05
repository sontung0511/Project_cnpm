<?php
    $sql_sua_danhmucsp = "SELECT*From tbl_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
    $query_sua_danhmucsp = mysqli_query($mysqli, $sql_sua_danhmucsp);
?>
<p><b>sửa danh mục</b> </p>
<table border = "1" width = "50%" style = "horder-collapse : collapse;" >
    <form method = "POST" action = "modules/quanlydanhmucsp/xuly.php?iddanhmuc = <?php echo $_GET['iddanhmuc'] ?>"> 
        <?php 
        while($dong = mysqli_fetch_array($query_sua_danhmucsp)){
        ?>
        <tr>
            <td>tên danh mục</td>
            <td><input type="text" value = "<?php echo $dong['tendanhmuc'] ?>" name = "tendanhmuc"></td>
        </tr>
        <tr>
            <td>thứ tự</td>
            <td><input type="text" value = "<?php echo $dong['thutu'] ?>" name = "thutu"></td>
        </tr>
        <tr>
            <td colspan = "2"><input type="submit" name = "themdanhmuc" value = "sửa danh mục sản phẩm"></td>
        </tr>
        <?php 
        }
        ?>
    </form>
</table>