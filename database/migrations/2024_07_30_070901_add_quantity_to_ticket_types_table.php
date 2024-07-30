<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddQuantityToTicketTypesTable extends Migration
{
    public function up()
    {
        Schema::table('ticket_types', function (Blueprint $table) {
            $table->integer('quantity')->default(0); // Ajoute la colonne quantity avec une valeur par défaut de 0
        });
    }

    public function down()
    {
        Schema::table('ticket_types', function (Blueprint $table) {
            $table->dropColumn('quantity');
        });
    }
}
