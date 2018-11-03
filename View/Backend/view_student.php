	<style type="text/css">
	.body-table{
		width: 1025px;
		height: 400px;
		overflow: auto!important;
	}
	table>thead{
		font-size: 12px!important;
		background-color: #000bffc2;
		color: white;
	}

	.cbox_academic{
		margin-left: -42px;
	}
	.cbox_academic>p{
		float: left;
		margin-right: 5px;
		margin-top: 5px;
	}
	.cbox_academic>select{
		width: 195px;
		float: left;
	}
	.cbox_class>p{
		float: left;
		margin-right: 9px;
		margin-top: 5px;
		margin-left: -12px;
	}
	.cbox_class>select{
		width: 195px;
	}
	.btn_seach{
		margin-left: -35px;
	}
	/*css hàng tiêu để của bảng*/
	.th_sex{
		width: 51px;
		margin: 0px;
		padding: 0px;
	}
	.th_datebirthday{
		margin: 0px;
		padding: 0px;
		width: 64px;
	}
	.th_adress{
		margin: 0px;
		padding: 0px;
		width: 91px;
	}
	.th_birthplace{
		padding: 0px;
		margin: 0px;
		width: 71px;
	}
</style>
<script type="text/javascript">
	function select_all()
	{
		var e1 = document.getElementById('check_all');
		var e2 = document.getElementsByClassName('cbx_student');
		if (e1.checked == true) {
			for(var i = 0; i <= e2.length; i++)
			{
				e2[i].checked = true;
			}
		}
		else if ( e1.checked == false) {
			for(var i = 0; i <= e2.length; i++)
			{
				e2[i].checked = false;
			}
		}


	}

</script>
<?php
$action = isset($_GET["action"])?$_GET["action"]:"";
if ($action == 'success_add') {
	?>
	<div class="alert alert-success alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Thêm học sinh thành công!</strong> 
	</div>
<?php }else if ($action == 'fail_add') {
	?>	
	<div class="alert alert-warning alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Lỗi rồi!</strong> vui lòng thử lại.
	</div>
<?php }else if ($action == 'success_edit') {
	?>
	<div class="alert alert-success alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Chỉnh sửa thành công!</strong> 
	</div>
<?php }else if ($action == 'fail_edit') {
	?>
	<div class="alert alert-warning alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Lỗi rồi!</strong> vui lòng thử lại.
	</div>
<?php } ?>
<div class="panel panel-primary" style="position: relative;">
	<div class="panel panel-heading">Trường tiểu học Ba Đình - Danh sách học sinh </div>
	<div class="panel panel-body">
		<div class="col-md-12" style="margin-bottom: 10px;background-color: #6c7b7a17;padding-top: 8px;">
			<form style="margin: 0px;padding: 0px;" action="admin.php?controller=student" method="post">
				<div class="col-md-8" style="">
					<div class="col-md-5 cbox_academic">
						<p>khóa</p>
						<select class="form-control" onchange="send_data_academic()" id="academic" name="academic">
							<option value=""></option>
							<?php foreach ($arr_school as $rows) 
							{
								?>
								<option value="<?php echo $rows->academicYear_id; ?>"> <?php echo $rows->academicYear_name ?> </option>
							<?php } ?>
						</select>
					</div>
					<div class="col-md-5 cbox_class">
						<p>lớp</p>
						<select class="form-control" id="class_name" name="class_name">
							<option></option>
						</select>
					</div>
					<div class="col-md-2 btn_seach">
						<button type="submit" class="btn btn-default">duyệt</button>
					</div>
				</div>
			</form>

			<div class="col-md-4">
				<div class="col-md-3 col-md-offset-3">
					<p id="delete"> 
						<button type="button" class="btn btn-default btn-sm">
							<span class="glyphicon glyphicon-trash" style="color: red"></span> Xóa 
						</button>
					</p>
				</div>
				<div class="col-md-3">
					<p id="insert">
						<a href="admin.php?controller=add_edit_student&act=add" class="btn btn-default btn-sm">
							<span class="glyphicon glyphicon-plus" style="color: blue"></span>Thêm
						</a>
					</p> 
				</div>
				<div class="col-md-3">
					<p id="save">
						<button type="button" class="btn btn-default btn-sm">
							<span class="glyphicon glyphicon-floppy-save"></span> Lưu
						</button>
					</p>
				</div>
			</div>
		</div>
		<div class="student">
			<div class="body-table">
				<table id="example" class="cell-border hover">
					<thead>
						<tr>
							<th><input type="checkbox" name=""  id="check_all" onclick="select_all()"></th>
							<th>STT</th>
							<th>Mã hs</th>
							<th style="padding-right: 100px;" >Name</th>
							<th><p class="th_sex">Giới tính</p></th>
							<th><p class="th_datebirthday">Ngày sinh</p></th>
							<th>Lớp</th>
							<th>Khóa</th>
							<th><p class="th_birthplace">Nơi sinh</p></th>
							<th><p class="th_adress">Địa chỉ</p></th>
							<th><p style="margin: 0px;padding: 0px;width: 100px;">Họ tên bố<p></th>
							<th>SDT bố</th>
							<th>Họ tên mẹ</th>
							<th>SDT mẹ</th>
							<th>Ngày tạo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($arr as $rows){?>
							<tr style="font-size: 13px!important">
								<td><input type="checkbox" name="" class="cbx_student" ></td>
								<td style="text-align: center;"><?php echo $rows->stu_id ?></td>
								<td><?php echo $rows->stu_code ?></td>
								<td style="width: 200px!important"><?php echo $rows->stu_name ?></td>
								<td><?php echo $rows->stu_gender ?></td>
								<td><?php echo $rows->stu_birthday ?></td>
								<td><?php echo $rows->class_name?></td>
								<td><?php echo $rows->academicYear_name?></td>
								<td><?php echo $rows->stu_birthplace?></td>
								<td><?php echo $rows->stu_address?></td>
								<td><?php echo $rows->stu_fathername?></td>
								<td><?php echo $rows->stu_fatherphone?></td>
								<td><?php echo $rows->stu_mothername?></td>
								<td><?php echo $rows->stu_motherphone?></td>
								<td><?php echo $rows->stu_createdate?></td>



								<td><a onclick="return window.confirm('bạn có chắc chắn muốn xóa học sinh này')" href="admin.php?controller=student&act=delete&stu_id=<?php echo $rows->stu_id ?>">
									<span class="glyphicon glyphicon-remove" ></span>xóa</a>&nbsp;<br>

									<a href="admin.php?controller=add_edit_student&act=edit&stu_id=<?php echo $rows->stu_id ?>"><span class="glyphicon glyphicon-pencil"></span>sửa</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>


</div>


