<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="/birthday">
    @csrf
    <div class="main-content">
        <h1>Nhap ngay sinh</h1>
        <input type="date" name="birthday"><br>
        <button type="submit">Calculator</button>
    </div>
</form>
</body>
</html>
