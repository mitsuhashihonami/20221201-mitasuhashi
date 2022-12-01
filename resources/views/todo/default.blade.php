<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  @yield('content')
  <style>
    body {
      background-color: #333399;
    }

    .card {
      background-color: #fff;
      width: 600px;
      margin: auto;
      padding: 20px;
      border-radius: 5px;
      margin-top: 15vw;
    }

    .create {
      width: 500px;
      height: 30px;
      margin-right: 10px;
      color: #C0C0C0;
    }

    .create__btn {
      color: #dc70fa;
      border-color: #dc70fa;
      background-color: #fff;
      border-radius: 5px;
      width: 60px;
      height: 40px;
    }

    .table {
      margin: auto;
      padding-top: 30px;
    }

    .padding {
      padding: 20px 0;
    }
  </style>
</body>

</html>