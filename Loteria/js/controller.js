$(document).ready(function(){
    $('.game_button').click(function(){
        var clickBtnValue = $(this).val();
        var ajaxurl = './function.php',
        data =  {function2call: 'GenerateGameCard'};
        $.post(ajaxurl, data, function (response) {
            // Response div goes here.
            $('.game_card').html(response);
        });
    });
});


