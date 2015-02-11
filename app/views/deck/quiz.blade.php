<div ng-controller="QuizController as quizCtrl">
    <div class="col-sm-10">
        <menu>
            <div class="btn btn-primary" ng-click="quizCtrl.previous()">previous card</div>
            <div class="btn btn-primary" ng-click="quizCtrl.next()">next card</div>
            <div class="btn btn-primary" ng-click="quizCtrl.flip()">flip</div>
            <div class="btn btn-primary" ng-click="quizCtrl.markCorrect()">know it</div>
            <div class="btn btn-primary" ng-click="quizCtrl.markIncorrect()">don't know</div>
        </menu>

        <div class="flip-container" ng-click="quizCtrl.flip()" ng-class="{flipped:quizCtrl.flipped}" ontouchstart="this.classList.toggle('hover');">
            <div class="flipper">
                <div class="card front">
                    <div class="flipHint">
                        click
                        <i class="glyphicon glyphicon-share-alt"></i>
                    </div>
                    <a class="toggleEdit">
                        edit
                    </a>
                    <center><h3>@{{quizCtrl.current.title}}</h3></center>
                </div>
                <div class="card back">
                    <div class="flipHint">
                        click
                        <i class="glyphicon glyphicon-share-alt"></i>
                    </div>
                    <a class="toggleEdit">
                        edit
                    </a>
                    <div mathjax-bind="quizCtrl.current.text">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-2">
        <a href='#'>link 1</a>
        <a href='#'>link 2</a>
        <h3>sidebar</h3>
        
        <div class="btn btn-default"
             ng-click="quizCtrl.goToNextUnmarked()">
            <i class="glyphicon glyphicon-forward"></i> next unanswered
        </div>
        <div class="btn btn-default"
             ng-click="quizCtrl.shuffle()">
            <i class="glyphicon glyphicon-random"></i> shuffle 
        </div>
        
        <h3>progress</h3>
        <div>unanswered cards: @{{quizCtrl.unmarkedCount()}}</div>
        <div>@{{quizCtrl.index+1 + " of " + quizCtrl.draft.length }}</div>
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: @{{quizCtrl.percentCompletion()}}%;">
            </div>
        </div>
    </div>
</div>