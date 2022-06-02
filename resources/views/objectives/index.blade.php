@extends('layouts.admin')

@section('title', 'Objetivos')
    
@section('style')
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <style>
        thead tr th{
            background-color: #51607c!important;
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
        #ui-datepicker-div{
            z-index: 10000!important;
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
                        <div class="col-12">
                            <div class="form-group py-1">
                                <div class="row">
                                    <div class="col-6">
                                        <label class="form-label" for="role_sel">Rol:</label>
                                    </div>
                                    <div class="col-6 text-right">
                                        <div class="form-check form-switch float-end">
                                            <input class="form-check-input new_item_switch" id="newRoleSwitch" name="new_role_switch" type="checkbox" data-object="role">
                                            <label class="form-check-label" for="newRoleSwitch">Nuevo</label>
                                        </div>
                                    </div>
                                </div>    
                                <!--<input id="role_desc" class="form-control" type="text" name="desc" value="">-->
                                <select class="form-select" name="role_sel" id="role_sel">
                                    <option value="1">01: Asegurar la calidad y confiabilidad de la red electrica de distribucion de Coelvisac para el suministro de energía</option>
                                </select>
                                <input class="form-control" type="text" name="role_name" id="role_name" placeholder="Descripcion del rol" style="display: none;">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group py-1">
                                <div class="row">
                                    <div class="col-6">
                                        <label class="form-label" for="theme_sel">Tema:</label>
                                    </div>
                                    <div class="col-6 text-right">
                                        <div class="form-check form-switch float-end">
                                            <input class="form-check-input new_item_switch" id="newThemeSwitch" name="new_theme_switch" type="checkbox" data-object="theme">
                                            <label class="form-check-label" for="newThemeSwitch">Nuevo</label>
                                        </div>
                                    </div>
                                </div>
                                <select class="form-select" name="theme_sel" id="theme_sel">
                                    <option value="1">1: Distribución de la Red Eléctrica</option>
                                </select>
                                <input class="form-control" type="text" name="theme_name" id="theme_name" placeholder="Descripcion del tema" style="display: none;">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group py-1">
                                <div class="row">
                                    <div class="col-6">
                                        <label class="form-label" for="obj_sel">Objetivo:</label>
                                    </div>
                                    <div class="col-6 text-right">
                                        <div class="form-check form-switch float-end">
                                            <input class="form-check-input new_item_switch" id="newObjSwitch" name="new_obj_switch" type="checkbox" data-object="obj">
                                            <label class="form-check-label" for="newObjSwitch">Nuevo</label>
                                        </div>
                                    </div>
                                </div>
                                <select class="form-select" name="obj_sel" id="obj_sel">
                                    <option value="1">Op_01-1: Evitar Interrupciones Masivas</option>
                                </select>
                                <input class="form-control" type="text" name="obj_name" id="obj_name" placeholder="Descripcion del objetivo" style="display: none;">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group py-1">
                                <label class="form-label" for="activity_desc">Actividad:</label>
                                <input id="activity_desc" class="form-control" type="text" name="activity_desc" placeholder="Descripcion de la actividad" value="" required>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group py-1">
                                <label class="form-label" for="act_date_start">Fecha Inicio:</label>
                                <div class="input-group">
                                    <input id="act_date_start" class="form-control" type="text" name="act_date_start" value="">
                                    <span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="{{asset("icons/sprites/free.svg")}}#cil-calendar"></use>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group py-1">
                                <label class="form-label" for="act_date_end">Fecha Fin:</label>
                                <div class="input-group">
                                    <input id="act_date_end" class="form-control" type="text" name="act_date_end" value="">
                                    <span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="{{asset("icons/sprites/free.svg")}}#cil-calendar"></use>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group py-1">
                                <label class="form-label" for="policy_file">Procedimiento / Politica:</label>
                                <input id="policy_file" class="form-control" type="file" name="policy_file">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group py-1">
                                <label class="form-label" for="adjacent_file">Documento Adjunto:</label>
                                <input id="adjacent_file" class="form-control" type="file" name="adjacent_file">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="item_save" class="btn btn-info text-white" type="button">Guardar</button>
            </div>
        </div>
    </div>
    <!-- End Modal -->
</div>
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="card mb-4">
            <div class="card-body">
                <div class="d-flex flex-row flex-wrap">
                    <div class="p-1">
                        <a href="javascript:;" class="btn btn-success text-white" data-coreui-toggle="modal" data-coreui-target="#roleModal">
                            <svg class="icon">
                                <use xlink:href="{{asset("icons/sprites/free.svg")}}#cil-plus"></use>
                            </svg> Nuevo Item
                        </a>
                    </div>
                    <div class="p-1">
                        <a href="javascript:;" class="btn btn-secondary text-white">
                            <svg class="icon">
                                <use xlink:href="{{asset("icons/sprites/free.svg")}}#cil-search"></use>
                            </svg> Buscar
                        </a>
                    </div>
                    <div class="p-1">
                        <a href="javascript:;" class="btn btn-secondary text-white">
                            <svg class="icon">
                                <use xlink:href="{{asset("icons/sprites/free.svg")}}#cil-filter"></use>
                            </svg> Filtrar
                        </a>
                    </div>
                    <div class="p-1">
                        <a href="javascript:;" class="btn btn-secondary text-white">
                            <svg class="icon">
                                <use xlink:href="{{asset("icons/sprites/free.svg")}}#cil-comment-bubble"></use>
                            </svg> Ver Comentarios
                        </a>
                    </div>
                </div>
                <div class="row d-none">
                    <div class="col-12 col-sm-9 col-lg-10 my-1">
                        <div class="row">
                            <div style="flex: 0 1;">
                                <label>Nombre:</label>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control d-inline w-1">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 col-lg-2 my-1">
                        <div class="">
                            <a href="javascript:;" class="btn btn-success w-100 text-white" data-coreui-toggle="modal" data-coreui-target="#roleModal">Nuevo Rol</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">Rol 01: Asegurar la calidad y confiabilidad de la red eléctrica de distribución de Coelvisac para el suministro de energía</div>
            <div class="card-body">
                <div class="card">
                    <div class="card-header">Tema 1: Distribución de la Red Eléctrica</div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="overflow-auto">
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
                                                <td class="text-center align-middle">
                                                    <a href="#" class="btn btn-warning btn-sm text-white">
                                                        <svg class="icon">
                                                            <use xlink:href="{{asset("icons/sprites/free.svg")}}#cil-arrow-thick-from-bottom"></use>
                                                        </svg>
                                                    </a>
                                                </td>
                                                <td class="text-center align-middle">
                                                    <a href="#" class="btn btn-warning btn-sm text-white">
                                                        <svg class="icon">
                                                            <use xlink:href="{{asset("icons/sprites/free.svg")}}#cil-arrow-thick-from-bottom"></use>
                                                        </svg>
                                                    </a>
                                                </td>
                                                <td class="t_red"></td>
                                                <td class="text-center align-middle t_comments">
                                                    <a href="#" class="btn btn-success btn-sm text-white">
                                                        <svg class="icon">
                                                            <use xlink:href="{{asset("icons/sprites/free.svg")}}#cil-comment-bubble"></use>
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">Implementar sistemas de protección suficientes</td>
                                                <td class="text-center align-middle">05-Junio-22</td>
                                                <td class="text-center align-middle">25-Junio-22</td>
                                                <td class="text-center align-middle"><a href="#" class="btn btn-warning btn-sm text-white">
                                                    <svg class="icon">
                                                        <use xlink:href="{{asset("icons/sprites/free.svg")}}#cil-arrow-thick-from-bottom"></use>
                                                    </svg>
                                                </a></td>
                                                <td class="text-center align-middle"><a href="#" class="btn btn-warning btn-sm text-white">
                                                    <svg class="icon">
                                                        <use xlink:href="{{asset("icons/sprites/free.svg")}}#cil-arrow-thick-from-bottom"></use>
                                                    </svg>
                                                </a></td>
                                                <td class="t_red"></td>
                                                <td class="text-center align-middle t_comments"><a href="#" class="btn btn-success btn-sm text-white">
                                                    <svg class="icon">
                                                        <use xlink:href="{{asset("icons/sprites/free.svg")}}#cil-comment-bubble"></use>
                                                    </svg>
                                                </a></td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">Clientes libres deben contar con sistemas de protección dentro de sus operaciones</td>
                                                <td class="text-center align-middle">05-Junio-22</td>
                                                <td class="text-center align-middle">25-Junio-22</td>
                                                <td class="text-center align-middle"><a href="#" class="btn btn-warning btn-sm text-white">
                                                    <svg class="icon">
                                                        <use xlink:href="{{asset("icons/sprites/free.svg")}}#cil-arrow-thick-from-bottom"></use>
                                                    </svg>
                                                </a></td>
                                                <td class="text-center align-middle"><a href="#" class="btn btn-warning btn-sm text-white">
                                                    <svg class="icon">
                                                        <use xlink:href="{{asset("icons/sprites/free.svg")}}#cil-arrow-thick-from-bottom"></use>
                                                    </svg>
                                                </a></td>
                                                <td class="t_red"></td>
                                                <td class="text-center align-middle t_comments"><a href="#" class="btn btn-success btn-sm text-white">
                                                    <svg class="icon">
                                                        <use xlink:href="{{asset("icons/sprites/free.svg")}}#cil-comment-bubble"></use>
                                                    </svg>
                                                </a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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
                                    <use xlink:href="{{asset("icons/sprites/free.svg")}}#cil-arrow-thick-from-bottom"></use>
                                </svg>
                            </a></td>
                            <td class="text-center align-middle"><a href="#" class="btn btn-warning btn-sm">
                                <svg class="icon">
                                    <use xlink:href="{{asset("icons/sprites/free.svg")}}#cil-arrow-thick-from-bottom"></use>
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
                                    <use xlink:href="{{asset("icons/sprites/free.svg")}}#cil-arrow-thick-from-bottom"></use>
                                </svg>
                            </a></td>
                            <td class="text-center align-middle"><a href="#" class="btn btn-warning btn-sm">
                                <svg class="icon">
                                    <use xlink:href="{{asset("icons/sprites/free.svg")}}#cil-arrow-thick-from-bottom"></use>
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
                                    <use xlink:href="{{asset("icons/sprites/free.svg")}}#cil-arrow-thick-from-bottom"></use>
                                </svg>
                            </a></td>
                            <td class="text-center align-middle"><a href="#" class="btn btn-warning btn-sm">
                                <svg class="icon">
                                    <use xlink:href="{{asset("icons/sprites/free.svg")}}#cil-arrow-thick-from-bottom"></use>
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

<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>
<script src="{{asset("js/intranet/objectives.js")}}"></script>
<script>
    //$("#role_save").on("click", function(ev){
    //    ev.preventDefault();
    //    console.log("Save New Role");
    //});
</script>

@endsection