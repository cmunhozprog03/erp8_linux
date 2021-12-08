@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Empresa</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <form action="{{ route('empresa.store') }}" method="POST">
                            @include('admin.company._partials.form')
                            <div class="row justify-content-around">
                                <a href="" class="btn btn-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-success">Salvar</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="asset('css/w3.css')">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
