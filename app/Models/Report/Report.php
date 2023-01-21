<?php

namespace App\Models\Report;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];

        /**
     * Get the user that owns the phone.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
