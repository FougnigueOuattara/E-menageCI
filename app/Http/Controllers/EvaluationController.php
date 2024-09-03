<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use EvaluationService;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    protected $evaluationService;

    //Constructor
    public function __construct(EvaluationService $evaluationService)
    {
        $this->evaluationService = $evaluationService;
    }
    // Méthode pour enregistrer une évaluation
    public function store(Request $request,int $evaluated_id)
    {
        $request->validate([
            'note' => 'required|integer|min:1|max:5',
        ]);
        $evaluatorId = auth()->id();
        $evaluatedId = $evaluated_id;
        // Vérifier que l'utilisateur ne s'évalue pas lui-même
        if ($evaluatorId == $evaluatedId) {
            return back()->withErrors(['error' => 'Vous ne pouvez pas vous évaluer vous-même.']);
        }
        // Vérifier si l'utilisateur a déjà évalué celui-ci
        $existingRating = $this->evaluationService->hasAlreadyEvaluated($evaluatorId,$evaluatedId);

        if ($existingRating) {
            // Mettre à jour la note existante
            $existingRating->update(['rating' => $request->rating]);
            return back()->with('success', 'Votre évaluation a été mise à jour.');
        } else {
            $data = [
                'evaluator_id' => $evaluatorId,
                'evaluated_id' => $evaluatedId,
                'note' => $request->rating,
                'comments' => $request->comment,
            ];
            // Créer une nouvelle évaluation
            $this->evaluationService->saveEvaluation($data);
            return back()->with('success', 'Votre évaluation a été enregistrée.');
        }
    }
}
