<div class="form-group">
    {!! Form::label('nombre', 'Nombre del curso', ['class' => 'labels text:sm md:text-md']) !!}
    {!! Form::text('nombre', null, ['class' => 'inputs w-1/2', 'placeholder' => 'Ingrese el nombre']) !!}

    @error('nombre')
        <div class="text-red-700 font-bold">
            {{ $message }}

        </div>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('slug', 'Slug', ['class' => 'labels text:sm md:text-md']) !!}
    {!! Form::text('slug', null, ['class' => 'inputs w-1/2', 'readonly']) !!}
    @error('slug')
        <div class="text-red-700 font-bold">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('categoria_id', 'Categoria del curso', ['class' => 'labels text:sm md:text-md']) !!}
    {!! Form::select('categoria_id', $coleccion, null, ['class' => 'inputs w-1/2']) !!}
    @error('categoria_id')
        <div class="text-red-700 font-bold">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('descripcion', 'Descripción del curso', ['class' => 'labels text:sm md:text-md']) !!}
    {!! Form::textarea('descripcion', null, ['class' => 'inputs w-1/2']) !!}
    @error('descripcion')
        <div class="text-red-700 font-bold">
            {{ $message }}
        </div>
    @enderror
</div>
