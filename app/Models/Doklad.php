<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Doklad
 *
 * @property $id
 * @property $obchod
 * @property $doprava
 * @property $cislo_objednavky
 * @property $datum_nakupu
 * @property $cena_s_dph
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Doklad extends Model {

    static $rules = [
        'obchod' => 'required',
        'doprava' => 'required',
        'cislo_objednavky' => 'required',
        'datum_nakupu' => 'required|date',
        'cena_s_dph' => 'required|numeric',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['obchod', 'doprava', 'cislo_objednavky', 'datum_nakupu', 'cena_s_dph'];


}
