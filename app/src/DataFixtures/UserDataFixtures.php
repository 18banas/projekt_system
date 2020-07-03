<?php
/**
 * UserData fixtures.
 */

namespace App\DataFixtures;

use App\Entity\UserData;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

/**
 * Class UserDataFixtures.
 */
class UserDataFixtures extends AbstractBaseFixtures implements DependentFixtureInterface
{
    /**
     * Load data.
     *
     * @param ObjectManager $manager Persistence object manager
     */
    public function loadData(ObjectManager $manager): void
    {
        $this->createMany(1, 'userdata', function ($i) {
            $userdata = new UserData();
            $userdata->setName($this->faker->firstName);
            $userdata->setSurname($this->faker->lastName);
            $userdata->setPhone($this->faker->ean8);
            $userdata->setEmail($this->faker->email);

            return $userdata;
        });

        $manager->flush();
    }

    /**
     * This method must return an array of fixtures classes
     * on which the implementing class depends on.
     *
     * @return array Array of dependencies
     */
    public function getDependencies(): array
    {
        return [CategoryFixtures::class];
    }
}
