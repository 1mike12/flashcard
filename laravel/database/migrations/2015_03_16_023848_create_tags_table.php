<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration {

    public $tableName = "tags";

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create($this->tableName, function ($table) {
            $table->increments('id');
            $table->integer("deck_id")->index()->unsigned();

            $table->string("tag", 50);

            $table->timestamps();
            $table->softDeletes();
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
