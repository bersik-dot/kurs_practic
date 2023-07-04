<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8">
        <meta name="keywords" content="kino, film, kinoteatr">
        <meta name="description" content="Киношка">
        <link rel="stylesheet" type="text/css" href="{{ URL('/css/app.css') }}" />
        <link  href="" rel="shortcut icon" type="img/x-icon">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
        <title>@yield('title')</title>
    </head>
    <body class="osn">
        
       <header>
        <div class="logo">
            <div class="logoimg"> <a href="/" title="На главную"><img src="../img/logotip.png" alt=""></a></div>
        <div class="logotext"><a href="/" title="На главную" id="logo">Киношка</a></div></div>

       <div class="nav"><a href="/onas" class="nav-items">О нас</a>
       <a href="/novinki" class="nav-items">Новинки</a>
       <a href="/akcii" class="nav-items">Акции</a></div>
@guest
<div class="righ"><div><a href="/avtoriz"  ><img src="../img/vhod.png" width="30" height="30" alt="Вход" class="navs-items"></a></div>
        <div><a href="/reg"  ><img src="../img/reg.png" width="30" height="30" alt="Регистрация" class="navs-items" id="reg"></a></div>
        @endguest 
        @auth
        <div class="righ">{{$_SESSION['n']}}
            {{$_SESSION['s']}}</div>
        <div><a href="/logout" ><img src="../img/vih.png" width="30" height="30" alt="Выход" class="navs-items" id="reg"></a></div>
        @endauth
        <div><a href="#"  ><img src="../img/utub.png" width="30" height="30" alt="Youtube" class="navs-items"></a></div>
       <div><a href="#"><img src="../img/insta.png" width="30" height="30" alt="Instagram" class="navs-items"></a></div>
       <div><a href="#"><img src="../img/teleda.png" width="30" height="30" alt="Telegram" class="navs-items"></a></div>
       <div><a href="#"><img src="../img/vk.png" width="30" height="30" alt="Vk" class="navs-items" id="vk"></a></div></div>
       </header>
@yield('main')
       <footer>
        <div class="logo">
            <div class="logoimg"> <a href="/" title="На главную"><img src="../img/logotip.png" alt=""></a></div>
        <div class="logotext"><a href="/" title="На главную" id="logo">Киношка</a></div></div>
    
    <div class="pod">Город Кострома<br>ул.Советская д.6 <br> Контакты: <br> +7 (900) 777-30-30 </div>
    <div class="pod1">Все сеансы начинаются с рекламно информационного блока. Точную продолжительность сеансов можно узнать в кинотеатре.</div>
    
        <div class="righ"><a href="#"  ><img src="../img/utub.png" width="30" height="30" alt="Youtube" class="navs-items"></a></div>
       <div><a href="#"><img src="../img/insta.png" width="30" height="30" alt="Instagram" class="navs-items"></a></div>
       <div><a href="#"><img src="../img/teleda.png" width="30" height="30" alt="Telegram" class="navs-items"></a></div>
       <div><a href="#"><img src="../img/vk.png" width="30" height="30" alt="Vk" class="navs-items" id="vk"></a></div></div>
    </footer>
        </body>
    </html>