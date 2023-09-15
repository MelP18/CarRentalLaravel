<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('mainly_image')->nullable(false);
            $table->string('secondary_image')->nullable(false);
            $table->string('tertiary_image')->nullable(false);
            $table->string('gearboxes')->nullable(false);
            $table->integer('power')->nullable(false);
            $table->integer('number_door')->nullable(false);
            $table->string('fuel')->nullable(false);
            $table->integer('number_cylinder')->nullable(false);
            $table->integer('valve')->nullable(false);
            $table->integer('maximum_speed')->nullable(false);
            $table->string('body_shop')->nullable(false);
            $table->string('transmission')->nullable(false);
            $table->string('brake')->nullable(false);
            $table->integer('acceleration')->nullable(false);
            $table->string('color')->nullable(false);
            $table->foreignId('modal_id')->nullable()
                ->constrained('modals')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('cars');
    }
}
