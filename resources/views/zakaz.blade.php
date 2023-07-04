<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ URL('/css/app.css') }}" />
    <title>Покупка билета</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="rv">
    <div class="pol">
    <div class="pols">
     <div class="res">  <div class="vh11">
            Заказ билета
        </div>
        @if($errors->any())
            <div>
                <ul>
                @foreach ($errors->all() as $error)
                    <li class="list-group-item">{{$error}}</li>
                @endforeach
                </ul>
            </div>    
        @endif
        <div class="rs">Цена билета:200₽</div>
        <div class="rs">Количество рядов:5</div>
        <div class="rs">Количество мест в ряду:5</div></div>
        <form method="POST" action="{{ route('zakaz')}}" class="vh2">
            @csrf
            <input class='form-control' type="text" name="ryad" id="ryad" autofocus value="{{old('email')}}" placeholder="Выберите ряд">
            <input class='form-control' type="text" name="mesto" id="mesto" placeholder="Выберите место">
            <input class='form-control' type="text" name="numb_kart" id="numb_kart" placeholder="Укажите номер карты">
            <input class='form-control' type="text" name="year" id="year" placeholder="Месяц/год">
            <input class='form-control' type="text" name="CVC" id="CVC" placeholder="CVC код">
            <button type="submit" class="btn btn-warning">Заказать билет</button>
        </form>    
    </div>
    </div>
   
</body>
</html>