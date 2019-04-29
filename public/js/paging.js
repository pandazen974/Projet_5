var paging={
 pagingblock :document.getElementById("paging"),
            init:function(){
            document.getElementById('page1').setAttribute('class','active-page paging-link');
            var pages=this.pagingblock.getElementsByClassName("paging-link");
            for (var i = 0; i < pages.length; i++) {
            pages[i].addEventListener("click", function() {
             var current = document.getElementsByClassName("active-page");
            current[0].className = current[0].className.replace("active-page", "");
                this.className += " active-page";
            });
} 
}
};
paging.init();

