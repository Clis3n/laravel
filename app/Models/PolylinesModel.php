<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class PolylinesModel extends Model
{
    protected $table = 'polylines';
    protected $guarded = ['id'];

    public function geojson_polylines()
    {
        $polylines = $this->select(DB::raw("id, ST_AsGeoJSON(geom) AS geom, ST_Length(geom, true) AS panjang_m, ST_Length(geom, true)/1000 AS panjang_km, name, description, created_at, updated_at"))->get();
        $geojson = [
            'type' => 'FeatureCollection',
            'features' => []
        ];

        foreach ($polylines as $p) {
            $feature = [
                'type' => 'Feature',
                'geometry' => json_decode($p->geom),
                'properties' => [
                    'name' => $p->name,
                    'description' => $p->description,
                    'created_at' => $p->created_at,
                    'updated_at' => $p->updated_at,
                    'panjang_m' => $p->panjang_m,
                    'panjang_km' => $p->panjang_km,
                ],
            ];
            array_push($geojson['features'], $feature);
        }
        return $geojson;
    }
}
