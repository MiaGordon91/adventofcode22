<?php

// Day 1: Calorie counting
class DayOneSolution
{

    public function solutionPart1()
    {
        $contents = file_get_contents('puzzleInput/dayOneInput.txt');
        $arrOfStrings = explode("\n\n", $contents);

        $totalCalories = [];

        foreach ($arrOfStrings as $string)
        {
            $array = array_map('intval', explode("\n", $string));

            $totalCalories[] = array_sum($array);
        }

        return(max($totalCalories));
    }

        public function solutionPart2()
        {
            $contents = file_get_contents('puzzleInput/dayOneInput.txt');
            $arrOfStrings = explode("\n\n", $contents);
    
            $totalCalories = [];
    
            foreach ($arrOfStrings as $string)
            {
                $array = array_map('intval', explode("\n", $string));
    
                $totalCalories[] = array_sum($array);
            }
            
            $sortArray = rsort($totalCalories);
            
            $topThree = array_slice($totalCalories,0,3);
            
            return(array_sum($topThree));
          
        }

}