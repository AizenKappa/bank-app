<?php

namespace App\Http\Controllers;


use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    public function index()
    {
        /* Filter query builder columns with get */
        $clients = Client::Get(['id', 'nom', 'prenom', 'cin', 'telephone', 'adresse']);

        /* Filter collection with more controlle */
        $clients = Client::all()->map(fn($client) => (object) [
            'id' => $client->id,
            'cin' => $client->cin,
            'nom' => $client->nom,
            'prenom' => $client->prenom,
            'telephone' => $client->telephone,
            'adresse' => $client->adresse
        ]);

        $data = ['clients' => $clients];
        

        return view('pages.clients', $data);

    }

    public function create()
    {
        return view('pages.ajouter');
    }

    public function destroy(Client $client)
    {
        $client->delete();

        // back to the previous page
        return redirect()->back();
    }

    public function store(Request $request)
    {
        $data = $request->only(['nom', 'prenom', 'cin', 'adresse', 'telephone']);

        $rules = [
            'nom' => 'required|alpha:ascii|min:2|max:50',
            'prenom' => 'required|alpha:ascii|min|max:50',
            'cin' => 'required|min:4|max:20',
            'adresse' => 'required|min:4|max:200',
            'telephone' => 'required|numeric|min:4|max:12',
        ];

        $client = Validator::make($data, $rules)->stopOnFirstFailure()->validate();

        Client::create($client);

        return redirect()->back();
    }

    public function show(Client $client)
    {
        $client_comptes = $client->comptes;

        $data = [
            'username' => $client->nom. ' '. $client->prenom,
            'comptes' => $client_comptes,
            'sold_total' => $client_comptes->sum('sold')
        ];

        return view('pages.client_info', $data);
    }
}
