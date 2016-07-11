var addMoreCounter = 1;
var project_Id = '';
$(document).ready(function() {

    $('.openBtn').click(function() {
        project_Id = $(this).attr('project-id');
        $.post('includes/ajax/setSession.php', {
            projectid: project_Id
        }, function(data) {
            window.location = "features.php#/" + project_Id + "";
        });
    });

    $('.statusBtn').click(function() {
        var project_Id = $(this).attr('project-id');
        var status = $('.statusBtn[project-id = "' + project_Id + '"]').text();
        $.post('includes/ajax/updateAdmin.php', {
            projectid: project_Id,
            status: status
        }, function(data) {
            window.location.reload();
        });
    });

    $('#addmore').click(function() {
        var input = '<div class="' + addMoreCounter + ' valign-wrapper">' +
            '<div class="col s7 offset-s1">' +
            '<fieldset>' +
            '<legend>Add Feature:</legend>' +
            '<input placeholder="Add Feature Name:" class="featureName" type="text" />' +
            '<textarea placeholder="Add Feature Description:" class="featureDesc"></textarea>' +
            '</fieldset>' +
            '<br />' +
            '</div>' +
            '<button class="btn col s2 offset-s1 removeInput valign" counter="' + addMoreCounter + '">Remove</button>' +
            '</div>';
        $('#dynamicInput').append(input);
        addMoreCounter++;
        $('.removeInput').click(function() {
            var thisDiv = $(this).attr('counter');
            $('.' + thisDiv + '').remove();
        });
    });

    $('.removeInput').click(function() {
        var thisDiv = $(this).attr('counter');

        $('.' + thisDiv + '').remove();

    });

    $('#submit').click(function() {
        var allFeatureNameInputs = $('.featureName').map(function() {
            if ($(this).val()) {
                return $(this).val();
            }
        }).get();

        var allFeatureDescInputs = $('.featureDesc').map(function() {
            return $(this).val();
        }).get();

        $.post('includes/ajax/insertFeatures.php', {
            featuresNameArr: allFeatureNameInputs,
            featuresDescArr: allFeatureDescInputs
        }, function(data) {
            window.location.reload();
        });
    });

    $('.delete').click(function() {
        var feature_Id = $(this).attr('feature-id');

        $.post('includes/ajax/deleteFeature.php', {
            featureid: feature_Id
        }, function(data) {
            window.location.reload();
        });
    });

    $('.deleteProject').click(function(){
        var project_Id = $(this).attr('project-id');

        $.post('includes/ajax/deleteProject.php', {
            projectid: project_Id
        }, function(data) {
            window.location.reload();
        });
    });




}); //document.ready
