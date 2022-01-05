<?php
    $sql_sua_sp = "SELECT*From tbl_sanpham WHERE id_sanpham ='$_GET[idsanpham]' LIMIT 1";
    $query_sua_sp = mysqli_query($mysqli, $sql_sua_sp);
?>
<p><b>sửa sản phẩm</b> </p>
<table border = "1" width = "50%" style = "horder-collapse : collapse;" >
<?php
while($row = mysqli_fetch_array($query_sua_sp)){
?>
    <form method = "POST" action ="modules/quanlysp/xuly.php?idsanpham= <?php echo $row['id_sanpham'] ?>" enctype ="multipart/form-data"> 
        <tr>
            <td>tên sản phẩm</td>
            <td><input type="text" value = "<?php echo $row['tensanpham'] ?>" name = "tensanpham"></td>
        </tr>
        <tr>
            <td>masp</td>
            <td><input type="text" value = "<?php echo $row['masp'] ?>" name = "masp"></td>
        </tr>
		<tr>
            <td>giasp</td>
            <td><input type="text" value = "<?php echo $row['giasp'] ?>"name = "giasp"></td>
        </tr>
		<tr>
            <td>số lượng</td>
            <td><input type="text" value = "<?php echo $row['soluong'] ?>" name = "soluong"></td>
        </tr>
		<tr>
            <td>tóm tắt</td>
            <td><textarea rows = "5" value = "<?php echo $row['tomtat'] ?>" name = "tomtat" style = "resize: none"></textarea> </td>
        </tr>
		<tr>
            <td>hình ảnh</td>
            <td><input type="file" name = "hinhanh">
            <img src="modules/quanlysp/uploads/<?php echo $row['hinhanh']?>" width = "150px">   
            </td>
        </tr>
		<tr>
            <td>nội dung</td>
            <td><textarea rows = "5"  value = "<?php echo $row['noidung'] ?>" name = "noidung" style = "resize: none"></textarea> </td>
        </tr>
        <tr>
            
            <td>
                Danh mục sản phẩm
                <select name="danhmuc" >
                    <?php
                    $sql_danhmuc = "SELECT*FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                    $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                    while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                        if($row_danhmuc['id_danhmuc']==$row['id_danhmuc']){
                    ?>
                    <option selected value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                    <?php
                        }else{
                    ?>
                    <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                    <?php        

                        }
                    }
                    ?>
                </select>

            </td>
        </tr>
		<tr>
            
            <td>
                Tình trạng
                <select name="tinhtrang" >
                    <?php
                    if($row['tinhtrang'] == 1){
                    ?>
                    <option value="1" selected>kích hoạt</option>
                    <option value="0">ẩn</option>
                    <?php
                    }else{
                    ?>
                    <option value="1">kích hoạt</option>
                    <option value="0" selected>ẩn</option>
                    <?php
                    }
                    ?>
                </select>

            </td>
        </tr>
        <tr>
            <td colspan = "2"><input type="submit" name = "suasanpham" value = "sửa sản phẩm"></td>
        </tr>
    </form>
<?php
}
?>
</table>