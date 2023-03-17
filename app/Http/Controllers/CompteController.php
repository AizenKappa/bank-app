<?php

namespace App\Http\Controllers;

use App\Models\Compte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompteController extends Controller
{
    public function destroy(Request $request)
    {
        $numero = $request->validate([
            'numero' => 'required|exists:comptes,numero_compte'
        ])["numero"];

        DB::table('comptes')->where('numero_compte', '=', $numero)->delete();

        return redirect()->back();
    }

    public function effectuer_depot(Request $request)
    {
        $data = (object) $request->validate([
            'numero' => 'required|exists:comptes,numero_compte',
            'montant' => 'required|numeric|gt:0'
        ]);

        Compte::Where('numero_compte', $data->numero)->increment('sold', $data->montant);

        return redirect()->back();
    }

    public function effectuer_retrait(Request $request)
    {
        $data = (object) $request->validate([
            'numero' => 'required|exists:comptes,numero_compte',
            'montant' => 'required|numeric|gt:0'
        ]);

        $compte = Compte::Where('numero_compte', $data->numero);

        if($compte->first()->sold >= $data->montant)
        {
            $compte->decrement('sold', $data->montant);
            return redirect()->back();
        }

        return redirect()->back()->withErrors([
            'montant' => "Pas assez de fonds"
        ]);

    }
}
