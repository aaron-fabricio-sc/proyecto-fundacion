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
    {!! Form::label('curso_id', 'Lista de los cursos', ['class' => 'labels text:sm md:text-md']) !!}

    {!! Form::select('curso_id', $cursosList, null, ['class' => 'inputs w-1/2']) !!}
    @error('curso_id')
        <div class="text-red-700 font-bold">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('gestion', 'Gestion', ['class' => 'labels text:sm md:text-md']) !!}
    {!! Form::select('gestion', $gestion, null, ['class' => 'inputs w-1/2']) !!}
    @error('gestion')
        <div class="text-red-700 font-bold">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('semestre', 'Semestre', ['class' => 'labels text:sm md:text-md']) !!}
    {!! Form::select('semestre', $semestre, null, ['class' => 'inputs w-1/2']) !!}
    @error('semestre')
        <div class="text-red-700 font-bold">
            {{ $message }}
        </div>
    @enderror
</div>
