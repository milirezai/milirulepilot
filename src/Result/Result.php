<?php

namespace Milirulepilot\Result;

class Result
{
    protected array $resultConditions;
    protected array $processInfo;
    public function decisionName()
    {
        return $this->processInfo['decisionName'];
    }
    public function matched()
    {
        return $this->processInfo['matched'];
    }
    public function conditionsProcessResult(?string $condition = null)
    {
        if ($condition)
            return $this->resultConditions[$condition];
        return $this->resultConditions;
    }
    public function decisionResult()
    {
        return $this->processInfo['decisionResult'];
    }
    public function process()
    {
        return array_merge($this->processInfo,['conditions' => $this->resultConditions]);
    }

    public function init(array $result)
    {
        $processInfo = [
            'matched' => $result['matched'],
            'decisionName' => $result['decisionName'],
            'decisionResult' => isset($result['decisionResult']) ? $result['decisionResult'] : null,
        ];

        $unset = ['matched','decisionName','decisionResult'];
        foreach ($unset as $item){
            unset($result[$item]);
        }

        $this->resultConditions = $result;
        $this->processInfo = $processInfo;
        return $this;
    }

}
