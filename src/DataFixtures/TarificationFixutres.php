<?php

namespace App\DataFixtures;

use App\Entity\Tarification;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class TarificationFixutres extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $tarif = new Tarification();
        $tarif->setAdult('18.00');
        $tarif->setKid('12.00');
        $tarif->setGroupPrice('15.00');
        $tarif->setSchool('10.00');
        $manager->persist($tarif);
        $manager->flush();

        $tarif = new Tarification();
        $tarif->setAdult('22.00');
        $tarif->setKid('16.00');
        $tarif->setGroupPrice('18.00');
        $tarif->setSchool('13.00');
        $manager->persist($tarif);
        $manager->flush();
    }
}
