"use strict";
var datatable = {

    init: function () {
       

$(document).ready(function () {

    $('#table_id').DataTable({
        
        responsive:true,
        columns: [
        { responsivePriority: 1 },
        { responsivePriority: 2 },
        { responsivePriority: 11 },
        { responsivePriority: 12 },
        { responsivePriority: 3 },
        { responsivePriority: 4 },
        { responsivePriority: 5 },
        { responsivePriority: 6 },
        { responsivePriority: 7 },
        { responsivePriority: 8 },
        { responsivePriority: 9 },
        { responsivePriority: 10 }
        
        
    ],
        scrollX: false,
        language: {

            url: "/Projet_5/public/js/french.json"

        }
         

    });
    
    $('#account').DataTable({
        
        responsive:true,
        columns: [
        { responsivePriority: 1 },
        { responsivePriority: 7 },
        { responsivePriority: 6 },
        { responsivePriority: 2 },
        { responsivePriority: 3 },
        { responsivePriority: 4 },
        { responsivePriority: 5 }
        
    ],
        scrollX: false,
        language: {

            url: "/Projet_5/public/js/french.json"

        }
         

    });

});

    }
    };
    
    datatable.init();
