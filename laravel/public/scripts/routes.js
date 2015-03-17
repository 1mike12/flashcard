/**
 * Created by 1mike12 on 3/15/2015.
 */
myApp.config(function ($routeProvider) {
    $routeProvider
        .when('/', {
            templateUrl: 'pages/home.html',
            controller: 'MainController'
        })
        .when('/deck', {
            templateUrl: 'pages/deck/list.html'
        })
        .when('/deck/edit', {
            templateUrl: 'pages/deck/edit.html',
            controller: "DeckEditController",
            controllerAs: "deckEditCtrl"
        })
        .when('/about', {
            templateUrl: 'pages/about.html'
        })

        .when('/contact', {
            templateUrl: 'pages/contact.html'
        });

});