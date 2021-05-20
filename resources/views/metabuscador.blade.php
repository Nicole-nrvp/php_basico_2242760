<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha512-Dop/vW3iOtayerlYAqCgkVr2aTr2ErwwTYOvRFUpzl2VhCMJyjQF0Q9TjUXIo6JhuM/3i0vVEt2e/7QQmnHQqw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css" integrity="sha512-mG7Xo6XLlQ13JGPQLgLxI7bz8QlErrsE9rYQDRgF+6AlQHm9Tn5bh/vaIKxBmM9mULPC6yizAhEmKyGgNHCIvg==" crossorigin="anonymous" />
    <link rel="stylesheet" href="./estilo.css">
</head>
<body style="background-color: rgb(189, 245, 116)">

    <form class="form-horizontal"
    method="POST" action="{{ url ("buscar") }}"
        class="form-horizontal">
        @csrf
        <fieldset>

        <!-- Form Name -->
        <legend><center><h1 style="color: rgb(8, 8, 8)">Búsqueda en varios motores</h1></center></legend>
            <br>
            <br>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Ingrese el término de búsqueda ">1. Ingrese el término de búsqueda </label>
          <div class="col-md-4">
          <input id="termino" name="termino" type="text" placeholder="" class="form-control input-md">

          </div>
        </div>
        <br>

        <!-- Multiple Radios -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="motores">2. Seleccione motor de busqueda</label>
          <div class="col-md-4">
          <div class="radio">
            <label for="motores-0">
              <input type="radio" name="motores" id="motores-0" value="1" checked="checked">
              Google
            </label>
            </div>
          <div class="radio">
            <label for="motores-1">
              <input type="radio" name="motores" id="motores-1" value="2">
              Bing
            </label>
            </div>
          <div class="radio">
            <label for="motores-2">
              <input type="radio" name="motores" id="motores-2" value="3">
              Yahoo
            </label>
            </div>
          <div class="radio">
            <label for="motores-3">
              <input type="radio" name="motores" id="motores-3" value="4">
              Youtube
            </label>
            </div>
          <div class="radio">
            <label for="motores-4">
              <input type="radio" name="motores" id="motores-4" value="5">
              Baidu
            </label>
            </div>
          <div class="radio">
            <label for="motores-5">
              <input type="radio" name="motores" id="motores-5" value="6">
              Yandex
            </label>
            </div>
          <div class="radio">
            <label for="motores-6">
              <input type="radio" name="motores" id="motores-6" value="7">
              Gigablast
            </label>
            </div>
          <div class="radio">
            <label for="motores-7">
              <input type="radio" name="motores" id="motores-7" value="8">
              Duckduckgo
            </label>
            </div>
          <div class="radio">
            <label for="motores-8">
              <input type="radio" name="motores" id="motores-8" value="9">
              Findx
            </label>
            </div>
          <div class="radio">
            <label for="motores-9">
              <input type="radio" name="motores" id="motores-9" value="10">
              Naver
            </label>
            </div>
          </div>
        </div>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="singlebutton"></label>
          <div class="col-md-4">
            <button id="singlebutton" name="singlebutton" class="btn btn-success">Buscar</button>
          </div>
        </div>

        </fieldset>
        </form>

</body>
</html>
