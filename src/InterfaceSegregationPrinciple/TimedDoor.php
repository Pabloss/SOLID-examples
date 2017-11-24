<?php
declare(strict_types=1);

namespace SOLIDExamples\InterfaceSegregationPrinciple;

class TimedDoor extends Door
{
    /**
     * No so good solution. The Base class also inherits from TimerClient.
     * And all issues from that TimerClient are propagated to all places where Doors (BTW quite good old rock band)
     * are used.
     */
}

class TimedDoor extends Door
{
    public function doorTimeOut(int $timeOutId)
    {
    }
}
