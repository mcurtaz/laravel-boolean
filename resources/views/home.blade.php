@extends('layouts.homelayout')

@section('pastas')

    <div id="cards-container" class="auto-margin">

        <h2>Le Lunghe</h2>
        <div class="showcase">

            @foreach ($lunghe as $pasta)
                <div class="card">
                    <img src="{{ $pasta['src'] }}" alt="img">
                </div>
            @endforeach

        </div>

        <h2>Le Corte</h2>
        <div class="showcase">

            @foreach ($corte as $pasta)
                <div class="card">
                    <img src="{{ $pasta['src'] }}" alt="img">
                </div>
            @endforeach

        </div>

        <h2>Le Cortissime</h2>
        <div class="showcase">

            @foreach ($cortissime as $pasta)
                <div class="card">
                    <img src="{{ $pasta['src'] }}" alt="img">
                </div>
            @endforeach

        </div>


    </div>
@endsection