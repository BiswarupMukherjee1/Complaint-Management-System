<?php require_once('../../../private/initialize.php');
	  $page_title='New Student';
	  require_login_admin();
	  include_once(SHARED_PATH.'/header_admin.php');
	  if(isset($_POST['pass']))
	  {
		  $student=[];
		  $student['reg_no']=$_POST['reg_no'];
		  $student['name']=$_POST['name'];
		  $student['email_id']=$_POST['email_id'];
		  $student['gender']=$_POST['gender'];
		  $student['room']=$_POST['room'];
		  $student['block']=$_POST['block'];
		  $student['room_type']=$_POST['room_type'];
		  $student['mess']=$_POST['mess'];
		  $student['pass']=$_POST['pass'];
		  $result=insert_into_students($student);
		  if($result){
			  redirect_to('manage_students.php');
		  }
		  else
		  {
			  //$error
			  echo 'Query Failed';
		  }
	  }
?>
<link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/forms.css')?>">
<div class="wrapper">
	<h1><img src="<?php echo url_for('/images/add_user.svg'); ?>">Add a Student</h1>
	<a href='manage_students.php'>
		<img class="back" src="<?php echo url_for('/images/back.svg'); ?>">
	</a>
	<div class="container">
		<form action='new_student.php' method='post'>
			<div class="row">
				<div class="col-25">
					<label>Name:</label>
				</div>
				<div class="col-75">
					<input type='text' name='name' placeholder="Name..." style="width: 35%;"><?php //echo $student['name'];?>
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label>Email ID:</label>
				</div>
				<div class="col-75">
					<input type='text' name='email_id' placeholder="Email..." style="width: 50%;"><?php //echo $student['email_id'];?>
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label>Gender:</label>
				</div>
				<div class="col-75" style="margin-top: 30px;">
					<label for="male" style="padding-left:0;">
						<input type="radio" id="male" name="gender" value="Male">
						<span class="checkmark"></span>
						Male
					</label>
					<label for="female">
						<input type="radio" id="female" name="gender" value="Female">
						<span class="checkmark"></span>
						Female
					</label>
					<label for="other">
						<input type="radio" id="other" name="gender" value="Other">
						<span class="checkmark"></span>
						Other
					</label>
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label>Block:</label>
				</div>
				<div class="col-75" style="margin-top: 30px;">
					<label for="A" style="padding-left:0;">
						<input type="radio" id="A" name="block" value="A">
						<span class="checkmark"></span>
						A
					</label>
					<label for="B">
						<input type="radio" id="B" name="block" value="B">
						<span class="checkmark"></span>
						B
					</label>
					<label for="C">
						<input type="radio" id="C" name="block" value="C">
						<span class="checkmark"></span>
						C
					</label>
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label>Room No. :</label>
				</div>
				<div class="col-75">
					<input type='text' name='room' placeholder="Room Num..." style="width: 13%;"><?php //echo $student['room'];?>
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label>Room Type:</label>
				</div>
				<div class="col-75" style="margin-top: 30px;">
					<label for="NAC" style="padding-left:0;">
						<input type="radio" id="NAC" name="room_type" value="NAC">
						<span class="checkmark"></span>
						NAC
					</label>
					<label for="AC">
						<input type="radio" id="AC" name="room_type" value="AC">
						<span class="checkmark"></span>
						AC
					</label>
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label>Mess:</label>
				</div>
				<div class="col-75" style="margin-top: 30px;">
					<label for="SPECIAL" style="padding-left:0;">
						<input type="radio" id="SPECIAL" name="mess" value="SPECIAL">
						<span class="checkmark"></span>
						SPECIAL
					</label>
					<label for="NON-VEG">
						<input type="radio" id="NON-VEG" name="mess" value="NON-VEG">
						<span class="checkmark"></span>
						NON-VEG
					</label>
					<label for="VEG">
						<input type="radio" id="VEG" name="mess" value="VEG">
						<span class="checkmark"></span>
						VEG
					</label>
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label>Password:</label>
				</div>
				<div class="col-75">
					<input type='text' name='pass' placeholder="Password..."><?php //echo $student['pass'];?>
				</div>
			</div>
			<div class="row">
				<div class="col-25"></div>
				<div class="col-75">
					<input type='submit' value='Add Student'/>
				</div>
			</div>
		</form>
	</div>
</div>
<?php include_once(SHARED_PATH.'/footer.php'); ?>
