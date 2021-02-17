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
        <title>@yield('title') : Hogwarts</title>
    </head>


    <body class="body->test">
        <!-- //?CONTENT   -->
        @yield('content')

    </body>


</html>
