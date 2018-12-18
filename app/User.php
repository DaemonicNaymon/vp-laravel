<?php
namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Notifications\ResetPassword;
use Hash;

/**
 * Class User
 *
 * @package App
 * @property string $firstname
 * @property string $lastname
 * @property string $phone_number
 * @property string $street_name
 * @property string $street_number
 * @property string $postalcode
 * @property string $city
 * @property string $email
 * @property string $password
 * @property string $role
 * @property string $remember_token
*/
class User extends Authenticatable
{
    use Notifiable;
    protected $fillable = ['firstname', 'suffix', 'lastname', 'phone_number', 'street_name', 'street_number', 'postalcode', 'city', 'email', 'password', 'remember_token', 'role_id', 'stripe_customer_id', 'role_until'];
    
    
    
    /**
     * Hash password
     * @param $input
     */
    public function setPasswordAttribute($input)
    {
        if ($input)
            $this->attributes['password'] = app('hash')->needsRehash($input) ? Hash::make($input) : $input;
    }
    
    public function getFullName(){
        
        if (strlen($this->suffix) != 0)
        {
            $fullName = $this->firstname. " ". $this->suffix. " ". $this->lastname;
        }
        else
        {
            $fullName = $this->firstname. " ". $this->lastname;
        }
        return ucwords($fullName);
    }
    
    public function getFullStreet()
    {
        return ucfirst($this->street_name . " ". $this->street_number);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setRoleIdAttribute($input)
    {
        $this->attributes['role_id'] = $input ? $input : null;
    }
    
    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
    
    
    

    public function sendPasswordResetNotification($token)
    {
       $this->notify(new ResetPassword($token));
    }
}
