<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration {

    public $tableName = "cards";

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create($this->tableName, function ($table) {
            $table->increments('id');
            $table->integer("deck_id")->index()->unsigned();

            $table->string("front", 255);
            $table->string("back", 255);

            $table->timestamps();
            $table->softDeletes();

            //foreign keys
            $table->foreign('deck_id')
                ->references('id')->on('decks')
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
