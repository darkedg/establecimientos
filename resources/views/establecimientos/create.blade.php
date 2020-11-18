@extends('layouts.app')

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
            <p class="text-secondary mt-5 mb-3 text-center">El asistente colocará una dirección estimada, mueve el Pin hacia el lugar correcto</p>
          </div>

        </fieldset>
      </form>
    </div>
  </div>
@endsection