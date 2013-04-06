<!doctype html>
<style>
#container { border:1px solid black; width:100px; height:100px; }
#one { border:1px solid red; }
#two { border:1px solid green; display:none; }
</style>
    <script language="javascript"> 
        $(document).ready(function() {
          $("#container").hover(
            function(e) { 
              $("#one").fadeOut("slow");
              $("#two").fadeIn("slow");
            },
            function(e) {
              $("#two").fadeOut("slow");
              $("#one").fadeIn("slow");      
            }
          );
        });
</script>
<html>
    <body>
        <div id='container'>
            <div id='one'>
                s
            </div>
            <div id='two'>
                d
            </div>
        </div>
    </body>
</html>