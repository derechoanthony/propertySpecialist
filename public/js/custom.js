$(document).ready(function() {

    $('[name=slct_propertyType]').click(function() {
        var property_type = $('[name=slct_propertyType]');
        var house = $('[name=slct_propertySubTypeHouse]');
        var lot = $('[name=slct_propertySubTypeLot]');
        var condominium = $('[name=slct_propertySubTypeCondominium]');
        var apartment = $('[name=slct_propertySubTypeApartment]');
        var commercial = $('[name=slct_propertySubTypeCommercial]');
        var subtype = $("#subtype");
        var section1 = $("#section1");
        var section2 = $("#section2"); //lot form id
        var section3 = $("#section3"); //commercial form id

        if ((property_type.val() == "house") || (property_type.val() == "apartment") || (property_type.val() == "condominium")) {
            section1.show();
            section2.hide();
            section3.hide();
        }
        if (property_type.val() == "lot") {
            section1.hide();
            section2.show();
            section3.hide();
        }
        if (property_type.val() == "commercial") {
            section1.hide();
            section2.hide();
            section3.show();
        }
        if (property_type.val() == "house") {
            house.show();
            lot.hide();
            condominium.hide();
            apartment.hide();
            commercial.hide();
            subtype.show();
        }
        if (property_type.val() == "lot") {
            house.hide();
            lot.show();
            condominium.hide();
            apartment.hide();
            commercial.hide();
            subtype.show();
        }
        if (property_type.val() == "apartment") {
            house.hide();
            lot.hide();
            condominium.hide();
            apartment.show();
            commercial.hide();
            subtype.hide();
        }
        if (property_type.val() == "commercial") {
            house.hide();
            lot.hide();
            condominium.hide();
            apartment.hide();
            commercial.show();
            subtype.show();
        }
        if (property_type.val() == "condominium") {
            house.hide();
            lot.hide();
            condominium.show();
            apartment.hide();
            commercial.hide();
            subtype.show();
        }
    });
    $('.yearselect').yearselect({
        selected: 2018,
        order: 'desc'
    });
});
$(document).ready(function() {
    $('#propertyList').DataTable({
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal({
                    header: function(row) {
                        var data = row.data();
                        return 'Details for ' + data[0] + ' ' + data[1];
                    }
                }),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                    tableClass: 'table'
                })
            }
        }
    });
});

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if ((charCode > 31 && charCode < 48) || charCode > 57) {
        return false;
    }
    return true;
}

function previewFile() {
    var preview = document.querySelector('[name=imgpreview]'); //selects the query named img
    var file = document.querySelector('input[type=file]').files[0]; //sames as here
    var reader = new FileReader();
    preview.classList.remove("hidden");

    reader.onloadend = function() {
        preview.src = reader.result;
    }

    if (file) {
        reader.readAsDataURL(file); //reads the data as a URL
    } else {
        preview.src = "";
    }
}