<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Role;

class User extends Authenticatable
{
    use Notifiable;
    //public $timestamps=false;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','name','user_name', 'email', 'password','confirmation_code'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles(){
        return $this->belongsToMany(Role::class,'asignacion_rol_user');

    }
    public function permisosUser(){
        return $this->belongsToMany(Permiso::class);

    }
    public function scopeName($query,$name){
        if (trim($name) != ""){
            $query->where('name','like',"%$name%");
        }
    }
    public function hasRoles(array $roles){
        return $this->roles()->pluck('nombre_rol')->intersect($roles)->count();
    }
    public function hasPermisos(array $permisos){
        if($this->isAdmin()){
            return true;
        }
        return $this->permisosUser()->pluck('name')->intersect($permisos)->count();
    }
    public function estudiante(){
        return $this->belongsToMany(Estudiante::class);
    }
    public function docente(){
        return $this->belongsToMany(Docente::class);
    }
    public function isConfirmed(){
        return $this->confirmado;
    }
    public function isAdmin(){
        return $this->roles()->pluck('privilegios')->intersect('SuperUsuario')->count();
    }
}
