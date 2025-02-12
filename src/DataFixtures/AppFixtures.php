<?php

namespace App\DataFixtures;

use App\Factory\BeneficiaryFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        BeneficiaryFactory::createMany(10);
    }
}
