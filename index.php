<?php

    function PickCard() {
        $deck = array("2" => 2, "3" => 3, "4" => 4, "5" => 5, "6" => 6, "7" => 7, "8" => 8, "9" => 9, "10" => 10, "Ace" => 11, "Jack" => 10, "Queen" => 10, "King" => 10);
        $card = $deck[array_rand($deck)];
        return $card;
    }

    function ScoreCalculator($card) {
        $hand = $card + $card;
        return $hand;
    }


    function Playgame() {
        $a = PickCard();
        $b  = PickCard();
        $Draw1 = ScoreCalculator($a);
        $Draw2 = ScoreCalculator($b);
        if ($Draw1 > $Draw2) {
            return "Player 1 wins";
        } else {
            return "Player 2 wins";
        }
    }

echo Playgame();


