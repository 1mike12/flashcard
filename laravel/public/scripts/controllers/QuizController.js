myApp.controller("QuizController", function (DeckFactory) {
    var self = this;

    self.deck = DeckFactory;

    self.draft = [];
    self.index;

    self.wrong = [];
    self.correct = [];

    self.current;
    self.flipped;

    self.init = function () {
        self.draft = DeckFactory.cards.slice(0);
        self.draft = self.shuffleArray(self.draft);
        self.wrong = [];
        self.correct = [];

        self.flipped = false;
        self.index = 0;
        self.current = self.draft[self.index];
    };
    self.flip = function () {
        self.flipped = !self.flipped;
    };
    self.shuffle = function () {
        self.shuffleArray(self.draft);
        self.index = 0;
        self.current = self.draft[self.index];
    };

    self.unmarkedCount = function () {
        var count = 0;
        var draft = self.draft;
        for (var i = 0; i < draft.length; i++) {
            if (draft[i].correct === 0) {
                count++;
            }
        }
        return count;
    };
    
    self.markCorrect = function(){
        self.current.correct=1;
    };
    
    self.markIncorrect= function(){
        self.current.correct=-1;
    };

    self.goToNextUnmarked = function () {
        var draft = self.draft;
        for (var i = 0; i < draft.length; i++) {
            if (draft[i].correct === 0) {
                self.index=i;
                self.current= draft[i];
                return;
            }
        }
    };
    self.next = function () {
        self.index++;
        self.current = self.draft[self.index];
        self.flipped = false;
    };
    self.previous = function () {
        self.index--;
        self.flipped = false;
        self.current = self.draft[self.index];
    };

    self.percentCompletion = function () {
        return Math.floor(((self.unmarkedCount()) / self.draft.length) * 100);
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
    self.init();
});

