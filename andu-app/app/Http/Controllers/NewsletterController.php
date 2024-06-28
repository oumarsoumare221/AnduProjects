<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;


class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email|unique:newsletters,email'
            ], [
                'email.unique' => 'Cet email est déjà inscrit à notre newsletter. Veuillez choisir un autre email.'
            ]);

            if ($validator->fails()) {
                throw ValidationException::withMessages([
                    'email' => ['Cet email est déjà inscrit à notre newsletter. Veuillez choisir un autre email.']
                ]);
            }

            // Logique d'inscription à la newsletter (par exemple, enregistrement en base de données)
            Newsletter::create([
                'email' => $request->email,
                // Autres champs éventuels
            ]);

            // Redirection avec un message de succès
            return redirect()->back()->with('success', 'Vous avez été inscrit à notre newsletter avec succès!');
        } catch (ValidationException $e) {
            // Gérer l'exception de validation ici
            return redirect()->back()->withErrors($validator)->withInput();
        } catch (\Exception $e) {
            // Gérer toute autre exception ici
            return redirect()->back()->with('error', 'Une erreur est survenue lors de l\'inscription à la newsletter. Veuillez réessayer plus tard.');
        }
    }
}
