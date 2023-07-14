<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(Request $request)
    {
        if ($users = User::where('name', 'LIKE', "%{$request->search}%")-> orWhere
           ('email', 'LIKE', "%{$request->search}%")->get())
            return view('home', compact('users'));

        return view(view:'home', data:['users' => User::all()]);
    }

    public function delete($id)
    {
        if (!$users = User::find($id))
            return redirect()->route('home');

        $users->delete();

        return view(view:'home', data:['users' => User::all()]);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        // Outros campos que deseja atualizar
        $user->save();
    
        return view(view:'home', data:['users' => User::all()]);
    }
}
