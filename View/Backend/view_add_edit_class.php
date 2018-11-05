
<?php

if ($act == 'edit') {

	?>
<style type="text/css">
	.row{margin-bottom: 10px;}
</style>
	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading">Edit</div>
			<div class="panel-body">
				<form method="post" action="<?php echo $form_action?>">
					<div class="col-md-12" style="">
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-11">
									<div class="col-md-3">Tên lớp</div>
									<div class="col-md-9">
										<input type="text" name="class_name" class="form-control" value="<?php echo $arr->class_name ?>"  >
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-11">
									<div class="col-md-3">GVCN</div>
									<div class="col-md-9">
										<input type="text" name="class_teacher" class="form-control" value="<?php echo $arr->class_teacher ?>">
									</div>
								</div>

							</div>
							<div class="row">
								<div class="col-md-11">
									<div class="col-md-3">Năm kết thúc</div>
									<div class="col-md-9">
										<input type="text" name="class_year" class="form-control" value="<?php echo $arr->class_year ?>">
									</div>
								</div>
							</div>

						</div>

						<div class="col-md-6">
							<div class="row">
								<div class="col-md-11">
									<div class="col-md-3">Khóa</div>
									<div class="col-md-9">
										<input type="text" name="academicYear_name" class="form-control" value="<?php echo $arr->academicYear_name ?>" <?php echo isset($arr->academicYear_name)?"disabled":"required"; ?>>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-11">
									<div class="col-md-3">Sĩ số</div>
									<div class="col-md-9">
										<input type="text" name="class_stunumber" class="form-control" value="<?php echo $arr->class_stunumber ?>">
									</div>
								</div>

							</div>
							<div class="row">
								<div class="col-md-11">
									<div class="col-md-3">Ngày tạo</div>
									<div class="col-md-9">
										<input type="text" name="class_createdate" class="form-control" value="<?php echo $arr->class_createdate ?>">
									</div>
								</div>
							</div>

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
<script type="text/javascript">
	$(document).ready(function(){
		var i =0;
		var today = new Date();
		var dd = today.getDate();
		var mm = today.getMonth()+1; //January is 0!
		var yyyy = today.getFullYear();
		if(dd<10) {
			dd = '0'+dd
		} 
		if(mm<10) {
			mm = '0'+mm
		} 
		today = mm + '/' + dd + '/' + yyyy;
		
		$("#add_record").click(function(){
			i++;
			let get_html = "";
			get_html += "<tr>";
			get_html += "<td><input type='text' required class='form-control' onkeypress = 'return check_cbx()' name='class_name_"+i;
			get_html +=	"' onkeypress = 'return check_cbx()'></td>";
			get_html += "<td><input type='text' onkeypress = 'return check_cbx()' required class='form-control' name='class_teacher_"+i;
			get_html += "'></td>";
			get_html += "<td><input type='text' onkeypress = 'return check_cbx()' name='class_year_"+i;
			get_html += "' class='form-control'></td>";
			get_html += "<td><input type='number' name='class_stunumber_"+i;
			get_html += "' class='form-control'></td>";
			get_html += "<td><input type='text' onkeypress = 'return check()'  name='class_createdate_"+i;
			get_html += "' class='form-control ' value='"+today;
			get_html += "'></td>";
			get_html += "</tr>";
			var e1 = document.getElementById('insert_record').innerHTML;
				// $(get_html).insertAfter("insert_record");
				
				$('#insert_record').append(get_html);
			});
	});
</script>
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
						<select class="form-control" style="width: 169px;" id="academic" name="academicYear_id">
							<option value=""></option>
							<?php foreach ($arr2 as $rows) {
								?>
								<option value="<?php echo $rows->academicYear_id; ?>"> <?php echo $rows->academicYear_name ?> </option>
							<?php } ?>
						</select>
					</div>
				</div>
			</div>
			<div class="add_student" style="border: 1px solid #0000002e">
				<table class="table table-bordered table-hover">
					<thead style="background-color: blue;color: white">
						<tr>
							<th>Tên lớp</th>
							<th style="padding-right: 100px;">Giáo viên CN</th>
							<th>Năm kết thúc</th>				
							<th>Sĩ số</th>
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
					<a class="glyphicon glyphicon-plus" id="add_record"></a>
				</div>
				<div class="row">
					<div class="col-md-10">

					</div>
					<div class="col-md-2">
						<input type="submit" name="" value="Save" class="btn btn-primary">

						<a href="admin.php?controller=add_edit_class&act=add" class="btn btn-danger" >reset</a>
					</div>
				</div>
			</div>
			<!-- end row -->
		</form>

	</div>
	<script type="text/javascript" language="javascript">
		

		function check()
		{
			alert('ngày tạo hiện tại đã đúng không nên chỉnh sửa');
			return false;
		}
		function check_cbx()
		{
			var element1 = document.getElementById('academic');
			var academic = element1.value;
			if (academic == "") 
			{
				alert("vui lòng chọn khóa trước khi nhập.");
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
