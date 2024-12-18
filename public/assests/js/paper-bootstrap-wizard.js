// Paper Bootstrap Wizard Functions
searchVisible = 0;
transparent = true;

$(document).ready(function () {

    /*  Activate the tooltips      */
    $('[rel="tooltip"]').tooltip();

    // Wizard Initialization
    $('.wizard-card').bootstrapWizard({
        'tabClass': 'nav nav-pills',
        'nextSelector': '.btn-next',
        'previousSelector': '.btn-previous',
        /* 'lastSelector' :'.btn-finish' , */

        onNext: function (tab, navigation, index) {

            var $valid = $('.wizard-card form').valid();
            var current = index;
            var count = jQuery("#jqGrid_ass").jqGrid('getGridParam', 'records');
            var count_etab = jQuery("#jqGrid_etab").jqGrid('getGridParam', 'records');
            var count_dir = jQuery("#jqGrid_dir").jqGrid('getGridParam', 'records');
            var $total_steps = navigation.find('li:visible').length;
            var is_visible_assoc = $('.depend_list').is(":visible");
            var is_visible_fmr_assoc = $('.depend_ass').is(":visible");
            var is_visible_etab = $('.depend_list_etab').is(":visible");
            var is_visible_fmr_etab = $('.depend_form_etab').is(":visible");
            var is_visible_dir = $('.depend_list_dir').is(":visible");
            var is_visible_fmr_dir = $('.depend_form_dir').is(":visible");


            /* alert("total" + $total_steps + "etape" + current  ); */

            if (($total_steps == 9 && current == 4)) {

                if ((is_visible_assoc == true) && (count == 0)) {

                    $('#alt_list_none').slideDown('slow');

                    setTimeout(function () {

                        $('#alt_list_none').slideUp('slow');

                    }, 4000);

                    $validator.focusInvalid();
                    return false;

                } else if (is_visible_fmr_assoc == true) {


                    $('#alt_form_none').slideDown('slow');

                    setTimeout(function () {

                        $('#alt_form_none').slideUp('slow');

                    }, 4000);

                    return false;


                }
                else {

                    return true;

                }

            }

            if (($total_steps == 8 && current == 4) || ($total_steps == 9 && current == 5)) {


                if ((is_visible_etab == true) && (count_etab == 0)) {

                    $('#alt_list_none_etab').slideDown('slow');

                    setTimeout(function () {

                        $('#alt_list_none_etab').slideUp('slow');

                    }, 4000);

                    $validator.focusInvalid();
                    return false;

                } else if (is_visible_fmr_etab == true) {


                    $('#alt_form_none_etab').slideDown('slow');

                    setTimeout(function () {

                        $('#alt_form_none_etab').slideUp('slow');

                    }, 4000);

                    return false;


                }
                else {

                    return true;

                }


            }

            if (($total_steps == 8 && current == 5) || ($total_steps == 9 && current == 6)) {
                if ((is_visible_dir == true) && (count_dir == 0)) {
                    $('#alt_list_none_dir').slideDown('slow');
                    setTimeout(function () {
                        $('#alt_list_none_dir').slideUp('slow');
                    }, 4000);
                    $validator.focusInvalid();
                    return false;
                } else if (is_visible_fmr_dir == true) {
                    $('#alt_form_none_dir').slideDown('slow');
                    setTimeout(function () {
                        $('#alt_form_none_dir').slideUp('slow');
                    }, 4000);
                    return false;
                }
                else {
                    return true;
                }
            }

            if (!$valid) {
                $validator.focusInvalid();
                return false;
            }
            $("html:not(:animated),body:not(:animated)").animate({scrollTop: $(".tab-content").offset().top}, 1200);


        },

        onInit: function (tab, navigation, index) {

            //check number of tabs and fill the entire row

            var $total = navigation.find('li').length;
            $width = 100 / $total;

            navigation.find('li').css('width', $width + '%');

        },

        onTabClick: function (tab, navigation, index) {

            var $valid = $('.wizard-card form').valid();

            if (!$valid) {
                return false;
            } else {
                return true;
            }

        },

        onTabShow: function (tab, navigation, index) {
            /* var $total = navigation.find('li').length; */
            var $total = navigation.find('li:visible').length;
            var $current = index + 1;

            var $wizard = navigation.closest('.wizard-card');
            var outerwidth = $('.col-md-10').width();
            // If it's the last tab then hide the last button and show the finish instead
            if ($current >= $total) {
                $($wizard).find('.btn-next').hide();
                $($wizard).find('.btn-finish').show();
            } else {
                $($wizard).find('.btn-next').show();
                $($wizard).find('.btn-finish').hide();
            }

            //update progress
            var move_distance = 100 / $total;
            move_distance = move_distance * (index) + move_distance / 2;

            $wizard.find($('.progress-bar')).css({width: move_distance + '%'});
            //e.relatedTarget // previous tab

            $wizard.find($('.wizard-card .nav-pills li.active a .icon-circle')).addClass('checked');

            $('#jqGrid_ass').setGridWidth(outerwidth);
            $('#jqGrid_etab').setGridWidth(outerwidth);
            $('#jqGrid_dir').setGridWidth(outerwidth);

        },

        onLast: function (tab, navigation, index) {


        }
    });


    // Prepare the preview for profile picture
    $("#wizard-picture").change(function () {
        readURL(this);
    });

    $('[data-toggle="wizard-radio"]').click(function () {
        wizard = $(this).closest('.wizard-card');
        wizard.find('[data-toggle="wizard-radio"]').removeClass('active');
        $(this).addClass('active');
        $(wizard).find('[type="radio"]').removeAttr('checked');
        $(this).find('[type="radio"]').attr('checked', 'true');
    });

    $('[data-toggle="wizard-checkbox"]').click(function () {
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            $(this).find('[type="checkbox"]').removeAttr('checked');
        } else {
            $(this).addClass('active');
            $(this).find('[type="checkbox"]').attr('checked', 'true');
        }
    });

    $('.set-full-height').css('height', 'auto');

});


//Function to show image before upload

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
        }
        reader.readAsDataURL(input.files[0]);
    }
}
