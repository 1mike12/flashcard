myApp.controller("EditController", function (DeckFactory) {
    var self = this;
    //menu stuff
    self.editRemainOpen = false; //editing boxes remain open
    self.filter = "";
    
    self.deck=DeckFactory;
});

