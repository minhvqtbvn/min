<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng ký tài khoản</title>
</head>
<body>
<form action="dangky" method="post">
  {{csrf_field()}}
<div>
    <label>Điền email:</label>
    <input type="text" name="email">
</div>
<div>
    <label>Điền tên:</label>
    <input type="text" name="name">
</div>
<div>
    <label>Điền mật khẩu:</label>
    <input type="password" name="password">
</div>
<div>
    <button type="submit">Đăng ký</button>
</div>
</form>
</body>
</html>