<?php

require_once 'HighWay.php';

final class MotorWay extends highWay
{
    public function addVehicle(Vehicle $addVehicle)
    {
        // $this->currentVehicles[] = $addVehicle;
        if (!($addVehicle instanceof Bicycle)) {
            $this->currentVehicles[] = $addVehicle;
        }
    }
}
