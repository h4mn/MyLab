@extends('layouts.app')
@section('titulo','Produtos')

@section('conteudo')
<div>
    <div class="alert-info">
        <p>.</p>
    </div>    
    <div class="page-header">
        <a href="/produto"><h1>@yield('titulo')</h1></a>
    </div>
    <div class="navbar">
        <a class="btn btn-primary" href="/tarefa/teste">Sincronizar</a>
        @if (true)
        <a class="btn btn-primary" href="/tarefa/showtags">Ver Tags</a>
        @endif
        <a class="btn btn-primary" href="/produto/apresentacao/1">Apresentações</a>
    </div>
    @php
    use Illuminate\Http\Request;
    @endphp
    @if (request()->path() == 'produto')
    <div class="well">
        <h3>Lista de produtos</h3>
    </div>
    @endif
    @if (request()->path() == 'produto/apresentacao/1')
    <h2>Apresentação #1</h2>
        @include('produtos.fernando')
    @endif
</div>
@endsection