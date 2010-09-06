$(function(){
    $('#BuscadorPais').change(function(){
        $('.pais-loader').show();
        $.getJSON("/departamentos/getAll/"+$(this).val(), {},
        function(data,status){
            $('#BuscadorDepartamento').empty();
            $.each(data.items, function(id, nombre){
                $('#BuscadorDepartamento').append($("<option></option>").attr("value", id).text(nombre));
            });
            if (status == "success") {
                $('.pais-loader').hide();
                $('#dptos').show();
            }
        });
    });

    $('#BuscadorDepartamento').change(function(){
        $('.dpto-loader').show();
        $.getJSON("/ciudades/getAll/"+$(this).val(), {},
        function(data,status){
            $('#BuscadorCiudad').empty();
            $.each(data.items, function(id, nombre){
                $('#BuscadorCiudad').append($("<option></option>").attr("value", id).text(nombre));
            });
            if (status == "success"){
                $('.dpto-loader').hide();
                $('#ciudades').show();
            }
        });
    });

    $('#BuscadorCiudad').change(function(){
        $('.ciudad-loader').show();
        $.getJSON("/zonas/getAll/"+$(this).val(), {}, 
            function(data, status){
                $('#BuscadorZona').empty();
                $.each(data.items, function(id, nombre){
                    $('#BuscadorZona').append($("<option></option>").attr("value", id).text(nombre));
                });
                if(status == "success") {
                    $('.ciudad-loader').hide();
                    $('#zonas').show();
                }
            }
        );
    });

    $('#BuscadorSitio').change(function(){
        switch($(this).val()){
            case '1':
                $('#precios').show();
                if ($('BuscadorSubcat').val() == 1 || $('BuscadorSubcat').val() == 3) {
                    $('#alcobas').show();
                }
                $('#capacidad').hide();
                break;
            case '2':
                $('#precios').show();
                if ($('BuscadorSubcat').val() == 1 || $('BuscadorSubcat').val() == 3) {
                    $('#alcobas').show();
                }
                $('#capacidad').hide();
                break;
            case '3':
                $('#precios').hide();
                $('#alcobas').hide();
                $('#capacidad').show();
                break;
            default:
                $('#precios').hide();
                $('#alcobas').hide();
                $('#capacidad').hide();
                break;
        }
    });

    $('#BuscadorSubcat').change(function(){
        switch($(this).val()){
            case '1':
            case '3':
            case '5':
                $('#alcobas').show();
                $('#modelo').hide();
                break;
            case '2':
            case '4':
                $('#alcobas').hide();
                $('#modelo').show();
                break;
            default:
                $('#alcobas').hide();
                $('#modelo').hide();
                break;
        }
    });
});
