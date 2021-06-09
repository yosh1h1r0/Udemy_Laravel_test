<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_forms', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20);
            $table->string('email');
            $table->longText('url')->nullable($value = true);
            $table->boolean('sex')->default(0);
            $table->tinyInteger('age');
            $table->string('contact', 200);
            $table->timestamps();
            //上から氏名、メールアドレス、URL、性別、年齢、お問い合わせ内容
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_forms');
    }
}
