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

<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="card mb-4">
            <div class="card-header">Matriz de Objetivos</div>
            <div class="card-body">
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
        
    </script>
@endsection