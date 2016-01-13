<?php 
namespace Sahid\Penjualan\Http\Controllers;
use Sahid\Penjualan\Entity\Eloquent\Konsumen;
use Sahid\Penjualan\Entity\Eloquent\Game;
use Sahid\User\Entity\Eloquent\User;

use Illuminate\Http\Request;
use Sahid\Penjualan\Http\Requests\RegisterKsmRequest;
use Sahid\Penjualan\Http\Requests\EditKsmRequest;
use App\Http\Controllers\Controller;

class KsmController extends Controller
{
    public function create()
    {
        $konsumen= new Konsumen;
        return view("SahidPenjualan::konsumen/form-regKsm")
        ->with("url",url("/ksm/store"))
        ->with("konsumen",$konsumen)
        ;
    }

    public function store(RegisterKsmRequest $request)
    {
        $user = new User;
        $user->username = $_POST['username'];
        $user->password = $_POST['password'];
        $user->level = 'konsumen';
        $user->save();

        $konsumen = new Konsumen;
        $konsumen->nama            =$_POST['nama'];
        $konsumen->alamat          =$_POST['alamat'];
        $konsumen->tgl_lahir       =$_POST['tgl_lahir'];
        $konsumen->email  		   =$_POST['email'];
        $konsumen->telp    		   =$_POST['telp'];
        $konsumen->user_id   =$user->id;
        $konsumen->save();

        

        return redirect(url("/registered"));
    }

    public function index()
    {   
        return view("SahidPenjualan::konsumen.index", ['konsumen'=>Konsumen::all()]);
    }

    public function konsumen()
    {   
        return view("SahidPenjualan::konsumen.konsumen", ['konsumen'=>Konsumen::all()]);
    }

    public function show($id)
    {
       $konsumen=Konsumen::find($id);
        return view("SahidPenjualan::konsumen.show", array("konsumen"=>$konsumen));
    }

     public function edit($id)
    {
        $konsumen = Konsumen::find($id);
        return view("SahidPenjualan::konsumen/form-edit")
        ->with("url",url("/konsumen/$id/update"))
        ->with("konsumen",$konsumen)
        ;
    }

    public function update(EditKsmRequest $request,$id)
    {
        $konsumen = konsumen::find($id);
        $konsumen->nama      	    =$_POST['nama'];
        $konsumen->alamat           =$_POST['alamat'];
        $konsumen->tgl_lahir        =$_POST['tgl_lahir'];
        $konsumen->email  		    =$_POST['email'];
        $konsumen->telp             =$_POST['telp'];
        $konsumen->save();
        return redirect(url("/members"));
    }

    public function delete($id)
    {
        konsumen::destroy($id);
        return redirect(url("/members"));
    }

    public function jual($id){
        $konsumen = Konsumen::find($id);
        $list_game = Game::all();
        return view("SahidPenjualan::konsumen/form-jual")
        ->with("url",url("/members/$id/prosesjual"))
        ->with("konsumen",$konsumen)
        ->with("list_game", $list_game);
    }

    public function prosesJual($id) {
        $konsumen = Konsumen::find($id);
        $konsumen->waktu_beli=new \DateTime;
        $konsumen->save();
        if(isset($_POST['game']))
            $konsumen->game()->sync($_POST['game']);
        else
            $konsumen->game()->sync(array());
        return redirect(url("/daftargame"));
    }

    public function __construct() {
        $this->middleware('guest', array(
            'only'=>array('create', 'store')
            ));
    } 
}