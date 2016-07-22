var addMoreCounter = 1; //adds counter for the dynamic form builder.

var projectID = '';//golobalizing the projectID variable because it has 2 scopes

//when page is ready run this code
$(document).ready(function() {

    //when .openBtn is clicked project id for that project is stored into the session
    $('.openBtn').click(function() {
        projectID = $(this).attr('project-id');
        $.post('includes/ajax/setSession.php', {
            projectid: projectID
        }, function(data) {
            window.location = "features";
        });
    });

    //When .statusBtn is clicked status is changed and toggled to its oposite
    //also the database is changed as well.
    $('.statusBtn').click(function() {
        var projectID = $(this).attr('project-id');
        var status = $('.statusBtn[project-id = "' + projectID + '"]').text();

        $.post('includes/ajax/checkStatus.php', {}, function(data){
            var statusInfo = JSON.parse(data);


                $.post('includes/ajax/updateAdmin.php', {
                    projectid: projectID,
                    status: status
                }, function(data) {


                    window.location = "survey";

                            if(status == "Start"){
                                window.location = "survey";

                            } else {
                                window.location = "results";
                            }
                });

        });


    });

    //when sumbit button on the features page is called it summites the page and stores
    //all the data into the datanase.
    $('#submit').click(function() {

        var featureName = $('.featureName').val();
        var featureDesc = $('.featureDesc').val();

        //Adds all features and posts it through ajax and stored in the database. (working on changing this)
        $.post('includes/ajax/insertFeatures.php', {
            featureName: featureName,
            featureDesc: featureDesc
        }, function(data) {
            window.location.reload();
        });
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
    $('.deleteProject').click(function(){
        var projectID = $(this).attr('project-id');

        $.post('includes/ajax/deleteProject.php', {
            projectid: projectID
        }, function(data) {
            window.location.reload();
        });
    });



    //for the login pop-up box
    $('.modal-trigger').leanModal();


}); //document.ready
