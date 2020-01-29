<?php

namespace App\DataFixtures;

use App\Entity\Artist;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ArtistFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $artist = new Artist();
        $artist->setCategory(1);
        $artist->setName('Atilla l’unique');
        $artist->setBiography('Homme-lion capturé dans les steppes sibériennes après s’être enfui de la villa du millionnaire russe qui l’avait ramené d’un safari bébé, Atilla a rejoint les rangs de notre cirque pour son plus grand bien et votre plus grand plaisir.');
        $artist->setPhoto('https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Lion_d%27Afrique.jpg/1200px-Lion_d%27Afrique.jpg');
        $manager->persist($artist);
        $manager->flush();

        $artist = new Artist();
        $artist->setCategory(1);
        $artist->setName('Cyrille');
        $artist->setBiography('Ours des cavernes moldaves, Cyrille vous émerveillera par sa souplesse et sa précision dans ses attaques aux cartes Magic®.');
        $artist->setPhoto('https://vignette.wikia.nocookie.net/capcomdatabase/images/8/81/SFAlpha3Zangief.png/revision/latest/scale-to-width-down/310?cb=20190226211725');
        $manager->persist($artist);
        $manager->flush();

        $artist = new Artist();
        $artist->setCategory(5);
        $artist->setName('Delphine');
        $artist->setBiography('Ancienne championne de dépeçage de poireaux, Delphine s’effeuillera devant vous tel un chou. Oui, un chou. Mais pas n’importe lequel : un chou-FLEUR !');
        $artist->setPhoto('https://cdn.shopify.com/s/files/1/1537/5553/products/00265_1024x1024.jpg?v=1486440710');
        $manager->persist($artist);
        $manager->flush();

        $artist = new Artist();
        $artist->setCategory(2);
        $artist->setName('Jem et les hologrames');
        $artist->setBiography('Vous n’en reviendrez pas des acrobaties réalisées par Jem pour éviter le travail et de payer ses factures.');
        $artist->setPhoto('https://cdn.futura-sciences.com/buildsv6/images/wide1920/8/e/a/8eadc746ef_50149826_cirque-roncalli-animaux-hologrammes.jpg');
        $manager->persist($artist);
        $manager->flush();

        $artist = new Artist();
        $artist->setCategory(3);
        $artist->setName('Wilhem le clown-escargot');
        $artist->setBiography('Jamais voir un homme aussi lent ne vous aura fait tant rire.');
        $artist->setPhoto('https://media.istockphoto.com/photos/3d-snail-clown-picture-id482602701?k=6&m=482602701&s=612x612&w=0&h=713cRItBszhPIrMAuEjIU_ZOEdeEx_W4Fzfh_rYzQQ8=');
        $manager->persist($artist);
        $manager->flush();

        $artist = new Artist();
        $artist->setCategory(4);
        $artist->setName('Gillou des villes');
        $artist->setBiography('Il jongle avec les élèves et les réunions comme personne. Sa délicatesse et son tact dans l’action vont vous subjuguer.');
        $artist->setPhoto('http://t3.gstatic.com/images?q=tbn:ANd9GcReLK3lpZSvZcyeIwWHPsWL_n-kitoTWad4JeYqmHe1QVlG0kQJ0WuhUHo');
        $manager->persist($artist);
        $manager->flush();

        $artist = new Artist();
        $artist->setCategory(1);
        $artist->setName('Yavuz des Bois');
        $artist->setBiography('Hommes sauvage qui n’hésitera pas à vous arracher un bras si tant est qu’il y a au bout quelque chose à manger (n’importe quoi)');
        $artist->setPhoto('https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Lion_d%27Afrique.jpg/1200px-Lion_d%27Afrique.jpg');
        $manager->persist($artist);
        $manager->flush();
    }
}
