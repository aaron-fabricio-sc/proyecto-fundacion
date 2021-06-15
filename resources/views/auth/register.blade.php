<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Nombre') }}" />
                <x-jet-input id="name" class=" block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus autocomplete="name" />
            </div>
            <div>
                <x-jet-label for="primer_ap" value="{{ __('Primer apellido') }}" />
                <x-jet-input id="primer_ap" class=" block mt-1 w-full" type="text" name="primer_ap"
                    :value="old('primer_ap')" required autofocus autocomplete="primer_ap" />
            </div>
            <div>
                <x-jet-label for="segundo_ap" value="{{ __('Segundo Apellido') }}" />
                <x-jet-input id="segundo_ap" class=" block mt-1 w-full" type="text" name="segundo_ap"
                    :value="old('segundo_ap')" required autofocus autocomplete="segundo_ap" />
            </div>
            <div>
                <x-jet-label for="ci" value="{{ __('Carnet de identidad') }}" />
                <x-jet-input id="ci" class=" block mt-1 w-full" type="text" name="ci" :value="old('ci')" required
                    autofocus autocomplete="ci" />
            </div>
            <div>
                <x-jet-label for="Extencion" value="{{ __('Extensión del carnet') }}" />

                <select
                    class="bg-green-50 block mt-1 w-1/2 border-gray-300 focus:border-green-500 focus:ring focus:ring-green-300 focus:ring-opacity-50 rounded-md shadow-sm"
                    name="cidepartamento_id" :value="old('cidepartamento_id')" required autofocus
                    autocomplete="cidepartamento_id">
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

            </div>
            <div>
                <x-jet-label for="fecha_nacimiento" value="{{ __('Fecha de nacimiento') }}" />
                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento"
                    class="bg-green-50 block mt-1 w-1/2 border-gray-300 focus:border-green-500 focus:ring focus:ring-green-300 focus:ring-opacity-50 rounded-md shadow-sm"
                    :value=" old('fecha_nacimiento')" required autofocus autocomplete="fecha_nacimiento">

            </div>


            <div>
                <x-jet-label for="telefono" value="{{ __('Teléfonos') }}" />
                <x-jet-input id="telefono" class=" block mt-1 w-full" type="text" name="telefono"
                    :value="old('telefono')" required autofocus autocomplete="telefono" />
            </div>






            <div>
                <x-jet-label for="" value="{{ __('Genero') }}" />

                <select
                    class="bg-green-50 block mt-1 w-1/2 border-gray-300 focus:border-green-500 focus:ring focus:ring-green-300 focus:ring-opacity-50 rounded-md shadow-sm "
                    name="genero_id" :value="old('genero_id')" required autofocus autocomplete="genero_id">
                    <option value="1">Masculino</option>
                    <option value="2">Femenino</option>



                </select>

            </div>
            <div>
                <x-jet-label for="dirección" value="{{ __('Dirección') }}" />

                <textarea
                    class=" block mt-1 w-full border-gray-300 focus:border-green-500 focus:ring focus:ring-green-200 focus:ring-opacity-50 rounded-md shadow-sm bg-green-50"
                    required name="direccion" id="" cols="30" rows="10">{{ old('dirección') }}</textarea>

            </div>


            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
    'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Terms of Service') . '</a>',
    'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Privacy Policy') . '</a>',
]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('¿Ya te encuentras registrado?') }}
                </a>

                <button class="ml-4 boton">
                    {{ __('Registrar') }}
                </button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
