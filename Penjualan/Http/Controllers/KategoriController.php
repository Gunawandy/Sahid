<?php
namespace Sahid\Penjualan\Http\Controllers;

use Sahid\Penjualan\Entity\Eloquent\Kategori;

use Sahid\Penjualan\Http\Requests\KategoriRequest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KategoriController extends Controller
{
	public function create()
	{
		$kategori= new Kategori;
		return view("SahidPenjualan::kategori/form-addKategori")
		->with("url",url("/kategories/store"))
		->with("kategori",$kategori)
		;
	}

	public function store(KategoriRequest $request)
	{
		$kategori = new Kategori;
		$kategori->kategori			=$_POST['kategori'];
		$kategori->save();
		return redirect(url("/kategories"));
	}

	public function index()
	{
		return view("SahidPenjualan::kategori.index", ['kategori'=>Kategori::all()]);
	}

	public function show() 
	{
		return view("SahidPenjualan::kategori.kategori", ['kategori'=>Kategori::all()]);
	}

	 public function edit($id) {
		$kategori =Kategori::find($id);
		return view("SahidPenjualan::kategori/form-editKategori")
		->with("url",url("/kategories/$id/update"))
		->with("kategori",$kategori)
		;
	}

	public function update(KategoriRequest $request, $id) {
		$kategori= Kategori::find($id);
		$kategori->kategori			=$_POST['kategori'];
		$kategori->save();
		return redirect(url("/kategories"));
	}

	public function delete($id){
		kategori::destroy($id);
		return redirect(url("/kategories"));
	}

}
?>
