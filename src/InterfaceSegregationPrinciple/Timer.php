<?php
declare(strict_types=1);

namespace SOLIDExamples\InterfaceSegregationPrinciple;

class Timer
{
    private $clients = [];

    public function register(int $timeOut, int $timeOutId, TimerClient $client)
    {
        /**
         * Below is another place with disadvantage of "cascade inheritance" TimerClient->Door->TimedDoor.
         * Because of when we e.g. add timedOutId, we aldo should included it in TimerClient, and that provides to
         * propagate that change to all Doors and TimedDoors.
         */
        $this->clients[] = [
            'timeOut' => $timeOut,
            'timeOutId' => $timeOutId,
            'client' => $client,
        ];
    }
}
