@extends('layouts.app')
@section('titulo','Tarefas')

@section('conteudo')
<div>
    <div class="alert-info">
        <p>.</p>
    </div>    
    <div class="page-header">
        <a href="/tarefa"><h1>@yield('titulo')</h1></a>
    </div>
    <div class="navbar">
        <a class="btn btn-primary" href="/tarefa/teste">Sincronizar</a>
        @if (true)
        <a class="btn btn-primary" href="/tarefa/showtags">Ver Tags</a>
        @endif
    </div>

    @php
    use Illuminate\Http\Request;
    @endphp
    @if (request()->path() == 'tarefa/teste')
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title" href="#collapse1" data-toggle="collapse">
                {{ isset($te['te_id']) ? '#'.$te['te_id'] : ''}}
                {{ isset($te['te_desc']) ? ' - '.$te['te_desc'] : 'Cronômetro desligado'}}
            </h3>
        </div>
        <div class="panel-body panel-collapse collapse" id="collapse1">
            <p><label>Toggl Response:</label>
                <pre>{{ $te['te_body'] }}</pre>
            </p>
            <p><label>Habitica Response:</label>
                <pre>{{ $hr['hr_body'] }}</pre>
            </p>
        </div>
    </div>
    @endif
    @if (request()->path() == 'tarefa/showtags')
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr><th>Tag Name</th><th>Tag ID</th></tr>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                    <tr>
                        <td>{{ $tag['name'] }}</td>
                        <td>{{ $tag['id'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td><label>Total de elementos:</label></td>
                        <td><?php echo count($tags); ?></td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <pre><?php print_r($tags) ?></pre>
    @endif
</div>
@endsection