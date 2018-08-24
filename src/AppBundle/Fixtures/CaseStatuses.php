<?php

namespace AppBundle\Fixtures;

use AppBundle\Fixture\CaseStatusFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

/**
 * Class CaseStatuses
 */
class CaseStatuses extends CaseStatusFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 21;
    }

    /**
     * {@inheritdoc}
     */
    protected function getResource()
    {
        return '/srv/api-platform/src/AppBundle/Resources/fixtures/{env}/case_statuses.yml';
    }
}
