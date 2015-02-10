<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitDecks extends Migration {

    public $tableName = "decks";

    public function up() {
        Schema::create($this->tableName, function($table) {
            $table->increments("id");
            $table->integer("user_id")->index()->unsigned();
            
            $table->string("title", 254);
            $table->timestamps();
            $table->softDeletes();
            
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
