<?php

$color = array("Hearts", "Diamonds", "Spades", "Clubs");

    function Color() {
        $color = array("Hearts", "Diamonds", "Spades", "Clubs");
        $CardColor = $color[array_rand($color)];
        return $CardColor;
    }

    function DrawCard1() {
        $deck = array("2" => 2, "3" => 3, "4" => 4, "5" => 5, "6" => 6, "7" => 7, "8" => 8, "9" => 9, "10" => 10, "Ace" => 11, "Jack" => 10, "Queen" => 10, "King" => 10);
        $card1 = $deck[array_rand($deck)];
        return $card1;
    }

    function DrawCard2() {
        $deck = array("2" => 2, "3" => 3, "4" => 4, "5" => 5, "6" => 6, "7" => 7, "8" => 8, "9" => 9, "10" => 10, "Ace" => 11, "Jack" => 10, "Queen" => 10, "King" => 10);
        $card2 = $deck[array_rand($deck)];
        return $card2;
    }

    function Player1($card1) {
        $hand1 = $card1 + $card1;
        return $hand1;
    }

    function Player2($card2) {
        $hand2 = $card2 + $card2;
        return $hand2;
    }

    function Playgame() {
        $a = DrawCard1();
        $b  = DrawCard2();
        $Draw1 = Player1($a);
        $Draw2 = Player2($b);
        if ($Draw1 > $Draw2) {
            return "Player 1 wins";
        } else {
            return "Player 2 wins";
        }
    }

echo Playgame();


