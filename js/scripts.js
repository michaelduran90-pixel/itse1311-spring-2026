
// A $( document ).ready() block.
$( document ).ready(function() {

    $('#myBTN').on('click', goToMyFunction);

    function goToMyFunction() {
        alert('test');
    }

    //$('.myClass').hide();
    $('.myClass').css("color", "purple");

});
