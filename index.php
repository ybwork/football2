<?php

// class Player
// {
//     private $birthday;

//     public function setBirthday(string $birthday)
//     {
//         $this->birthday = $birthday;
//     }

//     public function getPlayerAge()
//     {
//         $currentDate = $this->formDate();
//         $playerDateBirth = $this->formDate($this->birthday); 

//         $age = $currentDate['year'] - $playerDateBirth['year'];

//         return $this->clarifyAge($age);
//     }

//     public function formDate(string $time = '')
//     {
//         $dateTime = new DateTime($time);

//         $date['year'] = (int) $dateTime->format('Y');
//         $date['month'] = (int) $dateTime->format('m');
//         $date['day'] = (int) $dateTime->format('d');

//         return $date;
//     }

//     public function clarifyAge(int $age)
//     {
//         $year = 1;

//         if ($this->isBirthdayComplete()) {
//             return $age;
//         } 

//         return $age -= $year;
//     }

//     public function isBirthdayComplete()
//     {
//         $currentDate = $this->formDate();
//         $playerDateBirth = $this->formDate($this->birthday);

//         if ($playerDateBirth['month'] > $currentDate['month'] || ($playerDateBirth['month'] == $currentDate['month'] && $playerDateBirth['day'] > $currentDate['day'])) {
//             return false;
//         }

//         return true;
//     } 
// }

// $player = new Player();
// $player->setBirthday('1991-01-16');
// $playerAge = $player->getPlayerAge();
// var_dump($playerAge); die();


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

// $playerBirthday = '1991-01-16';
// var_dump(getPlayerAge($playerBirthday)); die();

?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles/template.css.php">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <body>
        <div class="main">
            <div class="container">
                <div class="news-header">
                    <div class="news-header__title">
                        <div class="news-header__text">
                            Последние новости
                        </div>

                        <div class="news-header__share">
                            <div class="news-header__share-icon">
                                <i class="fa fa-bath" aria-hidden="true"></i>
                            </div>
                            <div class="news-header__share-text">Поделиться</div>
                        </div>
                    </div>

                    <div class="news-header__social">
                        <div class="news-header__social-text">
                            Мы в соц. сетях:
                        </div>

                        <div class="news-header__icons">
                            <a class="news-header__icons-link" href="">
                                <i class="fa fa-eercast" aria-hidden="true"></i>
                            </a>
                            <a class="news-header__icons-link" href="">
                                <i class="fa fa-eercast" aria-hidden="true"></i>
                            </a>
                            <a class="news-header__icons-link" href="">
                                <i class="fa fa-eercast" aria-hidden="true"></i>
                            </a>
                            <a class="news-header__icons-link" href="">
                                <i class="fa fa-eercast" aria-hidden="true"></i>
                            </a>
                            <a class="news-header__icons-link" href="">
                                <i class="fa fa-eercast" aria-hidden="true"></i>
                            </a>
                            <a class="news-header__icons-link" href="">
                                <i class="fa fa-eercast" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="news-content">
                    <div class="news-content__item">
                        <div class="item-poster">
                            <img class="item-poster__img" src="">
                        </div>
                        <div class="item-info">
                            <div class="item-info__date">07 марта 2018</div>
                            <!-- <div class="item-info__text">Тренер "Шальке" Тедеско: "Если вы выиграете 1:0, это всегда приятно"</div>                       -->
                            <div class="item-info__tags">
                                <a class="tags-link" href="">#Шальке</a>
                                <a class="tags-link" href="">#Бавария</a>
                                <a class="tags-link" href="">#Леон</a>
                            </div>
                        </div>
                    </div>
                    <div class="news-content__item">
                        <div class="item-poster">
                            <img class="item-poster__img" src="">
                        </div>
                        <div class="item-info">
                            <div class="item-info__date">07 марта 2018</div>
                            <!-- <div class="item-info__text">Тренер "Шальке" Тедеско: "Если вы выиграете 1:0, это всегда приятно"</div>                    -->
                            <div class="item-info__tags">
                                <a class="tags-link" href="">#Шальке</a>
                                <a class="tags-link" href="">#Бавария</a>
                                <a class="tags-link" href="">#Леон</a>
                            </div>
                        </div>
                    </div>
                    <div class="news-content__item">
                        <div class="item-poster">
                            <img class="item-poster__img" src="">
                        </div>
                        <div class="item-info">
                            <div class="item-info__date">07 марта 2018</div>
                            <!-- <div class="item-info__text">Тренер "Шальке" Тедеско: "Если вы выиграете 1:0, это всегда приятно"</div>                        -->
                            <div class="item-info__tags">
                                <a class="tags-link" href="">#Шальке</a>
                                <a class="tags-link" href="">#Бавария</a>
                                <a class="tags-link" href="">#Леон</a>
                            </div>
                        </div>
                    </div>
                    <div class="news-content__item">
                        <div class="item-poster">
                            <img class="item-poster__img" src="">
                        </div>
                        <div class="item-info">
                            <div class="item-info__date">07 марта 2018</div>
                            <!-- <div class="item-info__text">Тренер "Шальке" Тедеско: "Если вы выиграете 1:0, это всегда приятно"</div>                         -->
                            <div class="item-info__tags">
                                <a class="tags-link" href="">#Шальке</a>
                                <a class="tags-link" href="">#Бавария</a>
                                <a class="tags-link" href="">#Леон</a>
                            </div>
                        </div>
                    </div>
                    <div class="news-content__item">
                        <div class="item-poster">
                            <img class="item-poster__img" src="">
                        </div>
                        <div class="item-info">
                            <div class="item-info__date">07 марта 2018</div>
                            <!-- <div class="item-info__text">Тренер "Шальке" Тедеско: "Если вы выиграете 1:0, это всегда приятно"</div>                      -->
                            <div class="item-info__tags">
                                <a class="tags-link" href="">#Шальке</a>
                                <a class="tags-link" href="">#Бавария</a>
                                <a class="tags-link" href="">#Леон</a>
                            </div>
                        </div>
                    </div>
                    <div class="news-content__item">
                        <div class="item-poster">
                            <img class="item-poster__img" src="">
                        </div>
                        <div class="item-info">
                            <div class="item-info__date">07 марта 2018</div>
                            <!-- <div class="item-info__text">Тренер "Шальке" Тедеско: "Если вы выиграете 1:0, это всегда приятно"</div>                        -->
                            <div class="item-info__tags">
                                <a class="tags-link" href="">#Шальке</a>
                                <a class="tags-link" href="">#Бавария</a>
                                <a class="tags-link" href="">#Леон</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="news-button">
                    <button>Больше новостей</button>
                </div>
            </div>
        </div>
    </body>
</html>