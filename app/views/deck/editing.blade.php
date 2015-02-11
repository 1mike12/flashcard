<div ng-controller="EditController as editCtrl">
    <div class="row">
        <div class="col-sm-10">
            <div>
                <h1 style="display:inline-block" contentEditable="true">Deck Name</h1> <i class="glyphicon glyphicon-pencil"></i>
            </div>
            
            <div class="menu">
                cards: @{{editCtrl.deck.cardCount()}}
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-primary active">
                        <input type="radio" name="options" id="option1" checked> Toggle
                    </label>
                    <label class="btn btn-primary">
                        <input type="radio" name="options" id="option2" > Remain Open
                    </label>
                </div>
                <div class="btn-group" data-toggle="buttons">
                    <label>filter <input class="form-control" ng-model="editCtrl.filter" type="text"></label>
                </div>
            </div>

            <div ng-repeat="card in editCtrl.deck.cards|
             filter:editCtrl.filter" 
                 class="row cardRow">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="card">
                            <center><h3>@{{card.title}}</h3></center>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="card" mathjax-bind="card.text"></div>

                    </div>
                    <div class="cols-sm-2">
                        <i ng-click="editCtrl.deck.removeCard(card)" style="display:inline-block" class="glyphicon glyphicon-remove"></i>
                        <i ng-click="editCtrl.deck.toggleEditing(card)" style="display:inline-block" class="glyphicon glyphicon-pencil"></i>
                    </div>
                </div>
                <div class="row" ng-show="card.editing">
                    <div class="col-sm-5">
                        <textarea ng-model="card.title" type="text"></textarea>
                    </div>
                    <div class="col-sm-5">
                        <textarea  ng-model="card.text" type="text"></textarea>
                    </div>
                </div>
            </div>

            <div class="btn btn-block btn-default" ng-click="editCtrl.deck.newCard()">add card</div>
        </div>
        <div class="col-sm-2">
            <h2>sidebar</h2>
        </div>
    </div>
</div>