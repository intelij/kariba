$(function () {

    var amount;

    $('.rate').attr('type', 'hidden');

    $("#bootstrap-slider").slider({
        min: 1,
        max: 1500,
        scale: 'logarithmic',
        step: 10
    });

    $("#bootstrap-slider").on("slide", function (slideEvt) {
        $("#sliderValue").text(slideEvt.value);
        amount = slideEvt.value;
    });

    today = new Date();

    $('#dp1').datepicker({
        minDate: today
    }).on('changeDate', function (e) {
        newDate = new Date($('#dp1').val());

        var dateFormat = $('#dp1').val(); //$('#dp1').datepicker().val();

        var date1 = new Date();
        var date2 = new Date(dateFormat);

        //$(this).datepicker('hide');

        $('.datepicker').toggle();

        days = dateDiffInDays(date1, date2);

        if (isNaN(amount))
        {
            amount = 350;
        }
        repayment = calculatePayableInterest(amount, days);

        $('#hidden_interest').val(repayment);
        $('#hidden_terms').val(days);

        console.log(repayment);
        console.log(days);
        console.log(dateFormat);

//            $('#repayment-date').text(date2.toDateString());
        $('.loan-amount').text(amount);
        $('.loan-interest').text(repayment);
        $('.loan-total').text(amount+repayment);
        $('#loan-days').text(days);
        $('#hidden_terms').val(days);
        $('#dp1').val(date2.toDateString());
        $('input:text#proposed_payment_date').val(dateFormat);
        $('input:text#repayment_date').val(dateFormat);


    });

//    Insert member status form field
//    $('div.accrue-field-amount').replacewith('<div class="accrue-field-amount"><p><label>Loan Amount:</label><input type="text" class="amount" value="£1500"></p></div><div class="accrue-field-amount"><p><label>Loan Amount:</label><input type="text" class="amount" value="£1500"></p></div>');


// multi step form

    /*
     Form
     */
    $('.registration-form fieldset:first-child').fadeIn('slow');

    $('.registration-form input[type="text"], .registration-form input[type="password"], .registration-form textarea').on('focus', function() {
        $(this).removeClass('input-error');
    });

    // next step
    $('.registration-form .btn-next').on('click', function() {
        var parent_fieldset = $(this).parents('fieldset');
        var next_step = true;

        parent_fieldset.find('input[type="text"], input[type="password"], textarea').each(function() {
            if( $(this).val() == "" ) {
                $(this).addClass('input-error');
                next_step = false;
            }
            else {
                $(this).removeClass('input-error');
            }
        });

        if( next_step ) {
            parent_fieldset.fadeOut(400, function() {
                $(this).next().fadeIn();
            });
        }

    });

    // previous step
    $('.registration-form .btn-previous').on('click', function() {
        $(this).parents('fieldset').fadeOut(400, function() {
            $(this).prev().fadeIn();
        });
    });

    // submit
    $('.registration-form').on('submit', function(e) {

        $(this).find('input[type="text"], input[type="password"], textarea').each(function() {
            if( $(this).val() == "" ) {
                e.preventDefault();
                $(this).addClass('input-error');
            }
            else {
                $(this).removeClass('input-error');
            }
        });

    });


}());

var _MS_PER_DAY = 1000 * 60 * 60 * 24;

// a and b are javascript Date objects
function dateDiffInDays(a, b) {
    // Discard the time and time-zone information.
    var utc1 = Date.UTC(a.getFullYear(), a.getMonth(), a.getDate());
    var utc2 = Date.UTC(b.getFullYear(), b.getMonth(), b.getDate());

    return Math.floor((utc2 - utc1) / _MS_PER_DAY);
}

function calculatePayableInterest(amount, days) {
    return days * amount * 0.5 / 100;
}

//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
    if(animating) return false;
    animating = true;

    current_fs = $(this).parent();
    next_fs = $(this).parent().next();

    //activate next step on progressbar using the index of next_fs
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

    //show the next fieldset
    next_fs.show();
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale current_fs down to 80%
            scale = 1 - (1 - now) * 0.2;
            //2. bring next_fs from the right(50%)
            left = (now * 50)+"%";
            //3. increase opacity of next_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({
                'transform': 'scale('+scale+')',
                'position': 'absolute'
            });
            next_fs.css({'left': left, 'opacity': opacity});
        },
        duration: 800,
        complete: function(){
            current_fs.hide();
            animating = false;
        },
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
    });
});

$(".previous").click(function(){
    if(animating) return false;
    animating = true;

    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();

    //de-activate current step on progressbar
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

    //show the previous fieldset
    previous_fs.show();
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale previous_fs from 80% to 100%
            scale = 0.8 + (1 - now) * 0.2;
            //2. take current_fs to the right(50%) - from 0%
            left = ((1-now) * 50)+"%";
            //3. increase opacity of previous_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({'left': left});
            previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
        },
        duration: 800,
        complete: function(){
            current_fs.hide();
            animating = false;
        },
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
    });
});

$(".submit").click(function(){
    return false;
})

function values() {
    return 'loan_amount=XXX&terms=YYY&apr=45';
}

// A $( document ).ready() block.
$( document ).ready(function() {

    $('div.accrue-field-amount').html('<div class="accruefieldamount"><p><label>Member Status</label><input type="text" class="platinum-member" value="Platinum Member" readonly></p></div><div class="accrue-field-amount"><p><label>Loan Amount:</label><input type="text" class="amount" value="£1500"></p></div>');
    $('input.term').prop('type', 'number');

    $(".more").toggle(function(){
        $(this).text("[less ...]").siblings(".complete").show();
    }, function(){
        $(this).text("[read more ...]").siblings(".complete").hide();
    });

});