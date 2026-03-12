<?php

namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth; 

class Admin extends Authenticatable
{
    use SoftDeletes, HasFactory, Notifiable;

    protected $table = 'admin';

    protected $primaryKey = 'id';

    protected $fillable = ['role_id', 'name', 'tc', 'birthday', 'title', 'phone', 'email', 'password', 'is_active', 'last_login', 'created_by', 'updated_by', 'deleted_by'];

    protected $dates = ['last_login','birthday']; 

    protected $hidden = ['password', 'remember_token'];

    protected $casts = [
        'email_verified_at' => 'datetime'
    ];

    protected $guard = 'admin';

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

    public function getFullNameAttribute()
    {
        return "{$this->name}";
    }
}               
