<!-- bang bieu do -->
<div class="panel panel-primary" >
	<div class="panel panel-heading boxheader"> 
	Biểu diễn độ cận thị của học sinh </div>
	<div class="panel panel-body">
		<div class="seach-school">
			<form  method="POST"  >
				<div class="form-group col-md-6">
					<label >Chọn trường:</label>
					<select class="form-control col-md-8">
						<?php foreach ($schools as $school) {?>
							<option><?php echo $school->school_name; ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group col-md-6">
					<label class="control-label col-md-2">Mã học sinh:</label>
					<div class="col-md-3">   
						<input type="text" id="student_id" name="student_id" value="" class="form-control">
					</div>
					<input type="button" id="search" class="btn btn-primary" value="Xem" name="">
				</div>
			</form>

				<!-- <div class="body-table">
					<table class="table table-bordered table-hover" style="background-color: #42c0fb0f;">
						<thead>
							<tr>
								<th>Chọn trường cần so sánh</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><input type="checkbox" name="" checked=""><span>TH Minh Khai</span></td>
								<td><input type="checkbox" name="" checked=""><span>TH Quang Trung</span></td>
								<td><input type="checkbox" name=""><span>TH Từ Liêm</span></td>
								<td><input type="checkbox" name=""><span>TH Lê Lợi</span></td>
							</tr>
							<tr>
								<td><input type="checkbox" name="" checked=""><span>TH Cầu Diễn</span></td>
								<td><input type="checkbox" name=""><span>TH Xuân Thủy</span></td>
								<td><input type="checkbox" name="" checked=""><span>TH Từ Liêm</span></td>
								<td><input type="checkbox" name="" checked=""><span>TH Lê Lợi</span></td>
							</tr>
						</tbody>
					</table>

				</div> -->
			</div>
		</div>
		<div id="chart-container">
			<canvas id="line-chart"></canvas>
		</div>
	</div>


	<style type="text/css">

	#chart-container {
		width: 100%;
		height: auto;
	}
</style>

<script>
	$(document).ready(function () {
		$("#search").click(function() {
			var barGraph;
			if(barGraph != undefined || barGraph != null)
			{
				barGraph.destroy();
			}
			var student_id = $("#student_id").val();
			$.post("public/data.php",
			{
				abc: student_id
			},
			function (data)
			{
				console.log(data);
				var eyesight = [];
				var year = [];
				var name = [];
				var dem = 0;
				for (var i in data) {
					if(dem < 1)
					{
						name.push(data[i].stu_name);
						console.log(name[i]);
						dem++;
					}

					eyesight.push(data[i].eyesight_diopter);
					year.push(data[i].eyesight_date);
				}

				var chartdata = {
					labels: year,
					datasets: [{
						label: name,
						backgroundColor: '#49e2ff',
						borderColor: '#f27173',
						hoverBackgroundColor: '#CCCCCC',
						hoverBorderColor: '#666666',
						fill: false,
						data: eyesight
					}]
				};



				var graphTarget = $("#line-chart");

				barGraph = new Chart(graphTarget, {
					type: 'line',
					data: chartdata,
					options: {
						responsive: true,
						title: {
							display: true,
							text: 'Biểu đồ độ cận'
						},
						tooltips: {
							mode: 'index',
							intersect: false,
						},
						hover: {
							mode: 'nearest',
							intersect: true
						},
						scales: {
							xAxes: [{
								display: true,
								scaleLabel: {
									display: true,
									labelString: 'Năm'
								}
							}],
							yAxes: [{
								display: true,
								scaleLabel: {
									display: true,
									labelString: 'Độ cận'
								}
							}]
						}
					}
				});


			});
		});

		
	});
</script>