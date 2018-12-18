<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>CROP IMAGE</title>
	<link rel="stylesheet" href="css/imgareaselect-default.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/jquery.imgareaselect.min.js"></script>
</head>
<body>
    <form action="crop.php" method="post" enctype="multipart/form-data">
	    Upload Image: <input type="file" name="image" id="image" />
	    <input type="hidden" name="x1" value="" />
	    <input type="hidden" name="y1" value="" />
	    <input type="hidden" name="w" value="" />
	    <input type="hidden" name="h" value="" /><br><br>
	    <input type="submit" name="submit" value="Submit" />
    </form>
 
    <p><img id="previewimage" style="display:none;"/></p>
   
   
   <script>
    jQuery(function($) {
 
        var p = $("#previewimage");
        $("body").on("change", "#image", function(){
 
            var imageReader = new FileReader();
            imageReader.readAsDataURL(document.getElementById("image").files[0]);
     
            imageReader.onload = function (oFREvent) {
                p.attr('src', oFREvent.target.result).fadeIn();
            };
        });
 
        $('#previewimage').imgAreaSelect({
            onSelectEnd: function (img, selection) {
                $('input[name="x1"]').val(selection.x1);
                $('input[name="y1"]').val(selection.y1);
                $('input[name="w"]').val(selection.width);
                $('input[name="h"]').val(selection.height);            
            }
        });
    });
</script>

</body>
</html>