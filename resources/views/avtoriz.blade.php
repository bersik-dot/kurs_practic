<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ URL('/css/app.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Вход</title>
</head>
<body class="rv">
    <div class="pol">
    <div class="ppole">
        <div class="vh1">
            Вход
        </div>
        @if($errors->any())
            <div>
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
                </ul>
            </div>    
        @endif
        <form method="POST" action="{{ route('login')}}" class="vh2">
            @csrf
            <input class="form-control" type="email" name="email" id="email" autofocus value="{{old('email')}}" placeholder="Введите email">
            <input class="form-control" type="password" name="password" id="password" placeholder="Введите пароль">
            <button type="submit" class="btn btn-warning" >Отправить</button>
        </form>    
    </div>
    </div>
   
</body>
</html>