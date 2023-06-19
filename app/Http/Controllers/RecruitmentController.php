<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\RecruitmentConfirmation;
use App\Mail\RecruitmentNotification;

class RecruitmentController extends Controller
{
    public function showForm()
    {
        return view('recruitment.form');
    }
    public function submitForm(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'email' => 'required|email',
            'why_you' => 'required',
            'discord_username' => 'required',
            'role' => 'required',
            'mission_reason' => 'required',
            // Ajoutez les règles de validation pour les autres champs du formulaire ici
        ]);

        // Enregistrer les données du formulaire dans la base de données si nécessaire

        // Envoyer l'e-mail de confirmation au candidat
        Mail::to($validatedData['email'])->send(new RecruitmentConfirmation());

        // Envoyer l'e-mail de notification à l'administrateur
        Mail::to('admin@workyt.fr')->send(new RecruitmentNotification($validatedData));

        return redirect()->back()->with('success', 'Votre candidature a été envoyée avec succès.');
    }
}
