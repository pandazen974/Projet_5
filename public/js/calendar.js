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
            allDaySlot:false,
            minTime:'07:00:00',
            maxTime:'20:00:00',
            eventSources: [
            // your event source
            {
                url: '/Projet_5/?action=feedGroupOneEvents', // use the `url` property
                color: 'rgba(219, 10, 91, 1)',    // an option!
                textColor: 'black'  // an option!
            },
            {
                url: '/Projet_5/?action=feedGroupTwoEvents', // use the `url` property
                color: 'rgba(77, 5, 232, 1)',    // an option!
                textColor: 'black'  // an option!
            },
            {
                url: '/Projet_5/?action=feedGroupThreeEvents', // use the `url` property
                color: 'rgba(240, 255, 0, 1)',    // an option!
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
    
    if($('#status').text()!=="Etudiant"){
        $('.fc-addButton-button').css('visibility','visible');
    }

    
    
    
    
  }
  
  
  

    
};

edt.init();