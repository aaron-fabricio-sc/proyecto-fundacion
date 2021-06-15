<div class="form-group">
    {!! Form::label('user_id', 'Usuario', ['class' => 'labels text:sm md:text-md']) !!}
    {!! Form::select('user_id', $user, null, ['class' => 'inputs w-1/2']) !!}
    @error('user_id')
        <div class="text-red-700 font-bold">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('curso_id', 'Curso', ['class' => 'labels text:sm md:text-md']) !!}
    {!! Form::select('curso_id', $cursos, null, ['class' => 'inputs w-1/2']) !!}
    @error('curso_id')
        <div class="text-red-700 font-bold">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('especialidad', 'Especialidad', ['class' => 'labels text:sm md:text-md']) !!}
    {!! Form::text('especialidad', null, ['class' => 'inputs w-1/2']) !!}

    @error('especialidad')
        <div class="text-red-700 font-bold">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('descripcion_especialidad', 'Descripción del curso', ['class' => 'labels text:sm md:text-md']) !!}
    {!! Form::textarea('descripcion_especialidad', null, ['class' => 'inputs w-1/2']) !!}
    @error('descripcion_especialidad')
        <div class="text-red-700 font-bold">
            {{ $message }}
        </div>
    @enderror
</div>
