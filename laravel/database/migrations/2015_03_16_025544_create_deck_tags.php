<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeckTags extends Migration {

    public $tableName = "deck_tags";

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create($this->tableName, function ($table) {
            $table->increments('id');
            $table->integer("deck_id")->index()->unsigned();
            $table->integer("tag_id")->index()->unsigned();

            $table->string("title", 50);
            $table->string("description", 255);

            $table->timestamps();
            $table->softDeletes();

            //foreign keys
            $table->foreign('deck_id')
                ->references('id')->on('tags')
                ->onDelete("cascade")->onUpdate("cascade");
            $table->foreign('tag_id')
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
