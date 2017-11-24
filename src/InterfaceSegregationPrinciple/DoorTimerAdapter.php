<?php
declare(strict_types=1);

namespace SOLIDExamples\InterfaceSegregationPrinciple;

/**
 * DoorTimerAdapter is a solution of separate the interfaces both from Door and TimerClient
 *
 * Now, TimedDoor could not be a TimerClient (and also SHOULD, for the ISP principle meeting)
 * The Adapter only USES two SEPARATED interfaces DOOR and TimerClient (last one by inheritance, but first one by
 * Dependency Injection)
 */
class DoorTimerAdapter extends TimerClient
{
    private $timedDoor;

    public function __construct(TimedDoor $door)
    {
        $this->timedDoor = $door;
    }

    public function timeOut(int $timeOutId)
    {
        $this->timedDoor->doorTimeOut($timeOutId);
    }
}
