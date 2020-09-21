@extends('layouts.homelayout')

@section('pastas')

    <div id="cards-container" class="auto-margin">

        <h2>Le Lunghe</h2>
        <div class="showcase">

            @foreach ($data as $pasta)
                @if ($pasta["tipo"] == "lunga")
                
                <div class="card">
                    <img src="{{ $pasta['src'] }}" alt="img">
                </div>
                
                @endif
            @endforeach

        </div>

        <h2>Le Corte</h2>
        <div class="showcase">

            @foreach ($data as $pasta)
                @if ($pasta["tipo"] == "corta")
                
                <div class="card">
                    <img src="{{ $pasta['src'] }}" alt="img">
                </div>
                
                @endif
            @endforeach

        </div>

        <h2>Le Cortissime</h2>
        <div class="showcase">

            @foreach ($data as $pasta)
                @if ($pasta["tipo"] == "cortissima")
                
                <div class="card">
                    <img src="{{ $pasta['src'] }}" alt="img">
                </div>
                
                @endif
            @endforeach

        </div>


    </div>
@endsection