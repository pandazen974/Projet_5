var quickmenu={
    init:function(){
       $( ".arrow" ).click(function() {
       $( "#arrow-right" ).toggle();
       $( "#arrow-left" ).toggle();
       $( ".user" ).toggle();
       });
       
    }
    
    
};


quickmenu.init();