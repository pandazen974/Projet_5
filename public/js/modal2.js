var modaltwo={
modal:document.getElementById('myModaltwo'),

// Get the button that opens the modal
push:$('.push'),

// Get the <span> element that closes the modal
shut:document.getElementsByClassName("shut")[0],

    init:function(){
    var _this=this;
    this.loadPushButton(_this);
    this.closeModal(_this);
    this.clickOut(_this);
    },
// When the user clicks on the button, open the modal
openModal:function(_this) {
    this.push.click(function(){
  _this.modal.style.display = "block";
});
},

// When the user clicks on <span> (x), close the modal
closeModal:function(_this) {
    _this.shut.addEventListener('click',function(event){
  _this.modal.style.display = "none";
});
},

// When the user clicks anywhere outside of the modal, close it
clickOut:function(_this){
    window.addEventListener('click',function(event) {
  if (event.target === _this.modal) {
    _this.modal.style.display = "none";
  }
});
},

loadPushButton:function(_this){
    window.addEventListener('load',function(event){
       _this.openModal(_this);
    });
}
};

modaltwo.init();
 