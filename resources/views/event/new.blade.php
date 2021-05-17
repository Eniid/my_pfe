@extends('layout.layout')

@section('title')
New event |
@endsection

@section('content')

<main class="main-sec">
   

    <section>
        <h2>New event</h2>

        <form action="">
            <div>
                <label for="name">Event's name</label>
                <input type="text" id="name" placeholder="Give your event a name">

                <label for="desc">Event descitption</label>
                <textarea name="" id="desc" cols="30" rows="10">Votre message</textarea>
            </div>
            <div>
                <label for="date">Date</label>
                <input type="date" id="date">

                <label for="name">Place</label>
                <input type="text" id="name" placeholder="Skype ? Discord ? An adress ?">

                <label for="desc">Message for the participents</label>
                <textarea name="" id="desc" cols="30" rows="10">Only seenable bu the participents</textarea>
            </div>


            <button class="CTA">Create an event</button>
        </form>
    </section>
    
 
</main>

@endsection
