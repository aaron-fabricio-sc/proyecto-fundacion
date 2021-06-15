<div class="form-group">
    <p class="text-black"> <span class="text-green-800  font-bold text-lg"> Estudiante:
        </span>{{ $listaDeEstudiante->user->primer_ap }}</p>
    {!! Form::text('estudiante_id', $listaDeEstudiante->user->id, []) !!}

    @error('estudiante_id')
        <div class="text-red-700 font-bold">
            {{ $message }}

        </div>
    @enderror
</div>
<div class="form-group">
    <p class="text-black"> <span class="text-green-800  font-bold text-lg"> Curso:
        </span>{{ $listaDeEstudiante->curso->nombre }}</p>
    {!! Form::text('curso_id', $listaDeEstudiante->curso->id, []) !!}

    @error('curso_id')
        <div class="text-red-700 font-bold">
            {{ $message }}

        </div>
    @enderror
</div>
<div class="form-group">
    <p class="text-black"> <span class="text-green-800  font-bold text-lg"> Profesor/a:
        </span>{{ $listaDeEstudiante->curso->profesore->user->primer_ap }}</p>
    {!! Form::text('profesore_id', $listaDeEstudiante->curso->profesore->id, []) !!}

    @error('profesore_id')
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
<div class="form-group">
    {!! Form::label('practica_1', 'Nota de la Practica 1', ['class' => 'labels text:sm md:text-md']) !!}
    {!! Form::text('practica_1', null, ['class' => 'inputs w-1/2']) !!}
    @error('practica_1')
        <div class="text-red-700 font-bold">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('practica_2', 'Nota de la Practica 2', ['class' => 'labels text:sm md:text-md']) !!}
    {!! Form::text('practica_2', null, ['class' => 'inputs w-1/2']) !!}
    @error('practica_2')
        <div class="text-red-700 font-bold">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('practica_3', 'Nota de la Practica 3', ['class' => 'labels text:sm md:text-md']) !!}
    {!! Form::text('practica_3', null, ['class' => 'inputs w-1/2']) !!}
    @error('practica_3')
        <div class="text-red-700 font-bold">
            {{ $message }}
        </div>
    @enderror
</div>
