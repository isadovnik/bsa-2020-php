<?php

declare(strict_types = 1);

namespace App\Task1;

/**
 * Class Track
 * @package App\Task1
 */
class Track
{
    private float $lapLength;

    private int $lapsNumber;

    private array $cars = [];

    /**
     * Track constructor.
     *
     * @param float $lapLength
     * @param int   $lapsNumber
     */
    public function __construct(float $lapLength, int $lapsNumber)
    {
        $this->lapLength  = $lapLength;
        $this->lapsNumber = $lapsNumber;
    }

    /**
     * @return float
     */
    public function getLapLength(): float
    {
        return $this->lapLength;
    }

    /**
     * @return int
     */
    public function getLapsNumber(): int
    {
        return $this->lapsNumber;
    }

    /**
     * @param Car $car
     */
    public function add(Car $car): void
    {
        $this->cars[] = $car;
    }

    /**
     * @return array
     */
    public function all(): array
    {
        return $this->cars;
    }

    /**
     * @return Car
     */
    public function run(): Car
    {
        $length = $this->getLapLength() * $this->getLapsNumber();

        $time   = 0;
        $winner = null;

        /** @var Car $car */
        foreach ($this->all() as $car) {

            $carTime = $length / $car->getSpeed();
            if ($winner === null) {
                $winner = $car;
                $time   = $carTime;
            }

            if ($carTime < $time && $car->getFuelTankVolume() > $winner->getFuelTankVolume()) {
                $time   = $carTime;
                $winner = $car;
            }
        }

        return $winner;
    }
}