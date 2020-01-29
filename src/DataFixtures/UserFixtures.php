<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setAddress1('23 rue des Canards');
        $user->setZipCode('67000');
        $user->setCity('STRASBOURG');
        $user->setEmail('a@a.com');
        $user->setPassword('$argon2id$v=19$m=65536,t=4,p=1$ADXC0RiTlDyLmnanGMFm8g$bDiElkSRoSodKXq57JrwTNb3I+0wUewT6gCKy8nLSic');
        $user->setRoles('ROLE_ADMIN');
        $manager->persist($user);

        $manager->flush();
    }
}
