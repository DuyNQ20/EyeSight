

// ----------------------------- ClassChart ------------------------------

function show_selected_id(id) {
	var selector = document.getElementById(id);
	var value = selector[selector.selectedIndex].value;
	return value;
}
// trả về danh sách các khối
function send_data()
{
	var id_school = show_selected_id('selector');
	$.post("public/data.php",
	{
		id_school: id_school
	},
	function (data)
	{
		document.getElementById("academic").innerHTML = data;
	});

}

function send_year()
{
	var id_school = show_selected_id('selector');
	$.post("public/data.php",
	{
		id_school_year: id_school
	},
	function (data)
	{
		document.getElementById("academic").innerHTML = data;
	});

}

function send_data_class()
{	
	var id_school = show_selected_id('selector');
	var id_academic = show_selected_id('academic');

	$.post("public/data.php",
	{
		id_school: id_school,
		id_academic: id_academic
	},
	function (data)
	{
		console.log("Danh sách lớp học:" + data);
		document.getElementById("class").innerHTML = data;
	});
}
function getClassChart() {

	var id_school = show_selected_id('selector');
	var id_academic = show_selected_id('academic');
	var id_class = show_selected_id('class');

	resetCanvas();
	$.post("public/data.php",
	{
		schoolID: id_school,
		academicID: id_academic,
		classID: id_class
	},
	function (data)
	{
		console.log("Số lượng học sinh của 1 lớp: " + data.length);
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
				console.log("Danh sách độ cận của một lớp: " + eyesight);
				for (var i = 0; i < eyesight.length; i++) {
					$.ajax({
						url: 'public/data.php',
						data: {
							check: eyesight[i] // gửi dữ liệu lên server
						},
						async: false,
						type: 'POST',
						success: function(response) {
							console.log("Số lượng học sinh có độ cận " + eyesight[i] + " : "+ response.length);
							var phantram = ((response.length * 100)/data.length); // tính phần trăm với độ cận eyesight[i]
							percent.push(phantram); // thêm vào mảng 
						}
					});
				}
				


				var graphTarget = document.getElementById("pie-chart").getContext("2d");

				graphTarget = new Chart(graphTarget, {
					type: 'pie',
					data: {
						labels: eyesight,
						datasets: [{
							label: "Hello",
							backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#ff9f40","#ff6384","#3f51b5","#79df29"],
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

};

// Distroy old Canvas
function resetCanvas(){
  $('#pie-chart').remove(); // this is my <canvas> element
  $('#graph-container').append('<canvas id="pie-chart"><canvas>');
  canvas = document.querySelector('#pie-chart');
  ctx = canvas.getContext('2d');
  ctx.canvas.width = 800; // resize to parent width
  ctx.canvas.height = 400; // resize to parent height
  var x = canvas.width/2;
  var y = canvas.height/2;
  ctx.font = '10pt Verdana';
  ctx.textAlign = 'center';
  ctx.fillText('This text is centered on the canvas', x, y);
};

// ----------------------------- StudentChart ------------------------------
function getStudentChart() {

	var student_code = $("#student_code").val();
	var school_id = show_selected_id("selector");

	$.post("public/data.php",
	{
		student_code: student_code,
		school_id: school_id

	},
	function (data)
	{
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
};




