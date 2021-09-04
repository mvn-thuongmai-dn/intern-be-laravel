<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'gender',
        'birthday'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getGenderAttribute($value)
    {
        return $value === 1 ? 'Male' : 'Female';
    }

    public function getBirthdayAttribute($value)
    {
        $age = Carbon::parse($value)->age;

        switch ($age) {
            case ($age < 6):
                echo "Mẫu Giáo";
                break;
            case ($age <= 11):
                echo "Tiểu Học";
                break;
            case ($age <= 15):
                echo "THCS";
                break;
            case ($age <= 18):
                echo "THPH";
                break;
            default:
                echo "Đại Học";
        }
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
