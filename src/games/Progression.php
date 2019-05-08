<?php

namespace BrainGames\Games\Progression;

use function \cli\line;
use function \cli\prompt;
use function BrainGames\Cli\run;


function playProgression()
{
    function makeProgression($startingValue, $progressionDifference, $sizeProgression) 
    {
        $progression = [$startingValue];
        for ($i = 0; $i < $sizeProgression; $i++) {
            $progression[] = $progression[$i] + $progressionDifference; 
        } 
        return $progression;
    }

    function hideValueOfProgression($arithmeticProgression, $hideIndex)
    {
        $arithmeticProgression[$hideIndex] = "..";
        return implode(", ", $arithmeticProgression);
    }
    
    function saveCorrectAnswer($arithmeticProgression, $hideIndex)
    {
        return $arithmeticProgression[$hideIndex];
    }

    $startingValue = rand(0, 99); // Первое значение прогрессии
    $progressionDifference = rand(1, 9); // Разность прогрессии
    $sizeProgression = 9; // Размер массива 
    $hideIndex = rand(0, 9); // Значение которое спрячем от игрока
    
    $arithmeticProgression = makeProgression($startingValue, $progressionDifference, $sizeProgression);

    $rules = 'What number is missing in the progression?';
    $question = hideValueOfProgression($arithmeticProgression, $hideIndex);
    $correctAnswer = saveCorrectAnswer($arithmeticProgression, $hideIndex);

    return run($rules, $question, $correctAnswer);
}

/*function brainProgression() 
{
    line('Welcome to the Brain Game!');
    line('What number is missing in the progression?');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    
    function makeProgression($startingValue, $progressionDifference, $sizeProgression) 
    {
        $progression = [$startingValue];
        for ($i = 0; $i < $sizeProgression; $i++) {
            $progression[] = $progression[$i] + $progressionDifference; 
        } 
        return $progression;
    }
    
    function hideValueOfProgression($arithmeticProgression, $hideIndex)
    {
        $arithmeticProgression[$hideIndex] = "..";
        return implode(", ", $arithmeticProgression);
    }
    
    function saveCorrectAnswer($arithmeticProgression, $hideIndex)
    {
        return $arithmeticProgression[$hideIndex];
    }

    $count = 3; // Кол-во выигранных раундов для победы
    for ($i = 0; $count > $i ; $i++) {
        $startingValue = rand(0, 99); // Первое значение прогрессии
        $progressionDifference = rand(1, 9); // Разность прогрессии
        $sizeProgression = 9; // Размер массива
        $hideIndex = rand(0, 9); // Значение которое спрячем от игрока
        
        $arithmeticProgression = makeProgression($startingValue, $progressionDifference, $sizeProgression);
        $correctAnswer = saveCorrectAnswer($arithmeticProgression, $hideIndex);
        $questionForUser = hideValueOfProgression($arithmeticProgression, $hideIndex);
        
        line("Question: {$questionForUser}");
        $userAnswer = prompt('Your answer');

        if ($userAnswer == $correctAnswer) {
            line('Correct!');
        } else {
            return line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'. Let's try again, %s!", $name);
        }    
    } return line('Congratulations, %s!', $name);
}*/