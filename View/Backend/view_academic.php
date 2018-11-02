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
.action{
	background-color: #f1f1f1;
	padding:0px;
	margin: 0px;
	margin-bottom: 5px;
	
}
.btn_del:hover{
	cursor: pointer;
	text-decoration: none;
}
</style>
<?php
$stt = isset($_GET["action"])?$_GET["action"]:"";
if ($stt == 'success') {
	?>
	<div class="alert alert-success alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Xóa thành công!</strong> 
	</div>
<?php }else if ($stt == 'not_success') {
	?>
	<div class="alert alert-warning alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Lỗi rồi!</strong> vui lòng thử lại.
	</div>
<?php } ?>
<div class="panel panel-primary" style="position: relative;">
	<div class="panel panel-heading">Trường tiểu học Ba Đình - Danh sách các khóa</div>
	<div class="panel panel-body">
		<div class="col-md-12 action">
			<div class="col-md-1 col-md-offset-11">
				<p id="insert">
					<a href="admin.php?controller=add_edit_academic&act=add" class="btn btn-default btn-sm">
						<span class="glyphicon glyphicon-plus" style="color: blue"></span>Thêm
					</a>
				</p> 
			</div>
		</div>
		<div class="student">
			<div class="body-table">
				<table id="example" class="cell-border hover">
					<thead>
						<tr>
							<th><input type="checkbox" name=""></th>
							<th>ID</th>
							<th>Tên khóa</th>
							<th style="padding-right: 100px;" >Năm bắt đầu</th>
							<th>Năm kết thúc</th>
							<th>Số lớp</th>
							<th>Ngày tạo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($arr_academic as $rows){?>
							<tr style="font-size: 13px!important">
								<td><input type="checkbox" name="" disabled></td>
								<td style="text-align: center;"><?php echo $rows->academicYear_id ?></td>
								<td style="width: 200px!important"><?php echo $rows->academicYear_name ?></td>
								<td><?php echo $rows->academicYear_begin ?></td>
								<td><?php echo $rows->academicYear_end ?></td>
								<td><?php echo $rows->academicYear_classnumber?></td>
								<td><?php echo $rows->acadamicYear_createdate?></td>
								<td>
									<a  class="btn_del">
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

	<div class="modal fade" id="dialog_confirm">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" data-dismiss="modal">&times;</button>
					<p>Xác nhận</p>
				</div>
				<div class="modal-body">
					<p>Bạn có chắc chắn muốn xóa không?</p>
				</div>
				<div class="modal-footer">
					<a href="admin.php?controller=academic&act=delete&academicYear_id=<?php echo $rows->academicYear_id ?>" class="btn btn-primary">Delete</a>
					<a  type="button" class="btn btn-default" data-dismiss="modal">Close</a>
				</div>
			</div>
		</div>
	</div>

	<script language="javascript">
		$('.btn_del').click(function(){
			$('#dialog_confirm').modal();
		});
	</script>