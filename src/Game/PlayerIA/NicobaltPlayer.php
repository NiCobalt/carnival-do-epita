<?php
namespace Hackathon\PlayerIA;

class NicobaltPlayer extends Player {

    protected $mySide;
    protected $opponentSide;
    protected $result;

    public function getChoice() {
        if ($this->result->getNbRound() != 0) {
            if ($this->result->getLastChoiceFor($this->opponentSide) == 'paper')
                return 'scissors';
            elseif ($this->result->getLastChoiceFor($this->opponentSide) == 'rock')
                return 'paper';
            else
                return 'rock';
        }
        else
            return 'paper';
    }
};
