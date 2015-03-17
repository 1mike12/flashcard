<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDecksTable extends Migration {
    public $tableName = "decks";

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create($this->tableName, function ($table) {
            $table->increments('id');
            $table->integer("user_id")->index()->unsigned();

            $table->string("title", 50);
            $table->string("description", 255);

            $table->timestamps();
            $table->softDeletes();

            //foreign keys
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists($this->tableName);
    }

}
