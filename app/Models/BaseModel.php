<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class BaseModel extends Model
{ 
 
    public static function boot()
    {
        parent::boot();

        static::creating(function($model)
        {
            $user = Auth::user();
            if ($user) {
                $model->created_by = $user->id;
            }

        });
        static::updating(function($model)
        {
            $user = Auth::user();
            if ($user) {
                $model->updated_by = $user->id;
            }
        }); 
        static::deleting(function($model)
        {
            $user = Auth::user();
            if ($user) {
                $model->deleted_by = $user->id;
                $model->save();
            }  
        });
    } 

    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    } 

    public function scopeSorted($query)
    {
        return $query->orderBy('sort_order', 'ASC');
    } 
 
}
