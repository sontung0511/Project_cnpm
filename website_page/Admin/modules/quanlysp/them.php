<p><b>thêm  sản phẩm</b> </p>
<table border = "1" width = "50%" style = "horder-collapse : collapse;" >
    <form method = "POST" action = "modules/quanlysp/xuly.php" enctype ="multipart/form-data"> 
        <tr>
            <td>tên sản phẩm</td>
            <td><input type="text" name = "tensanpham"></td>
        </tr>
        <tr>
            <td>masp</td>
            <td><input type="text" name = "masp"></td>
        </tr>
		<tr>
            <td>giasp</td>
            <td><input type="text" name = "giasp"></td>
        </tr>
		<tr>
            <td>số lượng</td>
            <td><input type="text" name = "soluong"></td>
        </tr>
		<tr>
            <td>tóm tắt</td>
            <td><textarea rows = "5" name = "tomtat" style = "resize: none"></textarea> </td>
        </tr>
		<tr>
            <td>hình ảnh</td>
            <td><input type="file" name = "hinhanh"></td>
        </tr>
		<tr>
            <td>nội dung</td>
            <td><textarea rows = "5" name = "noidung" style = "resize: none"></textarea> </td>
        </tr>
        <tr>
            
            <td>
                Danh mục sản phẩm
                <select name="danhmuc" >
                    <?php
                    $sql_danhmuc = "SELECT*FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                    $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                    while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                    ?>
                    <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                    <?php
                    }
                    ?>
                </select>

            </td>
        </tr>
		<tr>
            
            <td>
                Tình trạng
                <select name="tinhtrang" >
                    <option value="1">kích hoạt</option>
                    <option value="0">ẩn</option>
                </select>

            </td>
        </tr>
        <tr>
            <td colspan = "2"><input type="submit" name = "themsanpham" value = "thêm  sản phẩm"></td>
        </tr>
    </form>
</table>