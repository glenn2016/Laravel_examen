<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class gestionClientControllers extends Controller
{
    public function form_gestionClient()
    {
        $users = User::paginate(3);
        return view('GestionUsers', [
                'users' => $users
        ]); 
    }

    public function traitement_register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'email|required|unique:users',
            'password' => 'required|min:8',
            'role' => 'required',
        ]);
        $client = new User();
        $client->nom = $request->input('name');
        $client->email = $request->input('email');
        $client->password = bcrypt($request->input('password'));
        $client->nom = $request->input('role');
        $client->save();

        return redirect('/GestionsUsers')->with('message', 'Votre compte a été créé avec succès!');
    }

    public function destroy($id)
    {
        $element = user::findOrFail($id);
        $element->delete();
        return redirect()->back()->with('success', 'Le client a été supprimé avec succès');
    }
}
