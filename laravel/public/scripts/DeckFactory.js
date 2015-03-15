myApp.factory("DeckFactory", function ($q, $http, CardModel) {
    function Deck() {
        var self = this;

        //for ajax loading of cards array
        self.ready = false;

        self.cards = [
            {
                title: "Euler's Formula",
                text: "e^{\\pi i}-1=0",
                weight: 5,
                editing: false,
                correct: 0
            },
            {
                title: "Expanded Euler's Formula",
                text: 'e^{j\\theta}= cos(\\theta) + jsin(\\theta)',
                weight: 4,
                editing: false,
                correct: 0
            },
            {
                title: "Baye's Rule",
                text: 'P(A|B)= \\frac{P(B|A) * P(A)}{P(B)}',
                weight: 4,
                editing: false,
                correct: 0
            },
            {
                title: "Harmonic Series",
                text: '\\Sigma\\frac{1}{n}',
                weight: 4,
                editing: false,
                correct: 0
            },
            {
                title: "Gauss Formula (arithmetic series)",
                text: '\\frac{n(n+1)}{2}',
                weight: 4,
                editing: false,
                correct: 0
            },
            {
                title: "Second Order formula",
                text: 'x(t)= x(\\infty) + A_1 e^{s_1t} + A_2e^{s_2t}',
                weight: 4,
                editing: false,
                correct: 0
            },
            {
                title: "Fourier Transform",
                text: 'z(t) = \\int_{-\\infty}^{\\infty}R(\\omega) e^{i\\omega t} \\mathrm{d}\\omega.',
                weight: 4,
                editing: false,
                correct: 0
            },
            {
                title: "Standard Deviation",
                text: '\\sigma = \\sqrt{\\operatorname E[(X - \\mu)^2]}',
                weight: 4,
                editing: false,
                correct: 0
            },
            {
                title: "Variance",
                text: 'var= E[(X - E[X])^2]',
                weight: 4,
                editing: false,
                correct: 0
            }
        ];
        self.init = function () {

        };
        self.newCard = function () {
            self.cards.push(new CardModel);
        };

        self.toggleEditing = function (card) {
            card.editing = !card.editing;
        };
        self.removeCard = function (card) {
            var index = self.cards.indexOf(card);
            self.cards.splice(index, 1);
        };
        self.cardCount = function () {
            return self.cards.length;
        };

        self.serve = function () {
            return self.cards[Math.random(0, self.cards.length - 1)];
        };

        self.init();
    }

    return new Deck;
});