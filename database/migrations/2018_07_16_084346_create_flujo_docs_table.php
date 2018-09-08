<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlujoDocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flujo_docs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo_doc_id')->unsigned();
            $table->integer('kardex');
            $table->string('desc_doc'); //ofico N° 123, Carta N° 3
            $table->date('fecha_reg'); //fecha en que el usuario abre el archivo o registra el documento
            $table->string('asunto_doc'); //solicito
            $table->string('prioridad'); //0=normal, 1=urgente
            $table->string('tipo_emisor')->default('0'); //0=externo, 1=interno
            $table->string('emisor'); //depende del tipo de emisor. si es interno solo se usará su ID de usuario
            $table->string('archivo');
            $table->integer('responsable_recepcion')->unsigned(); //ID del usuario que registra
            $table->string('se_adjunta'); //ejm. 2 folios, un CD
            $table->integer('doc_referencia')->nullable(); //ID del documento, puede estar vacio. 
            $table->integer('area_destino')->nullable();  // ID del Area de destino, puede estar vacio
            $table->integer('estado')->default('0'); //entrantes: 0=pendiente, 1=atendido- Salientes: 2:enviado, 3: enviado y visto.

            $table->foreign('tipo_doc_id')->references('id')->on('tipo_docs')->onDelete('cascade');
            $table->foreign('responsable_recepcion')->references('id')->on('responsables')->onDelete('cascade');
            //$table->foreign('doc_ref')->references('id')->on('flujo_docs')->onDelete('cascade'); 
            //$table->foreign('area_destino')->references('id')->on('oficinas')->onDelete('cascade');           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flujo_docs');
    }
}
