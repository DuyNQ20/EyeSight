					<!-- container -->
					<div class="panel panel-primary">
						<div class="panel panel-heading">Quản lí tài khoản user</div>
						<div class="panel panel-body">
							<!-- action -->
							<div class="action" >
							  <div class="search-container">
							    <form action="">
							      <input type="text" placeholder="user.." name = "search">
							      <p>
							        <button type="button" class="btn btn-default btn-sm">
							          <span class="glyphicon glyphicon-search"></span> Search 
							        </button>
							      </p>
							    </form>
							  </div>

						      <p id="delete">
						        <button type="button" class="btn btn-default btn-sm">
						          <span class="glyphicon glyphicon-trash" style="color: red"></span> Xóa 
						        </button>
						      </p>
						      <p id="insert">
						        
						          
						          <a class="btn btn-default btn-sm" href="admin.php?controller=add_edit_taikhoan&action=add" ><span class="glyphicon glyphicon-plus" style="color: blue"></span> Thêm</a> 
						      </p>  
					          <p id="save">
						        <button type="button" class="btn btn-default btn-sm">
						          <span class="glyphicon glyphicon-floppy-save"></span> Lưu
						        </button>
						      </p>
							</div>
							<!-- end action -->
							<div class="body-table">
						<table class="table table-bordered table-hover" style="background-color: #42c0fb0f;">
						    	<thead>
						      <tr class="text-center">
						      	<th><input type="checkbox" name=""></th>
						        <th class="stt">STT</th>
						        <th>Tài khoản</th>
						        <th>Chức vụ</th>
						        <th>SĐT</th>
						        <th>Giới tính</th>
						        <th>Ngày sinh</th>
						        <th>Quê quán</th>
						        <th>Action</th>
						      </tr>
						    </thead>
						    <tbody>
						    	<?php 
						    		$dem = 0;
						    		foreach($arr as $row) {
						    	 ?>
						    	<tr>
						    		<td><input type="checkbox" name=""></td>
						    		<td><?php echo ++$dem; ?></td>
						    		<td><?php echo $row->acc_username; ?></td>
						    		<td><?php echo $row->acc_position; ?></td>
						    		<td><?php echo $row->acc_phone; ?></td>
						    		<td><?php echo $row->acc_gender=1?"Nam":"Nữ"; ?></td>
						    		<td><?php echo $row->acc_birthday; ?></td>
						    		<td><?php echo $row->acc_address; ?></td>						    		
						        <td>
						        
						        	<a href="admin.php?controller=add_edit_taikhoan&action=edit&id=<?php echo $row->acc_id; ?>"><span class="glyphicon glyphicon-pencil"></span>sửa</a>
						        </td>
						    	</tr>
						    
								<?php } ?>

						    </tbody>
								</table>
							
							</div>
						</div>
					</div>
					<!-- end container -->