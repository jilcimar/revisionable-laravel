<form class="form-horizontal" method="POST" action="{{ URL('/store') }}">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="name" class="col-md-4 control-label">Nome</label>
        <div class="col-md-6">
            <input type="text" name="nome" placeholder="nome" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-md-4 control-label">Quantidade</label>
        <div class="col-md-6">
            <input type="number" name="quantidade" placeholder="quantidade" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-md-4 control-label">Inicio</label>
        <div class="col-md-6">
            <input type="text" name="inicio" placeholder="mm/dd/yyy" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-md-4 control-label">Fim</label>
        <div class="col-md-6">
            <input type="text" name="fim" placeholder="mm/dd/yyy" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-md-4 control-label"></label>
        <div class="col-md-6">
            <button type="submit" class="form-control">Salvar</button>
        </div>
    </div>
</form>


