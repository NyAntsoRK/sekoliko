/**
 * Javascript général
 */
$(function() {
    // Plugins select2
    $(".sk-select2").select2();

    /* Datetimepicker */
    $(".sk-datetimepicker").datetimepicker({
        locale: 'fr',
        format: 'DD/MM/YYYY HH:mm'
    });

    /* Datepicker */
    $(".sk-datepicker").datetimepicker({
        locale: 'fr',
        format: 'DD/MM/YYYY'
    });

    /* Confirmation suppression */
    $(document).on('click','.sk-delete-btn-custom, .sk-remove-elt', function(event) {
        if (!confirm('Etes vous sûr de vouloir supprimer ?'))
            return false;
    });
    $('form .sk-delete-btn').click(function(event) {
        var length_checked = $('[name="delete[]"]:checked').length;
        if (length_checked == 0) {
            alert('Veuillez sélectionner un élément à supprimer');
            return false;
        } else {
            if (!confirm('Etes vous sûr de vouloir supprimer ?'))
                return false;
        }
    });

    /* Supprimer la classe Error séléctionnée */
    $("input").focus(function() {
        $(this).parents('.form-group').removeClass('has-error');
    });
    $("select").focus(function() {
        $(this).parents('.form-group').removeClass('has-error');
    });
    $("textarea").focus(function() {
        $(this).parents('.form-group').removeClass('has-error');
    });

    /** reglage datepicker debut et fin sans heure */
    $('.sk-datetimepicker-debut').datetimepicker({
        format : 'DD/MM/YYYY',
        locale : 'fr',
        useCurrent: false,
    }).on('dp.change', function (e) {
        var min_date = new Date(e.date.valueOf());

        $('.sk-datetimepicker-fin').datetimepicker('minDate', min_date);
    });

    $('.sk-datetimepicker-fin').datetimepicker({
        format : 'DD/MM/YYYY',
        locale : 'fr',
        useCurrent: false,
    }).on('dp.change', function (e) {
        var max_date = new Date(e.date.valueOf());

        $('.sk-datetimepicker-debut').datetimepicker('maxDate', max_date);
    });

    /** reglage datepicker debut et fin avec heure */
    $('.sk-datetimepicker-datetime-debut').datetimepicker({
        format : 'DD/MM/YYYY H:mm',
        locale : 'fr',
        useCurrent: false,
        widgetPositioning:{
            horizontal: 'auto',
            vertical: 'bottom'
        }
    }).on('dp.change', function (e) {
        var min_date = new Date(e.date.valueOf());

        $('.sk-datetimepicker-datetime-fin').datetimepicker('minDate', min_date);
    });

    $('.sk-datetimepicker-datetime-fin').datetimepicker({
        format : 'DD/MM/YYYY H:mm',
        locale : 'fr',
        useCurrent: false,
        widgetPositioning:{
            horizontal: 'auto',
            vertical: 'bottom'
        }
    }).on('dp.change', function (e) {
        var max_date = new Date(e.date.valueOf());

        $('.sk-datetimepicker-datetime-debut').datetimepicker('maxDate', max_date);
    });

    /** reglage datepicker debut et fin avec heure additionnel user */
    $('.sk-datetimepicker-datetime-debut-usr-adt').datetimepicker({
        format : 'DD/MM/YYYY H:mm',
        locale : 'fr',
        useCurrent: true
    }).on('dp.change', function (e) {
        var min_date = new Date(e.date.valueOf());
        $('.sk-datetimepicker-datetime-fin-usr-adt').datetimepicker('minDate', min_date);

    });

    $('.sk-datetimepicker-datetime-fin-usr-adt').datetimepicker({
        format : 'DD/MM/YYYY H:mm',
        locale : 'fr',
        useCurrent: true
    }).on('dp.change', function (e) {
        var min_date = new Date(e.date.valueOf());
    });

    /** reglage datepicker debut et fin avec heure horaire de travaille */
    $('.sk-datetimepicker-date-debut-saison').datetimepicker({
        format : 'DD/MM/YYYY H:mm',
        locale : 'fr',
        useCurrent: true
    }).on('dp.change', function (e) {
        var min_date = new Date(e.date.valueOf());
        $('.sk-datetimepicker--date-fin-saison').datetimepicker('minDate', min_date);
        $('.sk-datetimepicker--date-fin-saison').datetimepicker({
            zIndex: 2048,
        });

    });

    $('.sk-datetimepicker--date-fin-saison').datetimepicker({
        format : 'DD/MM/YYYY',
        locale : 'fr',
        useCurrent: true
    }).on('dp.change', function (e) {
        var min_date = new Date(e.date.valueOf());
    });

    $('.sk-datetimepicker-heure-debut').datetimepicker({
        format : 'H:mm',
        locale : 'fr',
        useCurrent: true
    }).on('dp.change', function (e) {
        var min_date = new Date(e.date.valueOf());
        $('.sk-datetimepicker-heure-fin').datetimepicker('minTime', min_date);
    });

    $('.sk-datetimepicker-heure-fin').datetimepicker({
        format : 'H:mm',
        locale : 'fr',
        useCurrent: true
    }).on('dp.change', function (e) {
        var min_date = new Date(e.date.valueOf());
        $('.sk-datetimepicker-heure-debut').datetimepicker('minTime', min_date);
    });


    /** reglage datepicker simple avec heure */
    $('.sk-datetimepicker-attribution').datetimepicker({
        format : 'DD/MM/YYYY H:mm',
        locale : 'fr',
        useCurrent: false
    });

    /** reglage datepicker simple sans heure */
    $('.sk-datetimepicker-simple').datetimepicker({
        format : 'DD/MM/YYYY',
        locale : 'fr',
        useCurrent: false,
    });

    /** afficher le detail d un entite */
    $(document).on('click','.sk-show-details', function (e) {
        e.preventDefault();

        /** recuperer l url */
        var url_show = $(this).attr('href');

        /** afficher le popup avec le spinner */
        $('#id-show-entity').modal('show');

        /** mettre le titre du modal */
        var show_title = $(this).data('show-title');
        $('.sk-show-entity-title').html(show_title ? show_title : 'Visualisation');

        /** afficher le spinner avant le reponse */
        $('#id-show-content-body').html('<i class="fa fa-spinner fa-spin fa-2x sk-spiner"></i>');

        $.ajax({
            url: url_show,
            dataType: 'html',
            type: 'GET',
            success: function (response) {
                $('#id-show-content-body').html(response);
            }
        });
    });
});

/*
 * Mettre une erreur sur le champ spécifique
 */
function setErrorClass($this){
    $this.parents('.form-group').addClass('has-error');
}

/** mettre le champ requis et readonly */
var datepicker_selector = '.sk-datetimepicker-simple, .sk-datetimepicker-attribution, .sk-datetimepicker-datetime-fin';
datepicker_selector += ' .sk-datetimepicker-datetime-debut, .sk-datetimepicker-debut, .sk-datetimepicker-fin';
$(datepicker_selector).on('keydown paste', function(e){
    e.preventDefault();
});

$('form[data-toggle="validator"]').on('submit', function (e) {
    window.setTimeout(function () {
        var errors = $('.has-error')
        if (errors.length) {
            $(document).scrollTop(errors.offset().top)
        }
    }, 0)
});
$('.box-footer').addClass('text-right');
$('.box-footer').find('.btn').removeClass('pull-left');
$('.table').addClass('sk-table');
