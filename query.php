<div class="row">
	<div class="box">
		<div class="col-lg-12">
		<?php
if (isset($_POST['submitQuery'])) {
    $to      = "nigam.legals@gmail.com";
    $subject = "Legal Query";
    $message = $_POST['query'];
    $header  = "From:".$_POST['email']."\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
    
    $retval = mail($to, $subject, $message, $header);
    
    if ($retval == true) {
?>
        <div class="alert alert-success">
  			<strong>Success!</strong> Your query has been successfuly posted will get back to you on <?php
        echo $_POST['email'];
?>. <a href="index.php?p=query">Ask more</a>
		</div>
		<?php
        
    } else {
        echo "Message could not be sent...";
    }
    
} else {
?>
			<form id="queryForm" method="POST" action="index.php?p=query">
			  <div class="form-group">
			  	<label for="queryBox">Query here</label>
				<textarea class="form-control" id="queryBox" cols="50" rows="10" placeholder="Type your query here" name="query"></textarea>
			  </div>
			  <div class="form-group">
				<label for="email">Email address</label>
				<input type="email" class="form-control" id="email" placeholder="Email" name="email">
			  </div>
			  <div class="form-group">
				<label for="name">Name</label>
				<input type="text" class="form-control" id="name" placeholder="Name" name="name">
			  </div>
			
				 <button type="submit" class="btn btn-default" name="submitQuery">Submit</button>
			</form>
			<?php
}
?>
		</div>
	</div>
</div>
