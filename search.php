<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="BTL_css/noidungcss.css">
    </head>
    <body>  
            <form action="search.php" method="get" class="navbar-form navbar-left timkiem">
                <div class="form-group">
             <input type="text" name="search" class="form-control" placeholder="Nhà hàng, món ăn,..." />
             
                <input type="submit" name="ok" class="btn btn-default" value="Tìm Kiếm" />
                </div>

            </form>
        <?php
    // Nếu người dùng submit form thì thực hiện
     if (isset($_REQUEST['ok'])) 
        {   
            echo "<div class='row'><a style='margin-top:8px;' href='index.php' class='btn btn-primary'>Trang chủ</a></div>";
            // Gán hàm addslashes để chống sql injection
            $search = addslashes($_GET['search']);
 
            // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
            if (empty($search)) {
                echo "Yeu cau nhap du lieu vao o trong";
            } 
            else
            {
 
                // Kết nối sql
                $connect =mysqli_connect("localhost", "root", "", "db");
                mysqli_set_charset($connect,"utf8");
 
                // Thực thi câu truy vấn
                $sql = mysqli_query($connect,"
                select *
                from product p
                where p.name like '%$search%'");
 
                // Đếm số đong trả về trong sql.
                $num = mysqli_num_rows($sql);
 
                // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
                if ($num > 0 && $search != "") 
                {
                    // Dùng $num để đếm số dòng trả về.
                    echo "<div style='margin-left:10px;' class='row'>$num ket qua tra ve voi tu khoa <b>$search</b></div>";
 
                    // Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
                    while ($row = mysqli_fetch_assoc($sql)) {
                        $name = $row['name'];

                        $address = $row['address'];
 
                        $image_link = $row['image_link'];
                        ?>                                 <div class="row">
                                                              
                                                                <div class="col-md-10">
                                                            <ul type="none" class="col-md-3 list-review">
                                                            
                                                            <li style="float:left;"><a style="height: 260px" class="thumbnail" href="">
                                                                <?php echo "<img style='width: 220px; height: 150px;' alt='' src='".$image_link." '>" ?>
                                                                            <h4> <?php echo "$name" ?> </h4>
                                                                            <h15>Địa chỉ: <?php echo "$address" ?></h15>                            
                                                                    </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                  
                                                </div>

                <?php  }

                } 
                else {
                    echo "Khong tim thay ket qua!";
                }
            }
        }
    ?>   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
