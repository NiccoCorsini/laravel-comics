@extends('layouts.main')

@section('content')

<div class="container comics">
    @foreach ($comics as $card)

    <div class="card">
        <img src="{{$card['image']}}" alt="cover">
        <h4>{{$card['title']}}</h4>
    </div>
        
    @endforeach

</div>
<div class="minicontainer">
    <a class="btn btn-primary" href="#">LOAD MORE</a>
</div>

@endsection

            
   