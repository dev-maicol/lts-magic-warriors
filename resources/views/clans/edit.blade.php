@extends('layouts.app', ['activePage' => 'clans', 'titlePage' => __('Clan')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('clans.update', $clan) }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('PUT')
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Editar Clan') }}</h4>
                <p class="card-category">{{ __('Información Clan') }}</p>
              </div>
              <div class="card-body ">
                @if (session('status'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Tag del Clan') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('tag') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('tag') ? ' is-invalid' : '' }}" name="tag" id="input-tag" type="text" placeholder="{{ __('Tag del Clan') }}" value="{{ old('tag', $clan->tag) }}" required="true" aria-required="true"/>
                      @if ($errors->has('tag'))
                        <span id="tag-error" class="error text-danger" for="input-tag">{{ $errors->first('tag') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                
                {{-- campo id_user invisible --}}
                <div class="row" hidden>
                  <label class="col-sm-2 col-form-label">{{ __('Id_user') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('id_user') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('id_user') ? ' is-invalid' : '' }}" name="id_user" id="input-id_user" type="text" placeholder="{{ __('Id_user') }}" value="{{ auth()->user()->id }}" />
                      @if ($errors->has('id_user'))
                        <span id="id_user-error" class="error text-danger" for="input-id_user">{{ $errors->first('id_user') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                {{--  --}}
                
              </div>
              <div class="card-footer ml-auto mr-auto">
                <a href="{{ route('clans.index')}}" class="btn btn-info">Volver</a>
                <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      
    </div>
  </div>
@endsection