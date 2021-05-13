<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />
    <title>Paises</title>
</head>
<body>

<br>
    <center><h1 style="color: rgb(104, 101, 101)">Lista de paises</h1></center>
<br>
<br>
<br>
            <!-- Vamos a traer el arreglo -->
    <table class="table table-dark" >
        <tr>
            <th class="text-success">Nombre</th>
            <th class="text-info">Capital</th>
            <th class="text-danger">Moneda</th>
            <th class="text-warning">Poblacioón</th>
        </tr>


    @foreach ( $naciones as $nombre => $nacion )
        <tr>
            <td class="table-active Gris"> {{ $nombre }} </td>
            <td class="table-active Gris "> {{ $nacion ["capital"] }} </td>
            <td class="table-active Gris"> {{ $nacion ["moneda"] }} </td>
            <td class="table-active Gris"> {{ $nacion ["poblacion"] }} </td>
        </tr>
    @endforeach

    </table>
<br>
<br>
<br>
<br>

<br>
    <center><h2 style="color: rgb(104, 101, 101)">VIVA EL PARO NACIONAL</h2></center>
    <center><h2 style="color: rgb(104, 101, 101)">VIVA EL PARO NACIONAL</h2></center>
    <center><h2 style="color: rgb(104, 101, 101)">VIVA EL PARO NACIONAL</h2></center>
    <center><h2 style="color: rgb(104, 101, 101)">VIVA EL PARO NACIONAL</h2></center>
    <center><h2 style="color: rgb(104, 101, 101)">VIVA EL PARO NACIONAL</h2></center>
    <center><h2 style="color: rgb(104, 101, 101)">VIVA EL PARO NACIONAL</h2></center>
    <center><h2 style="color: rgb(104, 101, 101)">VIVA EL PARO NACIONAL</h2></center>

</body>
</html>
