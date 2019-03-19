/* global modal */

var edt=
{
    


    init: function () {
            
          $('#calendar').fullCalendar({
            locale:'fr',
            theme:true,
            columnHeaderFormat:'ddd D/MM',
            themeSystem: 'jquery-ui',
                themeButtonIcons:{
                prev: 'circle-triangle-w',
                next: 'circle-triangle-e',
                prevYear: 'seek-prev',
                nextYear: 'seek-next'
                },
            defaultView: 'agendaWeek',
            titleFormat:'D MMMM YYYY',
            start:'07:00:00',
            allDaySlot:false,
            minTime:"07:00",
            maxTime:"20:00",
            eventSources: [
            // your event source
            {
                url: '/Projet_5/?action=feedEvents', // use the `url` property
                color: 'rgba(1, 50, 67, 1)',    // an option!
                textColor: 'black'  // an option!
            }
            
            

    // any other sources...

  ],
  eventClick: function(calEvent) {

    
    
    
    $("#title").text(calEvent.title);
    $("#modal").show();
    document.getElementById('edit_link').href= 'http://localhost/Projet_5/index.php?action=openUpdatePlanningForm&id='+calEvent.id;
    document.getElementById('delete_link').href= 'http://localhost/Projet_5/index.php?action=erasePlanning&id='+calEvent.id;
  },
  
  eventMouseover: function() {
    $(this).css('border', 'solid 2px rgba(107, 185, 240, 1)'); 
    $(this).css('background-color', 'rgba(37, 116, 169, 1)');
    $(this).css('cursor', 'pointer');  
  },
  
  eventMouseout: function() {
    $(this).css('border', 'transparent');  
    $(this).css('background-color', 'rgba(1, 50, 67, 1)');
    
  },
  
  customButtons: {
    addButton: {
      text: '+Ajouter',
      click: function() {
        window.open('http://localhost/Projet_5/index.php?action=openPlanningForm');
      }
    }
  },
  header: {
    left: 'prev,next today addButton',
    center: 'title',
    right: 'month,agendaWeek'
  }
  
  
  
  
      // other view-specific options here
    
  });
    window.onclick = function(event) {
        var modal = document.getElementById('modal');
  if (event.target === modal) {
    $("#modal").hide();
  }
    };
    
    $( "#close" ).click(function() {
    $("#modal").hide();
    });
    
    
    
    
    
  }
  
  
  

    
};

edt.init();