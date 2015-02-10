myApp.controller("EditController", function (DeckFactory) {
    var self = this;

    self.deck = DeckFactory;

    self.draft = [];
    self.wrong = [];
    self.correct = [];
    
    self.currentCard={};
    
    self.setup = function(){
        self.draft= DeckFactory.deck;
        self.draft=[];
        self.wrong=[];
        self.correct=[];
    };
    
    self.draw = function () {
        
    };

    self.markWrong = function (card) {
        self.wrong.push(card);
    };

    self.markCorrect = function (card) {
        self.correct.push(card);
    };

    self.shuffleArray = function (array) {
        //fisher yates shuffle
        var counter = array.length, temp, index;

        // While there are elements in the array
        while (counter > 0) {
            // Pick a random index
            index = Math.floor(Math.random() * counter);

            // Decrease counter by 1
            counter--;

            // And swap the last element with it
            temp = array[counter];
            array[counter] = array[index];
            array[index] = temp;
        }

        return array;
    };

});

