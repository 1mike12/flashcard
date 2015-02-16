<?php

class Deck extends Eloquent {
    public function cards(){
        return $this->hasMany("Card");
    }
}
