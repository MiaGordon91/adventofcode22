<?php

use PHPUnit\Framework\TestCase;

class DayOneSolutionTest extends TestCase
{

    protected function setUp(): void
    {
        $this->dayOneSolution = new DayOneSolution();
    }

    public function testDayOneSolutionPart1()
    {
        $runSolution = $this->dayOneSolution->solutionPart1();

        $this->assertEquals(74711, $runSolution);

    }

    public function testDayOneSolutionPart2()
    {
        $runSolution = $this->dayOneSolution->solutionPart2();

        $this->assertEquals(209481, $runSolution);

    }

}