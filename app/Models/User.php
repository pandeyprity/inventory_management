<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = "tbl_user_mstr";
    protected $fillable = [
        'name',
        'mobile_no',
        'email',
        'password',
        "user_type_id"
    ];

    protected $attributes = [
        'username'=> "",
        'status' => true, // Set the default value for the 'status' column
    ];

    public function userType()
    {
        return $this->belongsTo(UserType::class, 'user_type_id');
    }
}