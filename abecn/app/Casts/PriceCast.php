<?php 

namespace App\Casts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class PriceCast implements CastsAttributes
{
    public function set(Model $model, string $key, mixed $value, array $attributes)
    {
        return $value * 100;
    }

    public function get(Model $model, string $key, mixed $value, array $attributes)
    {
        return $value / 100;
    }
}