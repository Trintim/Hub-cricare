<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'email',
        'phone',
        'dt_nasc',
        'image',
        'setor',
    ];

    protected $casts = [
        'dt_nasc' => 'datetime:d/m/Y',
    ];

    public function getCreatedAtFormatAttribute()
    {
        return $this->created_at->format('d/m/y');
    }

    public function getPhoneFormatAttribute()
    {
        $phone = $this->phone;
        preg_replace('~.*(\d{3})[^\d]{0,7}(\d{3})[^\d]{0,7}(\d{4}).*~', '($1) $2-$3', $phone) . "\n";
    }
}
