<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nguyễn Văn Nam</title>
</head>
<body>
    <form action="checkForm.php" method="post">
        <p>
            <lablel>Họ và tên</lablel>
            <input type="text" name="fullname" placeholder="Full Name">
        </p>
        <p>
            <lablel>Giới tính</lablel>
            <input type="radio" name="gender" value="1">Nam
            <input type="radio" name="gender" value="2">Nữ
        </p>
        <p>
            <lablel>Tuổi</lablel>
            <input type="number" name="old" placeholder="Tuổi của bạn">
        </p>
        <p>
            <lablel>Trình độ</lablel>
            <select name="trinhdo">
                <option value="1">Dưới 12</option>
                <option value="2">12/12</option>
                <option value="3">Trung cấp</option>
                <option value="4">Cao đẳng</option>
                <option value="5">Đại học</option>
                <option value="6">Trên đại học</option>
            </select>
        </p>
        <p>
            <input type="reset" name="reset" value="Nhập lại">
            <input type="submit" name="submit" value="Gửi">
        </p>
    </form>
</body>
</html>