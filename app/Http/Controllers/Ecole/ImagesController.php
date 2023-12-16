<?php

namespace App\Http\Controllers\Ecole;

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Models\Images_user;
use App\Models\Image_ecole;
use App\Models\User;
use App\Repository\KamataNioso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\returnSelf;

class ImagesController extends KamataNioso
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
        return view('ecole.image_ecole', $this->Kamata($this->getUser(), $this->id));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('ecole.show_photo', $this->Kamata($this->getUser(), $this->id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('ecole.update_photo', $this->Kamata($this->getUser(), $this->id));
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
        $request->validate([
            'photo_admin' => 'file|mimes:jpeg,jpg,png,gif',
            'photo_ecole' => 'file|mimes:jpeg,jpg,png,gif',
        ]);
    
        if ($request->hasfile('photo_admin')) {
            $file = $request->file('photo_admin');
            $extension = $file->getClientOriginalExtension();
            $filename = time()  . '.'. $extension;
            $file->move('Dossier/images_admin/', $filename);
            DB::table('images_user')->where('id', $id)->update(['photo_user' => $filename]);
        }
        if ($request->hasfile('photo_ecole')) {
            $file = $request->file('photo_ecole');
            $extension = $file->getClientOriginalExtension();
            $filename = time()  . '.'. $extension;
            $file->move('Dossier/images_ecole/', $filename);
            DB::table('images_ecole')->where('id', $id)->update(['photo_ecole' => $filename]);
        }
        
        Session()->flash('messages', 'La modification est éffectuée');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_ecole($id)
    {
        DB::table('images_users')->where('id', $id)->delete();
        Session()->flash('messages', 'La soupression est effectuée');
        return redirect()->back();
    }

    public function destroy($id)
    {
        DB::table('image_ecole')->where('id', $id)->delete();
        Session()->flash('messages', 'La soupression est effectuée');
        return redirect()->back();
    }
}
