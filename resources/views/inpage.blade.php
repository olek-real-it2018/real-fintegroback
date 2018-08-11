<!DOCTYPE html>
<html lang="en">
<body>
	<h1>Message list </h1>
	{{ csrf_field() }}

    <div>
<?php
   foreach ($messages as $message) {
      echo $message->message;
      echo '</br>';
}
?>
    </div>
</body>
</html>