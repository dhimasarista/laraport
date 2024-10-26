<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportExport extends Model
{
    use HasFactory;

    protected $table = 'Import_Export'; // Nama tabel

    protected $primaryKey = 'ID'; // Primary key

    public $incrementing = false; // Non-incrementing karena menggunakan UUID

    protected $keyType = 'string'; // Tipe key sebagai string

    protected $fillable = [
        'ID',
        'Country',
        'Product',
        'ShippingMethod',
        'Port',
        'Category',
        'Quantity',
        'Value',
        'Date',
    ];
}
