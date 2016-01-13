<?php
namespace Sahid\User\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Sahid\User\Entity\Eloquent\Profile;
use Sahid\User\Http\Requests\EditProfileRequest;
use Sahid\User\Http\Requests\EditUserRequest;


class ProfileController extends Controller
{
    
    public function index()
    {   if(\Auth::user()->level == "petugas")
            return redirect("/profile");
        else
        return view("SahidUser::profile.index", ['profile'=>Profile::all()]);
    }

    public function konsumen()
    {   if(\Auth::user()->level == "petugas")
            return redirect("/profile");
        else
        return view("SahidUser::profile.konsumen", ['profile'=>Profile::all()]);
    }

   
    
    public function petugasProfile() {
        $profile=Profile::where("user_id", \Auth::user()->id)->paginate(11);
        return view("SahidUser::profile.petugas")
        ->with("profile", $profile);
    }
    
    public function show($id)
    {
       $profile=Profile::find($id);
        return view("SahidUser::profile.show", array("profile"=>$profile));
    }

   
    public function edit($id)
    {
        $profile = Profile::find($id);
        return view("SahidUser::profile/form-edit")
        ->with("url",url("/profile/$id/update"))
        ->with("profile",$profile)
        ;
    }

    public function update(EditProfileRequest $request,$id)
    {
        $profile = Profile::find($id);
        $profile->nama      =$_POST['nama'];
        $profile->alamat    =$_POST['alamat'];
        $profile->email     =$_POST['email'];
        $profile->telp      =$_POST['telp'];
        $profile->save();
        return redirect(url("/petugas"));
    }

   
    public function delete($id)
    {
        Profile::destroy($id);
        return redirect(url("/petugas"));
    }

    public function contact()
    {   
        return view("SahidUser::profile.contact", ['profile'=>Profile::all()]);
    }
}
