<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <script src="Styles/jquery-3.3.1.min.js" type="text/javascript"></script>
            <script src="Styles/bootstrap-4.1.0.min.js" type="text/javascript"></script>
            <link href="Styles/bootstrap-4.1.0.min.css" rel="stylesheet" type="text/css"/>
            <link href="Styles/MainStyle.css" rel="stylesheet" type="text/css"/>
            <title></title>
        </head>
        <body>
            <?php
            session_start();
            ?>
            <div class="container register">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login Form 1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Login Form 2</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active text-align form-new" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Login Form 1</h3>
                                <div class="row register-form">
                                    <div class="col-md-12">
                                        <form method="post">
                                            <div class="form-group">
                                                <input type="text" name="LGform1_user" class="form-control" placeholder="Your Email *" value="" required=""/>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="LGform1_pwd" class="form-control" placeholder="Your Password *" value="" required=""/>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" name="LGform1" class="btnContactSubmit" value="Login" />
                                                <a href="ForgetPassword.php" class="btnForgetPwd" value="Login">Forget Password?</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show text-align form-new" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Login Form 2</h3>
                                <div class="row register-form">
                                    <div class="col-md-12">
                                        <form method="post">
                                            <div class="form-group">
                                                <input type="text" name="LGform2_user" class="form-control" placeholder="Your Email *" value="" required="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="LGform2_pwd" class="form-control" placeholder="Your Password *" value="" required=""/>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" name="LGform2" class="btnContactSubmit" value="Login" />
                                                <a href="ForgetPassword.php" class="btnForgetPwd" value="Login">Forget Password?</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </html>



</body>
</html>



body{
    background-image: -webkit-gradient(linear, left top, right top, from(#4e63d7), to(#76bfe9)) !important;
        background-image: linear-gradient(to right, #4e63d7 0%, #76bfe9 100%) !important;
        margin-top:20px;}

    /* ===== LOGIN PAGE ===== */
    .login-box {
      -webkit-box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.1);
              box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.1);
      border-radius: 10px;
    }

    @media (min-width: 992px) {
      .login-box {
        margin: 40px 0;
      }
    }

    .login-box .form-wrap {
      padding: 30px 25px;
      border-radius: 10px;
      -webkit-box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.1);
              box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.1);
    }

    @media (min-width: 768px) {
      .login-box .form-wrap {
        padding: 45px;
      }
    }

    @media (min-width: 992px) {
      .login-box .form-wrap {
        margin-top: -40px;
        margin-bottom: -40px;
        padding: 60px;
      }
    }

    .login-box .socials a {
      -webkit-box-shadow: 0 3px 2px 0 rgba(0, 0, 0, 0.12);
              box-shadow: 0 3px 2px 0 rgba(0, 0, 0, 0.12);
    }

    .login-section {
      position: relative;
      z-index: 0;
    }

    .login-section::after {
      position: absolute;
      content: '';
      right: 0;
      left: 0;
      bottom: 0;
      width: 100%;
      height: 100%;
      opacity: 0.15;
      z-index: -1;
      background-image: url(../img/shapes/login-wave2.svg);
      background-size: cover;
      background-repeat: no-repeat;
      background-position: top right;
      -webkit-animation-duration: 3s;
              animation-duration: 3s;
      -webkit-animation-direction: alternate;
              animation-direction: alternate;
      -webkit-animation-iteration-count: infinite;
              animation-iteration-count: infinite;
      -webkit-animation-name: pulse;
              animation-name: pulse;
    }

    .login-section::before {
      position: absolute;
      content: '';
      opacity: 0.10;
      right: 0;
      left: 0;
      bottom: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
      background-image: url(../img/shapes/login-wave1.svg);
      background-size: cover;
      background-position: top right;
      -webkit-animation-duration: 6s;
              animation-duration: 6s;
      -webkit-animation-direction: alternate;
              animation-direction: alternate;
      -webkit-animation-iteration-count: infinite;
              animation-iteration-count: infinite;
      -webkit-animation-name: pulse;
              animation-name: pulse;
    }

    .login-section .content {
      padding: 45px;
    }

    .form-group .zmdi {
        position: absolute;
        z-index: 1;
        color: #fff;
        background-color: #4e63d7;
        border-radius: 5px;
        height: 100%;
        width: 45px;
        text-align: center;
        font-size: 20px;
        padding-top: 13px;
    }

    .form-group input[type='text'], .form-group input[type='email'], .form-group input[type='password'] {
        padding-left: 60px;
    }

    .form-control {
        border: 1px solid #e1e1e1;
        -webkit-box-shadow: none;
        box-shadow: none;
        border-radius: 5px;
        -webkit-transition: all .3s ease;
        transition: all .3s ease;
        background-color: #fff;
        color: #858585;
        font-weight: 400;
        position: relative;
    }


    h3 {
        font-size: 35px;
    }



    .login-box .socials a {
        -webkit-box-shadow: 0 3px 2px 0 rgba(0, 0, 0, 0.12);
        box-shadow: 0 3px 2px 0 rgba(0, 0, 0, 0.12);
    }
    .socials a {
        width: 35px;
        height: 35px;
        background-color: #6893e1;
        border-radius: 50%;
        -webkit-box-shadow: 0 3px 2px 0 #516cd9;
        box-shadow: 0 3px 2px 0 #516cd9;
        text-align: center;
        color: #fff;
        padding-top: 10px;
        font-size: 16px;
        margin-right: 10px;
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }
