
<?php
if ($test == true) {
	?>
<script type="text/javascript" language="javascript">
	alert("ok");
</script>
<?php 	 } ?>
<?php

if ($act == 'edit') {

	?>

	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading">Edit</div>
			<div class="panel-body">
				<form method="post" action="<?php echo $form_action?>">
					<div class="col-md-12" style="">
						<div class="col-md-6">
							<div class="form-group">
								<div class="row">
									<div class="col-md-3">Họ tên</div>
									<div class="col-md-9">
										<input type="text" name="stu_name" class="form-control" <?php echo isset($arr->stu_name)?"disabled":"required"; ?>  value="<?php echo isset($arr->stu_name)?$arr->stu_name:""; ?>">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-3">Giới tính</div>
									<div class="col-md-9">
										<select class="form-control" name="stu_gender">
											<option>nam</option>
											<option>nữ</option>
										</select>
									</div>
								</div>
							</div>


							<!-- row -->
							<div class="form-group">
								<div class="row">
									<div class="col-md-3">Họ tên bố</div>
									<div class="col-md-9">
										<input type="text" name="stu_fathername" value="<?php echo isset($arr->stu_fathername)?$arr->stu_fathername:""; ?>" class="form-control" >
									</div>
								</div>
							</div>
							<!-- end row -->
							<!-- row -->
							<div class="form-group">
								<div class="row">
									<div class="col-md-3">SDT bố</div>
									<div class="col-md-9">
										<input type="text" name="stu_fatherphone" value="<?php echo isset($arr->stu_fatherphone)?$arr->stu_fatherphone:""; ?>" class="form-control" >
									</div>
								</div>
							</div>
							<!-- end row -->
							<!-- row -->
							<div class="form-group">
								<div class="row">
									<div class="col-md-3">Họ tên mẹ</div>
									<div class="col-md-9">
										<input type="text" name="stu_mothername" value="<?php echo isset($arr->stu_mothername)?$arr->stu_mothername:""; ?>" class="form-control" >
									</div>
								</div>
							</div>
							<!-- end row -->
							<!--row-->
							<div class="form-group">
								<div class="row">
									<div class="col-md-3">SDT mẹ</div>
									<div class="col-md-9">
										<input type="text" name="stu_motherphone" value="<?php echo isset($arr->stu_motherphone)?$arr->stu_motherphone:""; ?>" class="form-control" >
									</div>
								</div>
							</div>
							<!-- end row-->
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<div class="row">
									<div class="col-md-3">Ngày sinh</div>
									<div class="col-md-9">
										<input type="text" name="stu_birthday" value="<?php echo isset($arr->stu_birthday)?$arr->stu_birthday:""; ?>" class="form-control" >
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-3">Nơi sinh</div>
									<div class="col-md-9">
										<input type="text" name="stu_birthplace" value="<?php echo isset($arr->stu_birthplace)?$arr->stu_birthplace:""; ?>" class="form-control" >
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-3">Địa chỉ</div>
									<div class="col-md-9">
										<input type="text" name="stu_address" value="<?php echo isset($arr->stu_address)?$arr->stu_address:""; ?>" class="form-control" >
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-3">Lớp</div>
									<div class="col-md-9">
										<select name="class_name" class="form-control">
											<option value="<?php echo $arr->class_id; ?>"><?php echo isset($arr->class_name)?$arr->class_name:""?></option>
										</select>
									</div>
								</div>
							</div>
							<!-- end row -->
							<!-- row -->
							<div class="form-group">
								<div class="row">
									<div class="col-md-3">Khóa</div>
									<div class="col-md-9">
										<input type="text" name="academicYear_name" <?php echo isset($arr->academicYear_name)?"disabled":"required"; ?> value="<?php echo isset($arr->academicYear_name)?$arr->academicYear_name:""; ?>" class="form-control" >
									</div>
								</div>
							</div>
							<!-- end row -->


						</div>

						<div class="col-md-12" >
							<!-- row -->
							<div class="form-group">
								<div class="row">
									<div class="col-md-2"></div>
									<div class="col-md-10" >
										<input type="submit" name="" value="Save" class="btn btn-primary" style="float: right;">
										<input type="reset" name="" value="reset" class="btn btn-danger" style="float: right;margin-right: 5px;">
									</div>
								</div>
							</div>
							<!-- end row -->
						</div>

					</div>







				</form>
			</div>
		</div>
	</div>

		<!--
			////=====================================
			////ADD
			////=====================================
		-->

	<?php }else if ($act =='add') {
		?>

		<style type="text/css">
		#add_record{
			text-decoration: none;
		}
		#add_record:hover{
			cursor: pointer;
		}

		.add_student{
			width: 1007px;
			height: 400px;
			overflow: auto!important;

		}
		input[type='text']{
			width: 100px;
			margin: -7px;
			border: none;
			
		}
		.add_student>table>thead>tr>th{
			font-size: 12px!important;
		}
		.add_student input[type='date']{
			border: none;
		}
	</style>
	<style type="text/css">
	.btn_add_record{
		background-color: #ada5a55c;
		height: 20px;
		margin-bottom: 5px;
	}
</style>
<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading">Add student</div>
		<div class="panel-body">
			<form method="post" action="<?php echo $form_action?>">
				<style type="text/css">

			</style>
			<div class="col-md-12" style="height: 79px;border: solid 1px #00000045;padding-top: 21px;    margin-bottom: 10px;">
				<div class="row">
					<div class="col-md-3">
						<label style="float: left;margin-right: 10px;">Khóa:</label>
						<select class="form-control" style="width: 169px;" id="academic" onchange="send_data_academic()">
							<option value=""></option>
							<?php foreach ($arr2 as $rows) {
								?>
								<option value="<?php echo $rows->academicYear_id; ?>"> <?php echo $rows->academicYear_name ?> </option>
							<?php } ?>
						</select>
					</div>
					<div class="col-md-3">
						<label style="float: left;margin-right: 10px;">lớp:</label>
						<select class="form-control" style="width: 169px;" id="class_name"  name="class_name">
						</select>
					</div>
				</div>
			</div>
			<div class="add_student" style="border: 1px solid #0000002e">
				<table class="table table-bordered table-hover">
					<thead style="background-color: blue;color: white">
						<tr>
							<th>Mã hs</th>
							<th>Họ tên</th>
							<th>Giới tính</th>
							<th>Ngày sinh</th>							
							<th>Nới sinh</th>
							<th>Địa chỉ</th>
							<th>Họ tên bố</th>
							<th>SDT bố</th>
							<th>Họ tên mẹ</th>
							<th>SDT mẹ</th>
							<th>Ngày tạo</th>						
						</tr>
					</thead>
					<tbody id="insert_record">

					</tbody>
				</table>
			</div>

			<!-- row -->
			<div class="form-group">
				<div class="col-md-12 btn_add_record">
					<a class="glyphicon glyphicon-plus" id="add_record" onclick="add_row()" ></a>
				</div>
				<div class="row">
					<div class="col-md-10">

					</div>
					<div class="col-md-2">
						<input type="submit" name="" value="Save" class="btn btn-primary">
						<input type="reset" name="" value="reset" class="btn btn-danger">
					</div>
				</div>
			</div>
			<!-- end row -->
		</form>

	</div>
	<script type="text/javascript" language="javascript">
		var rows = 0;
		function add_row()
		{
			rows++;
			$.post("public/data.php",
			{
				rows: rows
			},
			function (data)
			{
				document.getElementById("insert_record").innerHTML = data;
			});
		}
		function check()
		{
			alert('ngày tạo hiện tại đã đúng không nên chỉnh sửa');
			return false;
		}
		function check_cbx()
		{
			var element1 = document.getElementById('academic');
			var academic = element1.value;
			var element2 = document.getElementById('class_name');
			var class_name = element2.value;
			if (academic == "" || class_name == "") {
				alert("bạn chưa chọn khóa hoặc lớp");
				return false;
			}
			return true;
		}
	</script>
</div>
</div>
<?php }else if ($act == 'delete') {
	# code...

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
								<a href="" class="btn btn-danger">Close</a>
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
