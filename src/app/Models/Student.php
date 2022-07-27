<?php

namespace App\Models;

use App\Scopes\ScopeStudent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = ['name', 'course'];

    public function scopeNameEqual($query, $str) {
        return $query->where('name', $str);
    }

    protected static function boot() {
        parent::boot();
        static::addGlobalScope(new ScopeStudent);
        // static::addGlobalScope('id', function (Builder $builder) {
        //     $builder->where('id', '<', 3);
        // });
    }
}
