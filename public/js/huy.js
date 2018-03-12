$(document).ready(function() {
    //load default data
    dataGrid(0,6);
    //click tree event
    $(document).on('click', '.jstree-anchor', function(e) {
        e.preventDefault();
        delete $.ajaxSettings.headers['X-CSRF-TOKEN'];
        //get data Grid
        dataGrid($(this).attr('gid'),$(this).attr('nodeid'));
    });

    $('#date-mask-input').mask("00/00/0000", {placeholder: "__/__/____"});
    $('#time-mask-input').mask('00:00:00');
    $('#date-and-time-mask-input').mask('00/00/0000 00:00:00', {placeholder: "__/__/___ _:__:__"});
    $('#zip-code-mask-input').mask('00000-000', {placeholder: "_____-___"});
    $('#money-mask-input').mask('000.000.000.000.000,00', {reverse: true});
    $('#phone-mask-input').mask('0000-0000', {placeholder: "____-____"});
    $('#phone-with-code-area-mask-input').mask('(00) 0000-0000', {placeholder: "(_) ___-____"});
    $('#us-phone-mask-input').mask('(000) 000-0000', {placeholder: "(__) __-____"});
    $('#ip-address-mask-input').mask('099.099.099.099');
    $('#mixed-mask-input').mask('AAA 000-S0S');
});