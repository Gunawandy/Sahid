<?php
namespace Sahid\Penjualan\Http\Controllers;

use Sahid\Penjualan\Entity\Eloquent\Game;

use Sahid\Penjualan\Http\Requests\GameRequest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class gameController extends Controller
{
	public function create()
	{
		$game= new Game;
		return view("SahidPenjualan::game/form-addGame")
		->with("url",url("/games/store"))
		->with("game",$game)
		;
	}

	public function store(GameRequest $request)
	{
		$game = new Game;
		$game->nama			=$_POST['nama'];
		$game->developer		=$_POST['developer'];
		$game->publisher		=$_POST['publisher'];
		$game->harga			=$_POST['harga'];
		$game->save();
		return redirect(url("/games"));
	}

	public function index()
	{
		return view("SahidPenjualan::game.index", ['game'=>Game::all()]);
	}

	public function daftargame()
	{
		return view("SahidPenjualan::game.daftargame", ['game'=>Game::all()]);
	}

	public function form()
	{
		return view("SahidPenjualan::game.form", ['game'=>Game::all()]);
	}


	public function show() 
	{
		return view("SahidPenjualan::game.game", ['game'=>Game::all()]);
	}

	 public function edit($id) {
		$game =Game::find($id);
		return view("SahidPenjualan::game/form-editGame")
		->with("url",url("/games/$id/update"))
		->with("game",$game)
		;
	}

	public function update(GameRequest $request, $id) {
		$game= Game::find($id);
		$game->nama				=$_POST['nama'];
		$game->developer		=$_POST['developer'];
		$game->publisher		=$_POST['publisher'];
		$game->harga			=$_POST['harga'];
		$game->save();
		return redirect(url("/games"));
	}

	public function delete($id){
		game::destroy($id);
		return redirect(url("/games"));
	}

}
?>
