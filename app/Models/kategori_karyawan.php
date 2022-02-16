<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori_karyawan extends Model
{
    use HasFactory;
    protected $guard =['id'];

    public function kategori(){
        return $this->hasMany(User::class);
    }

}
