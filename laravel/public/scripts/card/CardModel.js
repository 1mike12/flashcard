myApp.factory("CardModel", function () {
    function CardModel() {
        var self = this;

        self.title = "";
        self.text = "";
        self.weight = 0;
        self.editing = true;
        self.id="";
        self.correct=0;

        self.init = function () {

        };
        self.init();
    }

    return CardModel;
});