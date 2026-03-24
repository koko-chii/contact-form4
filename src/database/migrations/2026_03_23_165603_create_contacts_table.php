<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{

    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable(false); // 名前
            $table->string('email', 255)->nullable(false); // メールアドレス
            $table->string('tel', 11)->nullable(false); // 電話番号 (ここをtelにします)
            $table->text('content')->nullable(); // お問い合わせ内容 (任意)
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
