var edt=
{
    


    init: function () {
            
          $('#calendar').fullCalendar({
            header: { center: 'agendaWeek' }, // buttons for switching between views
            
            
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