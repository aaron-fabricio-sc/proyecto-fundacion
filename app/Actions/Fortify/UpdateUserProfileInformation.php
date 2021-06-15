<?php

namespace App\Actions\Fortify;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
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




            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'photo' => ['nullable', 'image', 'max:1024'],
        ])->validateWithBag('updateProfileInformation');

        if (isset($input['photo'])) {
            $user->updateProfilePhoto($input['photo']);
        }

        if (
            $input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail
        ) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
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
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    protected function updateVerifiedUser($user, array $input)
    {
        $user->forceFill([
            'name' => $input['name'],


            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
