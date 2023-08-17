<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: "Lato", sans-serif;
      margin: 0;
      padding: 0;
    }

    .sidenav {
      height: 100%;
      width: 200px;
      position: fixed;
      z-index: 1;
      top: 40px;
      left: 0;
      background-color: #333;
      overflow-x: hidden;
      padding-top: 20px;
    }

    .sidenav a {
      padding: 8px 16px;
      text-decoration: none;
      font-size: 18px;
      color: #fff;
      display: block;
      transition: 0.3s;
    }

    .sidenav a:hover {
      background-color: #555;
    }

    .header {
      padding: 10px;
      background-color: #333;
      color: #f1f1f1;
      display: flex;
      justify-content: flex-end;
    }

    .header a {
      margin-left: 20px;
      color: #f1f1f1;
      text-decoration: none;
    }

    .header a:hover {
      color: #818181;
    }

    .main {
      margin-left: 200px; /* Same as the width of the sidenav */
      font-size: 24px;
      padding: 20px;
    }

    @media screen and (max-height: 450px) {
      .sidenav {
        padding-top: 15px;
      }

      .sidenav a {
        font-size: 16px;
      }
    }
  </style>
</head>
<body>
  <div class="header">
    <a class="active" href="#home">Logout</a>
   
  </div>
  <div class="sidenav">
    <a href="/usertype/show">UserType</a>
    <a href="/user/show">User</a>
    <a href="/brand/show">Brands</a>
    <a href="/item/show">Items</a>
  </div>
  
</body>
</html>
