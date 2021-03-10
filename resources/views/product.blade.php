@extends('layout.app')


@section('content')
<div class="container">
 <div class="card-content">
     @foreach($formati as $formato)
        <div class="card">
            <img src="{{$formato['src']}}" alt="">
        
            <div class="over">
                <span>{{$formato['titolo']}}</span>
            </div>
        </div>
      @endforeach
    </div>
    
</div>
    
@endsection

@section('title')
    Prodotti
@endsection