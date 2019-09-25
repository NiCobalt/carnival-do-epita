<?php
namespace Hackathon\PlayerIA;

class NicobaltPlayer extends Player {

    protected $mySide;
    protected $opponentSide;
    protected $result;

    public function getChoice() {
        if ($this->result->getNbRound() == 0) {
            return 'paper';
        }
        elseif ($this->result->getNbRound() == 1)
        {
            if ($this->result->getLastChoiceFor($this->opponentSide) == 'paper')
                return 'scissors';
            elseif ($this->result->getLastChoiceFor($this->opponentSide) == 'rock')
                return 'paper';
            else
                return 'rock';
        }
        else
        {
            //$this->PrettyDisplay();
            print_r($this->result->getStatsFor($this->opponentSide));
            if ($this->result->getStatsFor($this->opponentSide)['name'] == 'Paper')
                return 'scissors';
            elseif ($this->result->getStatsFor($this->opponentSide)['name'] == 'Rock')
                return 'paper';
            else
                return 'rock';
        }
    }
};
