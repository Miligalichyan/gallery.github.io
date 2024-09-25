
 
 const galleryItems=document.querySelector(".gallery-items").children;
 const prev=document.querySelector(".prev");
 const next=document.querySelector(".next");
 const page=document.querySelector(".page-num");
 const maxItem=1;
 let index=1;
  
  const pagination=Math.ceil(galleryItems.length/maxItem);
  console.log(pagination)

  prev.addEventListener("click",function(){
    index--;
    check();
    showItems();
  })
  next.addEventListener("click",function(){
  	index++;
  	check();
    showItems();  
  })

  function check(){
  	 if(index==pagination){
  	 	next.classList.add("disabled");
  	 }
  	 else{
  	   next.classList.remove("disabled");	
  	 }

  	 if(index==1){
  	 	prev.classList.add("disabled");
  	 }
  	 else{
  	   prev.classList.remove("disabled");	
  	 }
  }

  function showItems() {
  	 for(let i=0;i<galleryItems.length; i++){
  	 	galleryItems[i].classList.remove("show");
  	 	galleryItems[i].classList.add("hide");


  	    if(i>=(index*maxItem)-maxItem && i<index*maxItem){
  	 	  // if i greater than and equal to (index*maxItem)-maxItem;
  		  // means  (1*8)-8=0 if index=2 then (2*8)-8=8
          galleryItems[i].classList.remove("hide");
          galleryItems[i].classList.add("show");
  	    }
  	    page.innerHTML=index;
  	 }

  	 	
  }

  window.onload=function(){
  	showItems();
  	check();
  }

document.querySelector(".item1").addEventListener('click',f);
document.querySelector(".item2").addEventListener('click',f);
document.querySelector(".item3").addEventListener('click',f);
document.querySelector(".item4").addEventListener('click',f);
document.querySelector(".item5").addEventListener('click',f);
document.querySelector(".item6").addEventListener('click',f);
document.querySelector(".item7").addEventListener('click',f);
var x=0;
function f(){
	if(x%2==0){
		this.style.width='500px';
		this.style.height='500px';
		this.style.transition='all 1s ease';
		this.style.cursor = "zoom-out";
		
	}if(x%2==1){
		this.style.width='200px';
		this.style.height='200px';
		this.style.cursor = "zoom-in";
		
	}
	x++;
}


document.getElementById('getval').onchange = function (e){
    var file = e.target.files[0];

    var reader = new FileReader();
    reader.onloadend = function(){
        document.getElementById('add').style.backgroundImage = "url(" + reader.result + ")";
        document.getElementById('add').style.display = "inline";
    }
    if(file){
        reader.readAsDataURL(file);
    }
}

