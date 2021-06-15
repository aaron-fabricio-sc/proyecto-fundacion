<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'primer_ap' => ['required', 'string', 'max:255'],
            'segundo_ap' => ['required', 'string', 'max:255'],
            'ci' => ['required'],
            'cidepartamento_id' => ['required'],

            'fecha_nacimiento' => ['required'],
            'telefono' => ['required'],

            'genero_id' => ['required'],
            'direccion' => ['required'],


            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'primer_ap' => $input['primer_ap'],
            'segundo_ap' => $input['segundo_ap'],
            'ci' => $input['ci'],
            'cidepartamento_id' => $input['cidepartamento_id'],
            'fecha_nacimiento' => $input['fecha_nacimiento'],
            'telefono' => $input['telefono'],
            'genero_id' => $input['genero_id'],
            'direccion' => $input['direccion'],


            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
