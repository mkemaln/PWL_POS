<?php

namespace App\Models;

use App\Models\StokModel;
use App\Models\KategoriModel;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BarangModel extends Model
{
    protected $table = 'm_barang';
    protected $primaryKey = 'barang_id';

    protected $fillable = [
        'barang_kode', 
        'barang_nama', 
        'kategori_id', 
        'harga_beli', 
        'harga_jual',
        'image'
    ];

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(KategoriModel::class, 'kategori_id', 'kategori_id');
    }
    
    // protected function image(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($image) => url('/storage/posts/' . $image),
    //     );
    // }
}
