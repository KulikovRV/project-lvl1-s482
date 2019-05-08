<?php

namespace BrainGames\Games\Prime;

use function \cli\line;
use function \cli\prompt;
use function BrainGames\Cli\run;

function playPrime()
{
    function isPrime($num)
    {
        if ($num < 2) {
            return false;
        }
        for ($i = 2; $i <= $num / 2; $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }

    function checkPrimeOrNot($num)
    {
        $result = isPrime($num) ? 'yes' : 'no';
        return $result;
    }

    function addQuestionNumber()
    {
        return rand(1, 99);
    }

    $questionNumber = addQuestionNumber(); // Это число игрок должен определить, как простое или нет.

    $rules = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $question = addQuestionNumber($questionNumber);
    $correctAnswer = checkPrimeOrNot($questionNumber);
    
    return run($rules, $question, $correctAnswer);
}


/*function brainPrime()
{
    line('Welcome to the Brain Game!');
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name); 

    function isPrime($num)
    {
        if ($num < 2) {
            return false;
        }
        for ($i = 2; $i <= $num / 2; $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }
    
    function checkPrimeOrNot($num)
    {
        $result = isPrime($num) ? 'yes' : 'no';
        return $result;
    }

    $count = 3; // кол-во правильных ответов для победы
    for ($i = 0; $count > $i ; $i++) {
        $questionNumber = rand(1, 99); // Это число игрок должен определить, как простое или нет.
        $correctAnswer = checkPrimeOrNot($questionNumber);

        line("Question: {$questionNumber}");
        $userAnswer = prompt('Your answer');

        if ($userAnswer === $correctAnswer) {
            line('Correct!');
        } else {
            return line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'. Let's try again, %s!", $name);
        }
    } return line('Congratulations, %s!', $name);
}*/