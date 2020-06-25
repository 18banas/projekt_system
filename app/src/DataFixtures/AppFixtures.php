<?php
/**
 * App fixtures.
 */

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;

/**
 * Class AppFixtures
 */

class AppFixtures extends Fixture
{
    /**
     * Load data
     *
     * @param \Doctrine\Persistence\ObjectManager $manager Persistence object manager
     */

    public function load(\Doctrine\Persistence\ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
