
var addMoreCounter = 1;
var project_Id = '';
$( document ).ready(function() {


    $('.openBtn').click(function(){
        project_Id = $(this).attr('project-id');

        $.post('includes/ajax/setSession.php', {projectid:project_Id}, function(data){
            window.location = "features.php#/" + project_Id + "";
        });
    });

    $('#addmore').click(function(){

        var input = '<div class="' + addMoreCounter + ' valign-wrapper">' +
                        '<div class="card col s7 offset-s1">' +
                            '<input placeholder="Add Feature Name:" class="featureName" type="text" />' +
                            '<textarea placeholder="Add Feature Description:" class="featureDesc"></textarea>' +
                        '</div>' +
                        '<button class="btn col s2 offset-s1 removeInput valign" counter="' + addMoreCounter + '">Remove</button>' +
                    '</div>';

        $('#dynamicInput').append(input);

        addMoreCounter++;

        $('.removeInput').click(function(){
            var thisDiv = $(this).attr('counter');

            $('.' + thisDiv +'').remove();

        });

    });

    $('.removeInput').click(function(){
        var thisDiv = $(this).attr('counter');

        $('.' + thisDiv +'').remove();

    });




    $('#submit').click(function(){

        var allFeatureNameInputs = $('.featureName').map(function(){

            if($(this).val()){
                return $(this).val();
            }

        }).get();

        var allFeatureDescInputs = $('.featureDesc').map(function(){


                return $(this).val();


        }).get();

        $.post('includes/ajax/insertFeatures.php', {featuresNameArr:allFeatureNameInputs, featuresDescArr:allFeatureDescInputs}, function(data){
            window.location.reload();
        });
    });

    $('#delete').click(function(){
        var feature_Id = $(this).attr('feature-id');

        $.post('includes/ajax/deleteFeature.php', {featureid:feature_Id}, function(data){
            window.location.reload();
        });
    });




});//document.ready
