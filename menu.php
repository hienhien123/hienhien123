<!DOCTYPE html>
<html>
<head>
  <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="menu"> 
                    <ul style="margin-left: 40px;"> 
                        <li><a href="index.php" class="active"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Trang chủ </a></li>
                        <li><a href="gioithieu.php"> Giới thiệu </a></li>
                        <li><a href="quanngon.php"> Quán ngon </a> 
                        </li>
                        <li><a href="#"> Món ăn </a> 
                          <ul>
                              <li><a href="#hapdan"> Món ăn hấp dẫn </a></li>
                              <li><a href="gioitre.php"> Món ăn giới trẻ </a></li>
                              <li><a href="truyenthong.php"> Món ăn truyền thống </a></li>
                          </ul>
                        </li>
                        <li> <a href="#"> Tin tức</a> </li>
                        <li> <a href="#contact"> Liên hệ </a> </li>
                        <li style="padding-left: 100px;" ><?php include 'search.php'; ?></li>
                    </ul>
                </div>
</body>
</html>
