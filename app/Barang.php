<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 *
 */
class Barang extends Model
{
  public $table = 't_barang';
  
  protected $fillable = [
    'kategori','nama_barang','stok',
  ];

}


?>
