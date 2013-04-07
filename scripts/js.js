function toggle2(showHideDiv, switchTextDiv) {
			var ele = document.getElementById(showHideDiv);
			var text = document.getElementById(switchTextDiv);
			if(ele.style.display == "block") {
		    		ele.style.display = "none";
		  	}
			else {
				ele.style.display = "block";
			}
		}
		//MENU fade
		$(document).ready(function() {
			$("#menu").hover(
			  	function(e) { 
			      $("#navSide").stop().fadeIn("fast");
			    },
			    function(e) {
			      $("#navSide").stop().fadeOut("fast");    
			    }
			);
		});
		//QUOTE fade
		$(document).ready(function() {
			$("#quoteHeader").hover(
			    function(e) { 
			      $("#quoteAuthor").stop().fadeIn("slow");
			    },
			    function(e) {
			      $("#quoteAuthor").stop().fadeOut("slow");    
			    }
			);
		});
		$(document).ready(function(){
		    $(".login").hide();
		    $(".showhide").show();
		    $('.showhide').click(function(){
		    $(".login").slideToggle();
		    });
		});
		$(document).ready(function(){
		    $(".login").hide();
		    $(".shLogin").show();
		    $('.shLogin').click(function(){
		    $(".login").slideToggle();
		    });
		});
		$(document).ready(function(){
		    $(".register").hide();
		    $(".shRegister").show();
		    $('.shRegister').click(function(){
		    $(".register").slideToggle();
		    });
		});
		$(document).ready(function(){
		    $(".add").hide();
		    $(".shAdd").show();
		    $('.shAdd').click(function(){
		    $(".add").slideToggle();
		    });
		 });
		$(document).ready(function(){
		    $(".entriesPanel").hide();
		    $(".shentriesPanel").show();
		    $('.shentriesPanel').click(function(){
		    $(".entriesPanel").slideToggle();
		    });
		});
		$(document).ready(function(){
		    $(".account").hide();
		    $(".shAccount").show();
		    $('.shAccount').click(function(){
		    $(".account").slideToggle();
		    });
		});