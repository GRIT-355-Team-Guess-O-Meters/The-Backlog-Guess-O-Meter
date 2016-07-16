
<h1 class="center-align">{{ projectname }}</h1>

<div id="participantDiv" ng-hide="notHidden" class="col s8 offset-s2">
      <input id="participantInput" class="col s6" placeholder="Enter a user code:" ng-model="participantid" type="text" />
      <button id="participantBtn" class="btn col s6" ng-click="submitParticipant()">Sumbit</button>
      <br />
      <br />
</div>

<h1 class="center-align">{{helloUser}}</h1>

            <div class="singleEstimate" ng-repeat="result in results">
                  <h5>{{ result[0] }}</h5>
                  <p>{{ result[1] }}<p>
                  <input type="text" placeholder="How many days will this feature take?" ng-model="estimate"  />
                  <button class="btn estimate" ng-click="addEstimate()" feature-id="{{ result[2] }}">Add Estimate</button>
                  <br />
                  <br />

                  {{estimate}}
            </div>
