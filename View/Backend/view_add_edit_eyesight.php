

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
							<div class="col-md-2">Fullname</div>
							<div class="col-md-10">
								<input type="text" name="stu_name" class="form-control" <?php echo isset($arr->stu_name)?"disabled":"required"; ?>  value="<?php echo isset($arr->stu_name)?$arr->stu_name:""; ?>">
							</div>
						</div>
					</div>
					<!-- end row -->

					<!-- row -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2">birthday</div>
							<div class="col-md-10">
								<input type="text" name="stu_birthday" value="<?php echo isset($arr->stu_birthday)?$arr->stu_birthday:""; ?>" class="form-control" >
							</div>
						</div>
					</div>
					<!-- end row -->


					<!-- row -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2">birthplace</div>
							<div class="col-md-10">
								<input type="text" name="stu_birthplace" value="<?php echo isset($arr->stu_birthplace)?$arr->stu_birthplace:""; ?>" class="form-control" >
							</div>
						</div>
					</div>
					<!-- end row -->

					<!-- row -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2">address</div>
							<div class="col-md-10">
								<input type="text" name="stu_address" value="<?php echo isset($arr->stu_address)?$arr->stu_address:""; ?>" class="form-control" >
							</div>
						</div>
					</div>
					<!-- end row -->
					<!-- row --------------------------------------------------------------------------->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2">Class</div>
							<div class="col-md-10">
								<select name="class_name">
									<?php foreach ($arr2 as $rows) {
										?>
										<option value="<?php echo $rows->class_name; ?>"> <?php echo $rows->class_name ?> </option>
									<?php } ?>
								</select>
							</div>
						</div>
					</div>
					<!-- end row -->
					<!-- row -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2">fathername</div>
							<div class="col-md-10">
								<input type="text" name="stu_fathername" value="<?php echo isset($arr->stu_fathername)?$arr->stu_fathername:""; ?>" class="form-control" >
							</div>
						</div>
					</div>
					<!-- end row -->
					<!-- row -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2">fatherphone</div>
							<div class="col-md-10">
								<input type="text" name="stu_fatherphone" value="<?php echo isset($arr->stu_fatherphone)?$arr->stu_fatherphone:""; ?>" class="form-control" >
							</div>
						</div>
					</div>
					<!-- end row -->
					<!-- row -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2">mothername</div>
							<div class="col-md-10">
								<input type="text" name="stu_mothername" value="<?php echo isset($arr->stu_mothername)?$arr->stu_mothername:""; ?>" class="form-control" >
							</div>
						</div>
					</div>
					<!-- end row -->

					<div class="form-group">
						<div class="row">
							<div class="col-md-2">motherphone</div>
							<div class="col-md-10">
								<input type="text" name="stu_motherphone" value="<?php echo isset($arr->stu_motherphone)?$arr->stu_motherphone:""; ?>" class="form-control" >
							</div>
						</div>
					</div>
					<!-- end ro

						<!-- row -->
						<div class="form-group">
							<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-10">
									<input type="submit" name="" value="Add" class="btn btn-primary">
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
	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading">nhập độ cận học sinh theo lớp</div>
			<div class="panel-body">

				<div class="col-md-12 " style="border: solid 1px #00000042;padding-top: 34px;height: 100px;">
					<div class="row" >
						<div class="col-md-2" >
							<span>Khóa</span>
							<select style="width: 100px;" >

								<?php foreach ($arr_academic as $rows) {

									?>
									<option ><?php echo $rows->academicYear_name ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="col-md-2" >
							<span>lớp</span>
							<select style="width: 100px;" >

								<?php foreach ($arr_class as $rows) {

									?>
									<option ><?php echo $rows->class_name ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="col-md-1">
							<a href="#" class="btn btn-primary btn-sm" >seach</a>
						</div>
						<div class="col-md-3">
							<span>ngày khám</span>
							<input type="date" name="" style="width: 130px;">
						</div>
						<div class="col-md-3">
							<span>ngày nhập</span>
							<input type="date" name="" style="width: 130px;">
						</div>


						

					</div>

				</div>

				<form method="post" action="<?php echo $form_action?>">
					<style type="text/css">
					.add_student{
						width: 1000px;
						height: 400px;
						overflow: auto!important;
						margin-top: 125px;

					}
				</style>
				<div class="add_student">
					<table class="table table-bordered table-hover">
						<thead style="background-color: blue;color: white">
							<tr>
								<th>STT</th>
								<th>Code</th>
								<th>Name</th>
								<th>Gender</th>
								<th>Eyesight</th>
								<th>Note</th>
								
							</tr>
						</thead>
						<tbody>
							
							<?php foreach ($arr_stu as $rows ) {

								?>

								<tr>
									<td style="text-align: center;"><?php echo $rows->stu_id ?></td>
									<td><?php echo $rows->stu_code ?></td>
									<td><?php echo $rows->stu_name ?></td>
									<td><?php echo $rows->stu_gender ?></td>
									<td><input type="text" name="" style="width: 80px;background-color:yellow"></td>
									<td><input type="text" name="" style="width: 100px;"></td>
								</tr>
							<?php } ?>
							
						</tbody>
					</table>
				</div>

				<!-- row -->
				<div class="form-group">
					<div class="row">
						<div class="col-md-10"></div>
						<div class="col-md-2">
							<input type="submit" name="" value="Add" class="btn btn-primary">
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
