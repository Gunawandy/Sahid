<?php

namespace Sahid\Penjualan\Entity\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{	
	protected $table = "kategori";
    public $timestamps = false;
	protected $guarded = array("id");

	public function game()
	{
		return $this->belongsToMany("Sahid\Penjualan\Entity\Eloquent\Game", "penjualan");
	}

}
