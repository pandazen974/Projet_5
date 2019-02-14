"use strict";
var datatable = {

    init: function () {
       

$(document).ready(function () {

    $('#table_id').DataTable({
        
        
        language: {

            url: "/Projet_5/public/js/french.json"

        }
        

    });

});

    }
    };
    
    datatable.init();
