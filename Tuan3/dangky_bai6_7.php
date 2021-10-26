<form action="Bai6_7.php" method="post">
    <table>
        <tr>
            <td colspan="2" style="text-align: center; color:blue">THÔNG TIN ĐĂNG KÝ</td>
        </tr>
        <tr>
            <td style="color: red;">Thông tin tài khoản</td>
            <td></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>
                <input type="email" name="mail" id="">
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td>
                <input type="password" name="pass" id="">
            </td>
        </tr>
        <tr>
            <td>Nhập lại password</td>
            <td>
                <input type="password" name="nlpass" id="">
            </td>
        </tr>
        <tr>
            <td style="color: red;">Thông tin cá nhân</td>
        </tr>
        <tr>
            <td>Họ và tên</td>
            <td>
                <input type="text" name="hoten" id="">
            </td>
        </tr>
        <tr>
            <td>Địa chỉ</td>
            <td>
                <input type="text" name="diachi" id="">
            </td>
        </tr>
        <tr>
            <td>Điện thoại</td>
            <td>
                <input type="text" name="dienthoai" id="">
            </td>
        </tr>
        <tr>
            <td>Giới tính</td>
            <td>
                Nam<input type="radio" name="gioitinh" id="" value="Nam">
                Nữ<input type="radio" name="gioitinh" id="" value="Nữ">
            </td>
        </tr>
        <tr>
            <td>Sở thích</td>
            <td>
               Xanh <input  type="checkbox" name="sothich[]" id="" value="Xanh">
               Đỏ <input type="checkbox" name="sothich[]" id="" value="Đỏ">
               Vàng <input type="checkbox" name="sothich[]" id="" value="Vàng">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit" value="Đăng ký"> 
                <input type="reset" value="Làm lại">
                <input type="hidden" name="dkthanhcong">
            </td>
        </tr>
    </table>
</form>
