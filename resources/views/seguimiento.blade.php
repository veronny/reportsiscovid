@extends('layouts.app')

@section('content')
    @auth
        <div class="container shadow-sm p-3 mb-5 bg-white rounded">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card border-primary">
                        <div class="card-body">

                            <table id="users" class="table table-hover table-sm table-striped table-bordered">
                                <thead class="table-info">
                                    <tr>
                                        <th width="10px">Nro Doc</th>
                                        <th>Nombres</th>
                                        <th>APaterno</th>
                                        <th>AMaterno</th>
                                        <th>Celular</th>
                                        <th>Direccion</th>
                                        <th>FechaSeg</th>
                                        <th>Tipo</th>
                                        <th>PruebaR</th>
                                        <th>PruebaR</th>
                                        <th>Registrador</th>
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
            "ajax": "{{ url('api/seguimiento') }}",
            "columns": [
                {data: 'Nro Documento'},
                {data: 'nombres'},
                {data: 'Apellido Paterno'},
                {data: 'Apellido Materno'},
                {data: 'Celular'},
                {data: 'Direccion'},
                {data: 'Ficha_300_fecha_del_seguimiento'},
                {data: 'Ficha_300_tipo_de_monitoreo'},
                {data: 'Ficha_Resultado_prueba_rapida',"className": "blue"},
                {data: 'Ficha_fecha_prueba_rapida'},
                {data: 'Ficha_nombres_apellidos_registrador'},
                {data: 'cod_establecimiento'},
            ],
            columnDefs: [{targets: 7,
                render: function ( data, type, row ) {
                  var color = 'black';
                  if (data == 'Visita presencial') {
                    color = 'green';
                  } 
                  if (data == 'Llamada telefónica') {
                    color = 'blue';
                  }
                  return '<span style="color:' + color + '">' + data + '</span>';
                }
           }],

            "order": [9, "desc"],
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





