$(document).ready(function(){

    $('.planning_col_item').each(function() {
        var start   = "calc(" + ($(this).data('start') - 8) * 8  + "% + 5px)";
        var length  = "calc(" + ($(this).data('end') - $(this).data('start')) * 8 + "% - 5px)";

        $(this).css("top", start);
        $(this).css("height", length);
    });
});