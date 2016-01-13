<?php
namespace Sahid\Penjualan\Http\Requests;
use App\Http\Requests\Request;

class GameRequest extends Request {
	public function authorize() {
		return true;
	}

	public function rules() {
		return [
		'nama'    		=>"required",
		'developer'     =>"required",
		'publisher' 	=>"required",
		'harga'			=>"required|numeric",
		];
	}
}