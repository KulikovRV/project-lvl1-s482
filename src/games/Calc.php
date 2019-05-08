<?php

namespace BrainGames\Games\Calc;

use function \cli\line;
use function \cli\prompt;
use function BrainGames\Cli\run;

function playCalc()
{
    function findCorrectAnswer($randomOperator, $questionNumber1, $questionNumber2)
    {
        switch($randomOperator) {   
        case '+':
            $result = $questionNumber1 + $questionNumber2;
            break;
        case '-':   
            $result = $questionNumber1 - $questionNumber2;
            break;
        case '*':
            $result = $questionNumber1 * $questionNumber2;
            break;
        }
        return $result;
    }

    function addQuestionNumber($questionNumber1, $randomOperator, $questionNumber2)
    {
        return "{$questionNumber1}{$randomOperator}{$questionNumber2}";
    }

    $questionNumber1 = rand(1, 20);
    $questionNumber2 = rand(1, 20);
    
    $operators = ['*', '-', '+'];
    $operatorsSize = count($operators) - 1;
    $randomOperator = $operators[rand(0, $operatorsSize)];

    $rules = 'What is the result of the expression?';
    $correctAnswer = findCorrectAnswer($randomOperator, $questionNumber1, $questionNumber2);
    $question = addQuestionNumber($questionNumber1, $randomOperator, $questionNumber2);

    return run($rules, $question, $correctAnswer);
}







/*function playCalc() 
{
    line('Welcome to the Brain Game!');
    line('What is the result of the expression?');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name); 

    $count = 3; // кол-во правильных ответов для победы

    for ($i = 0; $count > $i ; $i++) {
        $questionNumber1 = rand(1, 20);
        $questionNumber2 = rand(1, 20);
        $operators = ['*', '-', '+'];
        $operatorsSize = count($operators) - 1;
        $randomOperator = $operators[rand(0, $operatorsSize)];
        $correctAnswer = 0; 

        switch($randomOperator) {
        case '+':
            $correctAnswer = $questionNumber1 + $questionNumber2;
            break;
        case '-':   
            $correctAnswer = $questionNumber1 - $questionNumber2;
            break;
        case '*':
            $correctAnswer = $questionNumber1 * $questionNumber2;
            break;
        }

        line("Question: {$questionNumber1}{$randomOperator}{$questionNumber2}");
        $userAnswer = prompt('Your answer');

        if ($userAnswer == $correctAnswer) {
            line('Correct!');
        } else {
            return line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'. Let's try again, %s!", $name);
        } 
    } return line('Congratulations, %s!', $name);
}*/