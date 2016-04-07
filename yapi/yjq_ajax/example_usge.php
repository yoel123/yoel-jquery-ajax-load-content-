<!-- i numberd the important parts
search for 1) to see the first 2) for the second etc
 -->
<div class="container">

      
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Ajax pages</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
			  <!-- 1) ytab is the class  selector that triggers the ajax call -->
              <li class="ytab active" yurl="yapi/yjq_ajax/example_content.php?yid= 1"><a href="#">page1</a></li>
              <li class="ytab " yurl="yapi/yjq_ajax/example_content.php?yid= 2"><a href="#">page2</a></li>
              <li class="ytab " yurl="yapi/yjq_ajax/example_content.php?yid= 3"><a href="#">page3</a></li>
              <li class="ytab " yurl="yapi/yjq_ajax/example_content.php?yid= 4"><a href="#">page4</a></li>
            </ul>
         
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
	  <!-- 2) ypreloader will show while ajax call is loading -->
	  <div id="ypreloader">
				 Loading...				
		</div>
     
      <div class="jumbotron" >
		 <!-- 3) ycontent is where the ajax content will show -->
		<div id="ycontent">
			click menu to change page. 
		</div>
      </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="yapi/bootstrap-3.2.0/js/bootstrap.min.js"></script>

<!--call yinit_ajax_tabs script -->
<script src="yapi/yjq_ajax/js/script.js"></script>
<script>
jQuery(document).ready(function(){				

	// 4) yinit_ajax_tabs sends the yurl att to yload_ajax_content
	//and changes the content to the response
	
	//yinit_ajax_tabs(tab_selector,content_selector)
	yinit_ajax_tabs(".ytab","#ycontent");
	
	//load first page (or else it will be empty )
	//yload_ajax_content(tab_url,content_selector)
	yload_ajax_content("yapi/yjq_ajax/example_content.php?yid= 1","#ycontent")
});
</script>
