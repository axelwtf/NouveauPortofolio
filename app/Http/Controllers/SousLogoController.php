<?php

namespace App\Http\Controllers;

use App\SousLogo;
use Illuminate\Http\Request;
use ImageIntervention;

class SousLogoController extends Controller
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
        //
    }

    public function store(Request $request)
    {
        $image = $request->file('sousImage');

        $filename = time().$image->hashName();

        // taille de base
        $tailleDeBase = ImageIntervention::make($image);
        $tailleDeBase->save('images/originals/'.$filename);

        //resize
        $redimension = ImageIntervention::make($image)->resize(200, 200, function ($constraint) {
            $constraint->aspectRatio();
        });

        $redimension->save('images/redimensionner/'.$filename);

        //envoi DB
        $table = new SousLogo;
        $table->image = $filename;

        $table->save();
        return redirect()->back();
    }

    public function destroy(SousLogo $sousLogo, $id)
    {
        $image=SousLogo::find($id);
        $image->delete();
        return redirect('/adminHome');
    }
}
