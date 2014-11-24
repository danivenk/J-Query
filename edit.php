<?php
	if (isset($_GET['e']) && !empty($_GET['e'])) {
		$e = $_GET['e'];
		if ($e == 4) {
			$exercise =	"<script>
			$(document).ready(function(){
				$('.movealong').html('<span title='Dit is slechts een voorbeeld pudinkje.'>Caramelpudinkje'</span>);
			});
			</script>
			<div class='movalong'></div>";
		} else {
			$exercise = false;
		}
	}
?>
<!DoCTyPE html>
<html>
<head>
	<title>TokEdit</title>
	<link rel="stylesheet" type="text/css" href="css/editor.css">
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	
	<script>
		$(document).ready(function() {
			$('.voorbeeld').html('Toktok');
			
			$('.text').keyup(function() {
				$('.voorbeeld').html($('.text').val());
			});
			
			$('.clean').click(function() {
				$('.text').val('');
				$('.voorbeeld').html($('.text').val());
			});
			
			$(document).delegate('.text', 'keydown', function(e) {
			  var keyCode = e.keyCode || e.which;

			  if (keyCode == 9) {
				e.preventDefault();
				var start = $(this).get(0).selectionStart;
				var end = $(this).get(0).selectionEnd;

				// set textarea value to: text before caret + tab + text after caret
				$(this).val($(this).val().substring(0, start)
							+ "\t"
							+ $(this).val().substring(end));

				// put caret at right position again
				$(this).get(0).selectionStart =
				$(this).get(0).selectionEnd = start + 1;
			  }
			});
		});
	</script>
</head>
<body>
	
	<div class="editor">
		<textarea class="text">
		<?php
			if ($exercise != false) {
				echo $exercise;
			}
		?>
		</textarea>
		<input type="button" class="clean" value="Remove all"></input>
	
	
	<div class="voorbeeld"></div>
	</div>

</body>
</html>