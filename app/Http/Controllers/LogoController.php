<?php

namespace App\Http\Controllers;

use App\Logo;
use Illuminate\Http\Request;
use ImageIntervention;

class LogoController extends Controller
{

    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        $image = $request->file('image');

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
        $table = new Logo;
        $table->image = $filename;

        $table->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $images=Logo::find($id);
        $images->delete();
        return redirect('/adminHome');
    }
}
