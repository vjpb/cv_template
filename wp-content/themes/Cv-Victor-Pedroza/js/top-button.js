var element = document.querySelector('#go-top');
   
   window.onscroll = function () { 
        if(this.scrollY >= 140){
            element.classList.remove("my-button");

        }else{
            element.classList.add("my-button")
        } 
    }
