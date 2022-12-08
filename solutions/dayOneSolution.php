<?php

// Day 1: Calorie counting
class DayOneSolution
{

    public function solution()
    {
        $contents = file_get_contents('puzzleInput/dayOneInput.txt');
        $arrOfStrings = explode("\n\n", $contents);

        $totalCalories = [];

        foreach ($arrOfStrings as $string)
        {
            $array = array_map('intval', explode("\n", $string));

            $totalCalories[] = array_sum($array);
        }

        return max($totalCalories);
    }

}