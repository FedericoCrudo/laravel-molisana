@extends('layout.app')


@section('content')
    <div class="container">
        <div class="info-prodotto">
            @dd($prodotto);
        </div>
    </div>

@endsection
@section('title')
    Dettagli prodotto
@endsection