<div class="container-fluid box show" >
	<div class="col-md-10 col-md-offset-1 ">
	<div class="panel panel-primary">
		<div class="panel-heading">Thêm tài khoản</div>
		<div class="panel-body">
			<?php print_r(isset($hhhh)?$hhhh: "khong co gi")  ?>
			<form class="form-horizontal" action="/action_page.php">
				<div class="form-group">
					<label class="control-label col-md-2"  for="email">Username:</label>
					<div class="col-md-3">   
						<input type="text" name="username" value="<?php echo isset($obj->acc_username)? $obj->acc_username:""?>" class="form-control">
					</div>
					<label class="control-label col-md-2" for="email">Quyền:</label>
					<div class="col-md-3">          
						<input type="text" name="role" value="<?php echo isset($obj->acc_authorization)? $obj->acc_authorization:"" ?>" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-2" for="email">Chức vụ:</label>
					<div class="col-md-3">          
						<input type="text" name="job" value="<?php echo isset($obj->acc_position)? $obj->acc_position:"" ?>" class="form-control">
					</div>
					<label class="control-label col-md-2" for="email">Số điện thoại:</label>
					<div class="col-md-3">          
						<input type="text" name="sdt" value="<?php echo isset($obj->acc_phone)? $obj->acc_phone:"" ?>" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-2" for="email">Ngày sinh:</label>
					<div class="col-md-3">          
						<input type="text" name="birthday" value="<?php echo isset($obj->acc_birthday)? $obj->acc_birthday:"" ?>" class="form-control">
					</div>
					<label class="control-label col-md-2" for="email">Giới tính:</label>

					<div class="col-md-3">          
						<input type="text" name="gender" value="<?php echo isset($obj->acc_gender)?($obj->acc_gender==1?"Nam":"Nữ"):"" ?>" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-2" for="email">Quê quán:</label>
					<div class="col-md-3">          
						<input type="text" name="address" value="<?php echo isset($obj->acc_address)? $obj->acc_address:"" ?>" class="form-control">
					</div>
					<label class="control-label col-md-2" for="email">Nơi làm việc:</label>
					<div class="col-md-3">          
						<input type="text" name="companyAddress" value="<?php echo isset($obj->acc_companyAddress)? $obj->acc_companyAddress:"" ?>" class="form-control">
					</div>
				</div>
				<div class="form-group">        
					<div class="col-sm-offset-8 col-sm-4">
						<a class="btn btn-primary" href="admin.php?action=do-edit">Save</a>
						<a class="btn btn-danger" href="http://localhost:8888/myeye/admin.php">Cancel</a>
					</div>
				</div>
				
			</form>
		</div>
	</div>
</div>


	<style>
/* Popup container - can be anything you want */

/* The actual popup */

/* Toggle this class - hide and show the popup */
.show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
    from {opacity: 0;} 
    to {opacity: 1;}
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
}
.container-fluid.box {
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.65);
    position: absolute;
    top: 0;
    left: 0;
    padding-top: 50px;
}

html,body {
    width: 100%;
    height: 100%;
}
</style>
