var estimatePage = angular.module('estimatePage', ['ngRoute']);

//router
estimatePage.config(function($routeProvider) {
    $routeProvider
        .when('/:projectid/:surveyid', {
        templateUrl: 'includes/estimate-route.php',
        controller: 'estimateController'
    });
});

//controller
estimatePage.controller('estimateController', ['$scope', '$routeParams', '$http', function($scope, $routeParams, $http) {
    $scope.currentIndex = 0;
    //Ajax used to make server changed in the database
    var request = $http({
        method: 'POST',
        url: 'includes/set-estimate-session.php',
        data: {
            'projectid': $routeParams.projectid
        }
    });

    //Recives the data back from php
    request.then(function(response) {
        $scope.projectname = response.data[0];
        $scope.results = [];
        for (var i = 1; i < response.data.length; i++) {
            $scope.results.push(response.data[i]);
        }
    });

    //code still in development not yet done.
    $scope.addEstimate = function(e) {
        var featureID = $(e.target).data('feature-id');
        var participantID = $(e.target).data('participant-id');
        var estimateValue = Number($(e.target).siblings('.estimate-textbox').val());
        if (Number.isInteger(estimateValue) && estimateValue >= 0) {
            //  Ajax used to make server changed in the database
            var request = $http({
                method: 'POST',
                url: 'includes/ajax/set-estimates.php',
                data: {
                    'projectid': $routeParams.projectid,
                    'surveyid': $routeParams.surveyid,
                    'featureid': featureID,
                    'estimatevalue': estimateValue,
                    'participantid': participantID,
                    'index' : $scope.currentIndex,
                    'lastindex' : $scope.results.length
                }
            });
            //Recives the data back from php
            request.then(function(response) {
                $scope.currentIndex++;
            });
        } else {
            alert('invalid Input');
        }
    };
}]);
