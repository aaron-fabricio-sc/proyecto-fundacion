<x-jet-form-section submit="updateProfileInformation" class="rounded-lg shadow mt-1">
    <x-slot name="title">
        {{ __('Información del perfil') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Puede actualizar sus datos personales si algun dato esta erroneo.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden" wire:model="photo" x-ref="photo" x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-jet-label for="photo" value="{{ __('Photo') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}"
                        class="rounded-full h-20 w-20 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview">
                    <span class="block rounded-full w-20 h-20"
                        x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
                </x-jet-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Remove Photo') }}
                    </x-jet-secondary-button>
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Nombre') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name"
                autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="primer_ap" value="{{ __('Pimer apellido') }}" />
            <x-jet-input id="primer_ap" type="text" class="mt-1 block w-full" wire:model.defer="state.primer_ap"
                autocomplete="primer_ap" />
            <x-jet-input-error for="primer_ap" class="mt-2" />
        </div>
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="segundo_ap" value="{{ __('Segundo apellido') }}" />
            <x-jet-input id="segundo_ap" type="text" class="mt-1 block w-full" wire:model.defer="state.segundo_ap"
                autocomplete="segundo_ap" />
            <x-jet-input-error for="segundo_ap" class="mt-2" />
        </div>
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="ci" value="{{ __('Carnet de identidad') }}" />
            <x-jet-input id="ci" type="text" class="mt-1 block w-full" wire:model.defer="state.ci" autocomplete="ci" />
            <x-jet-input-error for="ci" class="mt-2" />
        </div>
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="cidepartamento_id" value="{{ __('Extensión de carntet') }}" />
            <select
                class="bg-green-50 text-black block mt-1 w-1/2 border-gray-300 focus:border-green-500 focus:ring focus:ring-green-300 focus:ring-opacity-50 rounded-md shadow-sm"
                name="cidepartamento_id" wire:model.defer="state.cidepartamento_id" :value="old('cidepartamento_id')"
                required autofocus autocomplete="cidepartamento_id">
                <option value="1">La Paz</option>
                <option value="2">Cochabamba</option>
                <option value="4">Tarija</option>

                <option value="5">Santa Cruz</option>
                <option value="3">Oruro</option>
                <option value="9">Pando</option>
                <option value="6">Chuquisaca</option>
                <option value="8">Beni</option>
                <option value="7">Potosí</option>


            </select>
            <x-jet-input-error for="ci" class="mt-2" />
        </div>
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="fecha_nacimiento" value="{{ __('Fecha de nacimiento') }}" />
            <input type="date" id="fecha_nacimiento"
                class="bg-green-50 text-black block mt-1 w-1/2 border-gray-300 focus:border-green-500 focus:ring focus:ring-green-300 focus:ring-opacity-50 rounded-md shadow-sm"
                :value=" old('fecha_nacimiento')" wire:model.defer="state.fecha_nacimiento" required autofocus
                autocomplete="fecha_nacimiento">

            <x-jet-input-error for="fecha_nacimiento" class="mt-2" />
        </div>
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="telefono" value="{{ __('Teléfono') }}" />
            <x-jet-input id="telefono" type="text" class="mt-1 block w-full" wire:model.defer="state.telefono"
                autocomplete="telefono" />
            <x-jet-input-error for="telefono" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="genero_id" value="{{ __('Genero') }}" />
            <select
                class="bg-green-50 text-black block mt-1 w-1/2 border-gray-300 focus:border-green-500 focus:ring focus:ring-green-300 focus:ring-opacity-50 rounded-md shadow-sm"
                name="genero_id" wire:model.defer="state.genero_id" :value="old('genero_id')" required autofocus
                autocomplete="genero_id">
                <option value="1">Masculino</option>
                <option value="2">Femenino</option>



            </select>
            <x-jet-input-error for="ci" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            @php
                $direccion = auth()->user()->direccion;
            @endphp
            <x-jet-label for="dirección" value="{{ __('Dirección') }}" />

            <textarea
                class=" text-black block mt-1 w-full border-gray-300 focus:border-green-500 focus:ring focus:ring-green-200 focus:ring-opacity-50 rounded-md shadow-sm bg-green-50"
                required name="direccion" id="" cols="30" rows="10" wire:model.defer="state.direccion"
                autocomplete="dirección">{{ $direccion }}</textarea>
            <x-jet-input-error for="direccion" class="mt-2" />
        </div>


        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
