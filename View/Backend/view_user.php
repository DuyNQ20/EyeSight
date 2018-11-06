
<div class="panel panel-primary">
	<div class="panel-heading">User</div>
	<div class="panel-body" style="height: 500px;">
		<!-- action -->
		<div class="action" >
			<p id="delete">
				<button type="button" class="btn btn-default btn-sm">
					<span class="glyphicon glyphicon-trash" style="color: red"></span> Xóa 
				</button>
			</p>
			<p id="insert">

				<a href="admin.php?controller=add_edit_user&act=add" class="btn btn-default btn-sm">
					<span class="glyphicon glyphicon-plus" style="color: blue"></span> Thêm
				</a>
			</p>  
			<p id="save">
				<button type="button" class="btn btn-default btn-sm">
					<span class="glyphicon glyphicon-floppy-save"></span> Lưu
				</button>
			</p>
		</div>
		<!-- end action -->
		<table class="table table-bordered table-hover" id="example" style="width: 100%;background-color:#00b0ff1c;">
			<thead>
				<tr>
					<th>acc_id</th>
					<th>acc_code</th>
					<th>acc_username</th>
					<th>role_name</th>
					<th>user_fullname</th>
					<th>user_phone</th>
					<th>user_email</th>
					<th>action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($arr as $rows)	{?>
					<tr>
						<td><?php echo $rows->acc_id ?></td>
						<td><?php echo $rows->acc_code ?></td>
						<td><?php echo $rows->acc_username ?></td>
						
						<td><?php echo $rows->role_name ?></td>
						<td><?php echo $rows->user_fullname ?></td>
						<td><?php echo $rows->user_phone ?></td>
						<td><?php echo $rows->user_email ?></td>

						<td>
							<a  href="admin.php?controller=add_edit_user&act=delete&acc_code=<?php echo $rows->acc_code ?>"  ​>
								<span class="glyphicon glyphicon-remove" ></span>xóa
							</a>&nbsp;
							<a href="admin.php?controller=add_edit_user&act=edit&acc_code=<?php echo $rows->acc_code ?>" >
								<span class="glyphicon glyphicon-pencil"></span>sửa
							</a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>

