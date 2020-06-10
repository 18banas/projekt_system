<?php
/**
 * Event fixtures.
 */
namespace App\DataFixtures;

use App\Entity\Event;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

/**
 * Class EventFixtures.
 */

class EventFixtures extends AbstractBaseFixtures implements DependentFixtureInterface
{
    /**
     * Load data
     *
     * @param \Doctrine\Persistence\ObjectManager $manager Persistence object manager
     */
    public function loadData(ObjectManager $manager): void
    {
        $this->createMany(50, 'events', function ($i) {
            $event = new Event();
            $event->setTitle($this->faker->sentence);
            $event->setCreatedAt($this->faker->dateTimeBetween('-100 days', '-1 days'));
            $event->setUpdatedAt($this->faker->dateTimeBetween('-100 days', '-1 days'));
            $event->setCategory($this->getRandomReference('categorys'));

            return $event;
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

