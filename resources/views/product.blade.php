@extends('layout.app')


@section('content')
<div class="container">
 
     @foreach($formati as $key => $formato)
    <div class="card-content">
       <h2>{{$key}}</h2>
       
       <div class="wrapp">
       @foreach($formato as $key=>$pasta)
       
            <div class="card">
                <img src="{{$pasta['src']}}" alt="">
            
                <div class="over">
                    <span><a href="{{ route('dettagli-prodotto',['id' => $key]) }}">{{$pasta['titolo']}}</a></span>
                </div>
            </div>
            @endforeach
       </div>
      
     </div>       
      @endforeach
    
    
</div>
    
@endsection

@section('title')
    Prodotti
@endsection