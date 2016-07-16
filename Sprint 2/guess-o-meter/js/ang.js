var estimatePage = angular.module('estimatePage', ['ngRoute']);

estimatePage.config(function ($routeProvider) {
  $routeProvider

  .when('/:projectid', {
    templateUrl: 'includes/estimate-route.php',
    controller: 'estimateController'
  })


});

estimatePage.controller('estimateController', ['$scope', '$routeParams', '$http', '$route', function($scope, $routeParams, $http, $route) {

  //Ajax used to make server changed in the database
  var request = $http({
    method : 'POST',
    url : 'includes/set-estimate-session.php',
    data : {
      'projectid' : $routeParams.projectid
    }
  });

  //Recives the data back from php
  request.then(function(response){
    $scope.projectname = response.data[0];
    $scope.results = [];

    for(var i = 1; i < response.data.length; i++){

      $scope.results.push(response.data[i]);
    }
  });

//addes a hello function to the estimates page and hides a sumbit button after it was proccessed.
  $scope.submitParticipant = function(){
    if($scope.participantid) {
        $scope.notHidden = true;
        $scope.helloUser = "Hello, " + $scope.participantid;
    }
}

//code still in development not yet done.
  $scope.addEstimate = function(){
    if($scope.participantid){

      // var request = $http({
      //   method : 'POST',
      //   url : 'includes/set-estimates.php',
      //   data : {
      //     'projectid' : $routeParams.projectid,
      //     'featureid' : $(this).attr('featureid')
      //   }
      // });

      alert( $('.estimate').data('feature-id'));

    }
  }


}]);
