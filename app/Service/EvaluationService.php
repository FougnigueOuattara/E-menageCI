<?php

namespace App\Service;

class EvaluationService
{
    protected $evaluationRepository;

    // Constructor
    public function __construct(EvaluationRepository $evaluationRepository)
    {
        $this->evaluationRepository = $evaluationRepository;
    }

    public function hasAlreadyEvaluated(int $evaluator_id, int $evaluated_id)
    {
        return $this->evaluationRepository->hasAlreadyEvaluated($evaluator_id, $evaluated_id);
    }

    public function saveEvaluation(array $data)
    {
        $this->evaluationRepository->create($data);
    }

}
