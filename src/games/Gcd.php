<?php

namespace BrainGames\Games\Gcd;

use function \cli\line;
use function \cli\prompt;
use function BrainGames\Cli\run;

function playGcd()
{
    function considerGreatestCommonDivisor($number1, $number2)
    {
        while ($number1 != 0 && $number2 != 0) {
            if ($number1 > $number2) {
                $number1 = $number1 % $number2;
            } else {
                $number2 = $number2 % $number1;
            }
        } 
        return ($number1 + $number2);
    }

    function addQuestion($questionNumber1, $questionNumber2)
    {
        return "{$questionNumber1} {$questionNumber2}";
    }

    $questionNumber1 = rand(1, 99);
    $questionNumber2 = rand(1, 99);

    $rules = 'Find the greatest common divisor of given numbers.';
    $correctAnswer = considerGreatestCommonDivisor($questionNumber1, $questionNumber2);
    $question = addQuestion($questionNumber1, $questionNumber2);

    return run($rules, $question, $correctAnswer);


}

/*function playGcd() 
{
    line('Welcome to the Brain Game!');
    line('Find the greatest common divisor of given numbers.');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name); 

    function considerGreatestCommonDivisor($number1, $number2)
    {
        while ($number1 != 0 && $number2 != 0) {
            if ($number1 > $number2) {
                $number1 = $number1 % $number2;
            } else {
                $number2 = $number2 % $number1;
            }
        } 
        return ($number1 + $number2);
    }

    $count = 3; // кол-во правильных ответов для победы
    for ($i = 0; $count > $i ; $i++) {
        $questionNumber1 = rand(1, 99);
        $questionNumber2 = rand(1, 99);
        $correctAnswer = considerGreatestCommonDivisor($questionNumber1, $questionNumber2);

        line("Question: {$questionNumber1} {$questionNumber2}");
        $userAnswer = prompt('Your answer');

        if ($correctAnswer == $userAnswer) {
            line('Correct!');
        } else {
            return line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'. Let's try again, %s!", $name);
        }
    } return line('Congratulations, %s!', $name);
}*/