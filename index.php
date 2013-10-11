<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="utf-8">
  <title>Chris</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="prefixfree.min.js"></script>
  <style>
    @keyframes pulse {
      0% {
        box-shadow: 0px 0px 30px 0px #fff;
      }
      100% {
        box-shadow: 0px 0px 150px 0px #fff;
      }
    }
    @keyframes rot {
      0% {
        transform: rotate(0deg) translate(153px);
        box-shadow: 0px 0px 100px 5px #fff;
      }
      50% {
        box-shadow: 0px 0px 100px 40px #fff;
      }
      100% {
        transform: rotate(360deg) translate(153px);
        box-shadow: 0px 0px 100px 5px #fff;
      }
    }
    html, body { height: 100%; min-height: 100%; }
    body { background: linear-gradient(to bottom, #d0e4f7 0%,#73b1e7 24%,#0a77d5 50%,#539fe1 79%,#87bcea 100%); }
    .container { width: 960px; height: 450px; margin: 150px auto 0 auto; position: relative; }
    .outer-circle { width: 300px; height: 300px; background: #0a77d5; border: 3px solid #fff; position: relative; border-radius: 300px; margin: 15px auto; box-shadow: 0px 0px 50px 0px #fff; animation: pulse 2s infinite linear alternate; }
    .inner-circle { width: 228px; height: 228px; border: 2px solid #fff; border-radius: 250px; position: relative; top: 35px; left: 35px;}
    .radial { background-image: -webkit-radial-gradient(center center, circle cover, #fff, #0a77d5); }
    .glow {
      width: 1px;
      height: 1px;
      border-radius: 1px;
      position: absolute;
      top: 145px;
      left: 148px;
      animation: rot 5s infinite linear;
      background-color: #fff;
  /*    transform: translate(153px);
      box-shadow: 0px 0px 50px 25px #fff;*/
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="outer-circle">
      <div class="inner-circle radial"></div>
      <div class="glow">&nbsp;</div>
    </div>
  </div>
</body>
</html>
