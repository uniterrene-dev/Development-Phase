<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="MyHealth">
    <meta name="author" content="MyHealth">
    <title>My Health </title>

    <!-- Bootstrap -->
    <link href="static/css/bootstrap.min.css" rel="stylesheet">
    <link href="static/css/font-awesome.css" rel="stylesheet">
    <link href="static/css/style.css" rel="stylesheet">


    <script src="static/js/bootstrap.min.new.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>    

  </head>
  <body>
                <header>
                        <div class="container-fluid">
                                <div class="row">
                                        <div class="col-md-8">
                                                <p class="form-signin-heading">Welcome to My Health</p>
                                                {if !empty($logout_no_show) && $logout_no_show > 0 }{else} <a class="pad_left0" href="logout.php" role="button">Logout</a></br>
                                                <a class="pad_left0" href="index.php" role="button">Home</a>{/if}
                                        </div>
                                        <div class="col-md-4">
                                                <div class="logoImg">My Health</div>
                                                <!-- <img src="images/logo2.png" class="img-responsive" alt="Responsive image"> -->
                                        </div>
                                </div>
                        </div>
                </header>

