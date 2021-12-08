@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Empresa</h1>
@stop

@section('content')
    <div class="table-responsive">
        <table class="table table-hover table-striped table-bordered">
            <thead>
                <tr>
                    <th>Razão Social</th>
                    <th>Nome Fantasia</th>
                    <th>Telefone</th>
                    <th>Whatsapp</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($companies as $company)
                    <tr>
                        <td>{{ $company->social_name }}</td>
                        <td>{{ $company->fantasy_name }}</td>
                        <td>{{ $company->phone1 }}</td>
                        <td>{{ $company->mobile }}</td>
                        <td>
                            <a href="" class="btn btn-info btn-sm">Editar</a>
                            <a href="" class="btn btn-success btn-sm">Ver</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
