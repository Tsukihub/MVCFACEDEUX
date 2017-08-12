 $(document).ready(function(){
    $('.customer-logos').slick({
         slidesToShow: 6,
         slidesToScroll: 1,
         autoplay: true,
         autoplaySpeed: 1000,
         arrows: false,
         dots: false,
        pauseOnHover: false,
         responsive: [{
            breakpoint: 768,
             settings: {
                 slidesToShow: 4
            }
         }, {
            breakpoint: 520,
             settings: {
                 slidesToShow: 3
             }
         }]
     });
 });

 function affichage(id){
   var div = document.getElementById(id);
   if(div.style.display == "none") {
     div.style.display = "block";
   } else {
     div.style.display = "none";
   }
 }

 function affichageFooter(id){
 	var div = document.getElementById(id);
 	if (window.matchMedia("(max-width: 640px)").matches) {
   		if(div.style.display == "none") {
    			div.style.display = "block";
   		}else {
     		div.style.display = "none";
   		} 
	


 }
}

 function imageaftersubmit(path, name){
  
     

  }
function fillfield(nomimage){
  $('.actions_img_name').val(nomimage);
  $('.nomimage').html(nomimage);
 
   
}
function fillfieldfromfield(){
  var splitedpath = $('.actions_img').val();
  if(splitedpath !== ""){
  splitedpath = splitedpath.split("\\");
  var path = splitedpath[splitedpath.length-1];
  $('.actions_img_name').val(path);
  }


 
}