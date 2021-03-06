<?php
require('headeri.php');
 ?>
<style>
body{
	background-color: #1F2531;
	}
#txtmessage{
	border-radius:5px;
	background-color:#E3E2E0;
	font-size:2em;
	color:black;
	margin-left:16.5em;
	font-family:"Times-New-Roman";
}
.message-box{margin-left:22em;margin-right:20.8em;margin-bottom:20px;
color:black;border-radius:5px; border-top:#F0F0F0 2px solid;
background:#E3E2E0;padding:10px; font-size:1.5em;}
.btnEditAction{background-color:#1F2531;border:2px solid #B86366;
border-radius:5px;padding:2px 10px;color:#FFF;}
.btnDeleteAction{background-color:#B86366;border-radius:5px;border:2px solid #1F2531
;padding:2px 10px;color:#FFF;margin-bottom:15px;}
#btnAddAction{background-color:white;border-radius:8px;padding:5px 10px;
	border:5px solid #B86366;
color:#1F2531; float:right;}
</style>
<?php
require_once("DBController.php");
$db_handle = new DBController();
$comments = $db_handle->runQuery("SELECT * FROM comment");
?>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
function showEditBox(editobj,id) {
	$('#frmAdd').hide();
	$(editobj).prop('disabled','true');
	var currentMessage = $("#message_" + id + " .message-content").html();
	var editMarkUp = '<textarea style=" border-radius:5px;border:solid 4px #B86366;background-color:#1F2531;font-size:1em;color:white;font-family:"Times-New-Roman";"rows="5" cols="25" id="txtmessage_'+id+'">'+currentMessage+'</textarea><br><button style="background-color:#1F2531;border:2px solid #B86366;color:white;border-radius:5px; margin-right:0.2em; height:25px; width:40px;" name="ok" onClick="callCrudAction(\'edit\','+id+')">Save</button><button style="background-color:#B86366;border-radius:5px;border:2px solid #1F2531;color:white;border-radius:5px; margin-right:0.2em; height:25px; width:50px;" name="cancel" onClick="cancelEdit(\''+currentMessage+'\','+id+')">Cancel</button>';
	$("#message_" + id + " .message-content").html(editMarkUp);
}
function cancelEdit(message,id) {
	$("#message_" + id + " .message-content").html(message);
	$('#frmAdd').show();
}
function callCrudAction(action,id) {
	$("#loaderIcon");
	var queryString;
	switch(action) {
		case "add":
			queryString = 'action='+action+'&txtmessage='+ $("#txtmessage").val();
		break;
		case "edit":
			queryString = 'action='+action+'&message_id='+ id + '&txtmessage='+ $("#txtmessage_"+id).val();
		break;
		case "delete":
			queryString = 'action='+action+'&message_id='+ id;
		break;
	}	 
	jQuery.ajax({
	url: "crud_action.php",
	data:queryString,
	type: "POST",
	success:function(data){
		switch(action) {
			case "add":
				$("#comment-list-box").append(data);
			break;
			case "edit":
				$("#message_" + id + " .message-content").html(data);
				$('#frmAdd').show();
				$("#message_"+id+" .btnEditAction").prop('disabled','');	
			break;
			case "delete":
				$('#message_'+id).fadeOut();
			break;
		}
		$("#txtmessage").val('');
		$("#loaderIcon").hide();
	},
	error:function (){}
	});
}
</script>

<div class="form_style" >
<div id="comment-list-box">
<?php
if(!empty($comments)) {
foreach($comments as $k=>$v) {
?>
<div class="message-box" id="message_<?php echo $comments[$k]["id"];?>">
<div>
<button class="btnEditAction" name="edit" onClick="showEditBox(this,<?php echo $comments[$k]["id"]; ?>)">Edit</button>
<button class="btnDeleteAction" name="delete" onClick="callCrudAction('delete',<?php echo $comments[$k]["id"]; ?>)">Delete</button>
</div>
<div class="message-content"><?php echo $comments[$k]["message"]; ?></div>
</div>
<?php
}
} ?>
</div>

<div id="frmAdd"><textarea name="txtmessage" id="txtmessage" cols="19" rows="3"></textarea>
<p style="margin-right:31em; margin-top:15px;margin-botom:15px;"><button id="btnAddAction" name="submit" onClick="callCrudAction('add','')"><b>ADD MEMBER</b></button>
</p>
</div>
<img src="LoaderIcon.gif" id="loaderIcon" style="display:none" />
</div>
<div style="margin-top:1em;"><br></div>
<?php
require('footeri.php');
 ?>