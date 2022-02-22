<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Related extends Model
{
    use HasFactory;
    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('test', function (Builder $builder) {
            $builder->where('other_id', \Auth::user()->company->first()->id);
        });
    }
    public function other()
    {
        return $this->belongsTo(Other::class);
    }
}
