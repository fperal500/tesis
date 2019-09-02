<?php

namespace sistVentas;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
  	protected $table = 'persona';

  	protected $primaryKey= 'idpersona';

  	public $timestamps= false;

  	protected $fillable=[
      'nombre',
      'descripcion',
      'condicion',

  	];


}
