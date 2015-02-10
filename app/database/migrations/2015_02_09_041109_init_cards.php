<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitCards extends Migration {
    public $tableName = "cards";
    
    public function up() {
        Schema::create($this->tableName, function($table) {
            $table->increments("id");
            $table->integer("deck_id")->index()->unsigned();
            
            $table->string("title", 254);
            $table->text("content")->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->float("weight")->nullable();

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
