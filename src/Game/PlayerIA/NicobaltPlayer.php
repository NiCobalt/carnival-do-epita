<?php
namespace Hackathon\PlayerIA;

class NicobaltPlayer extends Player {

    protected $mySide;
    protected $opponentSide;
    protected $result;

    public function getChoice() {
        //print_r($this->result->getLastScoreFor($this->mySide));

        if ($this->result->getNbRound() == 0) {
            return 'paper';
        }
        else
        {
            if ($this->result->getLastScoreFor($this->mySide) == 3)
            {
                if ($this->result->getLastChoiceFor($this->mySide) == 'rock')
                    return 'scissors';
                elseif ($this->result->getLastChoiceFor($this->mySide) == 'scissors')
                    return 'paper';
                else
                    return 'rock';
            }
            else
            {
                if ($this->result->getLastChoiceFor($this->mySide) == 'rock')
                    return 'scissors';
                elseif ($this->result->getLastChoiceFor($this->mySide) == 'scissors')
                    return 'paper';
                else
                    return 'rock';
            }
        }
    }
};
