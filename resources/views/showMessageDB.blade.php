<!DOCTYPE html>
<html lang="en">
<body>
	<h1>Message Show DB</h1>
	{{ csrf_field() }}
	<div>
		<?= $result; ?>
	</div>
	<div>
		<ul>
		<!-- <?php
           foreach ($resulTable as $key => $value) {
           	# co 
			//echo '<li>';
           // echo $value;
			//echo '</li>';
           }
		?> -->
		</ul>
	</div><br>
    <div>
    	{{ $messages }}<br>
    </div>
</body>
</html>
