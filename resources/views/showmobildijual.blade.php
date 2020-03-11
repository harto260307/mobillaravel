@extends('layouts.app')

@section('content')
    <h3>
        Data Mobil {{$mobildijual->merek}}
    </h3>
    <hr>
    <ul class="list-group">

        <li class="list-group-item">Tipe : {{$mobildijual->tipe}}</li>
        <li class="list-group-item">Tahun : {{$mobildijual->tahun}}</li>
        <li class="list-group-item">Bahan Bakar : {{$mobildijual->bahanbakar}}</li>
    
    </ul>


@endsection