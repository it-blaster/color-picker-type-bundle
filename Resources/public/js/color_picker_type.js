$(function() {
    var $inputs = $('input.color-picker-control');

    $inputs.each(function(i, el) {
        $(el)
            .iris($(el).data('options'))
            .focus(function() {
                $(this).iris('show');
            });
    });

    $('body').click(function(e) {
        if (!$(e.target).closest('.color-picker-control').length && !$(e.target).closest('.iris-picker').length) {
            $inputs.iris('hide');
        }
    });
});