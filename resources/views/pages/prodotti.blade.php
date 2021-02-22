@extends('layout.app')
@section('title')
    Le nostre paste
@endsection

@section('main')
<main>
    <div class="container">
        <h1>Le Lunghe</h1>
            <div class="card-container">
                @foreach ($data as $prodotto)
                @if($prodotto['tipo'] == "lunga")
                    @include('partials.item')
                @endif
                @endforeach
            </div>
        <h1>Le Corte</h1>
            <div class="card-container">    
                @foreach ($data as $prodotto)
                @if($prodotto['tipo'] == "corta")
                    @include('partials.item')
                @endif
                @endforeach
            </div>
        <h1>Le Cortissime</h1>
            <div class="card-container">
                @foreach ($data as $prodotto)
                @if($prodotto['tipo'] == "cortissima")
                    @include('partials.item')
                @endif
                @endforeach
            </div>
    </div>
</main>
@endsection
