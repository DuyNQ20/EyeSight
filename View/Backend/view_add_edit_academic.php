<style type="text/css">
.add_academic{
	padding: 10px 0px 10px 0px;
	margin-bottom: 20px;
}
.add_academic input
{
	background-color: #0017ff0d;
	background-color: #0017ff0d;
	margin-bottom: 7px;
}
</style>
<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading">Add academic</div>
		<div class="panel-body">
			<form method="post" action="<?php echo $form_action; ?>">
				<div class="add_academic" style="border: 1px solid #0000002e">
					<div class="row">
						<div class="col-md-5 col-md-offset-1">
							<div class="col-md-3">Tên khóa</div>
							<div class="col-md-9">
								<input type="text" name="academicYear_name" class="form-control" value="<?php echo $arr->academicYear_name ?>">
							</div>
						</div>
						<div class="col-md-5">
							<div class="col-md-3">Số lớp</div>
							<div class="col-md-9">
								<input type="number" name="academicYear_classnumber" class="form-control" value="<?php echo isset($arr->academicYear_classnumber)?$arr->academicYear_classnumber:"" ?>">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5 col-md-offset-1">
							<div class="col-md-3">Năm bắt đầu</div>
							<div class="col-md-9">
								<input type="date" name="academicYear_begin" class="form-control" >
							</div>
						</div>
						<div class="col-md-5">
							<div class="col-md-3">Năm kết thúc</div>
							<div class="col-md-9">
								<input type="date" name="academicYear_end" class="form-control" >
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5 col-md-offset-1">
							<div class="col-md-3">Ngày tạo</div>
							<div class="col-md-9">
								<input type="text" name="acadamicYear_createdate" class="form-control" value="<?php echo date('d/m/Y'); ?>" >
							</div>
						</div>

					</div>

				</div>

				<!-- row -->
				<div class="form-group">
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
	</div>