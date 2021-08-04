<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class GatePass extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
        'password',
    ];
/*
    public function phone()
    {
        return $this->hasOne(Phone::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
*/
    public function items()
    {
        return $this->hasMany(GatePassItem::class);
    }

    public function signatories()
    {
        return $this->hasMany(GatePassAuthorizer::class);
    }



}
