@extends('layouts.app')

@section('content')
    @auth
        <div class="container shadow-sm p-3 mb-5 bg-white rounded">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card border-primary">
                        <div class="card-body">

                            <table id="users" class="table table-hover table-sm table-striped table-bordered">
                                <thead class="table-danger">
                                    <tr>
                                        <th width="10px">Nro Doc</th>
                                        <th>Nombres</th>
                                        <th>APaterno</th>
                                        <th>AMaterno</th>
                                        <th>Edad</th>
                                        <th>Celular</th>
                                        <th>Direccion</th>
                                        <th>Seguro</th>
                                        <th>Registrador</th>
                                        <th>FechaNoti</th>
                                        <th>CodES</th>                                      
                                    </tr>
                                </thead>
                            </table>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    @endauth

@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('#users').DataTable({
            "serverSide": true,
            "ajax": "{{ url('api/epidemiologia') }}",
            "columns": [
                {data: 'Nro Documento'},
                {data: 'nombres'},
                {data: 'Apellido Paterno'},
                {data: 'Apellido Materno'},
                {data: 'Edad'},
                {data: 'Celular'},
                {data: 'Direccion'},
                {data: 'Ficha_200_34_tipo_seguro'},
                {data: 'Ficha_200_30_nombres_apellidos_personal_llena_ficha'},
                {data: 'Ficha_200_28_fecha_notificacion'},
                {data: 'cod_establecimiento'},
            ],
            "language": {
                "info": "_TOTAL_ registros",
                "search": "Buscar",
                "paginate": {
                    "next": "Siguiente",
                    "previous": "Anterior",
                },
                "lengthMenu": 'Mostrar <select >'+
                            '<option value="10">10</option>'+
                            '<option value="30">30</option>'+
                            '<option value="-1">Todos</option>'+
                            '</select> registros',
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "emptyTable": "No hay datos",
                "zeroRecords": "No hay coincidencias", 
                "infoEmpty": "",
                "infoFiltered": ""
            }
        });
    });
</script>  
@endsection





