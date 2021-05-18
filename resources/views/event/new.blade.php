@extends('layout.layout')

@section('title')
New event |
@endsection

@section('content')

<main class="main-sec">
   

    <section>
        <h2>New event</h2>

        <form action="/events/create" method="POST">
            @csrf
            <div>
                <label for="name">Event's name</label>
                <input type="text" name="name" id="name" placeholder="Give your event a name">

                <label for="desc">Event descitption</label>
                <textarea name="desc" id="desc" cols="30" rows="10">Votre message</textarea>
            </div>
            <div>
                <label for="date">Date</label>
                <input type="date" id="date" name="date">

                <label for="place">Place</label>
                <input type="text" name="place" id="place" placeholder="Skype ? Discord ? An adress ?">

                <label for="desc">Message for the participents</label>
                <textarea name="private_desc" id="desc" cols="30" rows="10">Only seenable bu the participents</textarea>
            </div>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <button class="cta">Create an event</button>
        </form>
    </section>
    
 
</main>

@endsection
