//when page is ready run this code
$(document).ready(function() {

    //Toggles the login and logout and the navigation
    $.post('includes/ajax/getLoginSession.php', { }, function(data) {
          if(data == "true"){
              $('.nav-handle').removeClass('hide-nav');
              $('#login-handle').addClass('hide-nav');
          } else {
              $('.nav-handle').addClass('hide-nav');
              $('#login-handle').removeClass('hide-nav');
    }});

    //when .openBtn is clicked project id for that project is stored into the session
    $('.edit-feature').click(function() {
        var projectid = $(this).attr('project-id');
        $.post('includes/ajax/checkIfSurveyIsRunning.php', {
            projectid: projectid
        }, function(data) {
            if(data != "null") {
                alert("This survey is currently running, You must close this survey before you edit the project.");
            } else {
                $.post('includes/ajax/setSession.php', {
                    projectid: projectid
                }, function(data) {
                    window.location = "features";
    });}});});

    //When .statusBtn is clicked status is changed and toggled to its oposite
    //also the database is changed as well.
    $('.status-btn').click(function() {
        var projectid = $(this).attr('project-id');
        var status = $('.statusBtn[project-id = "' + projectID + '"]').text();

            $.post('includes/ajax/updateStatus.php', {
                projectid: projectid,
                status: status
            }, function(data) {
                window.location = "survey";
                if (status == "Start") {
                    window.location = "survey";
                } else {
                    $.post('includes/ajax/setSession.php', {
                        projectid: projectid
                    }, function(data) {
                        window.location = "results";
    });}});});

    //when sumbit button on the features page is called it summites the page and stores
    //all the data into the datanase.
    $('#submit-feature').click(function() {
        var featureName = $('#featureName').val();
        var featureDesc = $('#featureDesc').val();
        //Adds all features and posts it through ajax and stored in the database. (working on changing this)
        if(featureName){
            $.post('includes/ajax/insertFeatures.php', {
                featureName: featureName,
                featureDesc: featureDesc
            }, function(data) {
                window.location.reload();
    });}});

    //when the delete button is clicked deletes feature from database
    $('.delete-feature').click(function() {
        var featureid = $(this).attr('feature-id');
        $.post('includes/ajax/deleteFeature.php', {
            featureid: featureid
        }, function(data) {
            window.location.reload();
    });});

    //when deleteProject is clicked it deletes that project and all of its features from the database.
    $('.delete-project').click(function() {
        var projectid = $(this).attr('project-id');
        $.post('includes/ajax/deleteProject.php', {
            projectid: projectid
        }, function(data) {
            window.location.reload();
    });});

	//when sumbit button on the surveys page is called it summites the page and stores
	    //all the data into the datanase.
	    $('#submit-survey').click(function() {
	        var surveyName = $('#surveyName').val();
	        var surveyDesc = $('#surveyDesc').val();
	        //Adds all features and posts it through ajax and stored in the database. (working on changing this)
	        if(surveyName){
	            $.post('includes/ajax/insertSurvey.php', {
	                surveyName: surveyName,
	                surveyDesc: surveyDesc
	            }, function(data) {
	                window.location.reload();
    });}});
    //for the login pop-up box
    $('.modal-trigger').leanModal();


    // Set up so that when you press enter the form is submitted
    $('#username-tbox, #password-tbox').keypress(function(e) {
        var keycode = e.keyCode || e.which;
        if(keycode == '13'){
            e.preventDefault();
            login();
        }
    });


    // when the login button is clicked calls the login function
    $('#login-button').click(function(e) {
        login();
    });

    function login() {
        //to get username
        var username = $('#username-tbox').val();
        //to get password
        var password = $('#password-tbox').val();

        if (username || password) {
        $.post('includes/ajax/setUser.php', {
            user: username,
            pass: password
            }, function(data) {
                if(data == "true"){
                    username = "";
                    password = "";
                    window.location = 'admin';
                } else {
                    alert("Invalid Credentials Please Try Again.");
                }
        });}}

    //when this button is clicked user is logged out of the application
    $('#logout').click(function() {
        $.post('includes/ajax/destroySession.php', {}, function(data) {
            window.location.reload();
               });
    });

    //closes the survey and redirects user to finished survey page
    $('#stop-survey').click(function () {
        $.post('includes/ajax/stopSurvey.php', {}, function (data) {
            window.location = "finished-survey";
        });
    });

    //handle for the project name to list of surveys for the specific project
    $('.project-link').click(function () {
        var projectid = $(this).attr('project-id');
        $.post('includes/ajax/setSession.php', {projectid: projectid}, function (data) {
            window.location = "surveys";
        });
    });
}); //document.ready
