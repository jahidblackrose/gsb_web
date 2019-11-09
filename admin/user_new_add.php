<?php
require_once('re_login_connection.php');

	if($user_type!='1')
	{
	die('ERROR!!') ;	
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php require("re_head.php"); ?>
	<script type="text/javascript" src="js/jquery.js"></script> 
	<script type="text/javascript" src="js/jquery.form.js"></script> 
	<script type="text/javascript">
		$('document').ready(function()
		{		
		$('#form').ajaxForm( {
		target: '#preview', 
		success: function() { 
		$('#formbox').slideUp('fast'); 
		} 
		}); 
		
		});
	</script> 


<script type='text/javascript'>//<![CDATA[
$(window).load(function(){
$('#form').on('keydown', 'input', function (event) {
    if (event.which == 13) {
        event.preventDefault();
        var $this = $(event.target);
        var index = parseFloat($this.attr('data-index'));
        $('[data-index="' + (index + 1).toString() + '"]').focus();
    }
});
});//]]> 

</script>

	<body>
<div class="wrap">
			<div id="header">
				<div id="top">
					<div class="left">
						<p>Welcome, <strong><?php  echo $user_name ; ?></strong> [ <a href="logout.php">logout</a> ]</p>
					</div>
					<?php require("re_head_date.php"); ?>
				</div>
				<?php require("re_menu.php"); ?>
			</div>
  <div id="content">
				<div id="main1">
		  <div class="clear"></div>
					<div class="full_w">
                    
						<div class="h_title" align="center"><strong style="color:#FFF">ADD NEW USER</strong></div>
						<div class="entry">
							<div id="preview">
							</div>
						</div>
						<div class="element">
						<div id="formbox">
							<form name="" id="form" action="user_new_save.php" method="post">
								
								<div>
								<div class="element" id="inputleft">
									<label for="FULL NAME">Full Name<span class="red">(required)</span> </label>
									<input type="text" autocomplete="off" style="text-transform: uppercase;" id="name" name="name" required autofocus data-index="2" />
								</div>
								<div class="element" id="inputright">
									<label for="password">Email<span class="red">(required)</span> </label>
									<input type="email" style="text-transform: lowercase;" autocomplete="off" id="email" name="email" data-index="3"/>
								</div>
								</div>

								<div>
								<div class="element" id="inputleft">
									<label for="rule">User Name <span class="red">(required)</span></label>
									<span class="red">
									<input type="text" autocomplete="off" style="text-transform:lowercase;" id="username" name="username" required autofocus data-index="4" />
									</span>
								</div>
								<div class="element" id="inputright">
									<label for="comments">Password  <span class="red">(required)</span></label> 
									<input name="password" type="password" id="password" value="123456" required autofocus />
								</div>
								</div>

								<div>
								<div class="element" id="inputleft">
									<label for="comments">Mobile  <span class="red">(required)</span></label> 
									<input name="mobile" type="text" autocomplete="off" id="mobile" placeholder="8801712000000" required autofocus />
								</div>
							
                            <div class="element" id="inputright">
									<label for="rule">Role <span class="red">(required)</span></label>
									<select name="rule" class="err" id="status" required>
										<option value="">- select status-</option>
										<option value="1">Super Admin</option>
										<option value="2">Project Manager</option>
										<option value="3">Project Member</option>
										<option value="4">Testing Team</option>
										
									</select>
								</div>
								</div>
                            <div>
								<div class="element" id="inputleft">
									<label for="rule">Status <span class="red">(required)</span></label>
									<select name="status" class="err" id="status" required>
										<option value="">- select status-</option>
										<option value="1">Active</option>
										<option value="0">Inactive</option>
									</select>
								</div>
								<div class="element" id="inputright">
									<label for="rule">Designation <span class="red">(required)</span></label>
									<input name="designation" type="text" id="Designation" placeholder="Officer" required autofocus />
								</div>
								<div class="element" id="inputleftt">
									<label for="rule">Workstation</label>
									<input name="workstation" type="text" id="Designation" placeholder="172.25.8.0" />
								</div>
								</div>
								<div class="entry">
									<button type="submit" class="add">Save</button> 
									<button type="reset" class="cancel">Reset</button>
									 <a class="button home" href="home.php">BACK TO HOME</a>
                                    <a class="button reload" href="user_new_add.php">RELOAD</a>
								</div>
							</form>
						</div>
					</div>
					</div>
				
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<br />
		<br />
		<br />
		<br />
		<?php require("re_footer.php"); ?>
		  <script>
  // tell the embed parent frame the height of the content
  if (window.parent && window.parent.parent){
    window.parent.parent.postMessage(["resultsFrame", {
      height: document.body.getBoundingClientRect().height,
      slug: "hxZSU"
    }], "*")
  }
</script>
	</body>
</html>