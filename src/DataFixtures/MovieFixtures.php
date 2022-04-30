<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setTitle('Software Development School');
        $movie->setReleaseYear(2022);
        $movie->setDescription('This is the description of the software dev school');
        $movie->setImagePath('https://cdn.pixabay.com/photo/2019/06/17/19/48/source-4280758_960_720.jpg');

        //Add data to pivot table
        $movie->addActor($this->getReference('actor_1'));
        $movie->addActor($this->getReference('actor_2'));
        $manager->persist($movie);

        $movie2 = new Movie();
        $movie2->setTitle('Soft School');
        $movie2->setReleaseYear(2022);
        $movie2->setDescription('This is the description of the software dev school of the software dev school of the software dev school');
        $movie2->setImagePath('https://cdn.pixabay.com/photo/2014/02/13/07/28/security-265130_960_720.jpg');
        $manager->persist($movie2);

        $movie2->addActor($this->getReference('actor_3'));
        $movie2->addActor($this->getReference('actor_4'));

        $manager->flush();
    }
}
