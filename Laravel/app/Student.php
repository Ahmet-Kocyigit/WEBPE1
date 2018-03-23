<?php
/**
 * Created by PhpStorm.
 * User: Ahmet
 * Date: 20/03/2018
 * Time: 17:20
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    protected $fillable = ['Naam','Voornaam','Leeftijd','Beschrijving'];


}