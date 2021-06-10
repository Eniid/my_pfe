@extends('layout.layout')

@section('title')
New event |
@endsection

@section('content')

<main class="main-sec">
   

    <section class="forum_cent main_forum">
        <h2>New event</h2>

        <form action="/events/create" method="POST">
            @csrf
            <div>
                <label for="name">Event's name</label>
                <input type="text" name="name" id="name" placeholder="Give your event a name">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <label for="desc">Event descitption</label>
                <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Description of the event for everyone to see"></textarea>
                @error('desc')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div>
                <label for="date">Date</label>
                <input type="date" id="date" name="date">
                @error('date')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <label for="place">Place</label>
                <input type="text" name="place" id="place" placeholder="Skype ? Discord ? An adress ?">
                @error('place')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <label for="desc">Message for the participents</label>
                <textarea name="private_desc" id="desc" cols="30" rows="10" placeholder="Here you can give information for only the participents. For exeple the adress or the link for the reunion"></textarea>
                @error('private_desc')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>


            <button class="cta cta_v">Create an event</button>
        </form>
    </section>
    
 
</main>

@endsection
