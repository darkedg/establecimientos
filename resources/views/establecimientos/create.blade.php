@extends('layouts.app')

@section('styles')
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>

  <link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder/dist/esri-leaflet-geocoder.css"/>
@endsection

@section('content')
  <div class="container">
    <h1 class="text-center mt-4">Registrar Establecimiento</h1>

    <div class="mt-5 row justify-content-center">
      <form
        class="col-md-9 col-xs-12 card card-body"
        action=""
      >
        <fieldset class="border p-4">
          <legend class="text-primary">Nombre, categoria e imagen principal</legend>

          <div class="form-group">
            <label for="nombre">Nombre establecimiento</label>
            <input
              id="nombre"
              type="text"
              name="nombre"
              class="form-control @error('nombre') is-invalid @enderror"
              placeholder="Escribir nombre del establecimiento"
              value="{{ old('nombre') }}"
            >

            @error('nombre')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="form-group @error('categoria_id') is-invalid @enderror">
            <label for="categoria">Categoria</label>

            <select
              class="form-control"
              name="categoria_id"
              id="categoria_id"
            >
              <option value="" selected disabled>-- Seleccione --</option>

              @foreach ($categorias as $categoria)
                <option
                  value="{{ $categoria->id }}"
                  {{ old('categoria_id') == $categoria->id ? 'selected' : '' }}
                >{{ $categoria->nombre }}</option>
              @endforeach
            </select>
          </div>
          
          <div class="form-group">
            <label for="imagen_principal">Imagen principal</label>
            <input
              id="imagen_principal"
              type="file"
              name="imagen_principal"
              class="form-control @error('imagen_principal') is-invalid @enderror"
              value="{{ old('imagen_principal') }}"
            >

            @error('imagen_principal')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
        </fieldset>

        <fieldset class="border p-4">
          <legend class="text-primary">Ubicación</legend>

          <div class="form-group">
            <label for="nombre">Coloca la dirección del Establecimiento</label>
            <input
              id="formbuscador"
              type="text"
              placeholder="Calle del Negocio o Escablecimiento"
              class="form-control"
            >
            <p class="text-secondary mt-5 mb-3 text-center">El asistente colocará una dirección estimada o mueve el Pin hacia el lugar correcto</p>
          </div>

          <div class="form-group">
            <div id="mapa" style="height: 400px;"></div>
          </div>

          <p class="informacion">Confirma que los siguientes campos son correctos.</p>

          <div class="form-group">
            <label for="direccion">Dirección</label>

            <input
              type="text"
              id="direccion"
              class="form-control @error('direccion') is-invalid @enderror"
              placeholder="Dirección"
              value="{{ old('direccion') }}"
            >
            @error('direccion')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="colonia">Zona</label>

            <input
              type="text"
              id="colonia"
              class="form-control @error('colonia') is-invalid @enderror"
              placeholder="Zona"
              value="{{ old('colonia') }}"
            >
            @error('colonia')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <input type="hidden" id="lat" name="lat" value="{{ old('lat') }}">
          <input type="hidden" id="lng" name="lng" value="{{ old('lng') }}">

        </fieldset>
      </form>
    </div>
  </div>
@endsection

@section('scripts')
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

  <script src="https://unpkg.com/esri-leaflet" defer></script>
  <script src="https://unpkg.com/esri-leaflet-geocoder" defer></script>
@endsection