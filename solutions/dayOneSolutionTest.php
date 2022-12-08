<?php

use PHPUnit\Framework\TestCase;

class DayOneSolutionTest extends TestCase
{

    protected function setUp(): void
    {
        $this->dayOneSolution = new DayOneSolution();
    }

    public function testOutput()
    {
        $runSolution = $this->dayOneSolution->solution();

        $this->assertEquals(24000, $runSolution);
    }
}