<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $name
 * @property $product_code
 * @property $product_price
 * @property $type
 * @property $doba_zaruky
 * @property $pocet
 * @property $extra
 * @property $doklad_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Doklad $doklad
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{

    static $rules = [
		'name' => 'required',
		'product_code' => 'required',
		'product_price' => 'required|numeric',
		'type' => 'required',
		'doba_zaruky' => 'required|numeric',
		'pocet' => 'required|numeric',
		'extra' => '',
		'doklad_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','product_code','product_price','type','doba_zaruky','pocet','extra','doklad_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function doklad()
    {
        return $this->hasOne('App\Models\Doklad', 'id', 'doklad_id');
    }


}
