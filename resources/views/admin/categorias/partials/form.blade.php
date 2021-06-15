 <div class="form-group">
     {!! Form::label('nombre', 'Nombre de la categoría', ['class' => 'labels text:sm md:text-md']) !!}
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
