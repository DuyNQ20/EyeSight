<style type="text/css">
.body-table{
	width: 1000px;
	height: 400px;

	overflow: auto!important;
}
table{font-size: 12px!important;}
table>thead{
	
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
.th_gender{
	width: 80px;
}

/*css hàng tiêu đề của bảng dữ liệu*/
.th_eyesightid{}
.th_code{width: 80px;}
.th_date{width: 100px;}
.th_class{width: 50px}
.th_address{width: 100px;}
.th_eyesightid{width: 80px;}
.th_datesight{width: 100px}
.th_name{width: 150px;}
.th_note{width: 70px;}
.th_docan{width: 80px;}
.th_action{width: 50px;}
.body-table table thead tr th {margin: 0px;padding: 10px 0px 0px 5px;}
</style>
<div class="panel panel-primary" style="position: relative;">
	<div class="panel panel-heading">Trường tiểu học Ba Đình - Thống kê độ cận</div>
	<div class="panel panel-body">
		<div class="col-md-12" style="margin-bottom: 10px;background-color: #6c7b7a17;padding-top: 8px;">
			<form style="margin: 0px;padding: 0px;" action="admin.php?controller=eyesight" method="post">
				<div class="col-md-8" style="">
					<div class="col-md-5 cbox_academic">
						<p>khóa</p>
						<select class="form-control" onchange="send_data_academic()" id="academic" name="academic">
							<option value=""></option>
							<?php foreach ($arr_school as $rows) 
							{
								?>
								<option value="<?php echo $rows->academicYear_id; ?>"> <?php echo $rows->academicYear_name ?></option>
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
						<button type="submit" class="btn btn-default btn-sm">duyệt</button>
					</div>
				</div>
			</form>

			<div class="col-md-4">
				<div class="col-md-3 col-md-offset-3">
				</div>
				<div class="col-md-3">
					<p id="insert">
						<a href="admin.php?controller=add_edit_eyesight&act=add" class="btn btn-default btn-sm">
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
				<table id="example" class="cell-border hover" style="background-color: #42c0fb0f;">
					<thead>
						<tr>
							<th><input type="checkbox" name=""></th>
							<th ><p style="width: 40px;">STT</p></th>
							<th ><p class="th_code">Mã hs</p></th>
							<th ><p class="th_name">Họ tên</p></th>
							<th ><p class="th_gender">Giới tính</p></th>
							<th ><p class="th_date">Ngày sinh</p></th>
							<th ><p class="th_class">Lớp</p></th>
							<th ><p class="th_address">Địa chỉ</p></th>
							<!-- <th ><p Mã class="th_eyesightid">Mã độ cận</p></th> -->
							<th ><p class="th_datesight">Ngày khám</p></th>
							<th ><p class="th_docan">Độ cận</p></th>
							<th ><p class="th_note">Ghi chú</p></th>
							<th ><p class="th_datecreat">Ngày tạo</p></th>
							<th ><p class="th_action">Action</p></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($arr as $rows){?>
							<tr>
								<td><input type="checkbox" name="" disabled></td>
								<td style="text-align: center;"><?php echo $rows->stu_id ?></td>
								<td><?php echo $rows->stu_code ?></td>
								<td><?php echo $rows->stu_name ?></td>
								<td><?php echo $rows->stu_gender ?></td>
								<td><?php echo $rows->stu_birthday ?></td>
								<td><?php echo $rows->class_name ?></td>
								<td><?php echo $rows->stu_address ?></td>
								<!-- <td><?php echo $rows->eyesight_id?></td> -->
								<td><?php echo $rows->eyesight_date?></td>
								<td><?php echo $rows->eyesight_diopter?></td>
								<td><?php echo $rows->eyesight_note?></td>
								<td><?php echo $rows->eyesight_createdate?></td>
								<td>
									 <a href="admin.php?controller=add_edit_student&act=edit&stu_id=<?php //echo $rows->stu_id ?>"><span style="float: left;" class="glyphicon glyphicon-pencil"></span>sửa</a> 
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>


