@extends("layouts.default")

@section("content")
<div ng-app="myApp" class="row">
    <div class="col-sm-10" ng-cloak  ng-controller="DeckController as deck">

        <div class="menu">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-primary active">
                    <input type="radio" name="options" id="option1" checked> Toggle
                </label>
                <label class="btn btn-primary">
                    <input type="radio" name="options" id="option2" > Remain Open
                </label>
            </div>
            <div class="btn-group" data-toggle="buttons">
                <input ng-model=deck.filter" type="text">
            </div>
        </div>

        <div ng-repeat="card in deck.cards" class="row cardRow">
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
                    <i ng-click="deck.removeCard(card)" style="display:inline-block" class="glyphicon glyphicon-remove"></i>
                    <i ng-click="deck.toggleActive(card)" style="display:inline-block" class="glyphicon glyphicon-pencil"></i>
                </div>
            </div>
            <div class="row" ng-show="card.active">
                <div class="col-sm-5">
                    <textarea ng-model="card.title" type="text"></textarea>
                </div>
                <div class="col-sm-5">
                    <textarea  ng-model="card.text" type="text"></textarea>
                </div>
            </div>
        </div>

        <div class="btn btn-block btn-default" ng-click="deck.addCard()">add another card</div>
    </div>
    <div class="col-sm-2">
        <h3>sidebar</h3>
        <a href='#'>link 1</a>
        <a href='#'>link 2</a>
        <p>cogit, ergo sum. je pense, donc je suis. Etre ou n'etre pas, ca c'est la question. Shall I compare thee to a summer's day? Thou art more lovely and more temperate. Si tu connais ton ennemi et connais-toi toi-meme, eusiiez-vous cent guerres a soutenir</p>
    </div>
</div>
@stop