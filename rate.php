<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title></title>
<style type="text/css">
  body{ background:url(../background2.png); font: 12px 'Segoe UI', 'Proxima Nova', 'Helvetica Neue', Helvetica, Arial, sans-serif;   margin: 0;}
.clear{clear: both;}
.container{width: 400px; background-color:#fff; overflow: auto; border-radius:10px }

.rate{
  width:230px; height: 40px;
  border:#e9e9e9 1px solid;
  background-color:  #f6f6f6;
  margin:60px auto;
  margin-bottom:0px;
}
.rate .rate-btn{
  width: 45px; height:40px;
  float: left;
  background: url(rate-btn.png) no-repeat;
  cursor: pointer;
}
.rate .rate-btn:hover, .rate  .rate-btn-hover, .rate  .rate-btn-active{
  background: url(rate-btn-hover.png) no-repeat;
}

.result-container{
  width: 82px; height: 18px;
  position: relative;
  background-color: #ccc;
  border: #ccc 1px solid;
  margin:auto;
}
.rate-stars{
  width: 82px; height: 18px;
  background: url(rate-stars.png) no-repeat;
  position: absolute;
}
.rate-bg{
  height: 18px;
  background-color: #ffbe10;
  position: absolute;
}


</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>
<br><br><br>
<?php  
	include('config.php');
    $post_id = '1'; // yor page ID or Article ID
?>

<div class="container">
	<div class="rate">
		<div id="1" class="btn-1 rate-btn"></div>
        <div id="2" class="btn-2 rate-btn"></div>
        <div id="3" class="btn-3 rate-btn"></div>
        <div id="4" class="btn-4 rate-btn"></div>
        <div id="5" class="btn-5 rate-btn"></div>
	</div>
<br>
    <div class="box-result">
    	<?php
        	$query = mysql_query("SELECT * FROM star"); 
            	while($data = mysql_fetch_assoc($query)){
                    $rate_db[] = $data;
                    $sum_rates[] = $data['rate'];
                }
                if(@count($rate_db)){
                    $rate_times = count($rate_db);
                    $sum_rates = array_sum($sum_rates);
                    $rate_value = $sum_rates/$rate_times;
                    $rate_bg = (($rate_value)/5)*100;
                }else{
                    $rate_times = 0;
                    $rate_value = 0;
                    $rate_bg = 0;
                }
        ?>
    <div class="result-container">
    	<div class="rate-bg" style="width:<?php echo $rate_bg; ?>%"></div>
        <div class="rate-stars"></div>
    </div>
        <p style="margin:5px 0px; font-size:16px; text-align:center">Rated <strong><?php echo substr($rate_value,0,3); ?></strong> out of <?php echo $rate_times; ?> Review(s)</p>
    </div>
</div>

<script type="text/javascript">
  $(function(){ 
   $('.rate-btn').hover(function(){
   $('.rate-btn').removeClass('rate-btn-hover');
      var therate = $(this).attr('id');
      for (var i = therate; i >= 0; i--) {
   $('.btn-'+i).addClass('rate-btn-hover');
       };
     });
                           
   $('.rate-btn').click(function(){    
      var therate = $(this).attr('id');
      var dataRate = 'act=rate&post_id=<?php echo $post_id; ?>&rate='+therate; //
   $('.rate-btn').removeClass('rate-btn-active');
      for (var i = therate; i >= 0; i--) {
   $('.btn-'+i).addClass('rate-btn-active');
      };
   $.ajax({
      type : "POST",
      url : "ajax-rate.php",
      data: dataRate,
      success:function(){}
    });
  });
});
</script>
</body>
</html>