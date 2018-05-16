@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Lista dos Teste</div>

                    <div class="panel-body">
                        @foreach($admins as $admin)
                            <p>{{$admin->nome}} - <a href="{{url('edit/'.$admin->id)}}">Editar</a></p>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Histórico modificação</div>

                    <div class="panel-body">
                        @foreach($admins as $admin)
                            @foreach($admin->revisionHistory as $history)
                                <li>{{ $history->userResponsible()->first_name }} Alterou {{ $history->fieldName() }} de: {{ $history->oldValue() }} para: {{ $history->newValue() }}</li>
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
