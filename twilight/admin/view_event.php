<?php include 'db_connect.php' ?>
<?php
if(isset($_GET['id'])){

$id=$_GET['id'];
$sql="SELECT * FROM events,venue WHERE events.venue_id= venue.id AND events.id='$id'";
$qry=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($qry);
$event_name=$row['event_name'];
$venue=$row['venue'];
$name=$row['name'];
$schedule=$row['schedule'];
$contact=$row['contact'];
$rate=$row['rate'];
$amount=$row['amount'];
//foreach($qry->fetch_array() as $k => $val){
//	$$k=$val;
//}
}
?>
<style type="text/css">
	.imgs{
		margin: .5em;
		max-width: calc(100%);
		max-height: calc(100%);
	}
	.imgs img{
		max-width: calc(100%);
		max-height: calc(100%);
		cursor: pointer;
	}
	#imagesCarousel,#imagesCarousel .carousel-inner,#imagesCarousel .carousel-item{
		height: 40vh !important;background: black;

	}
	#imagesCarousel{
		margin-left:unset !important ;
	}
	#imagesCarousel .carousel-item.active{
		display: flex !important;
	}
	#imagesCarousel .carousel-item-next{
		display: flex !important;
	}
	#imagesCarousel .carousel-item img{
		margin: auto;
		margin-top: unset;
		margin-bottom: unset;
	}
	#imagesCarousel img{
		width: calc(100%)!important;
		height: auto!important;
		/*max-height: calc(100%)!important;*/
		max-width: calc(100%)!important;
		cursor :pointer;
	}
	#banner{
		display: flex;
		justify-content: center;
	}
	#banner img{
		max-width: calc(100%);
		max-height: 50vh;
		cursor :pointer;
	}
</style>
<div class="container-field">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-12">
						<div id="banner" class='mx-2'>
							
						</div>
					<br>
					</div>
					<div class="col-md-12">
						<h4 class="text-center"><b><?php echo $event_name; ?></b></h4>
						<p class="text-center"><small><b><i>Venue: <?php echo ucwords($venue) ?></small></i></b></p>
						<hr class="divider" style="max-width:calc(100%)">
					</div>
					<div class="col-md-12" id="content">
						
						
					<p class="">
					
						<p><b><i class="fa fa-calendar"></i> <?php echo date("F d, Y h:i A",strtotime($schedule)) ?></b></p>
						<p><b><i>Venue: <?php echo $venue ?></i></b></p>
						<p><b><i>Rate per hour: <?php echo $rate ?></i></b></p>
						<p><b><i>Total Amount: <?php echo $amount ?></i></b></p>
						<p><b><i>Name of Person: <?php echo $name ?></i><b></p>
						<p><b><i>Contact: <?php echo $contact ?></i></b></p>
					
						
						</i></b></p>
						
					</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$('#imagesCarousel img,#banner img').click(function(){
		viewer_modal($(this).attr('src'))
	})
	$('.carousel').carousel()
</script>
