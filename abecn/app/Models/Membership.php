<?php

namespace App\Models;

use App\Casts\PriceCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Membership extends Model
{
    use HasFactory;

    const TABLE = 'memberships';

    protected $table = self::TABLE;

    protected $fillable = [
        'name',
        'slug',
        'stripe_name',
        'stripe_id',
        'price',
        'abbreviation',
    ];

    protected $casts = [
        'price' => PriceCast::class,
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function id(): int
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function slug(): string
    {
        return $this->slug;
    }
    public function stripeName(): string
    {
        return $this->stripe_name;
    }
    public function stripeId(): string
    {
        return $this->stripe_id;
    }
    public function price(): string
    {
        return '$' . $this->price;
    }
    public function abbreviation()
    {
        return $this->abbreviation;
    }

}
