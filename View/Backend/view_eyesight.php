<div class="panel panel-primary" style="position: relative;">
	<div class="panel panel-heading">Trường tiểu học Ba Đình </div>
	<div class="panel panel-body">
		<!-- action -->
		<div class="action" >
			<div class="search-academicYear" style="float: left;">
				<span style="margin-left: 5px">Khóa</span>
				<select style="width: 238px;height: 25px;margin-right: 5px;margin-left: 5px;width: 100px;">
					<?php foreach ($arr3 as $row) {
						?>
						<option><?php echo $row->academicYear_name ?></option>
					<?php } ?>
				</select>
			</div>

			<div class="search-class" style="float: left;">
				<span>lớp</span>
				<select style="width: 238px;height: 25px;margin-right: 50px;margin-left: 10px;width: 100px;">
					<?php foreach ($arr2 as $rows) {
						?>
						<option><?php echo $rows->class_name ?></option>
					<?php } ?>
				</select>
			
				
			</div>
			<p id="delete">
				<button type="button" class="btn btn-default btn-sm">
					<span class="glyphicon glyphicon-trash" style="color: red"></span> Xóa 
				</button>
			</p>
			<p id="insert">

				<a href="admin.php?controller=add_edit_eyesight&act=add" class="btn btn-default btn-sm">
					<span class="glyphicon glyphicon-plus" style="color: blue"></span>Thêm
				</a>
			</p>  
			<p id="save">
				<button type="button" class="btn btn-default btn-sm">
					<span class="glyphicon glyphicon-floppy-save"></span> Lưu
				</button>
			</p>
		</div>
		<!-- end action -->
		<style type="text/css">
		.body-table{
			width: 1000px;
			height: 400px;

			overflow: auto!important;
		}
	</style>
	<div class="student">
		<div class="body-table">
			<table id="example" class="table table-bordered table-hover" style="background-color: #42c0fb0f;">
				<thead>
					<tr>
						<th><input type="checkbox" name=""></th>
						<th style="text-align: center;">stt</th>
						<th>code </th>
						<th>name </th>
						<th>gender </th>
						<th>birthday </th>
						<th>class</th>
						
						<th>eyesight_id</th>
						<th>eyesight_date</th>
						<th>eyesight_diopter</th>
						
						<th>eyesight_note</th>
						<th>eyesight_createdate</th>

						<th>Action</th>
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
							<td><?php echo $rows->eyesight_id?></td>
							<td><?php echo $rows->eyesight_date?></td>
							<td><?php echo $rows->eyesight_diopter?></td>
							
							<td><?php echo $rows->eyesight_note?></td>
							<td><?php echo $rows->eyesight_createdate?></td>
							<td><a href="admin.php?controller=add_edit_student&stu_id=<?php echo $rows->stu_id ?>">
								<span class="glyphicon glyphicon-remove" ></span>xóa</a>&nbsp;<br>
								<!-- <a href="admin.php?controller=add_edit_student&act=edit&stu_id=<?php //echo $rows->stu_id ?>"><span class="glyphicon glyphicon-pencil"></span>sửa</a> -->
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

</div>


