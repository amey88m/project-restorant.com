<?php include_once "inc/header.inc.php" ?>
<link rel="stylesheet" href="sass/style.min.css" >
<?php Sessions::session_auto_logon()  ?>
<style>
	article{
		padding: 1rem;
	    font-size: .9em;
	    line-height: 1rem;
	    font-family: inherit;
	    font-weight: 100;
	    letter-spacing: 1px;
	    color: #807c7c;
	    margin-bottom: 8px;
	    border-bottom: 1px solid #dcdcdc;
	}
	.readMore_twitt{
		color: #807c7c;
		display: block;
		text-align: left;
		font-size: .9em;
		text-transform: uppercase;
	}
	.tweet {
		max-height: 200px;
		min-height: 200px;
		overflow-y: scroll;
	}
	.freshFoodWrapper .tweets-section{
		max-height: 200px;
		overflow: hidden;
	}
	.tweets-section::-webkit-scrollbar-track{
		-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
		background-color: #F5F5F5;

	}
	.tweets-section::-webkit-scrollbar{
		width: 12px;
		background-color: #F5F5F5;
	}
	.tweets-section::-webkit-scrollbar-thumb{
		background-color: #999
		border-redius: 8px;
	}
	.tweets-section::-webkit-scrollbar-thumb:hover{
		background-color: #444
	}
	.display-flex{
		display: flex;
	}
	.recepies-outbox #fftw-div-result{
		width: 100%;
		box-sizing: border-box;
	}
</style>

<script id="8594">
function checksearchform()
{
	if(document.searchform.search.value == 0){
		document.searchform.search.value =""
		document.searchform.search.focus()
		return false;
	}else{
		document.searchform.submit()
	}

}
document.getElementById('8594').innerHTML="";
</script>
</head>
<body>

<!-- slider -->
<div class="superslider" id="superslider">
	
	<ul>
		
		<li class=" item">
			<div class="slider-content">
				<div class="slider-image">
					<img src="images/mediterranean-cuisine-2378758_1920.jpg" alt="">
				</div>
				<div class="slider-text">
					<h1>PURE - VEG</h1>
					<span class="w1">we bring</span>
					<span class="w2">fresh vegitables</span>
					<span class="w1">from our farm.</span>
					<p>We deliver food out slide of Gulf counties.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto ab quasi soluta laudantium consequatur officiis cupiditate autem! Sapiente error doloribus, nesciunt aut minima omnis voluptas, quas dolorem aspernatur amet alias?</p>
				</div>
			</div>
		</li>
		<li class="item">
			<div class="slider-content">
				<div class="slider-image">
					<img src="images/prawns-959219_1920.jpg" alt="">
				</div>
				<div class="slider-text">
					<h1>FISH PRAWNS</h1>
					<p>We get fresh foods from our own farm.</p>
					<p>adipisci, nisi pariatur voluptatum vero at laboriosam debitis quae alias consequuntur soluta dolorum voluptates ipsa magnam, inventore.</p>
				</div>
			</div>
		</li>
		<li class="item">
			<div class="slider-content">
				<div class="slider-image">
					<img src="images/background-906135_1920.jpg" alt="">
				</div>
				<div class="slider-text">
					<h1>EGG SANDWICH !</h1>
					<span class="w1">Get more than</span>
					<span class="w2">1200 sandwich verity</span>
					<span class="w1">from it!</span>
					<p>We deliver the best quality of food.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat nostrum, architecto quos ipsam labore totam doloribus voluptatibus corporis suscipit voluptatem dolor possimus nemo perferendis non quibusdam! Iusto nihil fuga natus.</p>
				</div>
			</div>
		</li>

	</ul>
	
	<div class="navigation">
		<a href="" class="left" id="left">  < </a>
		<a href="" class="right" id="right"> > </a>
	</div>
	
</div>	

<section class="freshFoodWrapper">
	<div class="ingrediants-wrapper">
		<div class="ingrediants-div">
			<div class="head">
				<h1>Locally sourced</h1>
				<h1>Fresh Ingrediants</h1>
				<span>Our Daily fresh frarm food.</span>
			</div>
		</div>	
		<div class="images-section">
			<div class="image-wraper"></div>
			<div class="image-wraper"></div>
			<div class="image-wraper"></div>
			<div class="image-wraper"></div>
			<div class="image-wraper"></div>
			<div class="image-wraper"></div>
		</div>
	</div>

	<div class="tweets-section">
		<div class="tweet-title-groups">
			<div class="tweet-title text-center">
				<h1>TWEETS</h1>
			</div>
			<div class="follow-us text-center">
				<h3>Follow us @</h3>
				<ul>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-envelope-open"></i></a></li>
					<li><a href="#"><i class="fa fa-google-wallet"></i></a></li>
				</ul>
			</div>
		</div>

		<!--tweet's-->
		<section class="tweet scroll-style">
			<a class="twitter-timeline" href="https://twitter.com/wapofood?lang=en">Tweets by TwitterDev</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
		</section>
	</div>
</section>


<!-- about our resto -->
<div class="our-resto resto-img">
	<div class="our-resto-div">
		<div class="title">
			<h1 class="h1">our</h1>
			<h1>restorant</h1>
		</div>
	</div>
</div>


<div class="resto-desc">
	<div class="desc">
		<p id="restodesc"></p>
	</div>
</div>

<div class="divi"></div>



<form method="POST" name="searchform" action="<?php print "/project-restorant.com/search" ?>" class="mb-7" onsubmit="javascript:return checksearchform()">

	<div class="menu-search-box">
		<input  name="search" type="search" class="searchmyitems" placeholder="search menu here...">
		<input type="submit" class="search-menu-btn btn" name="searchmenubtn" >
	</div>

</form>


<div class="weekly-most-fam-items">
	<div class="title">
		<h1 class="h1">OUR</h1>
		<h2>Special Offer</h2>
	</div>
	<div class="veg-item-img">
		<div class="item-wrap">
			<div class="veg-item">
				<div class="title">Crispy & Crunchy. </div>
				<div class="item-desc">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae eaque, assumenda, vero vel at tempore laudantium suscipit incidunt itaque quasi ut libero. Assumenda, temporibus. Tempora deleniti aperiam enim deserunt, suscipit.</p>
				</div>
			</div>
		</div>	
	</div>
		
	<div class="non-veg-item-img">
		<div class="item-wrap">
			<div class="non-veg-item">
				<div class="title">Crispy Yimy corwns!!</div>
				<div class="item-desc">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus id, culpa itaque magni, nihil distinctio officiis, repellendus quis necessitatibus unde nisi, excepturi! Sit eligendi sunt in, quisquam consequuntur adipisci eveniet.</p>
				</div>
			</div>	
		</div>	
	</div>
</div>





<!-- our special items -->
<div class="ourSpecialItems">
	<div class="title">
		<h1 class="h1">our</h1>
		<h1>Special Varieties</h1>
	</div>
	
	<div class="specialItems-days mb-3">
		<ul class="verities-ul">
			<!-- specialItems-days-tab-active -->
			<li data-day="sunday" class="verities-li specialItems-days-tab-active">
				<a href="javascript:void(0)">sunday</a>
			</li>
			<li data-day="saturday" class="verities-li">
				<a href="javascript:void(0)">saturday</a>
			</li>
			<li data-day="friday" class="verities-li">
				<a href="javascript:void(0)">friday</a>
			</li>
			<li data-day="allday" class="verities-li">
				<a href="javascript:void(0)">Daily special</a>
			</li>
		</ul>
	</div>

	<div class="specialItem-menus-wrapper">
		<div class="menus sp-menus spm-menu-active">
			<table>
				<thead>
					<tr>
						<th>sr</th>
						<th>menu name</th>
						<th>offer</th>
						<th>discount</th>
						<th>cost in Rs.</th>
						<th>Picture</th>
					</tr>
				</thead>
				<tbody data-response="sunday" class="tb_jdata" style="text-align: center;">
				</tbody>	
			</table>
		</div>
		<div class="menus sp-menus">
			<table>
				<thead>
					<tr>
						<th>sr</th>
						<th>menu name</th>
						<th>offer</th>
						<th>discount</th>
						<th>cost in Rs.</th>
						<th>Picture</th>
					</tr>
				</thead>
				<tbody data-response="saturday" class="tb_jdata" style="text-align: center;">
				</tbody>	
			</table>
		</div>
		<div class="menus sp-menus">
			<table>
				<thead>
					<tr>
						<th>sr</th>
						<th>menu name</th>
						<th>offer</th>
						<th>discount</th>
						<th>cost in Rs.</th>
						<th>Picture</th>
					</tr>
				</thead>
				<tbody data-response="friday" class="tb_jdata" style="text-align: center;">
				</tbody>	
			</table>
		</div>
		<div class="menus sp-menus">
			<table>
				<thead>
					<tr>
						<th>sr</th>
						<th>menu name</th>
						<th>offer</th>
						<th>discount</th>
						<th>cost in Rs.</th>
						<th>Picture</th>
					</tr>
				</thead>
				<tbody data-response="allday" class="tb_jdata" style="text-align: center;">
				</tbody>	
			</table>
		</div>
		<input type="button" class="btn btn-load-day-menu" value="show my menus">
	</div>
</div>



<footer>
	<div class="footer-body">
		<div class="footer-content">
			<span>&copy; 2018. Design and Develop - A.M. Developer Resposive Template with sass</span><br>
		</div>
	</div>
</footer>



<section class="special-offer-sec">
	<aside class="special-offer-aside asidepos">
		<h1 class="text-center special-offer-aside-title">Buy 1 Get 1 free</h1>
		<img src="images/prawns-959219_1920.jpg" alt="weekly offer on prawns" title="weekly offer on prawns" height="200px" width="100%" class="offer-img">
		<p class="special-offer-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta impedit eligendi quos eveniet nisi. <br>
			<span class="text-left order-now">order now: <i class="fa fa-phone danceIn"></i> 123 456</span>
		</p>
	</aside>
	<div class="offer-box">
		<div class="ico-wrap">
			<i class="fa fa-close close"></i>
		</div>
	</div>
</section>



<main>
	<!-- tip section -->
	<section class="tip-sec">
		<div class="tip-wrap">
			<div class="main-tip-div">
				<div class="tip-box">
					<span class="close-i-tip"><i class="fa fa-close"></i></span>
					<span>FAST FOOD TIP WEEK</span>
					<p>Hey! I am FFT I will give you a free fast food tip on every week. You want TIP just say</p>
					<div class="button-group">
						<button class="btn btn-sm btn-default btn-y">YES</button>
						<button class="btn btn-sm btn-default btn-n">NO</button>
					</div>
				</div>
			</div>
		</div>
	</section>

	
	<!-- no -->
	<aside class="goodBye-sec goodBye-hide ">
		<div class="goodBye-wrap">
			<div class="goodbyemsg-wrap">
				<h6 class="goodbye-msg">
					Good bye You will not get any FFTW.
					<br><i class="fa fa-frown-o"></i>
				</h6>
			</div>
		</div>
	</aside>
	

	<!-- yes goodBye-hide-->
	<aside class="goodBye-sec-yes goodBye-sec goodBye-hide">
		<div class="goodBye-wrap-yes">
			<div class="goodBye-yes-main">
				<div class="yes">
					<div class="yes-head">
						<h1>Thank you <span><i class="fa fa-smile-o"></i></span> we are glad to get you. Now you can enjoy weekly FFT</h1>
						<a class="close-goodBye-ico close-i-goodBye-sec-yes" href="javascript:void(0)">
							<i class="fa fa-close"></i>
						</a>
					</div>
					<p class="tip-des">Tip: how to use?<br>
						on left side we have provided menu items.choose only one from it drag and drop it on right upper top box and click ok.
						once you click ok button we will give you our best recipe.
						All the best.
					</p>

					<div class="recepies-wrap scroll-style">
						<div class="recepies-list">
							<ol id="veg_nonveg"></ol>
						</div>
					</div>
					<div class="recepies-outbox">
						<form method="POST" class="display-flex fftw-form">
							<input type="text" name="fftw-result" class="fftw-div" id="fftw-result" placeholder="drag item here...">
							<input id="fftw-submit-btn" type="submit" class="btn fftw-submit-btn-style" value="ok">
						</form>
						<p id="fftw-div-result" class="scroll-style">
						</p>
					</div>
				</div>
			</div>
		</div>		
	</aside>
</main>

<script src="src/jquery-1.11.1.js"></script>
<script src="src/cust-order-form.js"></script>
<script src="src/slider.js"></script>
<script src="src/code.js"></script>
<script src="src/special_veritiestabs.js"></script>
<script src="src/special-offer-model.js"></script>
<script src="src/fft-model.js"></script>
<script src="src/jquery-ui/jquery-ui.js"></script>
<script id="091928">		
$(document).ready(function() {
	customerorderform({fftitem:1},'veg_nonveg','fftw');
	$('#fftw-submit-btn').click(function(e){
		e.preventDefault();
		if($('.fftw-div').val() === 0){
			$('.fftw-div').focus()
			return false
		}else{
			customerorderform({fft:$('.fftw-div').val()},'fftw-div-result','fftw');
		}
	});
});
document.getElementById('091928').innerHTML="";
</script>
<?php include_once "inc/footer.inc.php" ?>