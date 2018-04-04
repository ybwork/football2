<?php

class Player
{
    private $birthday;

    public function setBirthday(string $birthday)
    {
        $this->birthday = $birthday;
    }

    public function getPlayerAge()
    {
        $currentDate = $this->formDate();
        $playerDateBirth = $this->formDate($this->birthday); 

        $age = $currentDate['year'] - $playerDateBirth['year'];

        return $this->clarifyAge($age);
    }

    public function formDate(string $time = '')
    {
        $date = new DateTime($time);

        $currentDate['year'] = (int) $date->format('Y');
        $currentDate['month'] = (int) $date->format('m');
        $currentDate['day'] = (int) $date->format('d');

        return $currentDate;
    }

    public function clarifyAge(int $age)
    {
        $year = 1;

        if ($this->isBirthdayComplete()) {
            return $age;
        } 

        return $age -= $year;
    }

    public function isBirthdayComplete()
    {
        $currentDate = $this->formDate();
        $playerDateBirth = $this->formDate($this->birthday);

        if ($playerDateBirth['month'] > $currentDate['month'] || ($playerDateBirth['month'] == $currentDate['month'] && $playerDateBirth['day'] > $currentDate['day'])) {
            return false;
        }

        return true;
    } 
}

$player = new Player();
$player->setBirthday('1991-01-16');
$playerAge = $player->getPlayerAge();
var_dump($playerAge); die();


// function getPlayerAge(string $birthday)
// {
//     $currentDate = formDate();
//     $playerDateBirth = formDate($birthday); 

//     $age = $currentDate['year'] - $playerDateBirth['year'];

//     return clarifyAge($age);
// }

// function formDate(string $time = '')
// {
//     $date = new DateTime($time);

//     $currentDate['year'] = (int) $date->format('Y');
//     $currentDate['month'] = (int) $date->format('m');
//     $currentDate['day'] = (int) $date->format('d');

//     return $currentDate;
// }

// function clarifyAge(int $age)
// {
//     $year = 1;

//     if (isBirthdayComplete()) {
//         return $age;
//     } 

//     return $age -= $year;
// }

// function isBirthdayComplete()
// {
//     $currentDate = formDate();
//     $playerDateBirth = formDate($birthday);

//     if ($playerDateBirth['month'] > $currentDate['month'] || ($playerDateBirth['month'] == $currentDate['month'] && $playerDateBirth['day'] > $currentDate['day'])) {
//         return false;
//     }

//     return true;
// }

$playerBirthday = '1991-01-16';
var_dump(getPlayerAge($playerBirthday)); die();