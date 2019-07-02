@extends('layouts.app')
@section('titulo', 'Devlog')

@section('conteudo')
<div>
    <div class="alert-info">
        <p>.</p>
    </div>  
    <div class="page-header">
        <a href="/devlog"><h1>@yield('titulo')</h1></a>

    </div>
    <div class="panel-body">
        <?php print $output; ?>
        <!{ $output }>
        
    </div>
    <div class="page-footer">@h4mn</div>
</div>
@endsection