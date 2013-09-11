$(document).ready(function() {
    //alert(document.getElementById('txtLang').value);
    //attach a jQuery live event to the button
    //$('#loader').ajaxLoader();
    $('#translate').live('click', function() {
        $('#loader').ajaxLoader();
        var text = document.getElementById('fr').value;

        $.getJSON('translator.php?text=' + text + '&to=en', function(data) {
            if (data.translation) {
                $('#en').val($(data.translation).html());
            }

            $('#loader').ajaxLoaderRemove();
        });

        $.getJSON('translator.php?text=' + text + '&to=de', function(data) {
            if (data.translation) {
                $('#de').val($(data.translation).html());
            }

            $('#loader').ajaxLoaderRemove();
        });
    });
});