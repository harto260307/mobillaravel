@extends('layouts.app')

@section('content')

    <h3>Tambah Mobil</h3>
    <hr>
    {!! Form::open(['action' => 'MobilDijualsController@store','method'=>'POST']) !!}
    
        Form::component('bsText', 'components.form.text', ['name', 'value' => null, 'attributes' => []]);
    
    {!! Form::close() !!}

@endsection