
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

        var input = '<div class="' + addMoreCounter + '">' +
                        '<input placeholder="Add Feature:" class="features card col s7 offset-s1" type="text" />' +
                        '<button class="btn col s2 offset-s1 removeInput" counter="' + addMoreCounter + '">Remove</button>' +
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
        var allInputs = $('.features').map(function(){

            if($(this).val()){
                return $(this).val();
            }

        }).get();

        $.post('includes/ajax/insertFeatures.php', {featuresArr:allInputs}, function(data){
            window.location.reload();
        });
    });




});//document.ready
