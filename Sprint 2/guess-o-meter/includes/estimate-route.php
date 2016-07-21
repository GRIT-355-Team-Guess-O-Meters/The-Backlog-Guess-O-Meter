<?php
    include_once './estimates/set-particpant-id.php';
 ?>

<h1 class="center-align">{{ projectname }}</h1>

            <hr />

            <div class="row">
                  <div ng-hide="currentIndex != {{ $index }}" class="singleEstimate" ng-repeat="result in results">
                    
                        <div class="card col s8 offset-s2">
                              <h5>{{ result[0] }}</h5>
                              <p>{{ result[1] }}<p>
                        </div>
                  
                        <div class="col s2 offset-s6 ">
                             <input class="estimate-textbox" type="text" placeholder="Enter Estimate:" ng-model="estimate"  />
                             <button class="btn estimate" data-participant-id="<?php echo $participantid; ?>" data-feature-id="{{ result[2] }}" ng-click="addEstimate($event)">Add Estimate</button>
                        </div>
                        
                  </div>
                  <h2 ng-show="currentIndex < results.length" class="center-align">{{ currentIndex + 1 }} out of {{ results.length }}</h2>
                  <h1 ng-hide="currentIndex < results.length" class="center-align">Thank You for taking this survey.</h1>
            </div>
