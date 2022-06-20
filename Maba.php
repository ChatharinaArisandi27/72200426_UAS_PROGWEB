<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Maba extends Model
{
    protected $table = 'maba';

    protected $fillable = [ 'nim', 'nama', 'jurusan', 'alamat' ];
    // public function create($table, $data)
    // {
    // 	DB::table($table)->insert([
    // 		$data
    // 	]);
    // }
}
