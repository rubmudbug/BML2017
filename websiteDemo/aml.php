
<!DOCTYPE html>
<html lang="zh-CN" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="resouse/title.png">

    <title>GiLiGiLi</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css/aml.css" rel="stylesheet">
</head>
<!-- NAVBAR
================================================== -->
<body>
<div class="navbar-wrapper" >
    <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand action" href="#">GiLiGiLi</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">首页</a></li>
                        <li><a href="#rank">排行榜</a></li>
                        <li><a href="#bbs">论坛</a></li>
                        <li><a href="#view">意见</a> </li>
                        <li><a href="#about">关于</a> </li>
                        <li><a href="#contact">友情链接</a></li>
                        <li class="dropdown">
                            <a href="#setting" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">设置 <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="">立即注册</a></li>
                                <li class="active"><a href="log.html">马上登陆</a></li>
                                <li><a href="#">现在注销</a></li>
                                <li role="separator" class="divider"></li>
                                <li class="dropdown-header">其它</li>
                                <li><a href="#">将网站分享给好友</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>
</div>
<form class="amlFrom" action="aml.php" method="post">
    <div class="page">
    <input type="submit" class="btn btn-defult " name="previous" value="上一页">
    <input type="submit" class="btn btn-defult " name="next" value="下一页">
    </div>
</form>
<?php

  if (!empty ($_COOKIE['flag'])){
      $flag=$_COOKIE['flag'];
      $flag=(int)$flag;
      getPage($flag);
  }
else {
      $flag = 1 ;
      $flag=(string)$flag;
      setcookie("flag",$flag,time()+5400);
    //重定向浏览器
      header("http://localhost/websiteDemo/aml.php");
//确保重定向后，后续代码不会被执行
    exit;
  }
if(@$_POST['next']=="下一页"){
    $cook=(int)$_COOKIE["flag"];
    if($cook<8){
        $cook++;
        $cook=(string)$cook;
        setcookie("flag",$cook);
        header("Location: http://localhost/websiteDemo/aml.php");
    }

}
else if(@$_POST['previous']=="上一页"){
    $coo=(int)$_COOKIE["flag"];
    if($coo>0) {
        $coo--;
        $coo = (string)$coo;
        setcookie("flag", $coo);
        header("Location: http://localhost/websiteDemo/aml.php");
    }
}



function getPage($p){
    $p=(int)$p;
    if($p<=8){
        $p=(string)$p;
        echo '<img id="amlImage" src="resouse/amlls/0'.$p.'.jpg" >';
    }
    else{
        echo "<script> alert('你看到最后一页了') </script>";
    }


}



?>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/plugins.js"></script>
<script src="js/jquery.js"></script>
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>\')</script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don\'t actually copy the next line! -->
<script src="../../assets/js/vendor/holder.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->


</body>

</html>