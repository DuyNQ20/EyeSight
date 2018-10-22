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
						<select class="form-control col-md-12" id="selector">
							<?php foreach ($schools as $school) {?>
								<option value="<?php echo $school->school_id; ?>"><?php echo $school->school_name; ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
				<div class="form-group col-md-6">
					<label class="control-label col-md-4">Mã học sinh:</label>
					<div class="col-md-6">   
						<input type="text" id="student_code" name="student_code" value="" class="form-control">
					</div>
					<input  type="button" onclick="getStudentChart()" class="btn btn-primary col-md-2" value="Xem" name="">
				</div>
			</form>
			</div>
		</div>
		<div id="chart-container">
			<canvas id="line-chart"></canvas>
		</div>
	</div>



<script>
	$(document).ready(function () {
		// lấy giá trị value của option
		// function show_selected() {
	 //    	var selector = document.getElementById('selector');
	 //    	var value = selector[selector.selectedIndex].value;
	 //    	return value;
		// }

		// $("#search").click(function() {

		// 	var student_code = $("#student_code").val();
		// 	var school_id = show_selected();

		// 	$.post("public/data.php",
		// 	{
		// 		student_code: student_code,
		// 		school_id: school_id

		// 	},
		// 	function (data)
		// 	{
		// 		console.log(data);
		// 		var eyesight = [];
		// 		var year = [];
		// 		var name = [];
		// 		var dem = 0;
		// 		for (var i in data) {
		// 			if(dem < 1)
		// 			{
		// 				name.push(data[i].stu_name);
		// 				console.log(name[i]);
		// 				dem++;
		// 			}

		// 			eyesight.push(data[i].eyesight_diopter);
		// 			year.push(data[i].eyesight_date);
		// 		}

		// 		var chartdata = {
		// 			labels: year,
		// 			datasets: [{
		// 				label: name,
		// 				backgroundColor: '#49e2ff',
		// 				borderColor: '#f27173',
		// 				hoverBackgroundColor: '#CCCCCC',
		// 				hoverBorderColor: '#666666',
		// 				fill: false,
		// 				data: eyesight
		// 			}]
		// 		};



		// 		var graphTarget = $("#line-chart");

		// 		barGraph = new Chart(graphTarget, {
		// 			type: 'line',
		// 			data: chartdata,
		// 			options: {
		// 				responsive: true,
		// 				title: {
		// 					display: true,
		// 					text: 'Biểu đồ độ cận'
		// 				},
		// 				tooltips: {
		// 					mode: 'index',
		// 					intersect: false,
		// 				},
		// 				hover: {
		// 					mode: 'nearest',
		// 					intersect: true
		// 				},
		// 				scales: {
		// 					xAxes: [{
		// 						display: true,
		// 						scaleLabel: {
		// 							display: true,
		// 							labelString: 'Năm'
		// 						}
		// 					}],
		// 					yAxes: [{
		// 						display: true,
		// 						scaleLabel: {
		// 							display: true,
		// 							labelString: 'Độ cận'
		// 						}
		// 					}]
		// 				}
		// 			}
		// 		});


		// 	});
		// });

		
	});
</script>