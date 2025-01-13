<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Movie;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setTitle("The Dark Movie");
        $movie->setDescription("Description, lol");
        $movie->setReleaseYear(2000);
        $manager->persist($movie);

        $movie2 = new Movie();
        $movie2->setTitle("The Avengers");
        $movie2->setDescription("Description, lol");
        $movie2->setReleaseYear(2005);
        $manager->persist($movie2);

        $manager->flush();
    }
}
