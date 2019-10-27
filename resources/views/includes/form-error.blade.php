@if ($errors->any())
    <div class="alert alert-danger alert-dismissable">
        <button type="buttom" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        <h4><i class="icon fa fa-ban"></i> El formulario contiene errores</h4>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif