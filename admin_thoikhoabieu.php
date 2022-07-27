<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trường THPT HUST</title>
    <link rel="stylesheet" href="./assets/css/trangchu.css">
    <link rel="stylesheet" href="./assets/css/dangnhap.css">
    <link rel="stylesheet" href="./assets/css/hocsinh_diem.css">
    <link rel="stylesheet" href="./assets/css/hs-ttcn.css">
    <link rel="stylesheet" href="./assets/css/admin_xeplichday.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-5.15.4-web/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <header class="fixed-header">
        <div class="background-header position-relative">
            <img src="./assets/images/trang-chu/bgr.jpg" alt="">
            <div class="header-content w-100 position-absolute d-flex align-items-center justify-content-between ">
                <div class="name-school">Trường THPT HUST</div>
                <div class="account d-flex align-items-center justify-content-between">
                    <i class="fas fa-user-circle"></i>
                    <?php echo "<h1>" . $_SESSION['username'] . "</h1>"; ?>
                    <button type="button" class="logout_btn btn btn-danger"><a href="logout.php">Đăng xuất</a></button>
                </div>
            </div>
        </div>
    </header>

    <div class="diem-container row">
        <div class="menu col-3">
            <a href="admin_taotaikhoan.php"><div class="list-menu diem">Tạo tài khoản</div></a>
            <a href="admin_danhsachtaikhoan.php"><div class="list-menu hocphi">Danh sách tài khoản</div></a>
            <a href="admin_cosovatchat.php"><div class="list-menu thoikhoabieu">Cơ sở vật chất</div></a>
            <a href="admin_thoikhoabieu.php"><div class="list-menu thongtincanhan">Xếp lịch dạy</div></a>
        </div>
        <div class="col-9 xeplichday_container">
            <table class="table-diem mt-4">
                <tr>
                    <th>Buổi</th>
                    <th>Thời gian</th>
                    <th>Tiết</th>
                    <th>Thứ hai</th>
                    <th>Thứ ba</th>
                    <th>Thứ tư</th>
                    <th>Thứ 5</th>
                    <th>Thứ 6</th>
                </tr>
                <tr>
                    <th rowspan="6">Sáng</th>
                    <th colspan="7" class="lop12">Lớp 12</th>
                </tr>
                <tr>
                    <th>7h15'-8h00'</th>
                    <th>1</th>
                    <td><input type="text" value="SHCD"></td>
                    <td><input type="text" value="Cô Trân (Văn)"></td>
                    <td><input type="text" value="Cô Chân (AV)"></td>
                    <td><input type="text" value="Cô Pha (Sinh)"></td>
                    <td><input type="text" value="Cô Chân(AV)"></td>
                </tr>
                <tr>
                    <th>8h05'-8h50'</th>
                    <th>2</th>
                    <td><input type="text" value="Cô Xuân (TD)"></td>
                    <td><input type="text" value="Cô Trân (Văn)"></td>
                    <td><input type="text" value="Cô Chân (AV)"></td>
                    <td><input type="text" value="Cô Pha (Sinh)"></td>
                    <td><input type="text" value="Cô Chân(AV)"></td>
                </tr>
                <tr>
                    <th>8h55'-9h40'</th>
                    <th>3</th>
                    <td><input type="text" value="Cô Xuân (TD)"></td>
                    <td><input type="text" value="Cô Thúy (Hóa)"></td>
                    <td><input type="text" value="Thầy Huỳnh (Tin)"></td>
                    <td><input type="text" value="Thầy Khải (Toán)"></td>
                    <td><input type="text" value="Cô Bình (GDCD)"></td>
                </tr>
                <tr>
                    <th>9h55'-10h40'</th>
                    <th>4</th>
                    <td><input type="text" value="Thầy Chánh (AV)"></td>
                    <td><input type="text" value="Cô Nhu Sa (Sử)"></td>
                    <td><input type="text" value="Thầy Đựng (Lý)"></td>
                    <td><input type="text" value="Thầy Khải (Toán)"></td>
                    <td><input type="text" value="Thầy Khải (Toán)"></td>
                </tr>
                <tr>
                    <th>10h45'-11h30'</th>
                    <th>5</th>
                    <td><input type="text" value="Thầy Chánh (AV)"></td>
                    <td><input type="text" value="Cô Nhu Sa (Sử)"></td>
                    <td><input type="text" value="HĐNGLL"></td>
                    <td><input type="text" value="Thầy Khải (Toán)"></td>
                    <td><input type="text" value="Thầy Khải (Toán)"></td>
                </tr>
                <tr>
                    <th rowspan="5">Sáng</th>
                    <th colspan="7" class="lop12">Lớp 12</th>
                </tr>
                <tr>
                    <th>10h30' 14h10'</th>
                    <th>1</th>
                    <td><input type="text" value="Cô Trân (Văn)"></td>
                    <td><input type="text" value="Cô Pha (Sinh)"></td>
                    <td><input type="text" value="Thầy Khải (Toán)"></td>
                    <td><input type="text" value="Thầy Đựng (Lý)"></td>
                    <td><input type="text" value="Cô Trân (Văn)"></td>
                </tr>
                <tr>
                    <th>14h10'-14h50'</th>
                    <th>2</th>
                    <td><input type="text" value="Cô Trân (Văn)"></td>
                    <td><input type="text" value="Cô Pha (Sinh)"></td>
                    <td><input type="text" value="Thầy Khải (Toán)"></td>
                    <td><input type="text" value="Thầy Đựng (Lý)"></td>
                    <td><input type="text" value="Cô Trân (Văn)"></td>
                </tr>
                <tr>
                    <th>15h10'-15h50'</th>
                    <th>3</th>
                    <td><input type="text" value="Cô Thảo (Địa)"></td>
                    <td><input type="text" value="Cô Thúy (Hóa)"></td>
                    <td><input type="text" value="Thầy Khải (Toán)"></td>
                    <td><input type="text" value="Thầy Thái (Nghề)"></td>
                    <td><input type="text" value="Cô Hạnh (Lý)"></td>
                </tr>
                <tr>
                    <th>15h50'-16h30'</th>
                    <th>4</th>
                    <td><input type="text" value="Cô Thảo (Địa)"></td>
                    <td><input type="text" value="Cô Hạnh (Lý)"></td>
                    <td><input type="text" value="-"></td>
                    <td><input type="text" value="Thầy Thái (Nghề)"></td>
                    <td><input type="text" value="Thầy Thái (CN)"></td>
                </tr>
            </table>
        </div>
    </div>

</body>
</html>
