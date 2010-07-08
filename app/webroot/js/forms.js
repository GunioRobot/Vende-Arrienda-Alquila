$(function(){

$.fn.bindStep.defaults.nextBtn = '../img/arrow_right_48.png';
$.fn.bindStep.defaults.prevBtn = '../img/arrow_left_48.png';

var step1 = $('#step1');
var step2 = $('#step2');
var step3 = $('#step3');
var step4 = $('#step4');
var step5 = $('#step5');

step1.bindStep(step2);
step2.bindStep(step3);
step3.bindStep(step4);
step4.bindStep(step5);

$('#step1').show();

$('#venta').show();
$('#arrienda').hide();
$('#alquila').hide();

$('#InmueblSiteId').change(function(){
    $('.loader-site').show();
    if ($(this).val() == 1) {
        $('#cat1').val(2);
        $('#venta').show();
        $('#arrienda').hide();
        $('#alquila').hide();

    }

    if ($(this).val() == 2) {
        $('#cat1').val(1);
        $('#arrienda').show();
        $('#venta').hide();
        $('#alquila').hide();
    }

    if ($(this).val() == 3) {
        $('#cat1').val(1);
        $('#alquila').show();
        $('#venta').hide();
        $('#arrienda').hide();
    }

    $('#cat1').trigger('change');
    $('.loader-site').hide();
});

$('#cat1').change(function(){
    $('.loader-cat1').show();
    $.getJSON("/subcategorias/getAll/" + $(this).val(),
        { },
        function(data, status){
            $("#cat2").empty();
            $.each(data.items, function(id, nombre){
                $("#cat2").append($("<option></option>").attr("value", id).text(nombre));
            });

            if(status == "success") {
                $('.loader-cat1').hide();
            }
        });

    if($(this).val() != 2) {
        $('.impuestos').hide();
        $('#vehiculos').hide();
        $('#inmuebles').show();
        $('#cinmuebles').show();
    } else {
        $('.impuestos').show();
        $('#vehiculos').show();
        $('#inmuebles').hide();
        $('#cinmuebles').hide();

    }
});

$('#cat2').change(function(){
    if ($(this).val() == '3') $('.admon').hide();

});

$('#pais').change(function(){

    $('.loader-pais').show();

    if ($("#dpto option").size() > 1) {
        $("#input_dpto").hide();
        $("#dpto").empty();
    }

    $.getJSON("/departamentos/getAll/" + $(this).val(), {},
        function(data, status){
            $.each(data.items, function(id, nombre){
                $("#dpto").append($("<option></option>").attr("value", id).text(nombre));
            });

            if(status == "success") {
                $('.loader-pais').hide();
                $("#input_dpto").show();
            }
    });
});

$('#dpto').change(function(){

    $('.loader-dpto').show();

    if ($("#ciudad option").size() > 1) {
        $("#input_ciudad").hide();
        $("#ciudad").empty();
    }

    $.getJSON("/ciudades/getAll/" + $(this).val(), {},
        function(data, status){
        $.each(data.items, function(id, nombre){
            $("#ciudad").append($("<option></option>").attr("value", id).text(nombre));
        });

        if(status == "success") {
            $('.loader-dpto').hide();
            $("#input_ciudad").show();
        }
    });
});

$('#ciudad').change(function(){
    $('.loader-ciudad').show();
    $.getJSON("/zonas/getAll/" + $(this).val(), {},
        function(data, status){
        $('#zona').empty();
        $.each(data.items, function(id, nombre){
            $("#zona").append($("<option></option>").attr("value", id).text(nombre));
        });

        if (status == "success") {
            $("#input_zona").show();
            $("#input_barrio").show();
            $("#input_direccion").show();
            $('.loader-ciudad').hide();
        }
    });
});

$('#ccerrado').change(function(){
    if ($(this).is(':checked')) {
        $("#nconjunto").show();
        $("#porteria").show();
    } else {
        $("#nconjunto").hide();
        $("#porteria").hide();
    }
});


});

