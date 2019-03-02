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
            maxTime:"18:00",
            eventSources: [
            // your event source
            {
                url: '/Projet_5/?action=feedEvents', // use the `url` property
                color: 'yellow',    // an option!
                textColor: 'black'  // an option!
            }

    // any other sources...

  ]
      // other view-specific options here
    
  });
 
  
  }
  
  
  

    
};

edt.init();