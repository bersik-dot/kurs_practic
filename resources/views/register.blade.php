<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ URL('/css/app.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Регистрация</title>
</head>
<body class="rv">
    <div class="pol">
    <div class="pole">
        <div class="vh1">
            Регистрация
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
        <form method="POST" action="{{ route('register')}}" class="vh2">
            @csrf
            <input class="form-control" type="text" name="name" id="name" autofocus value="{{old('name')}}" placeholder="Введите Имя">
            <input class="form-control" type="text" name="sname" id="sname" value="{{old('sname')}}" placeholder="Введите Фамилию">
            <input class="form-control" type="email" name="email" id="email" value="{{old('email')}}" placeholder="Введите email">
            <input class="form-control" type="password" name="password" id="password" placeholder="Введите пароль">
            <input class="form-control" type="password_confirmation" name="password_confirmation" id="password_confirmation" placeholder="Повторите пароль">
            <button type="submit" class="btn btn-warning">Отправить</button>
        </form>    
    </div>
    </div>
   
</body>
</html>