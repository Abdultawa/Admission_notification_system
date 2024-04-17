<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $table = "application";

    protected $fillable = [
        'firstname',
        'lastname',
        'dob',
        'gender',
        'phone',
        'email',
        'country',
        'state',
        'address',
        'program_type',
        'dept',
        'primaryCertificate',
        'birthCertificate',
        'olevelCertificate',
        'indegineCertificate'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    // Define any model events or relationships here
}
