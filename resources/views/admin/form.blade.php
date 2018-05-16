@if(isset($admin))
    <form class="form-horizontal" method="POST" action="{{ URL('/update') }}">
        <input type="hidden" name="id" value="{{$admin->id}}">
@else
    <form class="form-horizontal" method="POST" action="{{ URL('/store') }}">
@endif
    {{ csrf_field() }}

    <div class="form-group">
        <label for="name" class="col-md-4 control-label">Nome</label>
        <div class="col-md-6">
            <input type="text" name="nome" placeholder="nome" class="form-control" @if(isset($admin)) value="{{$admin->nome}}" @endif>
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-md-4 control-label">Quantidade</label>
        <div class="col-md-6">
            <input type="number" name="quantidade" placeholder="quantidade" class="form-control" @if(isset($admin)) value="{{$admin->quantidade}}" @endif>
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-md-4 control-label">Inicio</label>
        <div class="col-md-6">
            <input type="text" name="inicio" placeholder="mm/dd/yyy" class="form-control" @if(isset($admin)) value="{{$admin->inicio}}" @endif>
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-md-4 control-label">Fim</label>
        <div class="col-md-6">
            <input type="text" name="fim" placeholder="mm/dd/yyy" class="form-control" @if(isset($admin)) value="{{$admin->fim}}" @endif>
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-md-4 control-label"></label>
        <div class="col-md-6">
            <button type="submit" class="form-control">Salvar</button>
        </div>
    </div>
</form>


