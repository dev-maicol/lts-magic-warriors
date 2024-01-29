@extends('layouts.app', ['activePage' => 'clans', 'titlePage' => __('Clanes')])

@section('css')
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> --}}
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap4.min.css">
    
  {{-- <style>
    .lds-spinner {
      color: official;
      display: inline-block;
      position: relative;
      width: 80px;
      height: 80px;
    }
    .lds-spinner div {
      transform-origin: 40px 40px;
      animation: lds-spinner 1.2s linear infinite;
    }
    .lds-spinner div:after {
      content: " ";
      display: block;
      position: absolute;
      top: 3px;
      left: 37px;
      width: 6px;
      height: 18px;
      border-radius: 20%;
      background: #000000;
    }
    .lds-spinner div:nth-child(1) {
      transform: rotate(0deg);
      animation-delay: -1.1s;
    }
    .lds-spinner div:nth-child(2) {
      transform: rotate(30deg);
      animation-delay: -1s;
    }
    .lds-spinner div:nth-child(3) {
      transform: rotate(60deg);
      animation-delay: -0.9s;
    }
    .lds-spinner div:nth-child(4) {
      transform: rotate(90deg);
      animation-delay: -0.8s;
    }
    .lds-spinner div:nth-child(5) {
      transform: rotate(120deg);
      animation-delay: -0.7s;
    }
    .lds-spinner div:nth-child(6) {
      transform: rotate(150deg);
      animation-delay: -0.6s;
    }
    .lds-spinner div:nth-child(7) {
      transform: rotate(180deg);
      animation-delay: -0.5s;
    }
    .lds-spinner div:nth-child(8) {
      transform: rotate(210deg);
      animation-delay: -0.4s;
    }
    .lds-spinner div:nth-child(9) {
      transform: rotate(240deg);
      animation-delay: -0.3s;
    }
    .lds-spinner div:nth-child(10) {
      transform: rotate(270deg);
      animation-delay: -0.2s;
    }
    .lds-spinner div:nth-child(11) {
      transform: rotate(300deg);
      animation-delay: -0.1s;
    }
    .lds-spinner div:nth-child(12) {
      transform: rotate(330deg);
      animation-delay: 0s;
    }
    @keyframes lds-spinner {
      0% {
        opacity: 1;
      }
      100% {
        opacity: 0;
      }
    }
  </style> --}}
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

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="content">
  
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
            <div class="col-12 text-right">
                <a href="{{ route('clans.create')}}" class="btn btn-info">Agregar</a>
            </div>

        </div>
        @if (session('success'))
              <div class="alert alert-info alert-dismissible fade show alert-sm" role="alert" style="z-index: 9999; position: absolute; top: 10px; right: 10px;" id="myAlert">
                {{ session('success') }} &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @php
                  // Eliminar la variable de sesión después de mostrarla
                  session()->forget('success');
              @endphp     
        @endif
          @if (session('error'))
              <div class="alert alert-danger alert-dismissible fade show alert-sm" role="alert" style="z-index: 9999; position: absolute; top: 10px; right: 10px;" id="myAlert">
                {{ session('error') }} &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @php
                  // Eliminar la variable de sesión después de mostrarla
                  session()->forget('error');
              @endphp    
          @endif
          {{-- <div class="col-12">
            <div class="lds-spinner" id="spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
          </div> --}}
        <div class="card" id="card_content">
          
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Clanes aliados</h4>
            <p class="card-category">Listado de Clanes Aliados</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">

              <table class="table" id="table_data">
                <thead class=" text-primary">
                  <th>ID</th>
                  <th>TAG</th>
                  <th>NAME</th>
                  <th>STATE</th>
                  <th>ACTIONS</th>
                  
                </thead>
                <tbody>
                  @foreach ($clans as $clan)
                      <tr>
                        <td>{{ $clan->id}}</td>
                        <td>{{ $clan->tag}}</td>
                        <td>{{ $clan->name}}</td>
                        <td>
                          {{-- {{ $position->state}} --}}
                          @if ($clan->state == 1)
                            <span class="badge badge-success">Activated</span>
                          @else
                          <span class="badge badge-danger">Inactivated</span>
                          @endif
                        </td>
                        <td>
                            {{-- <form id="deleteForm" action="{{ route('positions.destroy', $position->id)}}" method="POST">
                                
                                @csrf
                                @method('DELETE')
                                <button id="showDeleteModal_{{$position->id}}" class="btn btn-danger" data-value="{{$position->id}}" onclick="previewModal({{$position->id}})">Borrar</button>
                            </form> --}}
                            {{-- <a href="{{ route('clans.edit', $clan->id)}}" class="btn btn-warning btn-fab btn-fab-mini btn-round"><i class="material-icons">edit</i></a> --}}
                            @if ($clan->state == 1)
                            <button id="showDeleteModal_{{$clan->id}}" class="btn btn-danger btn-fab btn-fab-mini btn-round" onclick="previewModal({{$clan->id}})"><i class="material-icons">delete</i></button>
                            @else
                            <button id="showDeleteModal_{{$clan->id}}" class="btn btn-info btn-fab btn-fab-mini btn-round" onclick="previewModal({{$clan->id}})"><i class="material-icons">done</i></button>
                                
                            @endif
                            <a href="{{ route('clans.war', $clan->tag)}}" class="btn btn-success btn-fab btn-fab-mini btn-round"><i class="material-icons" title="Ver información de Guerra Actual">verified_user</i></a>
                            <a href="{{ route('clans.capital', ['tag' => $clan->tag, 'name' => $clan->name] )}}" class="btn btn-warning btn-fab btn-fab-mini btn-round"><i class="material-icons" title="Ver información Capital del Clan">monetization_on</i></a>
                        </td>
                      </tr>

                      {{-- Modal de confirmacion --}}
                      @if ($clan->state == 1)
                          @php
                              $title = "Confirmar inactivación";
                              $messagge = "¿Estás seguro de que deseas inactivar <b>$clan->name</b> ?";
                              $action = "Inactivar";
                              $classM = "danger";
                          @endphp
                      @else
                        @php
                            $title = "Confirmar activación";
                            $messagge = "¿Estás seguro de que deseas activar <b>$clan->name</b> ?";
                            $action = "Activar";
                            $classM = "info";
                        @endphp
                      @endif
                      <div class="modal" tabindex="-1" role="dialog" id="confirmationModal_{{$clan->id}}">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">
                                      @php
                                          echo $title;
                                      @endphp
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                  @php
                                      echo $messagge;
                                  @endphp
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-{{$classM}}" onclick="acceptDelete({{$clan->id}})">
                                      @php
                                          echo $action;
                                      @endphp
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                      {{--  --}}
                      
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      
    </div>
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

    <script>
      // new DataTable('#table_data');
      $(document).ready(function() {
        $('#table_data').DataTable({
          responsive: true,
          language: {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
          },
          lengthMenu: [[5, 10, 15, -1], [5, 10, 15, "Todos"]],
          pageLength: 5, // Establece el valor inicial
          autoWidth: false,
          
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
  //   document.getElementById('confirmDelete').addEventListener('click', function () {
  //     // Cierra el modal de confirmación
  //     $('#confirmationModal_').modal('hide');

  //     // Envía el formulario de eliminación
  //     document.getElementById('deleteForm').submit();
  // });
  // function showDeleteModal(idModal, function (e){
  //   console.log('akjsdbkjabs')
  //   e.preventDefault(); // Evitar la acción por defecto del botón
  //   $('#confirmationModal'  + id).modal('show');
  // })
  
  
//   document.getElementById('showDeleteModal_' + vv).addEventListener('click', function (e) {
//   e.preventDefault(); // Evitar la acción por defecto del botón
//   // console.log(e);

//   // Obtener el valor del atributo data-value
//   let valueToPass = this.getAttribute('data-value');

//   // Ahora puedes utilizar valueToPass en tu código
//   console.log('Valor a pasar: ' + valueToPass);

//   $('#confirmationModal_' + valueToPass).modal('show');

// });

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