<?php
namespace Sahid\Penjualan\Entity\Eloquent;
use Illuminate\Database\Eloquent\Model;

Class Game extends Model
{
	protected $table="game";
	public $timestamps=false;
	public $guarded=array('id');

	function konsumen()
	{
		return $this->belongsToMany("Sahid\Penjualan\Entity\Eloquent\Konsumen", "penjualan");
	}

}