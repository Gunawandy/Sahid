<?php

namespace Sahid\Penjualan\Entity\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Konsumen extends Model
{	
	protected $table = "konsumen";
    public $timestamps = false;
	protected $guarded = array("id");

	public function game()
	{
		return $this->belongsToMany("Sahid\Penjualan\Entity\Eloquent\Game", "penjualan");
	}

public function user() {
        return $this->hasOne("Sahid\User\Entity\Eloquent\User");
    }
}
