<?php

namespace Andrewskm\UtilityColors\Test;

use Andrewskm\UtilityColors\UtilityColor;
use PHPUnit\Framework\TestCase;

class UtilityColorTest extends TestCase
{
    public function test_it_builds_a_utility_class(): void
    {
        $cases = UtilityColor::cases();
        $key   = array_rand(UtilityColor::cases());
        $test  = $cases[$key] ?? null;

        $this->assertTrue($test instanceof UtilityColor);
        $this->assertEquals(sprintf('bg-%s-300', $test->name), $test->build('bg', 300));
    }
}
