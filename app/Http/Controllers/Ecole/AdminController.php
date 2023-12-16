<?php

namespace App\Http\Controllers\Ecole;

use App\Models\User;
use App\Models\Admin;
use App\Models\Images_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Repository\KamataNioso;

class AdminController extends KamataNioso
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ecole.info_admin', $this->Kamata($this->getUser(), $this->id));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'date_ne' => 'required|string',
            'etat_civil' => 'required|string',
            'sexe' => 'required|string',
            'qualification' => 'required|string',
            'photo_admin' => 'required|file|mimes:jpeg,jpg,png,gif',
        ]);

        $base = new Admin();
        $base->user_id = Auth::user()->id;
        $base->nom = Auth::user()->name;
        $base->sexe = ucfirst($request->input('sexe'));
        $base->etat_civil = ucfirst($request->input('etat_civil'));
        $base->date_ne = ucfirst($request->input('date_ne'));
        $base->phone = Auth::user()->telephone;
        $base->qualification = ucfirst($request->input('qualification'));
        $base->save();
        if ($request->hasfile('photo_admin')) {
            $base = new Images_user();
            $base->user_id = Auth::user()->id;
            $file = $request->file('photo_admin');
            $extension = $file->getClientOriginalExtension();
            $filename = time()  . '.'. $extension;
            $file->move('Dossier/images_admin/', $filename);
            $base->photo_user = $filename;
            $base->save();
        }
        Session()->flash('messages', 'Enregistré');
        return redirect()->back();
    }

    public function store_gestionnaire(Request $request){

        $request->validate([
            'name' => 'required|string',
            'telephone' => 'required|string|unique:users',
            'role' => 'required|string',
            'password' => 'required|string|min:8',
        ]);

        $user = new User();
        $user->name = ucfirst($request->name);
        $user->telephone = ucfirst($request->telephone);
        $user->role = ucfirst($request->role);
        $user->password = Hash::make($request->password);
        $user->from_to = Auth::user()->id;
        $user->save();
        Session()->flash('messages', "<strong>$request->name</strong> est enregistré");
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('ecole.show_admin', $this->Kamata($this->getUser(), $this->id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $photoAdmin = Images_user::where('user_id', $id)->get();
        return view('ecole.edit_photo_admin', $this->Kamata($this->getUser(), $this->id), compact(
            'photoAdmin',
        ));
    }

    public function imageAdmin(Request $request, $id){
        $request->validate([
            'photo_admin' => 'required|file|mimes:jpeg,jpg,png,gif',
        ]);
        if ($request->hasfile('photo_admin')) {
            $file = $request->file('photo_admin');
            $extension = $file->getClientOriginalExtension();
            $filename = time()  . '.'. $extension;
            $file->move('Dossier/images_admin/', $filename);
            DB::table('images_users')->where('id', $id)->update(['photo_user' => $filename]);
        }
         Session()->flash('messages', 'Votre photo est modifiée');
         return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('admins')->where('user_id', $id)->update([
           'nom' => $request->nom,
           'date_ne' => $request->date_ne,
           'sexe' => $request->sexe,
           'etat_civil' => $request->etat_civil,
           'qualification' => $request->qualification,
           'phone' => $request->phone,
        ]);

        Session()->flash('messages', 'La modification est éffectuée');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
