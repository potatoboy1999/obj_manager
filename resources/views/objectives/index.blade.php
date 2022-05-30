@extends('layouts.admin')

@section('title', 'Objetivos')
    
@section('style')
    <style>
        thead tr th{
            background-color: #3c4b64!important;
            color: white!important;
        }
        td.t_role_row{
            background-color: #8b9bb7!important;
        }
        td.t_theme_row{
            background-color: #cccccc!important;
        }
        td.t_red {
            background-color: rgb(236, 29, 29);
        }
        td.t_green {
            background-color: green;
        }
        td.t_yellow {
            background-color: rgb(172, 172, 39);
        }
    </style>
@endsection

@section('content')

<div class="modal fade" id="roleModal" tabindex="-1" aria-labelledby="roleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="roleModalLabel">Nuevo Rol</h5>
                <button class="btn-close" type="button" data-coreui-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="role_form" action="" method="POST">
                    <div class="row">
                        <div class="col-sm-2">
                            <label>#</label>
                            <input class="form-control" type="number" value="01" readonly>
                        </div>
                        <div class="col-sm-10">
                            <label for="role_desc">Nombre</label>
                            <input id="role_desc" class="form-control" type="text" name="desc" value="">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="role_save" class="btn btn-info text-white" type="button">Guardar</button>
            </div>
        </div>
    </div>
</div>
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="card mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-9 col-lg-10 py-1">
                        <div class="row">
                            <div style="flex: 0 1;">
                                <label>Nombre:</label>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control d-inline w-1">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 col-lg-2 py-1">
                        <div class="">
                            <a href="javascript:;" class="btn btn-success w-100 text-white" data-coreui-toggle="modal" data-coreui-target="#roleModal">+ Nuevo Rol</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">Rol 01: Asegurar la calidad y confiabilidad de la red eléctrica de distribución de Coelvisac para el suministro de energía</div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-12 col-sm-9 col-lg-10">
                        <div class="row">
                            <div style="flex: 0 1;">
                                <label>Nombre:</label>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control d-inline w-1" data-np-checked="1">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 col-lg-2">
                        <div class="">
                            <a href="javascript:;" class="btn btn-success w-100 text-white" data-coreui-toggle="modal" data-coreui-target="#roleModal">+ Nuevo Tema</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Tema 1: Distribución de la Red Eléctrica</div>
                    <div class="card-body overflow-auto p-0">
                        <table class="table table-bordered m-0">
                            <thead>
                                <tr>
                                    <th class="text-center align-middle" width="90">COD</th>
                                    <th class="text-center align-middle">Objetivo</th>
                                    <th class="text-center align-middle">Actividades Principales</th>
                                    <th class="text-center align-middle" width="120">Fecha Inicio</th>
                                    <th class="text-center align-middle" width="120">Fecha Fin</th>
                                    <th class="text-center align-middle">Procedimiento/<br>Politica</th>
                                    <th class="text-center align-middle">Documento<br>Adjunto</th>
                                    <th class="text-center align-middle">Estado</th>
                                    <th class="text-center align-middle">Comentarios</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center align-middle" rowspan="3">Op_01-1</td>
                                    <td class="align-middle" rowspan="3">Evitar Interrupciones Masivas</td>
                                    <td class="align-middle">Elaborar e implementar plan</td>
                                    <td class="text-center align-middle">05-Junio-22</td>
                                    <td class="text-center align-middle">25-Junio-22</td>
                                    <td class="text-center align-middle"><a href="#" class="btn btn-warning btn-sm">
                                        <svg class="icon">
                                            <use xlink:href="{{asset("icons/sprites/free.svg")}}#cil-data-transfer-up"></use>
                                        </svg>
                                    </a></td>
                                    <td class="text-center align-middle"><a href="#" class="btn btn-warning btn-sm">
                                        <svg class="icon">
                                            <use xlink:href="{{asset("icons/sprites/free.svg")}}#cil-data-transfer-up"></use>
                                        </svg>
                                    </a></td>
                                    <td class="t_red"></td>
                                    <td class="text-center align-middle t_comments"><a href="#" class="btn btn-success btn-sm">
                                        <svg class="icon">
                                            <use xlink:href="{{asset("icons/sprites/free.svg")}}#cil-notes"></use>
                                        </svg>
                                    </a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">Implementar sistemas de protección suficientes</td>
                                    <td class="text-center align-middle">05-Junio-22</td>
                                    <td class="text-center align-middle">25-Junio-22</td>
                                    <td class="text-center align-middle"><a href="#" class="btn btn-warning btn-sm">
                                        <svg class="icon">
                                            <use xlink:href="{{asset("icons/sprites/free.svg")}}#cil-data-transfer-up"></use>
                                        </svg>
                                    </a></td>
                                    <td class="text-center align-middle"><a href="#" class="btn btn-warning btn-sm">
                                        <svg class="icon">
                                            <use xlink:href="{{asset("icons/sprites/free.svg")}}#cil-data-transfer-up"></use>
                                        </svg>
                                    </a></td>
                                    <td class="t_red"></td>
                                    <td class="text-center align-middle t_comments"><a href="#" class="btn btn-success btn-sm">
                                        <svg class="icon">
                                            <use xlink:href="{{asset("icons/sprites/free.svg")}}#cil-notes"></use>
                                        </svg>
                                    </a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">Clientes libres deben contar con sistemas de protección dentro de sus operaciones</td>
                                    <td class="text-center align-middle">05-Junio-22</td>
                                    <td class="text-center align-middle">25-Junio-22</td>
                                    <td class="text-center align-middle"><a href="#" class="btn btn-warning btn-sm">
                                        <svg class="icon">
                                            <use xlink:href="{{asset("icons/sprites/free.svg")}}#cil-data-transfer-up"></use>
                                        </svg>
                                    </a></td>
                                    <td class="text-center align-middle"><a href="#" class="btn btn-warning btn-sm">
                                        <svg class="icon">
                                            <use xlink:href="{{asset("icons/sprites/free.svg")}}#cil-data-transfer-up"></use>
                                        </svg>
                                    </a></td>
                                    <td class="t_red"></td>
                                    <td class="text-center align-middle t_comments"><a href="#" class="btn btn-success btn-sm">
                                        <svg class="icon">
                                            <use xlink:href="{{asset("icons/sprites/free.svg")}}#cil-notes"></use>
                                        </svg>
                                    </a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-4 d-none">
            <div class="card-header">Matriz de Objetivos</div>
            <div class="card-body overflow-auto">
                <div class="row">
                    <div class="col-12">
                        <div class="text-end mb-2">
                            <a href="javascript:;" class="btn btn-success text-white" data-coreui-toggle="modal" data-coreui-target="#roleModal">+ Nuevo Rol</a>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center align-middle" width="90">COD</th>
                            <th class="text-center align-middle">Objetivo</th>
                            <th class="text-center align-middle">Actividades Principales</th>
                            <th class="text-center align-middle" width="120">Fecha Inicio</th>
                            <th class="text-center align-middle" width="120">Fecha Fin</th>
                            <th class="text-center align-middle">Procedimiento/<br>Politica</th>
                            <th class="text-center align-middle">Documento<br>Adjunto</th>
                            <th class="text-center align-middle">Estado</th>
                            <th class="text-center align-middle">Comentarios</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="t_role_row" colspan="100%">Rol 01: Asegurar la calidad y confiabilidad de la red eléctrica de distribución de Coelvisac para el suministro de energía</td>
                        </tr>
                        <tr>
                            <td class="t_theme_row" colspan="100%">Tema 1: Distribución de la Red Eléctrica</td>
                        </tr>
                        <tr>
                            <td class="text-center align-middle" rowspan="3">Op_01-1</td>
                            <td class="align-middle" rowspan="3">Evitar Interrupciones Masivas</td>
                            <td class="align-middle">Elaborar e implementar plan</td>
                            <td class="text-center align-middle">05-Junio-22</td>
                            <td class="text-center align-middle">25-Junio-22</td>
                            <td class="text-center align-middle"><a href="#" class="btn btn-warning btn-sm">
                                <svg class="icon">
                                    <use xlink:href="{{asset("icons/sprites/free.svg")}}#cil-data-transfer-up"></use>
                                </svg>
                            </a></td>
                            <td class="text-center align-middle"><a href="#" class="btn btn-warning btn-sm">
                                <svg class="icon">
                                    <use xlink:href="{{asset("icons/sprites/free.svg")}}#cil-data-transfer-up"></use>
                                </svg>
                            </a></td>
                            <td class="t_red"></td>
                            <td class="text-center align-middle t_comments"><a href="#" class="btn btn-success btn-sm">
                                <svg class="icon">
                                    <use xlink:href="{{asset("icons/sprites/free.svg")}}#cil-notes"></use>
                                </svg>
                            </a></td>
                        </tr>
                        <tr>
                            <td class="align-middle">Implementar sistemas de protección suficientes</td>
                            <td class="text-center align-middle">05-Junio-22</td>
                            <td class="text-center align-middle">25-Junio-22</td>
                            <td class="text-center align-middle"><a href="#" class="btn btn-warning btn-sm">
                                <svg class="icon">
                                    <use xlink:href="{{asset("icons/sprites/free.svg")}}#cil-data-transfer-up"></use>
                                </svg>
                            </a></td>
                            <td class="text-center align-middle"><a href="#" class="btn btn-warning btn-sm">
                                <svg class="icon">
                                    <use xlink:href="{{asset("icons/sprites/free.svg")}}#cil-data-transfer-up"></use>
                                </svg>
                            </a></td>
                            <td class="t_red"></td>
                            <td class="text-center align-middle t_comments"><a href="#" class="btn btn-success btn-sm">
                                <svg class="icon">
                                    <use xlink:href="{{asset("icons/sprites/free.svg")}}#cil-notes"></use>
                                </svg>
                            </a></td>
                        </tr>
                        <tr>
                            <td class="align-middle">Clientes libres deben contar con sistemas de protección dentro de sus operaciones</td>
                            <td class="text-center align-middle">05-Junio-22</td>
                            <td class="text-center align-middle">25-Junio-22</td>
                            <td class="text-center align-middle"><a href="#" class="btn btn-warning btn-sm">
                                <svg class="icon">
                                    <use xlink:href="{{asset("icons/sprites/free.svg")}}#cil-data-transfer-up"></use>
                                </svg>
                            </a></td>
                            <td class="text-center align-middle"><a href="#" class="btn btn-warning btn-sm">
                                <svg class="icon">
                                    <use xlink:href="{{asset("icons/sprites/free.svg")}}#cil-data-transfer-up"></use>
                                </svg>
                            </a></td>
                            <td class="t_red"></td>
                            <td class="text-center align-middle t_comments"><a href="#" class="btn btn-success btn-sm">
                                <svg class="icon">
                                    <use xlink:href="{{asset("icons/sprites/free.svg")}}#cil-notes"></use>
                                </svg>
                            </a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
    <script>
        console.log("script");
        $("#role_save").on("click", function(ev){
            ev.preventDefault();
            console.log("Save New Role");
        });
    </script>
@endsection