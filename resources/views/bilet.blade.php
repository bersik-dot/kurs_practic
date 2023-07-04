<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ URL('/css/app.css') }}" />
    <title>Билет</title>
</head>
<body class="rv">
    <div class="pol">
    <div class="stros">
        <div class="str3">
            Билет на сеанс “Иная”
        </div>
        <div class="stris">
        <div class="str4">
           Время начала сеанса:{{$_SESSION['t']}}
        </div>
        <div class="str4">
            Время начала сеанса:{{$_SESSION['z']}}
         </div>
         <div class="str4">
            Ряд:{{$_SESSION['r']}}
         </div>
         <div class="str4">
            Место:{{$_SESSION['m']}}
         </div>
    </div>
        <div class="tp"><a href="/" class="kin111">Вернутся на главную страницу</a></div>
        <div class="sm">Сделайте фотографию билета и покажите при проходе в кинозал</div>

       </div>
</body>
</html>