<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Pengumuman extends Model
{
    use HasFactory;
    use Sortable;

    protected $table = 'pengumumans';

    public function cariPengumuman($id)
    {
        $data = Pengumuman::where('id', $id)->first();
        return $data;
    }
    public $sortable = [
        'judul', 'konten', 'tautan', 'updated_at'
    ];
}
