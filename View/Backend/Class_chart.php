<!-- bang bieu do -->
<div class="panel panel-primary" >
	<div class="panel panel-heading boxheader"> 
	Biểu diễn độ cận thị của học sinh </div>
	<div class="panel panel-body">
		<div class="seach-school">
			<form class="form-horizontal"  method="POST"  >
				<div class="form-group col-md-6">
					<label class="control-label col-md-4">Chọn trường:</label>
					<div class="col-md-8">   
						<select class="form-control col-md-12"  id="selector">
							<?php foreach ($schools as $school) {?>
								<option value="<?php echo $school->school_id; ?>"><?php echo $school->school_name; ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
				<div class="form-group col-md-6">
					<label class="control-label col-md-4">Chọn Khóa:</label>
					<div class="col-md-8">   
						<select class="form-control col-md-12" id="academic">
						</select>
					</div>
				</div>
				<div class="form-group col-md-6">
					<label class="control-label col-md-4">Chọn lớp:</label>
					<div class="col-md-8">   
						<select class="form-control col-md-12" id="class">
						</select>
					</div>
				</div>
				<div class="form-group col-md-6">
					<label class="control-label col-md-4">Chọn năm:</label>
					<div class="col-md-8">   
						<select class="form-control col-md-12">
						</select>
					</div>
				</div>
				<div class="form-group col-md-6">
					<input  type="button" onclick="getClassChart()" class="btn btn-primary col-md-2" value="Xem" name="">
				</div>
				
			</form>
		</div>
	</div>
	<canvas id="pie-chart" width="800" height="450"></canvas>
</div>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>

<script>
	
</script>

<script>

	$(document).ready(function () {
		send_data(); // gọi hàm thực hiện load dữ liệu mặc định combobox
		$(document).ready(function () {
			$(document).ready(function () {
				$(document).ready(function () {
					send_data_class();
				});
			});
			
		})
	});

	$("#selector").change(function() {
		send_data();
		$(document).ready(function () {
			$(document).ready(function() {
				send_data_class();
			});
		});
	});
	$("#academic").change(function() {
		send_data_class();
	})
	
	
</script>