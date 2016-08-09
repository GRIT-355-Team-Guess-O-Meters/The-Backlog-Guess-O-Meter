<?php include_once './estimates/set-particpant-id.php'; ?>
<div id="esti-view" class="card">
   <h3 class="center-align">{{ projectname }}</h3>
   <div class="row">
      <div ng-hide="currentIndex != {{ $index }}" class="singleEstimate " ng-repeat="result in results">
         <div class="col s8 offset-s2 valign center-align estimate-border">
            <div class="row center-align">
               <div style="padding: 1em" class="col s12">
                  <b>{{ result[0] }}</b>
                  <p>{{ result[1] }}
                  <p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col s8 offset-s2 add-estimate-box">
               <input class="col s12 estimate-textbox" type="text" placeholder="Enter Estimate:" ng-model="estimate"  />
               <button class="col s12 btn estimate" data-participant-id="<?php echo $participantid; ?>" data-feature-id="{{ result[2] }}" ng-click="addEstimate($event)">Add Estimate</button>
            </div>
         </div>
      </div>
      <div class="row">
         <h3 ng-show="currentIndex < results.length" class="center-align">{{ currentIndex + 1 }} out of {{ results.length }}</h3>
         <h3 ng-hide="currentIndex < results.length" class="center-align">Thank You for taking this survey.</h3>
      </div>
   </div>
   </div>
</div>
