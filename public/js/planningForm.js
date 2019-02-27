var planning={

init:function(){
jQuery.datetimepicker.setLocale('fr');

jQuery('.datetimepicker').datetimepicker({
 i18n:{
  fr:{
   months:[
    'Janvier','Février','Mars','Avril',
    'Mai','Juin','Juillet','Aôut',
    'Septembre','Octobre','Novembre','Decembre'
   ],
   dayOfWeek:[
    "Dim", "Lun", "Mar", "Mer", 
    "Jeu", "Ven", "Sam"
   ]
  }
 },
 timepicker:true,
 startDate:'+2019/01/01'
});

}

};

planning.init();