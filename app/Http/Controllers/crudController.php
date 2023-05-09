<?php

namespace App\Http\Controllers;
use App\Models\Tables;
use App\Models\delet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\View;

class crudController extends Controller
{
    public function liste_etudient()
    {
        $tables = Tables::all();

        return view('index', compact('tables'));
    }
    public function add(){
        return view('ajouter');
    }
    public function add_traitement(Request $request){
        $request->validate([
            'Nom' => 'required',
            'Prénom' => 'required',
            'Email' => 'required',
            'Date_de_naissance' => 'required',
            'Filière' => 'required',
            'Téléphone' => 'required',
        ]);

        $tables = new Tables();
        $tables->Nom = $request->input('Nom');
        $tables->Prénom = $request->input('Prénom');
        $tables->Email = $request->input('Email');
        $tables->Date_de_naissance = $request->input('Date_de_naissance');
        $tables->Filière = $request->input('Filière');
        $tables->Téléphone = $request->input('Téléphone');
        // Assurez-vous d'ajuster les noms des colonnes et les champs correspondants dans votre modèle "Etudient"

        // Enregistrez l'étudiant
        $tables->save();

        // Redirigez l'utilisateur vers la liste des étudiants ou vers une autre page appropriée
        return redirect('/adminn')->with('status', 'Student added successfully');
    }
   
    public function update_etudient($id)
    {
        $tables = Tables::findOrFail($id);
        return view('update', ['tables' => $tables]);
    }

   
    public function update_etudient_traitement(Request $request)
    {
        $request->validate([
            'Nom' => 'required',
            'Prénom' => 'required',
            'Email' => 'required',
            'Date_de_naissance' => 'required',
            'Filière' => 'required',
            'Téléphone' => 'required',
        ]);

        $tables = Tables::findOrFail($request->id);
        $tables->Nom = $request->input('Nom');
        $tables->Prénom = $request->input('Prénom');
        $tables->Email = $request->input('Email');
        $tables->Date_de_naissance = $request->input('Date_de_naissance');
        $tables->Filière = $request->input('Filière');
        $tables->Téléphone = $request->input('Téléphone');
        $tables->save();

        return redirect('/adminn')->with('status', 'Student updated successfully');
    }
//     public function delete_etudient(Request $request)
// {
//     $tables = Tables::findOrFail($request->id);
//     $tables->delete();

//     return redirect('/adminn')->with('status', 'Student deleted successfully');
// }


public function delete_etudient(Request $request)
{
    $tables = Tables::findOrFail($request->id);

    // Créez une nouvelle instance de la table pour stocker les données supprimées
    $deletedTables = new delet();
    
    // Ajoutez d'autres attributs en fonction de votre structure de table
    $deletedTables->Nom = $tables->Nom ;
    $deletedTables->Prénom =  $tables->Prénom ;
    $deletedTables->Email =  $tables->Email;
    $deletedTables->Date_de_naissance = $tables->Date_de_naissance;
    $deletedTables->Filière =  $tables->Filière ;
    $deletedTables->Téléphone =  $tables->Téléphone;
    // Enregistrez les données supprimées dans la nouvelle table
    $deletedTables->save();

    // Supprimez l'étudiant de la table d'origine
    $tables->delete();

    return redirect('/adminn')->with('status', 'Student deleted successfully');
}

public function liste_delet()
    {
        $deletedTables = delet::all();

        return view('delet', compact('deletedTables'));
    }

    public function generatePDF()
{
    // Get the data to be included in the PDF
    $data = [
        'title' => 'Sample PDF',
        'content' => Tables::all(), // Récupérez toutes les données de la table
    ];

    // Generate the PDF using the view and data
    $pdf = new Dompdf();
    $pdf->loadHtml(View::make('document', $data)->render());
    $pdf->setPaper('A4', 'portrait');

    // Render the PDF document
    $pdf->render();

    // Output the generated PDF to the browser
    return $pdf->stream('document');
}

public function search(Request $request)
{
    $query = $request->input('query');

    // Effectuez la recherche dans votre table selon la valeur de recherche
    $results = Tables::where('Nom', 'like', '%' . $query . '%')->get();

    // Passez les résultats à votre vue pour les afficher
    return view('results', ['results' => $results]);
}


public function generateCSV()
{
    // Get the data to export as CSV
    $data = Tables::all();

    // Generate the CSV content
    $csvContent = "id,Nom,Prénom,Email,Date de naissance,Filière,Téléphone\n";
    foreach ($data as $item) {
        $csvContent .= "{$item->id},{$item->Nom},{$item->Prénom},{$item->Email},{$item->Date_de_naissance},{$item->Filière},{$item->Téléphone}\n";
    }

    // Create the CSV file response
    $response = Response::make($csvContent);
    $response->header('Content-Type', 'text/csv');
    $response->header('Content-Disposition', 'attachment; filename="data.csv"');

    return $response;
}
}
