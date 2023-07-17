<?php

namespace Tests\Unit;

use Tests\TestCase;

class SecondExampleTest extends TestCase
{
    /**
     * the test suite should segfault before running this test
     * or at least before giving us the result of it
     */
    public function testThisWillNotComplete(): void
    {
        echo 'We will not make it here';
        $this->assertTrue(true);
    }
}
