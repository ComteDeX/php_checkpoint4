<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $category = new Category();
        $category->setCategory('Dressage');
        $manager->persist($category);
        $manager->flush();
        $category = new Category();
        $category->setCategory('Acrobaties');
        $manager->persist($category);
        $manager->flush();
        $category = new Category();
        $category->setCategory('Clown');
        $manager->persist($category);
        $manager->flush();
        $category = new Category();
        $category->setCategory('Jonglage');
        $manager->persist($category);
        $manager->flush();
        $category = new Category();
        $category->setCategory('Burnlesque');
        $manager->persist($category);
        $manager->flush();
    }
}
