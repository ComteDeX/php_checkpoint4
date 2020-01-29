<?php

namespace App\DataFixtures;

use App\Entity\Act;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ActFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $act = new Act();
        $act->setCategory(1);
        $act->setTitle('Les animaux de la nuit');
        $manager->persist($act);
        $manager->flush();

        $act = new Act();
        $act->setCategory(2);
        $act->setTitle('Acrobaties administratives');
        $manager->persist($act);
        $manager->flush();

        $act = new Act();
        $act->setCategory(3);
        $act->setTitle('Le clown triste');
        $manager->persist($act);
        $manager->flush();

        $act = new Act();
        $act->setCategory(4);
        $act->setTitle('Vertiges et démangeaisons');
        $manager->persist($act);
        $manager->flush();

        $act = new Act();
        $act->setCategory(5);
        $act->setTitle('Effeuillage de chou');
        $manager->persist($act);
        $manager->flush();
    }
}
