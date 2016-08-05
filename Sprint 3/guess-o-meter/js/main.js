
//when page is ready run this code
$(document).ready(function() {

    //when .openBtn is clicked project id for that project is stored into the session
    $('.openBtn').click(function() {
        var projectID = $(this).attr('project-id');
        $.post('includes/ajax/checkIfSurveyIsRunning.php', {
            projectID: projectID
        }, function(data) {
            if(data != "null") {
                alert("This survey is currently running, You must close this survey before you edit the project.");
            } else {
                $.post('includes/ajax/setSession.php', {
                    projectID: projectID
                }, function(data) {
                    window.location = "features";
                });
            }
        });
    });

    //When .statusBtn is clicked status is changed and toggled to its oposite
    //also the database is changed as well.
    $('.statusBtn').click(function() {
        var projectID = $(this).attr('project-id');
        var status = $('.statusBtn[project-id = "' + projectID + '"]').text();

            $.post('includes/ajax/updateStatus.php', {
                projectid: projectID,
                status: status
            }, function(data) {
                window.location = "survey";
                if (status == "Start") {
                    window.location = "survey";
                } else {

                    $.post('includes/ajax/setSession.php', {
                        projectID: projectID
                    }, function(data) {
                        window.location = "results";
                    });
                }
            });
    });

    //when sumbit button on the features page is called it summites the page and stores
    //all the data into the datanase.
    $('#submit').click(function() {
        var featureName = $('#featureName').val();
        var featureDesc = $('#featureDesc').val();
        //Adds all features and posts it through ajax and stored in the database. (working on changing this)
        if(featureName){
            $.post('includes/ajax/insertFeatures.php', {
                featureName: featureName,
                featureDesc: featureDesc
            }, function(data) {
                window.location.reload();
            });
        }
    });

//When a add button in survey page is added it gets the value of the surveyName and surveyDesc and add it to db
	 $('#newSurvey').click(function() {
        var surveyName = $('#surveyName').val();
		var surveyDesc = $('#surveyDesc').val();
       	

        
        if(surveyName){
            $.post('includes/ajax/insertSurvey.php', {
                surveyName: surveyName,
                surveyDesc: surveyDesc
				
            }, function(data) {
                window.location.reload();
            });
        }
    });
    //when the delete button is clicked deletes feature from database
    $('.delete').click(function() {
        var featureID = $(this).attr('feature-id');
        $.post('includes/ajax/deleteFeature.php', {
            featureid: featureID
        }, function(data) {
            window.location.reload();
        });
    });

    //when deleteProject is clicked it deletes that project and all of its features from the database.
    $('.deleteProject').click(function() {
        var projectID = $(this).attr('project-id');
        $.post('includes/ajax/deleteProject.php', {
            projectid: projectID
        }, function(data) {
            window.location.reload();
        });
    });

    //for the login pop-up box
    $('.modal-trigger').leanModal();

    
    //
    $('#login-button').click(function() {
        //to get username
        var username = $('#icon_prefix').val();
        //to get password
        var password = $('#icon_password').val();
        if (username && password) {
        $.post('includes/ajax/setUser.php', {
            user: username,
            pass: password
            }, function(data) {
                username = "";
                password = "";
                window.location = 'admin';
                });
        }
<<<<<<< HEAD
        
        });
    
=======

    });

    //when this button is clicked user is logged out of the application
>>>>>>> origin/master
    $('#logout').click(function() {
        $.post('includes/ajax/destroySession.php', {}, function(data) {
            window.location.reload();
               });
    });

    //closes the survey and redirects user to finished survey page
    $('#stop-survey').click(function () {
        $.post('includes/ajax/stop-survey.php', {}, function (data) {
            window.location = "finished-survey";
        });
    });
}); //document.ready
