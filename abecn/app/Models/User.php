<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';
    protected $fillable = [
        'group_id',
        'profile_img',
        'membership_id',
        'first_name',
        'last_name',
        'display_name',
        'password',
        'dob',
        'organization',
        'specialty',
        'email',
        'phone',
        'pcity',
        'line1',
        'line2',
        'name',
        'city',
        'state',
        'country',
        'postal_code',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function group() {
        return $this->belongsTo(Group::class);
    }

    public function membership() {
        return $this->belongsTo(Membership::class);
    }

    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $search_term = request('search');
            $search_terms = preg_split('/\s+/', $search_term, -1, PREG_SPLIT_NO_EMPTY);

            $query->where(function ($query) use ($search_terms) {
                foreach ($search_terms as $term) {
                    $term_wildcard = '%' . $term . '%';

                    $query->orWhere(function ($query) use ($term_wildcard) {
                        $query->where('first_name', 'like', $term_wildcard)
                            ->orWhere('last_name', 'like', $term_wildcard);
                    })
                        ->orWhere('email', 'like', $term_wildcard)
                        ->orWhere('display_name', 'like', $term_wildcard);
                }
            });
        }
    }
}
