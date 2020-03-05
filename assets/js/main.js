$(document).ready(function(){
	var govs = document.querySelectorAll('.preview-list__content');
	var SlideTimer = 5; // seconds
	var SlideItemNumber = 0;

	__GovInit();


	function __GovInit(){
		for(var i = 0; i <= govs.length - 1; i++){
			govs[i].addEventListener('click', function(e){


			clear(); // очищаем все активные классы

			SlideItemNumber = parseInt(this.getAttribute('data-inc'));
			


			var text = this.querySelector('.list-content__text'),
			    name = this.querySelector('.list-text__name'),
			    container = this;

			 this.setAttribute('active',true);

			 $(text).toggleClass('list-content__text');
			 $(name).toggleClass('list-text__name');

			$(text).toggleClass('list-content__text_ACTIVE');
			$(name).toggleClass('list-text__name_ACTIVE');

			setPreview(SlideItemNumber);
					 
			});
		}

		// govs[0].click(); // Симулируем клик по первому элементу в списке

		_gov_Slide(govs);
	}

	function clear(){
		var gvs =  document.querySelectorAll('.preview-list__content');
		for(var i = 0; i <= gvs.length - 1; i++){

			if(gvs[i].getAttribute('active') == "true"){
				var text_ACTIVE = gvs[i].querySelector('.list-content__text_ACTIVE'),
			     	name_ACTIVE = gvs[i].querySelector('.list-text__name_ACTIVE');

			    $(text_ACTIVE).toggleClass('list-content__text_ACTIVE');
				$(name_ACTIVE).toggleClass('list-text__name_ACTIVE');

				$(text_ACTIVE).toggleClass('list-content__text');
				$(name_ACTIVE).toggleClass('list-text__name');	
			}
		}
	}

	function _gov_Slide(items){
	    var size = items.length;

	    setInterval(function(){

	    	if(SlideItemNumber == size){
	    		SlideItemNumber = 0;
	    	}
	    	
	    	if(items){
	    		govs[SlideItemNumber].click();
	    	}
	    	

	    	SlideItemNumber++;
	    },SlideTimer * 1000); 
	}

	function setPreview(data){
		var container = govs[data];


			var gName       = container.querySelector('.list-text__name_ACTIVE'),
			    gLevel      = container.querySelector('.list-text__info'),
			    previewURL  = container.getAttribute('data-bgp'),
			    URL 	    = container.getAttribute('data-id');



			    var BGP  =  document.querySelector('.preview__block .gov_BigPreview'),
					name =  document.querySelector('.preview__block .image-content__name'),
			        lvl  =  document.querySelector('.preview__block .image-content__info'),
			        link =  document.querySelector('.preview__block .bgp_link');

			    console.log(name.innerHTML);
		        BGP.src = previewURL;
		        name.innerHTML = gName.innerHTML;
		        lvl.innerHTML = gLevel.innerHTML;
		        link.href = URL;


	}
;
});