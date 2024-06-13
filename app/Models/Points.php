<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Points extends Model
{
    use HasFactory;

    protected $table = 'table_points'; //modal digunakan untuk berinteraksi dengan database, satu model satu tabel

    protected $guarded = ['id'];

    //protected $fillable = ['name', 'description', 'geom'];

    public function Points()
    {
        return $this->select(DB::raw('id, name, description, image, ST_AsGeoJSON (geom) as geom, created_at, updated_at'))->get();
    }

    public function Point($id)
    {
        return $this->select(DB::raw('id, name, description, image, ST_AsGeoJSON (geom) as geom, created_at, updated_at'))->where('id', $id)->get();
    }
}
