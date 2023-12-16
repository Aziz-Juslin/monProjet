<?php

namespace App\Http\Controllers\Ecole;

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use App\Models\Info_ecole;
use App\Models\Image_ecole;
use App\Models\User;
use App\Repository\KamataNioso;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InfoController extends KamataNioso
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
        return view('ecole.info_ecole', $this->Kamata($this->getUser(), $this->id));
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
            'adresse' => 'required|string',
            'regime' => 'required|string',
            'commune' => 'required|string',
            'district' => 'required|string',
            'devise' => 'required|string',
            'photo_ecole' => 'required|file|mimes:jpeg,jpg,png,gif',
        ]);
        
        $base = new Info_ecole();
        $base->user_id = Auth::user()->id;
        $base->adresse = ucfirst($request->input('adresse'));
        $base->regime = ucfirst($request->input('regime'));
        $base->commune = ucfirst($request->input('commune'));
        $base->district = ucfirst($request->input('district'));
        $base->devise = ucfirst($request->input('devise'));
        $base->save();
        if ($request->hasfile('photo_ecole')) {
            $base = new Image_ecole();
            $base->user_id = Auth::user()->id;
            $file = $request->file('photo_ecole');
            $extension = $file->getClientOriginalExtension();
            $filename = time()  . '.'. $extension;
            $file->move('Dossier/images_ecole/', $filename);
            $base->photo_ecole = $filename;
            $base->save();
        } 
        Session()->flash('messages', 'Enregistré');
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
        return view('ecole.show_info_ecole', $this->Kamata($this->getUser(), $this->id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $photoEcole = Image_ecole::where('user_id', $id)->get();
        return view('ecole.edit_photo_ecole', $this->Kamata($this->getUser(), $this->id), compact(
            'photoEcole',
        ));
    }

    public function imageEcole(Request $request, $id){
        
        $request->validate([
            'photo_ecole' => 'required|file|mimes:jpeg,jpg,png,gif',
        ]);
        if ($request->hasfile('photo_ecole')) {
            $file = $request->file('photo_ecole');
            $extension = $file->getClientOriginalExtension();
            $filename = time()  . '.'. $extension;
            $file->move('Dossier/images_ecole/', $filename);
            DB::table('image_ecoles')->where('id', $id)->update(['photo_ecole' => $filename]);
        }
         Session()->flash('messages', 'Votre photo de l\'école est modifiée');
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
        DB::table('info_ecoles')->where('user_id', $id)->update([
            'adresse' => ucfirst($request->adresse),     
            'commune' => ucfirst($request->commune),     
            'district' => ucfirst($request->district),     
            'devise' => ucfirst($request->devise),     
            'regime' => ucfirst($request->regime),     
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
