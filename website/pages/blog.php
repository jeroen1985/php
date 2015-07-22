<script>
ie9plus=document.addEventListener;
if(!ie9plus){
        alert("You must upgrade your browser in order to view this blog.");
	}
</script>

<?
$id = isset($_GET['id'])?$_GET['id']:0;
if ($id){
?>
<script>

entry = <? echo $id; ?>;

jQuery.ajax({
      type: 'GET',
      url: 'pages/blog_data.php',
      data: 'page=1&entry='+entry,
      success: function(result) {
        var data = jQuery.parseJSON(result);   
		var html ="";
		for (var i=0;i<data.length;i++){		
			html+="<div class='post-title' id='"+data[i].title+"' data-entry-id='"+i+"'>";
			html+="<a name='#entry"+i+"'><H3> "+ data[i].title +" </h3></a>";
			html+="</div>";
			html+="<div class='post-data'>";
			html+="<p>Posted by <b>"+ data[i].postedBy +"</b></p>";
			html+="</div>";
			html+="<div class='entry'>";
			html+=data[i].entry;
			html+="</div>";
		}
		jQuery("#blog-post").html(html);
      }
  });
  
</script>
<?
}else{
?>
<script>

jQuery.ajax({
      type: 'GET',
      url: 'pages/blog_data.php',
      data: 'page=1&entry=0',
      success: function(result) {
        var data = jQuery.parseJSON(result);   
		var html ="";
		for (var i=0;i<data.length;i++){		
			html+="<div class='post-title' id='"+data[i].title+"' data-entry-id='"+i+"'>";
			html+="<a name='#entry"+i+"'><H3> "+ data[i].title +" </h3></a>";
			html+="</div>";
			html+="<div class='post-data'>";
			html+="<p>Posted by <b>"+ data[i].postedBy +"</b></p>";
			html+="</div>";
			html+="<div class='entry'>";
			html+=data[i].entry;
			html+="</div>";
		}
		jQuery("#blog-post").html(html);

      }
  });
  
</script>
<?
}
?>

 <div class="col-a">
 	<div class="pagination" id="pagination">
 		<center>
 			<?
			if (!$id){
			?>
			<a href="#" onclick="getEntries(1,0);"><</a>
			<a id="page1a" href="#" onclick="getEntries(1,0);"><b><u>1</b></u></a>
			<a id="page2a" href="#" onclick="getEntries(2,0);">2</a>
			<a href="#" onclick="getEntries(2,0);">></a>
			<?	
			}
			?>
		

		</center>
	</div>
 	<div id="blog-post">
	</div>
	<div class="pagination" id="pagination2">
		<center>
			<?
			if (!$id){
			?>
			<a href="#" onclick="getEntries(1,0);"><</a>
			<a id="page1b" href="#" onclick="getEntries(1,0);"><b><u>1</b></u></a>
			<a id="page2b" href="#" onclick="getEntries(2,0);">2</a>
			<a href="#" onclick="getEntries(2,0);">></a>
			<?
			}
			?>
		</center>
	</div>
 </div>
 <div class="col-b divider2">
 	<div class="services">
		<p class="heading"><b>front-end development</b></p>
		<p class="icon"><img src="images/front_end_development.png" /></p>
	</div>
	 <div class="services">
		<p class="heading"><b>back-end development</b></p>
		<p class="icon"><img src="images/back_end_development.png" /></p>
	</div>
	 <div class="services">
		<p class="heading"><b>web consulting </b></p>
		<p class="icon"><img src="images/web_consulting.png" /></p>
	</div>
 </div>

 <script>

function getEntries(page,entry){

	jQuery.ajax({
		  type: 'GET',
		  url: 'pages/blog_data.php',
		  data: 'page='+page+'&entry='+entry,
		  success: function(result) {
			var data = jQuery.parseJSON(result);   
			var html ="<div id=page data='"+page+"'>";
			for (var i=0;i<data.length;i++){
		
				html+="<div class='post-title'>";
				html+="<H3> "+ data[i].title +" </h3>";
				html+="</div>";
				html+="<div class='post-data'>";
				html+="<p>Posted by <b>"+ data[i].postedBy +"</b></p>";
				html+="</div>";
				html+="<div class='entry'>";
				html+=data[i].entry;
				html+="</div>";
			}
			html+="</div>";
			jQuery("#blog-post").html(html);
				
			if (page == 1){
			page1='<b><u>1</u></b>';
			page2='2';
			}else if (page == 2){
			page1='1';
			page2='<b><u>2</u></b>';
			}
			jQuery("#page1a").html(page1);
			jQuery("#page2a").html(page2);
			jQuery("#page1b").html(page1);
			jQuery("#page2b").html(page2);
		  }
	  });
}
  
</script>
