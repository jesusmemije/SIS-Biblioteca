@if (session("mensaje"))
    <div class="alert alert-success alert-dismissable">
        <button type="buttom" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        <h4><i class="icon fa fa-check"></i> Mensaje sistema Biblioteca</h4>
        <ul>
            <li>{{ session("mensaje") }}</li>
        </ul>
    </div>
@endif