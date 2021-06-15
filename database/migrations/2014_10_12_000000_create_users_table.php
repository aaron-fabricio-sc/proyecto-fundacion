<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->string('primer_ap', 50);
            $table->string('segundo_ap', 50);
            $table->unsignedBigInteger('ci')->unique();
            $table->unsignedBigInteger('cidepartamento_id');
            $table->foreign('cidepartamento_id')->references('id')->on('cidepartamentos')->onUpdate('cascade')->onDelete('cascade');
            $table->date('fecha_nacimiento');
            $table->string('telefono', 50);
            $table->unsignedBigInteger('genero_id');
            $table->foreign('genero_id')->references('id')->on('generos')->onUpdate('cascade')->onDelete('cascade');

            $table->text('direccion');



            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
