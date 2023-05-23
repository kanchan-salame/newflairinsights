<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Report\Report;
 

class report_request extends Model
{
    use HasFactory;
       /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fname',
        'email',
        'subject',
        'message',
        'company_name',
        'country',
        'contact_no',
        'requirements',
        'designation',  
        'report_id',  
    ];

    /*
    *Belongs to report
    *
    */

    public function report()
    {
        return $this->belongsTo(Report::class);
    }
}
