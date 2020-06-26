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
     * Load data.
     *
     * @param ObjectManager $manager Persistence object manager
     */
    public function loadData(ObjectManager $manager): void
    {
        $this->createMany(20, 'events', function ($i) {
            $event = new Event();
            $event->setTitle($this->faker->sentence);
            $event->setCreatedAt($this->faker->dateTimeBetween('-100 days', '-1 days'));
            $event->setUpdatedAt($this->faker->dateTimeBetween('-100 days', '-1 days'));
            $event->setDatetime($this->faker->dateTimeBetween('-100 days', '+100 days'));
            $event->setNote($this->faker->text);
            $event->setCategory($this->getRandomReference('categories'));

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
