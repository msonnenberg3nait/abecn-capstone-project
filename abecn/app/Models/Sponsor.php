<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;
    protected $table = 'sponsors';
    protected $fillable = [
        'company_name',
        'company_contact',
        'primary_address',
        'city',
        'postal',
        'email',
        'phone',
        'img',
        'project_img',
        'bio'
    ];

    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $search_term = request('search');
            $search_terms = preg_split('/\s+/', $search_term, -1, PREG_SPLIT_NO_EMPTY);

            $query->where(function ($query) use ($search_terms) {
                foreach ($search_terms as $term) {
                    $term_wildcard = '%' . $term . '%';

                    $query->orWhere(function ($query) use ($term_wildcard) {
                        $query->where('company_name', 'like', $term_wildcard);
                    })
                        ->orWhere('email', 'like', $term_wildcard);
                }
            });
        }
    }
}
