<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts Import -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Informations sur le site  -->
        <meta name="description" content="Descitption à écrire">
        <meta name="keywords" content="keyword, keyword">
        <meta name="author" content="Enid">
        
        <!-- Flavicon  -->


        <!-- Styles -->
        <link rel="stylesheet" href="./css/app.css">

        <!-- //? Document title  -->
        <title>@yield('title') Hogwarts</title>
    </head>

    <body class="body->test">
        <header>
            <nav>
                <h2 class="visually-hidden">Menu de Navigation</h2>
                <ol>
                   <li><a href="/hp">Harry Potter</a></li> 
                   <li><a href="/bs">Between us</a></li> 
                   <li><a href="#">Role Play</a></li> 
                   <li><a href="/"><img src="./img/home.svg" alt=""></a></li> 
                   <li><a href="/events">Even</a></li> 
                   <li><a href="/">Owls</a></li> 
                   <li><a href="/profil">Profil</a></li> 
                   <li><a href="#"><img src="" alt="search"></a></li>
                   <li><a href="/login"><img src="" alt="out"></a></li>
                </ol>
        ^    </nav>
        </header>

        <!-- //?CONTENT   -->
        @yield('content')

    </body>


</html>
