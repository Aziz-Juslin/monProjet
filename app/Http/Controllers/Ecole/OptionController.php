<?php

namespace App\Http\Controllers\Ecole;

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Option;
use App\Models\Cycle;
use App\Repository\KamataNioso;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class OptionController extends KamataNioso
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cycles.option.option_principal', $this->Kamata($this->getUser(), $this->id));
    }

    public function eleve_fictif_option($id)
    {
        $opt = $id;
        return view('cycles.option.eleve_fictif_option', compact('opt'),$this->Kamata($this->getUser(), $id));
    }

    public function eleve_abandon_option($id)
    {
        $opt = $id;
        return view('cycles.option.eleve_abandon_option', compact('opt'),$this->Kamata($this->getUser(), $id));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ecole.option', $this->Kamata($this->getUser(), $this->id));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $verification = Option::where('option', $request->option)->where('user_id', Auth::user()->id)->get();
        foreach($verification as $ver){
            $option = $ver->option;
        }
        if($request->option == isset($option)){
            Session()->flash('message', "$request->option est déjà séléctionné ");
        }else{

        if(isset($option) == 'Aucune'){
            Session()->flash('message', "impossible d'ajouter $request->option");
        }else{
            $cycles = Cycle::where('user_id', Auth::user()->id)->get();
            foreach($cycles as $cycle){
                $cycle = $cycle->cycle;
            }
            if($cycle == 'Humanite'){
                $option = new Option();
                $option->option = $request->option;
                $option->user_id = Auth::user()->id;
                $option->save();
            }else{
                Session()->flash(
                    'message',
                    "impossible d'ajouter $request->option votre école n'organise pas le cycle Humanité.");
            }

        }

        }
        Session()->flash('messages', "$request->option est enregistré");
        return redirect()->route('option_show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('ecole.show_option', $this->Kamata($this->getUser(), $this->id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('options')->where('id', $id)->delete();
        return redirect()->back();
    }
}
