$(document).ready(function(){
		
		setTimeout(function(){
				$(".google-form-iframe").contents().find("#ss-submit").on("click", function(){
					$(".google-form-iframe").hide();
					setTimeout(function(){
						try{
							$(".google-form-iframe").contents();
							$(".google-form-iframe").show();
						
						}catch(e){
							$(".success-msg").show();
							$(window).scrollTop(0);
						}
					},1000);
				});
				
				$(".iframe-cntr").height($(".google-form-iframe").contents().height());

		}, 1000);
});