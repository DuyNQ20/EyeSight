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
					<input  type="button" id="search" class="btn btn-primary col-md-2" value="Xem" name="">
				</div>
				
			</form>
		</div>
	</div>
	<canvas id="pie-chart" width="800" height="450"></canvas>
</div>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>

<script>
	function show_selected() {
			var selector = document.getElementById('selector');
			var value = selector[selector.selectedIndex].value;
			return value;
		}
</script>

<script>

	$(document).ready(function () {
		// lấy giá trị value của option
		
		$('#selector').on('change',function(){   
			var id = this.selectedOptions[0].getAttribute('value');
			console.log(id);
			//window.location.href = 'admin.php?url=Class_chart&school_id='+selector;
			$.post("public/data.php",
			{
				id: id
			},
			function (data)
			{
				console.log(data);
				document.getElementById("academic").innerHTML = data;
			});
		});

		

		$("#search").click(function() {

			// var student_code = $("#student_code").val();
			// var school_id = show_selected();

			$.post("public/data.php",
			{
				schoolID: "120"
			},
			function (data)
			{
				var eyesight = []; // tổng hợp độ cận
				var percent = []; // tính phần trăm
				for (var i in data) {
					var dem = 0;
					for (var j = eyesight.length - 1; j >= 0; j--) {

						if(eyesight[j]==data[i].eyesight_diopter) // kiểm tra độ cận đã có trong mảng
						{
							dem++;
							break;// nếu đã có trong mảng thì thoát vòng lặp
						}
					}
					if(dem==0) // nếu chưa có trong mảng
					{
						eyesight.push(data[i].eyesight_diopter);// thêm vào mảng
					}
				}
				eyesight = eyesight.sort();
				
				for (var i = 0; i < eyesight.length; i++) {
					// $.post("public/data.php",
					// {
					// 	check: eyesight[i]

					// },
					// function (response)
					// {
					// 	percent.push(response.length);
					// });
					$.ajax({
						url: 'public/data.php',
						data: {
							check: eyesight[i] // gửi dữ liệu lên server
						},
						async: false,
						type: 'POST',
						success: function(response) {
							var phantram = ((response.length * 100)/data.length); // tính phần trăm với độ cận eyesight[i]
							percent.push(phantram); // thêm vào mảng 
						}
					});
				}
				console.log(percent);
				
				var graphTarget = $("#pie-chart");


				graphTarget = new Chart(document.getElementById("pie-chart"), {
					type: 'pie',
					data: {
						labels: eyesight,
						datasets: [{
							label: "Hello",
							backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#ff9f40","#ff6384","#3f51b5"],
							data: percent

						}]
					},
					options: {
						title: {
							display: true,
							text: 'Biểu đồ độ cận của lớp học'
						},
						plugins: {
							datalabels: {
								color: 'white',
								font: {
									size: '24'
								},
								align: 'end',
								formatter: function(value, context) {
									return value + '%';
								}
							}
							
						},
						tooltips: {
							callbacks: {
								label: function(tooltipItems, data) {
									return " Độ cận " + data.labels[tooltipItems.index] + 
									" : " + 
									data.datasets[tooltipItems.datasetIndex].data[tooltipItems.index] +
									'%';
								}
							}
						}
					}
				});


			});
		});


	});
</script>