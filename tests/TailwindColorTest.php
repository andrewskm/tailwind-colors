<?php

namespace Andrewskm\TailwindColors\Test;

use Andrewskm\TailwindColors\TailwindColor;
use PHPUnit\Framework\TestCase;

class TailwindColorTest extends TestCase
{
    public function test_it_builds_a_utility_class(): void
    {
        $cases = TailwindColor::cases();
        $key   = array_rand(TailwindColor::cases());
        $test  = $cases[$key];

        $this->assertTrue($test instanceof TailwindColor);
        $this->assertEquals(sprintf('bg-%s-300', $test->name), $test->build('bg', 300));
    }
}
