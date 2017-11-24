<?php
declare(strict_types=1);

namespace SOLIDExamples\InterfaceSegregationPrinciple;

class TimerClient
{
    private $timeOutId;

    public function timeOut(int $timeOutId)
    {
        $this->timeOutId = $timeOutId;
    }
}
