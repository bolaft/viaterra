$(document).ready(function() {
    $(document).on('click', '.translator', function() {
		var text = $(this).closest('tr').nextAll(':has(.fr):first').find('.fr').find('input').val();
		var clicked = this;
        $.getJSON('translator.php?text=' + text + '&to=en', function(data) {
            $(clicked).closest('tr').nextAll(':has(.en):first').find('.en').find('input').val(data);
        });

        $.getJSON('translator.php?text=' + text + '&to=es', function(data) {
            $(clicked).closest('tr').nextAll(':has(.es):first').find('.es').find('input').val(data);
        });

        $.getJSON('translator.php?text=' + text + '&to=de', function(data) {
            $(clicked).closest('tr').nextAll(':has(.de):first').find('.de').find('input').val(data);
        });
    });

    $(document).on('click', '.translator_textarea', function() {
		var text = $(this).closest('tr').nextAll(':has(.fr):first').find('.fr').find('textarea').val();
		var clicked = this;
        $.getJSON('translator.php?text=' + text + '&to=en', function(data) {
            $(clicked).closest('tr').nextAll(':has(.en):first').find('.en').find('textarea').val(data);
        });

        $.getJSON('translator.php?text=' + text + '&to=es', function(data) {
            $(clicked).closest('tr').nextAll(':has(.es):first').find('.es').find('textarea').val(data);
        });

        $.getJSON('translator.php?text=' + text + '&to=de', function(data) {
            $(clicked).closest('tr').nextAll(':has(.de):first').find('.de').find('textarea').val(data);
        });
    });
});
