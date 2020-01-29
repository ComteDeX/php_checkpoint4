<?php

namespace App\DataFixtures;

use App\Entity\Place;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class PlaceFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $place = new Place();
        $place->setAddress1('Place Kléber');
        $place->setZipCode('67000');
        $place->setCity('STRASBOURG');
        $place->setlattitude('48.5834534');
        $place->setLongitude('7.7436535');
        $manager->persist($place);
        $manager->flush();

        $place = new Place();
        $place->setAddress1('Place Verdun');
        $place->setZipCode('65000');
        $place->setCity('TARBES');
        $place->setlattitude('43.2332793');
        $place->setLongitude('0.0715362');
        $manager->persist($place);
        $manager->flush();

        $place = new Place();
        $place->setAddress1('Place Vendôme');
        $place->setZipCode('75004');
        $place->setCity('PARIS');
        $place->setlattitude('48.8668169');
        $place->setLongitude('2.3239264');
        $manager->persist($place);
        $manager->flush();
    }
}
