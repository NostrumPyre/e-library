<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AcademicResourceAuthor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_resource_author', function (Blueprint $table) {
            $table->string("authors_name");
            $table->unsignedBigInteger("academic_resources_id");

            $table->foreign("authors_name")->references("name")->on("authors");
            $table->foreign("academic_resources_id")->references("id")->on("academic_resources");

            $table->primary(["authors_name", "academic_resources_id"], "PK_Key_academic_resources_authors");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
