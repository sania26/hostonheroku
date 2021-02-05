<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companyprof extends Model
{
    use HasFactory;
    public $fillable=['company_name','firstname','lastname','mobile','tel','email1','email2','pobox'];
}
