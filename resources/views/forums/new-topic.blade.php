@extends('layout.layout')

@section('title')
    Harry Potter :
@endsection


@section('content')

<div class="bg">
<h1 class="main_title">Hogwarts</h1>

<p class="nmto">Nothing more to see here! </p>
</div>
<main class="main-sec">
   

    <section>
        <h2>New</h2>
        <span class="lt__ariane">Forum ↣ category</span>

        <form action="/topics" method='post'>
            @csrf 
            <input type="text" name="title">
            <input type="file" name="img">
            <textarea name="body" id="" cols="30" rows="10">Votre message</textarea>
            <button>Send</button>
        </form>
    </section>
    <!-- Cathegories -->
    
 
</main>
