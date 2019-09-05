<div id="sidebar-wrapper">
    <div class="sidebar-heading">
        <img src="http://estoque.siscompra.xyz/img/logo.png" alt=""><span>SISCOMPRAS</span> - <small>{{env('APP_VERSION')}}</small>
    </div>
    <div class="list-group list-group-flush">
        <a href="/" class="list-group-item list-group-item-action"><i class="fas fa-home"></i>Inicio</a>
{{--        <a href="#collapseEstoque" class="list-group-item list-group-item-action" data-toggle="collapse"  role="button" aria-expanded="false" aria-controls="collapseEstoque">--}}
{{--            <i class="fas fa-outdent"></i>Estoque--}}
{{--        </a>--}}
{{--            <div class="collapse sub-menu" id="collapseEstoque">--}}
{{--                <div>--}}
{{--                <a href="#" class="list-group-item list-group-item-action">Entrada Estoque</a>--}}
{{--                <a href="#" class="list-group-item list-group-item-action">Saida Estoque</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-users"></i>Funcionários</a>--}}
{{--        <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-box-open"></i>Serviços</a>--}}
{{--        <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-sitemap"></i>Categorias</a>--}}
        <a href="{{route('clients')}}" class="list-group-item list-group-item-action"><i class="fas fa-people-carry"></i>Clientes</a>
{{--        <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-chart-bar"></i>Relatórios</a>--}}
    </div>
</div>
