<?php

class Proyecto extends Eloquent {
	public $timestamps = false;
	protected $table = 'proyectos';
	protected $primaryKey = 'id_proyecto';
}
?>