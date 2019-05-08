<?php

namespace BrainGames\Games\Even;

use function \cli\line;
use function \cli\prompt;
use function BrainGames\Cli\run;

function playEven()
{
    function isEven($num)
    {
        return $num % 2 === 0;
    }

    function checkEvenOrNot($num)
    {
        $result = isEven($num) ? 'yes' : 'no';
        return $result;
    }

    function addQuestionNumber()
    {
        return rand(1, 99);
    }

    $rules = 'Answer "yes" if number even otherwise answer "no".';
    $question = addQuestionNumber();
    $correctAnswer = checkEvenOrNot($question);

    return run($rules, $question, $correctAnswer);
}


/*function brainEven() 
{
    line('Welcome to the Brain Game!');
    line('Answer "yes" if number even otherwise answer "no".');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name); 

    function isEven($num)
    {
        return $num % 2 === 0;
    }

    function checkEvenOrNot($num)
    {
        $result = isEven($num) ? 'yes' : 'no';
        return $result;
    }

    $count = 3; // кол-во правильных ответов для победы
    for ($i = 0; $count > $i ; $i++) {
        $questionNumber = rand(1, 99);
        $correctAnswer = checkEvenOrNot($questionNumber);

        line('Question: %s', $questionNumber); 
        $userAnswer = prompt('Your answer');
         
        if ($correctAnswer === $userAnswer) {
            line('Correct!');
        } else {
            return line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'. Let's try again, %s!", $name);
        }
    } return line('Congratulations, %s!', $name);
}*/