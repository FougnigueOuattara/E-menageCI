<?php

use App\Models\Evaluation;

class EvaluationRepository
{
    // Constructor
    public function __construct()
    {

    }

    /**
     * Return an existing user evaluated by this user currently connected
     */
    public function hasAlreadyEvaluated(int $evaluator_id, int $evaluated_id)
    {
        $existingRating = Evaluation::where('evaluator_id', $evaluator_id)
                                ->where('evaluated_id', $evaluated_id)
                                ->first();
        return $existingRating;
    }

    /**
     * Return new evaluation
    */
    public function create(array $data)
    {
        return $this->create($data);
    }
}
