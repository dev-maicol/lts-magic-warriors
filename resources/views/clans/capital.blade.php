@extends('layouts.app', ['activePage' => 'clans', 'titlePage' => __('Capital del Clan') ])

@section('css')
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> --}}
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap4.min.css">
  {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css"> --}}

    
  <style>
    .card_content{
      /* display: none; */
      /* opacity: 0;
      transition: opacity 0.5s ease 0s; */
      height: 50px;
      transition: height 1s ease 0s;
    }

    
  </style>

@endsection
{{-- Clan Bolivia Example:  QP2LL2V --}}
@section('content')
{{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

<div class="content">
  
  <div class="container-fluid">
    @php
        // dd($datos);
    @endphp
    @isset ($datos)
        <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-12 text-right">
                    <a href="{{ route('clans.index')}}" class="btn btn-info">Volver</a>
                    {{-- <a href="{{ route('clans.create')}}" class="btn btn-success">Agregar</a> --}}
                </div>

            </div>
            @php
                $carbon = new \Carbon\Carbon();
                $endCapital = $datos['endTime'];
                $endCapital = $carbon->createFromFormat('Ymd\THis.uT', $endCapital);
            @endphp
            <div class="card" id="card_content">
            
              <div class="card-header card-header-primary">
                  <h4 class="card-title ">
                    Clan -> {{ $name}} <br>
                    Estado -> {{ $datos['state']}} <br>
                    Finaliza -> {{ $endCapital}}
                  </h4>
                  <p class="card-category">
                      {{-- Estrellas -> {{ $datos['clan']['stars']}} --}}
                      {{-- Estado -> {{ $datos['state']}} --}}
                  </p>
              </div>

              <div class="card-body">
                
                <div class="row">
                  {{-- Clan --}}
                  <div class="col-8">
                    <div class="card " >
                      <h4 class="card-header">
                        {{ $name}} 
                        {{-- <img class="float-right " src="{{ $clan['badgeUrls']['small']}}" alt="Clan Shield" style="height: 60px"> <br>  --}}
                        <small class="font-weight-light"> 
                          {{-- {{ $clan['tag']}} --}}
                        </small>
                      </h4>
                      @php
                          // $membersClan = $datos['clan']['members'];
                          // usort($membersClan, function ($a, $b) {
                          //     return $a['mapPosition'] - $b['mapPosition'];
                          // });
                      @endphp
                      
                      {{-- <div class="collapse" id="collapseExample" >
                        <div class="card-body" id="body_clan" >
                          <p class="card-text">
                            
                            <h5>Ataques realizados -> {{ $clan['attacks']}}/{{ $datos['attacksPerMember'] * $datos['teamSize']}}</h5>
                            <h5>Estrellas obtenidas -> {{ $clan['stars']}}</h5>
                            <h5>Porcentaje de destrucción -> {{ round($clan['destructionPercentage'], 2) }}%</h5>
                            <h5>Aldeas (th) -> Ataques Realizados :</h5>
                            <div class="table-responsive">
                              <table class="table table-hover table-sm">
                                <thead class=" text-primary">
                                  <th>#</th>
                                  <th>NAME (TH)</th>
                                  <th class="text-center">ATTACKS</th>
                                </thead>
                                <tbody>
                                  @foreach ($membersClan as $member)
                                  <tr>
                                    <th scope="row">{{ $member['mapPosition']}}</th>
                                    <td>{{ $member['name']}} ({{ $member['townhallLevel']}})</td>
                                    <td class="text-center">
                                      @isset($member['attacks'])
                                      {{ sizeof($member['attacks'])}}/{{ $datos['attacksPerMember']}}
                                      @else
                                      0/{{ $datos['attacksPerMember']}}
                                      @endisset
                                      
                                    </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                                
                            </div>
                            
                          </p>
                          
                        
                        </div>

                      </div> --}}
                      <div class="card-footer">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalLong">
                          Información detallada
                        </button> 
                        
                        <a id="toggleButton" class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                          Ver mas
                        </a>
                      </div>
                      
                    </div>
                  </div>

                  {{-- Modal clan --}}
                  <!-- Modal -->
                  {{-- <div class="modal fade " id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-6">
                              <h4>{{ $clan['name']}}</h4>
                              <h5>{{ $clan['tag'] }}</h5>
                            </div>
                            <div class="col-6">
                              <img src="{{ $clan['badgeUrls']['small'] }}" class="img-fluid float-right" alt="Responsive image">
                            </div>
                          </div>
                          
                          <div class="row m-2">
                            <div class="table-responsive">

                              <table class="table text-center" id="table_data">
                                  <thead class="text-primary ">
                                    <th>#</th>
                                    <th>NAME</th>
                                    <th>TH</th>
                                    <th>ATTACKS</th>
                                    <th>ATACK 1</th>
                                    <th>ATACK 2</th>
                                  
                                  </thead>
                                  <tbody class="text-center">
                                    @foreach ($membersClan as $memberClan)
                                    <tr>
                                      <th scope="row">{{ $memberClan['mapPosition'] }}</th>
                                      <td>{{ $memberClan['name'] }} <h5>{{ $memberClan['tag'] }}</h5></td>
                                      <td>{{ $memberClan['townhallLevel'] }}</td>
                                      @isset($memberClan['attacks'])
                                      
                                        <td>
                                          {{ sizeof($memberClan['attacks'])}}/{{ $datos['attacksPerMember']}}
                                        </td>
                                        @foreach ($memberClan['attacks'] as $attacksMemberClan)
                                        @php
                                            $stars = $attacksMemberClan['stars'];
                                        @endphp
                                            <td>
                                              @for ($i = 0; $i < $stars; $i++)
                                                <i class="material-icons text-warning">star</i>
                                              @endfor
                                              @for ($i = 0; $i < 3 - $stars; $i++)
                                                <i class="material-icons">star_border</i>
                                              @endfor
                                              <h5>{{ $attacksMemberClan['destructionPercentage'] }}%</h5>
                                            </td>
                                            
                                        @endforeach
                                        @if ( sizeof($memberClan['attacks']) == 1 )
                                          <td> - </td>
                                        @endif
                                      @else
                                        <td>0/{{ $datos['attacksPerMember']}}</td>
                                        <td> - </td>
                                        <td> - </td>
                                      @endisset
                                    </tr>
                                    @endforeach
                                  </tbody>
                              </table>

                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                      </div>
                    </div>
                  </div> --}}
                  {{-- Fin modal ClAN --}}
                </div>

                  
              </div>
            </div>
                
            {{-- @endif --}}
        </div>
        
        </div>

        

    @else
        @isset ($statusCode)
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-12 text-right">
                        <a href="{{ route('clans.index')}}" class="btn btn-info">Volver</a>
                    </div>
    
                </div>
                <div class="card">
                
                    <div class="card-header card-header-danger">
                        <h4 class="card-title ">Error</h4>
                        <p class="card-category">
                            Código de error -> {{ $statusCode}} <br>
                        </p>
    
                    </div>
                    <div class="card-body">
                        <h3>Mensaje de error -> {{ $mensajeError}} </h3>
                    </div>
                </div>

            </div>
        </div>
            
        @endif
    @endif
  </div>
  
</div>




@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    {{-- <script src="{{ asset('material') }}/js/plugins/jquery.dataTables.min.js"></script> --}}
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap4.min.js"></script>

    <!-- DataTables Buttons JS -->
    {{-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

     --}}

    <script>

      let btnColap = document.getElementById('toggleButton')
      btnColap.addEventListener('click', function(){
        // console.log('Presionando...');
        
        if(btnColap.innerText  == 'VER MAS'){
          btnColap.textContent = 'VER MENOS'
          // console.log(btnColap.innerText);
        }else{
          btnColap.textContent = 'VER MAS'
          // console.log(btnColap.innerText);
        }
        // if(btnColap.innerText  == 'VER MENOS'){
        //   btnColap.textContent = 'VER MAS'
        //   console.log(btnColap.innerText);
        // }
      })

      let btnColapopponent = document.getElementById('toggleButtonopponent')
      btnColapopponent.addEventListener('click', function(){
        // console.log('Presionando...');
        
        if(btnColapopponent.innerText  == 'VER MAS'){
          btnColapopponent.textContent = 'VER MENOS'
          console.log(btnColapopponent.innerText);
        }else{
          btnColapopponent.textContent = 'VER MAS'
          console.log(btnColapopponent.innerText);
        }
        // if(btnColap.innerText  == 'VER MENOS'){
        //   btnColap.textContent = 'VER MAS'
        //   console.log(btnColap.innerText);
        // }
      })

      // new DataTable('#table_data');
      $(document).ready(function() {
        $('#table_data').DataTable({
          "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
          },
          "lengthMenu": [[5, 10, 15, -1], [5, 10, 15, "Todos"]],
          "pageLength": 5, // Establece el valor inicial
          "responsive": true,
          "autoWidth": false,
          // "buttons": [
          //     {
          //         extend: 'pdfHtml5',
          //         text: 'Exportar a PDF',
          //         title: 'Datos de la tabla',
          //         exportOptions: {
          //             columns: ':visible'
          //         }
          //     }
          // ]
          // "details": {
          //     "icon": "done" // Utiliza la clase CSS personalizada aquí
          // }
        });
      });

      $(document).ready(function() {
        $('#table_data_opponent').DataTable({
          "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
          },
          "lengthMenu": [[5, 10, 15, -1], [5, 10, 15, "Todos"]],
          "pageLength": 5, // Establece el valor inicial
          "responsive": true,
          "autoWidth": false,
          // "details": {
          //     "icon": "done" // Utiliza la clase CSS personalizada aquí
          // }
        });
      });
    </script>

    <script>

      

      window.addEventListener('load', function () {
        // Cuando se haya cargado completamente la página
        // const loadingContainer = document.getElementById('spinner');
        // const contentContainer = document.getElementById('card_content');

        // Ocultar el indicador de carga
        // loadingContainer.style.display = 'none';

        // Mostrar el contenido
        // contentContainer.style.display = 'block';

        // Mostrar el contenido con una animación
        // contentContainer.style.opacity = 1; // Establecer la opacidad al máximo
        // contentContainer.style.display = 'block'; // Cambiar a 'block' para que sea visible
        // contentContainer.style.height = '80%'
      });
    </script>
@endsection

<script>
  let valor = 0
  function previewModal(id){
    let modal = document.getElementById('confirmationModal_'+id)
    $(modal).modal('show')
  }
  
  function acceptDelete(id){
    // Obtén el token CSRF del elemento meta en el DOM
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    // console.log('CSRF:::' + csrfToken);
    // Realiza la solicitud DELETE utilizando fetch
    // console.log('IDDD::'+id);
    const url = `/clans/${id}`
    // console.log({url});
    fetch( url, {
      method: 'DELETE',
      headers: {
        'X-CSRF-TOKEN': csrfToken, // Incluye el token CSRF en las cabeceras
        // Otras cabeceras...
      },
    })
      .then(response => {
        if (response.ok) {
          // La solicitud fue exitosa (código de respuesta 200)
          // console.log('La posición se eliminó con éxito.');
          // Redirige al usuario a la vista index
          window.location.href = '{{ route('clans.index') }}'; // Reemplaza con la ruta correcta
          // Realiza cualquier acción adicional después de la eliminación
        } else {
          // La solicitud falló
          console.error('Error al eliminar...');
        }
      })
      .catch(error => {
        // Maneja los errores
        console.error(error);
      });

  }
  
  
  

// Función para cerrar la alerta después de x milisegundos
function cerrarAlerta() {
    // Selecciona la alerta por su ID
    var alerta = document.getElementById('myAlert');
    if (alerta) {
        // Espera 5000 milisegundos (5 segundos) antes de cerrar la alerta
        setTimeout(function() {
            alerta.style.display = 'none'; // Oculta la alerta
        }, 2000); // 5000 milisegundos = 5 segundos
    }
}

// Llama a la función para cerrar la alerta después de cargar la página
window.onload = cerrarAlerta;

  

  
</script>
