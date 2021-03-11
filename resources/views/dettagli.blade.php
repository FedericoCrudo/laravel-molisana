@extends('layout.app')

@section('fontaw')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
@endsection

@section('content')
    <div class="container">
        <div class="info-prodotto">
           <h2>{{$prodotto['titolo']}}</h2>
           <div class="img-prodotto">
                <img src="{{$prodotto['src-h']}}" alt="">
           </div>
            <div class="description">
                <div class="desc">{!!$prodotto['descrizione']!!}</div>
                <div class="section-box">
                    <div class="box-info">
                        <i class="fas fa-info"></i>
                        <span>{{$prodotto['tipo']}}</span>
                    </div>
                    <div class="box-info">
                        <i class="far fa-clock"></i>
                        <span>{{$prodotto['cottura']}}</span>
                    </div>
                    <div class="box-info">
                        <i class="fas fa-balance-scale-right"></i>
                        <span>{{$prodotto['peso']}}</span>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

@endsection
@section('title')
    Dettagli prodotto
@endsection