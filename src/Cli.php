<?php

namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;

function run($rules, $question, $correctAnswer) 
{
    line('Welcome to the Brain Game!');
    line("{$rules}");
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
     
    $count = 3;
    for ($i = 0; $i < $count; $i++) {
        line("Question: %s", $question); 
        $userAnswer = prompt('Your answer');
     
        if ($correctAnswer == $userAnswer) {
            line('Correct!');
        } else {
            return line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'. Let's try again, %s!", $name);
        }
    }
    return line('Congratulations, %s!', $name); 
} 



