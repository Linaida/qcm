/**
 * Created by Linda on 11/11/2015.
 */
function switch_div( next_div){
    var current_div = $('div.show');
    $(current_div).removeClass('show');
    $(current_div).removeClass('active');
    $(current_div).addClass('hide');

    $(next_div).removeClass('hide');
    $(next_div).addClass('show');
    $(next_div).addClass('active');
    $(document).resize()
}