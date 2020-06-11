<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use App\Rules\MatchOldPassword;
use Auth;
use Image;
use App\User;
use App\Provinsi;
use App\KabKot;
use App\Kecamatan;
use App\ProfilePembeli;
use DB;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function users()
    {
        $user_id = Auth::user()->id;
        $users = User::where('id', $user_id)->first();

        return view ('pembeli.content.profile')->with(compact('users'));
    }

    public function editusers(Request $request)
    {
        $user_id = Auth::user()->id;
        $detail_user = User::find($user_id);

        if($request->isMethod('post'))
        {
            $data = $request->all();

            if($request->hasFile('image')){
                $image = Input::file('image');
                if($image->isValid()){

                    $this->validate($request, [
                        'image' => 'required|file|image|mimes:jpeg,png,jpg',
                    ]);
             
                    // menyimpan data file yang diupload ke variabel $file
                    $image = $request->file('image');

                    $extension = $image->getClientOriginalExtension();
             
                    $nama_image = rand(111,99999).'.'.$extension;
                    $tujuan_upload = 'img/users/';
                    $image->move($tujuan_upload,$nama_image);
             
                    User::where('id', $user_id)->update([
                        'image' => $nama_image,
                    ]);
                }
            }
            else{
                $nama_image = $data['current_image']; 
            }

            if(empty($data['alamat'])){
                $data['alamat'] = '';
            }

            User::where(['id'=>$user_id])->update(['nama'=>$data['nama'],'username'=>$data['username'],
            'jenis_kelamin'=>$data['jenis_kelamin'],'tanggal_lahir'=>$data['tanggal_lahir'],
            'no_hp'=>$data['no_hp'],'provinsi'=>$data['provinsi'],'kabkot'=>$data['kabkot'],'alamat'=>$data['alamat'],'image'=>$nama_image]);
            return redirect('profile')->with('flash_message_success','Detail Akun Anda Berhasil Diperbarui');
        }

        return view('pembeli.content.edit_profile')->with(compact('detail_user'));
    }

    public function showupdateimage()
    {
        $user_id = Auth::user()->id;
        $users = User::where('id', $user_id)->first();

        return view('content.edit_image')->with(compact('users'));
    }

    public function updateimage(Request $request){
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        
        request()->image->move(public_path('img/users/'), $imageName);
        
        return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName);
    }

    public function upload(){
		return view('pembeli.content.edit_profile');
	}

    public function proses_upload(Request $request){
        $this->validate($request, [
            'image' => 'required',
        ]);
    
        // menyimpan data file yang diupload ke variabel $file
        $image = $request->file('image');
    
              // nama file
        echo 'Image Name: '.$image->getClientOriginalName();
        echo '<br>';
    
              // ekstensi file
        echo 'Image Extension: '.$image->getClientOriginalExtension();
        echo '<br>';
    
              // real path
        echo 'Image Real Path: '.$image->getRealPath();
        echo '<br>';
    
              // ukuran file
        echo 'Image Size: '.$image->getSize();
        echo '<br>';
    
              // tipe mime
        echo 'Image Mime Type: '.$image->getMimeType();
    
              // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'img/users';
        $image->move($tujuan_upload,$image->getClientOriginalName());
    }

    public function show()
    {
        $user_id = Auth::user()->id;
        $users = User::where('id', $user_id)->first();

        return view('pembeli.content.edit_password')->with(compact('users'));
    }

    public function editpassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

        return redirect('profile')->with('flash_message_success','Kata Sandi Anda berhasil diperbarui!');
    }

    public function kabkot(Request $request)
    {
        $id_provinsi = Input::get('id_provinsi');
        $kabkot = KabKot::where('id_provinsi', '=', $id_provinsi)->get();
        return response()->json($kabkot);//then sent this data to ajax success
	}


    public function kecamatan(Request $request)
    {
        $id_kabkot = Input::get('id_kabkot');
        $kecamatan = Kecamatan::where('id_kabkot', '=', $id_kabkot)->get();
        return response()->json($kecamatan);
    }

}
