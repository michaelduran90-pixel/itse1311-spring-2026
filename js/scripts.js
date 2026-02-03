
// A $( document ).ready() block.
$( document ).ready(function() {

    $('#myBTN').on('click', goToMyFunction);

    function goToMyFunction() {

        var myName = $('#myName').val();
        alert(myName);
    }

    //$('.myClass').hide();
    $('.myClass').css("color", "purple");

});
