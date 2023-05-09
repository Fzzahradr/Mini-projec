<?php
namespace App\Http\Controllers;
use App\Models\Tables;
use Illuminate\Http\Request;

class AdminController extends Controller
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
    // public function admin()
    // {
    //     return view('index');
    // }
    public function profile()
{
    // Logique pour afficher la page de profil de l'administration
    return view('profile');
}

public function index()
{
    // Logique pour afficher la page de profil de l'administration
    return view('index');
}

public function add(Request $request)
    {
       
    }

    public function edit(Request $request)
    {
       
    }
    public function delete($id)
    {
        
    }
    public function show($id)
    {
        
    }

    public function liste_etudient()
    {
        $tables = Tables::all();

        return view('index', compact('tables'));
    }
}
