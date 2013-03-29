        function showonlyone(thechosenone) {
             $('.form').each(function(index) {
                  if ($(this).attr("id") == thechosenone) {
                       $(this).slideDown(200);
                  }
                  else {
                       $(this).slideUp(01);
                  }
             });
        }