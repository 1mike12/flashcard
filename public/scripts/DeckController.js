myApp.controller("DeckController", function () {
    var self = this;

    //menu styff
    self.editRemainOpen = false; //editing boxes remain open
    self.filter = "";

    self.cards = [
        {
            title: "Euler's Formula",
            text: "e^{\\pi i}-1=0",
            weight: 5,
            editing: false,
        },
        {
            title: "Expanded Euler's Formula",
            text: 'e^{j\\theta}= cos(\\theta) + jsin(\\theta)',
            weight: 4,
            editing: false
        },
        {
            title: "Baye's Rule",
            text: 'P(A|B)= \\frac{P(B|A) * P(A)}{P(B)}',
            weight: 4,
            editing: false
        }
    ];

    self.addCard = function () {
        self.cards.push({title: "", text: "", weight: 0, active: true});
    };

    self.toggleActive = function (card) {
        card.editing = !card.editing;
    };
    self.removeCard = function (card) {
        var index = self.cards.indexOf(card);
        self.cards.splice(index, 1);
    };
    self.totalCards = function () {
        return self.cards.length;
    };

    self.serve = function () {
        return self.cards[Math.random(0, self.cards.length - 1)];
    };
    self.random={};
});

