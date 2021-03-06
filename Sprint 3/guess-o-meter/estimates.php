<!DOCTYPE html>
<html ng-app="estimatePage">
  <head>
    <title>Title</title>

    <!--Materialize CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <!--Materialize Icons CSS-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!--Google Font CSS-->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fredericka+the+Great">
    <!--Project CSS-->
    <link rel="stylesheet" href="./css/main.css">
    <link rel='shortcut icon' href='favicon.ico' type='image/x-icon'/>
    
  </head>
  <body>
    <div class="container" ng-view>


    </div>
  <!--jQuery JS-->
  <script   src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
  <!--Angular JS-->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
  <!--Angular Routing JS-->
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>
  <!--Materialize JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
  <!--Project JS-->
  <script src="./js/main.js"></script>
  <!--In Project Angular JS-->
  <script src="./js/ang.js"></script>
  <script>
    $(document).ready(function(){
      var windowHeight = $(window).height();
      $('.esti').css('height', windowHeight);
    });
  </script>
  </body>
</html>
