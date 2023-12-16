<?php

namespace App\Http\Controllers\Ecole;

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use App\Models\Cycle;
use App\Repository\KamataNioso;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\returnSelf;

class CycleController extends KamataNioso
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cycle_principal()
    {
        $cicles = '';
        return view('cycles.cycle_principal', compact('cicles'),  $this->Kamata($this->getUser(), Auth::user()->id));
    }

    public function index($id)
    {
        $cicles = $id;
        return view('cycles.cycle', compact('cicles'), $this->Kamata($this->getUser(), $id));
    }

    public function eleve_abandon($id)
    {
        $cicles = $id;
        return view('cycles.eleve_abandon', compact('cicles'), $this->Kamata($this->getUser(), $id));
    }

    public function eleve_actif($id)
    {
        $cicles = $id;
        return view('cycles.eleve_cycle', compact('cicles'), $this->Kamata($this->getUser(), $id));
    }

    public function imprimer(Request $request, $id)
    {
        $cicles = $id;
        $classe = $request->classe;
        $local = $request->local;
        $optio = $request->option;
        if($cicles != 'Humanite'){
            $AfficheClasse = DB::table('kelasis')
             ->join('moyekolis', 'kelasis.moyekoli_id', 'moyekolis.id')
             ->where('cycle', $id)->where('active', '0')
             ->where('classe', $classe)
             ->where('user_id', Auth::user()->id)
             ->get();
        }else {
            $AfficheClasse = DB::table('kelasis')
            ->join('moyekolis', 'kelasis.moyekoli_id', 'moyekolis.id')
            ->where('cycle', $id)->where('active', '0')
            ->where('classe', $classe)->where('option', $optio)
            ->where('user_id', Auth::user()->id)
            ->get();
        }
        return view('cycles.imprimer', compact(
            'cicles',
            'AfficheClasse',
            'optio',
            'classe',
            'local',
        ), $this->Kamata($this->getUser(), $id));
    }

    public function classe(Request $request, $id)
    {
        $cicles = $id;
        $classe = $request->classe;
        $local = $request->local;
        $optio = $request->option;
        if($cicles != 'Humanite'){
            $AfficheClasse = DB::table('kelasis')
             ->join('moyekolis', 'kelasis.moyekoli_id', 'moyekolis.id')
             ->where('cycle', $id)->where('active', '0')
             ->where('classe', $classe)
             ->where('user_id', Auth::user()->id)
             ->get();
        }else {
            $AfficheClasse = DB::table('kelasis')
            ->join('moyekolis', 'kelasis.moyekoli_id', 'moyekolis.id')
            ->where('cycle', $id)->where('active', '0')
            ->where('classe', $classe)->where('option', $optio)
            ->where('user_id', Auth::user()->id)
            ->get();
        }
        return view('cycles.classe', compact(
            'cicles',
            'AfficheClasse',
            'optio',
            'classe',
            'local',
        ), $this->Kamata($this->getUser(), $id));

    }

    public function option($id)
    {
        $opt = $id;
        return view('cycles.option.options', compact('opt'), $this->Kamata($this->getUser(), $id));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ecole.cycle', $this->Kamata($this->getUser(), $this->id));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $verification = Cycle::where('cycle', $request->cycle)->where('user_id', Auth::user()->id)->get();
        foreach($verification as $ver){
            $ve = $ver->cycle;
        }

        if($request->cycle == isset($ve)){
           Session()->flash('message', "$request->cycle est déjà séléctionné !");
        }else{
             $cycle = new Cycle();
            $cycle->cycle = $request->cycle;
            $cycle->user_id = Auth::user()->id;
            $cycle->save();

        }

        Session()->flash('messages', "$request->cycle est enregistré");
        return redirect()->route('cycle_show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('ecole.show_cycle', $this->Kamata($this->getUser(), $this->id));
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
        DB::table('cycles')->where('id', $id)->delete();
        Session()->flash('messages', 'La soupression est effectuée');
        return redirect()->back();
    }
}
