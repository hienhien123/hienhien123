<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      /** Sign in */
.mainbox{
  margin: 0 20px 0 5px;
}
/** menu */
.List-menu{
  width: 100%;
}
.menu ul{
  float: left;
  list-style: none;
  margin:0px;
  padding:0px;
}
.menu ul li{
  float:left;
  display: block;
  position: relative;
}
.menu ul li a{
  color:#00001a;
  display:block;
  font-size: 16px;
    padding: 10px 10px;
  text-decoration:none;
}
.menu ul li a:hover{
  background: #f2f2f2;
  color: #ff6600; 
}

.menu ul > li > ul{
  display:none;
  width: 300%;
}
.menu ul > li:hover > ul {
  display: block; 
  position: absolute;
}
.menu ul > li:hover > li{
  float: none;
}
/** checkbox khu vuc */
.checkboxFive {
  width: 150px;
    margin: 10px 30px;
    position: relative;
}
    </style>
</head>
<body>
  <!-- đăng nhập -->
    <div class="header">
      <div class="row">
        <div class="col-md-8">
          <ul class="nav nav-tabs">
              <li role="presentation" class="dropdown">
                <a class="dropdown-toggle" style="margin-left: 200px;" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Hà Nội <span class="caret"></span>
                </a>
                <ul style="margin-left: 200px;" class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <li><a href="#">TP.HCM</a></li>
                  <li><a href="#">Đà Nẵng</a></li>
                  <li><a href="#">Quảng Ninh</a></li>
                 </ul>
              </li>
              <li role="presentation"><a href="#">Liên hệ</a></li>
              <li role="presentation"><a href="#">Khuyến mãi</a></li>
            </ul>
        </div>
        <div class="col-md-4">
          <!-- form sign in -->
          <ul class="nav nav-tabs">
            <li class="dropdown Sign-in">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Sign in <span class="caret"></span></a>
                <ul style="width: 600px; margin-left: -250px" class="dropdown-menu">
                      <div id="loginbox" style="width: 100%;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
                        <div class="panel panel-info" >
                              <div class="panel-heading">
                                  <div class="panel-title">Sign In</div>
                                    <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                              </div>     

                              <div style="padding-top:30px" class="panel-body" >

                                  <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                                  
                                    <form id="loginform" class="form-horizontal" role="form">
                                          
                                      <div style="margin-bottom: 25px" class="input-group">
                                              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                              <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">                                        
                                          </div>
                                      
                                      <div style="margin-bottom: 25px" class="input-group">
                                              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                              <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                          </div>
                                          

                                      
                                      <div class="input-group">
                                            <div class="checkbox">
                                              <label>
                                                <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                              </label>
                                            </div>
                                          </div>


                                        <div style="margin-top:10px" class="form-group">
                                          <!-- Button -->

                                            <div class="col-sm-12 controls">
                                              <a id="btn-login" href="#" class="btn btn-success">Login  </a>
                                              <a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>

                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="col-md-12 control">
                                                <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                                  Don't have an account! 
                                                <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                                  Sign Up Here
                                                </a>
                                                </div>
                                            </div>
                                        </div>    
                                      </form>     
                                </div>                     
                            </div>  
                    </div>
              <div id="signupbox" style="width: 100%; display:none; margin-top:20px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                          <div class="panel panel-info">
                              <div class="panel-heading">
                                  <div class="panel-title">Sign Up</div>
                                  <div style="float:right; font-size: 85%; position: relative; top:-10px">
                                    <a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a>
                                </div>  
                              <div class="panel-body" >
                                  <form id="signupform" class="form-horizontal" role="form">
                                      
                                      <div id="signupalert" style="display:none" class="alert alert-danger">
                                          <p>Error:</p>
                                          <span></span>
                                      </div>
                                          
                                      
                                        
                                      <div class="form-group">
                                          <label for="email" class="col-md-3 control-label">Email</label>
                                          <div class="col-md-9">
                                              <input type="text" class="form-control" name="email" placeholder="Email Address">
                                          </div>
                                      </div>
                                          
                                      <div class="form-group">
                                          <label for="firstname" class="col-md-3 control-label">First Name</label>
                                          <div class="col-md-9">
                                              <input type="text" class="form-control" name="firstname" placeholder="First Name">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="lastname" class="col-md-3 control-label">Last Name</label>
                                          <div class="col-md-9">
                                              <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="password" class="col-md-3 control-label">Password</label>
                                          <div class="col-md-9">
                                              <input type="password" class="form-control" name="passwd" placeholder="Password">
                                          </div>
                                      </div>
                                          
                                      <div class="form-group">
                                          <label for="icode" class="col-md-3 control-label">Invitation Code</label>
                                          <div class="col-md-9">
                                              <input type="text" class="form-control" name="icode" placeholder="">
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <!-- Button -->                                        
                                          <div class="col-md-offset-3 col-md-9">
                                              <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                                              <span style="margin-left:8px;">or</span>  
                                          </div>
                                      </div>
                                      
                                      <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
                                          
                                          <div class="col-md-offset-3 col-md-9">
                                              <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Sign Up with Facebook</button>
                                          </div>                                           
                                              
                                      </div> 
                                  </form>
                               </div>
                          </div>
               </div>
                    </ul>
                  </li>
                </ul>
        </div>
        <div class="col-sm-12">
          <nav class="List-menu navbar navbar-default"> 
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <div style="margin-left: 40px" class="brg_navi_logo">
                    <a href="#">
                        <img style="float: left;" height="40px" src="C:\Users\Dell\Downloads\ic.jpg" id="logo" alt="logo">
                          <h4 style="float: left;" class="show-for-large-up">
                                  GoodFood
                          </h4>
                    </a>
                      </div>
                <div class="menu"> 
                    <ul style="margin-left: 40px;"> 
                        <li><a href="#" class="active"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Trang chủ </a></li>
                        <li><a href="#"> Giới thiệu </a></li>
                        <li><a href="#"> Quán ngon </a> 
                          <ul>
                              <li><a href="#"> Quán ngon thủ đô </a></li>
                              <li><a href="#"> Quán ngon 3 miền  </a></li>
                          </ul>
                        </li>
                        <li><a href="#"> Món ăn </a> 
                          <ul>
                              <li><a href="#"> Món ăn nổi bật </a></li>
                              <li><a href="#"> Món ăn dân tộc </a></li>
                              <li><a href="#"> Món ăn giới trẻ </a></li>
                              <li><a href="#"> Món ăn truyền thống </a></li>
                          </ul>
                        </li>
                        <li> <a href="#"> Tin tức</a> </li>
                        <li> <a href="#"> Liên hệ </a> </li>
                        <li style="padding-left: 60px;" class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Khu vực <span class="caret"></span></a>
                          <ul style="margin-left: 30px;width: 200px;" class="dropdown-menu">
                            <div class="checkboxFive">
                              <input type="checkbox" value="1" id="checkboxFiveInput" name="" />
                              <label for="checkboxFiveInput">Quận Thanh Xuân</label><br>
                              <input type="checkbox" value="1" id="checkboxFiveInput" name="" />
                              <label for="checkboxFiveInput">Quận Đống Đa</label><br>
                              <input type="checkbox" value="1" id="checkboxFiveInput" name="" />
                              <label for="checkboxFiveInput">Quận Ba Đình</label><br>
                              <input type="checkbox" value="1" id="checkboxFiveInput" name="" />
                              <label for="checkboxFiveInput">Quận Hai Bà Trưng</label><br>
                              <input type="checkbox" value="1" id="checkboxFiveInput" name="" />
                              <label for="checkboxFiveInput">Quận Tây Hồ</label><br>
                            </div>
                          </ul>
                        </li>
                        <form class="navbar-form navbar-left timkiem">
                          <div class="form-group">
                            <input style="height: 30px" type="text" class="form-control" placeholder="Nhà hàng, món ăn,...">
                          </div>
                            <button style="height: 30px" type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Tìm Kiếm</button>
                        </form>
                    </ul>
                </div>
              </div>
          </nav>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>