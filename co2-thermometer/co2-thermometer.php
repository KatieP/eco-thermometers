<html>
	<head>
		<link rel="stylesheet" type="text/css" href="thermometer.css">
		
		<meta http - equiv = "content-type"content = "text/html; charset=UTF-8">
  		<script type='text/javascript' src='http://code.jquery.com/jquery-1.5.2.js'></script>
  		<script type='text/javascript' src='thermometer.js'></script>
  		<script type='text/javascript' src='jquery.thermometer.js'></script>
		<style type = 'text/css'></style>
		
		
	</head>
	
	<body>

		<div class="container">
	
			<h1> Carbon Dioxide Quest</h1>

			<?php
	
			//Get member data
	
			#$sql_user = 'SELECT name, user_id, lat, long FROM members WHERE';
			#mysql_fetch_array($sql);
	
			$member_name = 'Nancy';
			$member_state = 'New York';
	
	
			//Match member location with array of co2 emissions per capita
	
			$state_co2 = array (
							"DC" => "5.470",
							"New York" => "8.970",
							"Vermont" => "9.640",
							"California" => "9.960",
							"Connecticut" => "10.360",
							"Idaho" => "10.410",
							"Oregon" => "10.520",
							"Rhode Island" => "10.600",
							"Massachusetts" => "11.180",
							"Washington" => "11.400",
							"Maryland" => "12.230",
							"New Hampshire" => "12.850",
							"Florida" => "13.010",
							"New Jersey" => "13.450",
							"Delaware" => "13.550",
							"Hawaii" => "13.680",
							"Virginia" => "13.710",
							"Maine" => "13.940",
							"Nevada" => "14.090",
							"North Carolina" =>"14.900",
							"Arizona" => "14.960",
							"Michigan" => "16.760",
							"Tennessee" => "17.060",
							"Wisconsin" => "17.430",
							"Minnesota" => "17.570",
							"Georgia" => "17.860",
							"Illinois" => "17.980",
							"South Carolina" => "18.420",
							"South Dakota" => "18.590",
							"Colorado" => "18.990",
							"Pennsylvania" => "19.970",
							"Ohio" => "21.490",
							"Mississippi" => "22.140",
							"Missouri" => "22.620",
							"Arkansas" => "22.700",
							"Utah" => "22.960",
							"Kansas" => "25.660",
							"Texas" => "25.980",
							"Nebraska" => "26.200",
							"New Mexico" => "26.410",
							"Oklahoma" => "27.480",
							"Alabama" => "27.640",
							"Iowa" => "29.620",
							"Indiana" => "33.280",
							"Kentucky" => "34.620",
							"Montana" => "35.170",
							"Louisiana" => "46.540",
							"West Virginia" => "53.240",
							"Alaska" => "54.140",
							"North Dakota" => "72.480",
							"Wyoming" => "114.990" );
	
		
					//Co2 for the user's state
					$co2pp = (INT)$state_co2[$member_state];	
		
					//Rank of the user against other states
					$co2_rank_nation = '';
		
					$co2_rank_world = '';
		
					//Find states in front and behind and the difference in CO2
		
					$state_infront = $state_co2[$member_state];
					$infront_difference = '';
					$state_behind = '';
					$behind_difference = '';
					
					echo '<p>Hi '.$member_name.'! You release, on average '. $co2pp .' tonnes of CO2 per year.</p>';
					
					//Play with the thermometor for different use cases
					//1. Solar panel - choose the option if everyone in the region did this, what would happen to the thermometer
					//2. Ev
					//3. Smart meters	
				    //-> 
				    
				    echo '<span class="thermometer">20&deg;C</span>';
				    
				    ?>
					
					<!--Pinched from here https://code.google.com/p/jsthermometer/source/checkout-->
					<script type='text/javascript'>//<![CDATA[ 
					$(window).load(function(){
					//Sample to create a thermometer
					//var _ = {
					//    bulbRadius: 20
					//}
					$(function() {
   					 //ctx = $('#demo')[0].getContext('2d');
    				var w = $('#demo').width();
    				var h = $('#demo').height();

   					 $('#demo').thermometer({
      				  w: w,
      				  h: h,
       				 color: {
         			   label: 'rgba(255, 255, 255, 1)',
         			   tickLabel: 'rgba(255, 0, 0, 0.4)'
       					 },
       				centerTicks: false,
      				majorTicks: 4,
        			minorTicks: 4,
        			max: 30,
        			min:0,
        			scaleTickLabelText: 1.15,
        			scaleLabelText: 0.9,
        			scaleTickWidth: 1.5,
        			unitsLabel: " tonnes"
    				});


    				//g.drawThermometerContainer();
    				//_.ctx = ctx;
    				//_.w = w;
    				//_.h = h;
    				$('#demo').thermometer('setValue',$('#fillTo').val());
    				//g.redrawFill();
    				$('#fillToButton').click(function() {
        			//g.clearCanvas();
        			//g.drawThermometerContainer();
        			$('#demo').thermometer('setValue',$('#fillTo').val());
        			//g.redrawFill();
    				});
   				 $('#fillTo').change(function() {
        			//g.clearCanvas();
        			//g.drawThermometerContainer();
        			$('#demo').thermometer('setValue',$('#fillTo').val());
        			//g.redrawFill();
    				});

				});


				$(function() {
    			//ctx = $('#demo')[0].getContext('2d');
    			var w = $('#demo2').width();
    			var h = $('#demo2').height();

    			$('#demo2').thermometer({
        		scaleLabelText: 0.9,
        		unitsLabel: " pH",
        		color: {
            		label: 'rgba(55, 255, 255, 1)',
        		},
        		max: 12,
        		min: 4
        		//color: {
        		//    fill: "rgba(0,255,0,1)",
        		//    label:'#999'
        		//},
        		//bulbRadiusByHeight: true
    			});


    			//g2.drawThermometerContainer();
    			//_.ctx = ctx;
    			//_.w = w;
    			//_.h = h;
    			$('#demo2').thermometer('setValue',$('#fillTo2').val());
    			//g2.redrawFill();
    			$('#fillToButton2').click(function() {
        		//g2.clearCanvas();
        		//g2.drawThermometerContainer();
        		$('#demo2').thermometer('setValue',$('#fillTo2').val());
        		//g2.redrawFill();
    			});

    			$('#fillTo2').change(function() {
        		//g.clearCanvas();
        		//g.drawThermometerContainer();
       			 $('#demo2').thermometer('setValue',$('#fillTo2').val());
        		//g.redrawFill();
    			});


			});



			function test() {
    			console.log("demo");
    			alert("test");
			}
		});//]]> 
		
		</script>
	

					<div>
    					<canvas id="demo" height="450" width="400"></canvas><div style="clear:both"></div>
    					<input id="fillTo" value="<?php echo (INT)$co2pp; ?>" /><button id ='fillToButton'>Redraw Gauge</button>
					</div>



		

			<p> Red > 30 tonnes of CO2 per year </p>
			<p> Orange 20 - 30 tonnes of CO2 per year</p>
			<p> Yellow 10 - 20 tonnes of CO2 per year</p>
			<p> Light Green 3 - 10 tonnes of CO2 per year</p>
			<p> Deep Green 0 - 3 tonnes of CO2 per year</p>

			<p> Scale = 5 - 115 tonnes of CO2 per person per year</p>

			<?php
			echo '<p>You live in '.$member_state .', that means you release, on average '. $co2pp .' tonnes of CO2 per year. 
			You are currently ranking '. $co2_rank_nation .' in the USA and '. $co2_rank_world .' in the world out of 120 regions in the game.</p> 
			
			<p> '. $state_infront .' is beating you by '. $infront_difference .' tonnes, but you\'re just in front of '. $state_behind .' by '.$behind_difference.' tonnes</p>
			
			<p>About 3 tonnes of CO2 per year per person is considered a sustainable limit for each person on the earth</p>';

			?>

			<br /><br />
			
			<h1>Chose a path to win the game</h1>


			<div id="circle1" class="circle"><p><div class = "circle-text">Buy: <br /> Chose a low carbon product</div></div>
			
			<div id="circle2" class="circle"><p><div class = "circle-text">Do:<br /> Change a behaviour</div></div>
			
			<div id="circle1" class="circle"><p><div class = "circle-text">Push: <br />Make a law</div></div>
			
			
			
		
		</div>
	</body>
</html>

