<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pessoa_juridicas', function (Blueprint $table) {
            $table->id();
            $table->char('cnpj')->comment('CNPJ da PJ');                    //CNPJ da PJ
            $table->char('insc_est')->comment('Inscrição Estadual');
            $table->char('insc_mun')->comment('Inscrição Municipal');
            $table->string('razao_soc')->comment('Razao Social');                 //Razao Social
            $table->string('nome_fant')->comment('Nome Fantasia');                 //Nome Fantasia
            $table->integer('cnae_princ')->comment('Cnae Principal');               //CNAE Principal
            $table->date(column:'data_ab')->comment('Abertura da Empresa');                     //Data da abertura da 
            $table->bigInteger(column:'cap_soc')->nullable()->comment('Valor do Capital Social');   //Valor do Capital Social
            $table->integer(column:'porte')->comment('');                    //Porte da Empresa
            $table->string(column:'filial')->nullable()->comment('');                    //Nome da filia
            $table->integer(column:'cod_nat_jur')->nullable()->comment('');              //Codigo de Natureza Juridica
            $table->string(column:'logradouro')->comment('');                //Logradouro, Rua
            $table->char(column:'numero')->comment('');                    //Numero do Imovel
            $table->string(column:'comp')->nullable()->comment('');          //Complemento
            $table->string(column:'bairro')->comment('');                    //
            $table->integer(column:'id_cid')->comment('');                   //ID da Cidade
            $table->integer(column:'id_uf')->comment('');                    //ID do Unidade Federativa
            $table->string(column:'email')->comment('');                    //Email 
            $table->string(column:'celular')->comment('');                  //
            $table->string(column:'obs')->nullable()->comment('');                      //
            $table->string(column:'email1')->nullable()->comment('');                   //Email Contato Comercial
            $table->string(column:'obs1')->nullable()->comment('');                     //
            $table->string(column:'nm_resp1')->nullable()->comment('');  
            $table->string(column:'email2')->nullable()->nullable()->comment('');       //Email Contato
            $table->string(column:'nm_resp2')->nullable()->comment('');  
            $table->string(column:'fone')->nullable()->comment('');                     //
            $table->string(column:'fone1')->nullable()->comment('');                    //
            $table->string(column:'celular1')->nullable()->comment('');                 //
            $table->string(column:'fone2')->nullable()->nullable()->comment('');        //
            $table->string(column:'celular2')->nullable()->comment('');                 //
            $table->string(column:'obs2')->nullable()->comment('');                     //
            $table->string(column:'nm_resp3')->nullable()->comment('');
            $table->string(column:'email3')->nullable()->nullable()->comment('');       //
            $table->string(column:'fone3')->nullable()->comment('');        //
            $table->string(column:'celular3')->nullable()->comment('');                 //
            $table->string(column:'obs3')->nullable()->comment('');                     //
            $table->string(column:'efr')->nullable()->comment('');          //Ente Federativo Responsavel
            $table->integer(column:'situacao')->nullable()->comment('');    //
            $table->string(column:'mot_sit')->nullable();                   //Motivo da situação
            $table->integer(column:'user')->nullable()->comment('Usuario que Atende');         // 
            $table->integer(column:'user_up')->nullable()->comment('Ultimo Usuario a alterar Cadastro');      //
            $table->integer('grupo_a')->nullable()->comment('');
            $table->integer('grupo_b')->nullable()->comment('');
            $table->bigInteger('limite')->nullable()->comment('limite de compra em boleto');
            $table->bigInteger('limite_em_uso')->nullable()->comment('limite de boleto usado');
            $table->integer('grupo_financeiro')->nullable()->comment('');
            $table->integer('create_by')->nullable()->comment('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoa_juridicas');
    }
};
