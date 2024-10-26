<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportExportTable extends Migration
{
    public function up()
    {
        Schema::create('Import_Export', function (Blueprint $table) {
            $table->uuid('ID')->primary(); // UUID sebagai primary key
            $table->string('Country'); // Kolom untuk Country
            $table->string('Product'); // Kolom untuk Product
            $table->string('ShippingMethod'); // Kolom untuk Shipping_Method
            $table->string('Port'); // Kolom untuk Port
            $table->string('Category'); // Kolom untuk Category
            $table->integer('Quantity'); // Kolom untuk Quantity
            $table->decimal('Value', 10, 2); // Kolom untuk Value
            $table->date('Date'); // Kolom untuk Date
            $table->timestamps(); // Menyimpan waktu dibuat dan diperbarui
        });
    }

    public function down()
    {
        Schema::dropIfExists('Import_Export');
    }
}
