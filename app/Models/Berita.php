<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Berita extends Model
{
    use HasFactory;
    use Sortable;

    protected $table = 'beritas';
    protected $primaryKey = 'id';
    public $sortable = [
        'id', 'judul', 'tautan', 'updated_at'
    ];

    public function cariBerita($id)
    {
        $data = Berita::where('id', $id)->first();
        return $data;
    }
}
