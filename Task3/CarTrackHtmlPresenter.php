<?php

declare(strict_types = 1);

namespace App\Task3;

use App\Task1\Car;
use App\Task1\Track;

class CarTrackHtmlPresenter
{
    /**
     * @param Track $track
     *
     * @return string
     */
    public function present(Track $track): string
    {
        $track->add(new Car(1,
            'https://pbs.twimg.com/profile_images/595409436585361408/aFJGRaO6_400x400.jpg',
            'BMW',
            10,
            1,
            1,
            1
        ));

        $track->add(new Car(2,
            'https://i.pinimg.com/originals/e4/15/83/e41583f55444b931f4ba2f0f8bce1970.jpg',
            'Tesla',
            12,
            2,
            3,
            4
        ));

        $track->add(new Car(3,
            'https://fordsalomao.com.br/wp-content/uploads/2019/02/1499441577430-1-1024x542-256x256.jpg',
            'Ford',
            14,
            5,
            6,
            7
        ));

        $render = '';
        /** @var Car $car */
        foreach ($track->all() as $car) {
            $render .= sprintf('<img src="%s">%s: %d, %d ', $car->getImage(), $car->getName(), $car->getId(), $car->getSpeed());
        }

        return $render;
    }
}