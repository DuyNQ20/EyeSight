

<?php

if ($act == 'edit') {

	?>
	<div class="col-md-6 col-md-offset-1">
		<div class="panel panel-primary">
			<div class="panel-heading">edit</div>
			<div class="panel-body">
				<form method="post" action="<?php echo $form_action?>">
					<!-- row -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2">Username</div>
							<div class="col-md-10">
								<input type="text" name="c_email" class="form-control" <?php echo isset($arr->acc_username)?"disabled":"required"; ?>  value="<?php echo isset($arr->acc_username)?$arr->acc_username:""; ?>">
							</div>
						</div>
					</div>
					<!-- end row -->

					<!-- row -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2">Fullname</div>
							<div class="col-md-10">
								<input type="text" name="c_fullname" value="<?php echo isset($arr->user_fullname)?$arr->user_fullname:""; ?>" class="form-control" >
							</div>
						</div>
					</div>
					<!-- end row -->
					<!-- row -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2">Gender</div>
							<div class="col-md-10">
								<select name="user_gender">
									<option value="">--- chọn ---</option>
									<option value="Nam">Nam</option>
									<option value="Nu">Nu</option>
								</select>
							</div>
						</div>
					</div>
					<!-- end row -->

					<!-- row -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2">Phone</div>
							<div class="col-md-10">
								<input type="text" name="user_phone" value="<?php echo isset($arr->user_phone)?$arr->user_phone:""; ?>" class="form-control" >
							</div>
						</div>
					</div>
					<!-- end row -->

					<!-- row -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2">Email</div>
							<div class="col-md-10">
								<input type="text" name="user_email" value="<?php echo isset($arr->user_email)?$arr->user_email:""; ?>" class="form-control" >
							</div>
						</div>
					</div>
					<!-- end row -->

					<!-- row -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2">Company</div>
							<div class="col-md-10">
								<input type="text" name="user_company" value="<?php echo isset($arr->user_company)?$arr->user_company:""; ?>" class="form-control" >
							</div>
						</div>
					</div>
					<!-- end row -->
					<!-- row -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2">Quyền</div>
							<div class="col-md-10">


								<select name="role_name">
									<?php foreach ($arr2 as $rows) {
										?>
										<option value="<?php echo $rows->role_name; ?>"> <?php echo $rows->role_name ?> </option>
									<?php } ?>
								</select>
							</div>
						</div>
					</div>
					<!-- end row -->
					<!-- row -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2">Password</div>
							<div class="col-md-10">
								<input type="password" <?php echo isset($arr->acc_username)?"placeholder='Nhap password moi neu muon doi password'":"required"; ?> name="c_password" class="form-control">
							</div>
						</div>
					</div>
					<!-- end row -->

					<!-- row -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2"></div>
							<div class="col-md-10">
								<input type="submit" name="" value="process" class="btn btn-primary">
								<input type="reset" name="" value="reset" class="btn btn-danger">
							</div>
						</div>
					</div>
					<!-- end row -->
				</form>
			</div>
		</div>
	</div>

<!--
	//-----------------
	//ADD
	//-----------------
-->

<?php }else if ($act =='add') {
	?>
	<div class="col-md-10 col-md-offset-1">
		<div class="panel panel-primary">
			<div class="panel-heading">Add</div>
			<div class="panel-body">
				<form method="post" action="<?php echo $form_action?>">
					<!--
						//---------------------
						// User
						//---------------------
					-->
					<div class="row" >
						<div class="col-md-6" >
							<fieldset>
								<legend>user</legend>
								<!-- row -->
								<div class="form-group">
									<div class="row">
										<div class="col-md-2">Fullname</div>
										<div class="col-md-10">
											<input type="text" name="c_fullname"  class="form-control" >
										</div>
									</div>
								</div>
								<!-- end row -->

								<!-- row -->
								<div class="form-group">
									<div class="row">
										<div class="col-md-2">birthday</div>
										<div class="col-md-10">
											<input type="text" name="user_birthday"  class="form-control" >
										</div>
									</div>
								</div>
								<!-- end row -->
								<!-- row -->
								<div class="form-group">
									<div class="row">
										<div class="col-md-2">Gender</div>
										<div class="col-md-10">
											<select name="user_gender" >
												<option value="">-----chọn------</option>
												<option value="Nam">Nam</option>
												<option value="Nu">Nư</option>
											</select>
										</div>
									</div>
								</div>
								<!-- end row -->

								<!-- row -->
								<div class="form-group">
									<div class="row">
										<div class="col-md-2">Phone</div>
										<div class="col-md-10">
											<input type="text" name="user_phone"  class="form-control" >
										</div>
									</div>
								</div>
								<!-- end row -->

								<!-- row -->
								<div class="form-group">
									<div class="row">
										<div class="col-md-2">Email</div>
										<div class="col-md-10">
											<input type="text" name="user_email" class="form-control" >
										</div>
									</div>
								</div>
								<!-- end row -->
								<!-- row -->
								<div class="form-group">
									<div class="row">
										<div class="col-md-2">address</div>
										<div class="col-md-10">
											<input type="text" name="user_address" class="form-control" >
										</div>
									</div>
								</div>
								<!-- end row -->
								<!-- row -->
								<div class="form-group">
									<div class="row">
										<div class="col-md-2">work</div>
										<div class="col-md-10">

											<select name="user_work" >
												<option value="">-----chọn------</option>
												<option value="học sinh">học sinh</option>
												<option value="Teacher">Giáo viên</option>
												<option value="Engineer">Kỹ sư</option>
												<option value="Nust">Y tá</option>
											</select>
										</div>
									</div>
								</div>
								<!-- end row -->
								<!-- row -->
								<div class="form-group">
									<div class="row">
										<div class="col-md-2">Company</div>
										<div class="col-md-10">
											<input type="text" name="user_company"  class="form-control" >
										</div>
									</div>
								</div>
								<!-- end row -->

							</fieldset>
						</div>
						<div class="col-md-6" >
							
					<!--
						//---------------------
						// Acount
						//---------------------
					-->
					<fieldset>
						<legend>Account</legend>
						<!-- row -->
						<div class="form-group">
							<div class="row">
								<div class="col-md-2">Accode</div>
								<div class="col-md-10">
									<input type="text" name="acc_code"  class="form-control" >
								</div>
							</div>
						</div>
						<!-- end row -->
						<!-- row -->
						<div class="form-group">
							<div class="row">
								<div class="col-md-2">Username</div>
								<div class="col-md-10">
									<input type="text" name="acc_username"  class="form-control" >
								</div>
							</div>
						</div>
						<!-- end row -->
						<!-- row -->
						<div class="form-group">
							<div class="row">
								<div class="col-md-2">Password</div>
								<div class="col-md-10">
									<input type="text" name="acc_password"  class="form-control" >
								</div>
							</div>
						</div>
						<!-- end row -->
						<!-- row -->
						<div class="form-group">
							<div class="row">
								<div class="col-md-2">Quyền</div>
								<div class="col-md-10">

									<select name="role_name">
										<?php foreach ($arr as $rows) {

											?>
											<option> <?php echo $rows->role_name ?> </option>
										<?php } ?>
									</select>
								</div>
							</div>
						</div>
						<!-- end row -->

					</fieldset>
				</div>
			</div>


			<!-- row -->
			<div class="form-group">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-10">
						<input type="submit" name="" value="process" class="btn btn-primary">
						<input type="reset" name="" value="reset" class="btn btn-danger">
					</div>
				</div>
			</div>
			<!-- end row -->
		</form>
	</div>
</div>
</div>
<?php }else{
	?>
	
	<!-- Modal -->
	<div class="" id="myModalx">
		<div class="modal-dialog">
			<div class="col-md-8 col-md-offset-1">
				<div class="panel-primary" style="background-color: pink;">
					<div class="panel-heading">Xác nhận xóa</div>
					<div class="panel-body">
						<div style="height: 80px;text-align: center;line-height: 80px;">
							<p class="active">Bạn có chắc chắn muốn xóa tài khoản này</p>
						</div>
						<div class="row" >
							<div class="col-md-2 " style="margin-right: 5px;">
								<a href="admin.php?controller=user" class="btn btn-danger">Close</a>
							</div>
							<div class="col-md-2 ">
								<form method="post" action="<?php echo $form_action ?>">
									<input type="submit" name="" class="btn btn-primary" value="delete">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>      
		</div>
	</div>
<?php } ?>
