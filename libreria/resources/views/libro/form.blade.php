<div class="row padding-1 p-1">
    <div class="col-md-12">
        {{ Form::label('categoria') }}
        {{ Form::select('categoria_id',$categorias, $libro->categoria_id, ['class' => 'form-control' . ($errors->has('categoria_id') ? ' is-invalid' : ''), 'placeholder' => 'Categoria Id']) }}
        {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</div>') !!}
        {{-- <div class="form-group mb-2 mb20">
            <label for="categoria_id" class="form-label">{{ __('Categoria Id') }}</label>
            <input type="text" name="categoria_id" class="form-control @error('categoria_id') is-invalid @enderror" value="{{ old('categoria_id', $libro?->categoria_id) }}" id="categoria_id" placeholder="Categoria Id">
            {!! $errors->first('categoria_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div> --}}
        <div class="form-group mb-2 mb20">
            <label for="titulo" class="form-label">{{ __('Titulo') }}</label>
            <input type="text" name="titulo" class="form-control @error('titulo') is-invalid @enderror" value="{{ old('titulo', $libro?->titulo) }}" id="titulo" placeholder="Titulo">
            {!! $errors->first('titulo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="autor" class="form-label">{{ __('Autor') }}</label>
            <input type="text" name="autor" class="form-control @error('autor') is-invalid @enderror" value="{{ old('autor', $libro?->autor) }}" id="autor" placeholder="Autor">
            {!! $errors->first('autor', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="anio_publicacion" class="form-label">{{ __('Anio Publicacion') }}</label>
            <input type="text" name="anio_publicacion" class="form-control @error('anio_publicacion') is-invalid @enderror" value="{{ old('anio_publicacion', $libro?->anio_publicacion) }}" id="anio_publicacion" placeholder="Anio Publicacion">
            {!! $errors->first('anio_publicacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>