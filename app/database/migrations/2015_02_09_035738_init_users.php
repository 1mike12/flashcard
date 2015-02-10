<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitUsers extends Migration {

    public $tableName = "users";

    public function up() {
        Schema::create($this->tableName, function($table) {
            $table->increments("id");
            $table->string("email", 254);
            $table->string("name", 127);

            $table->string("password", 128);
            $table->string("remember_token", 100)->nullable();

            $table->string("confirmation", 128)->nullable();
            $table->boolean("confirmed");
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
