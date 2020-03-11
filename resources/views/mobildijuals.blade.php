@extends('layouts.app')

@section('content')
    <h3>
        List Mobil Dijual <span class="pull-right"><a href ="/mobildijuals/create" class="btn btn-default">Tambah Mobil</a></span>
    </h3>
    @if(count($mobildijuals))
        <ul class="list-group">
            @foreach($mobildijuals as $mobildijual)
                <li class="listgroupitem">
                    <a href="/mobildijuals/{{$mobildijual->id}}">
                        {{$mobildijual->merek}}
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        <p>mobil tidak ditemukan</p>
    @endif

@endsection