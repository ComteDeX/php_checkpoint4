<?php

namespace App\DataFixtures;

use App\Entity\Shows;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ShowsFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $shows = new Shows();
        $shows->setDateShow('2020-02-02 16:00:00');
        $shows->setTarificationWeekEndRise(1);
        $manager->persist($shows);
        $manager->flush();
        $shows = new Shows();
        $shows->setDateShow('2020-02-02 20:30:00');
        $shows->setTarificationWeekEndRise(2);
        $manager->persist($shows);
        $manager->flush();
        $shows = new Shows();
        $shows->setDateShow('2020-02-07 16:00:00');
        $shows->setTarificationWeekEndRise(1);
        $manager->persist($shows);
        $manager->flush();
        $shows->setDateShow('2020-02-07 20:30:00');
        $shows->setTarificationWeekEndRise(2);
        $manager->persist($shows);
        $manager->flush();
    }
}
