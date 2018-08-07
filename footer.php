    <!-- s-footer
    ================================================== -->
    <footer class="s-footer">
		<div class="container">
			<div class="s-footer__main">
				<div class="row">
					
					<div class="col-md-2 s-footer__sitelinks">
							
						<h4 class="text-center">Quick Links</h4>

						<ul class="s-footer__linklist">
							<li><a href="#0">Home</a></li>
							<li><a href="#0">Blog</a></li>
							<li><a href="#0">Styles</a></li>
							<li><a href="#0">About</a></li>
							<li><a href="#0">Contact</a></li>
							<li><a href="#0">Privacy Policy</a></li>
						</ul>

					</div> <!-- end s-footer__sitelinks -->

					

					<div class="col-md-2 s-footer__social">
							
						<h4 class="text-center">Social</h4>

						<ul class="s-footer__linklist">
							<li><a href="#0">Facebook</a></li>
							<li><a href="#0">Instagram</a></li>
							<li><a href="#0">Twitter</a></li>
							<li><a href="#0">Pinterest</a></li>
							<li><a href="#0">Google+</a></li>
							<li><a href="#0">LinkedIn</a></li>
						</ul>

					</div> <!-- end s-footer__social -->
					<div class="col-md-2 s-footer__social">
							
						<h4 class="text-center">Social</h4>

						<ul class="s-footer__linklist">
							<li><a href="#0">Facebook</a></li>
							<li><a href="#0">Instagram</a></li>
							<li><a href="#0">Twitter</a></li>
							<li><a href="#0">Pinterest</a></li>
							<li><a href="#0">Google+</a></li>
							<li><a href="#0">LinkedIn</a></li>
						</ul>

					</div> <!-- end s-footer__social -->

					<div class="col-md-6 s-footer__subscribe">
							
						<h4>Our Newsletter</h4>

						<p>Sit vel delectus amet officiis repudiandae est voluptatem. Tempora maxime provident nisi et fuga et enim exercitationem ipsam. Culpa consequatur occaecati.</p>

						<div class="subscribe-form">
							<form id="mc-form" class="group" novalidate="true">

								<input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">
					
								<input type="submit" name="subscribe" value="Send">
					
								<label for="mc-email" class="subscribe-message"></label>
					
							</form>
						</div>

					</div> <!-- end s-footer__subscribe -->

				</div>
			</div> <!-- end s-footer__main -->

			<div class="s-footer__bottom">
				<div class="container">
					<div class="row">
						<div class="col-full text-center">
							<div class="s-footer__copyright">
								<span>© Copyright Ronak Taldar</span> 
								<span>Design by <a href="https://www.taldartechconsultancy.com" target="_blank" >Taldar Tech Consultancy</a></span>
							</div>

							<div class="go-top">
								<a class="smoothscroll" title="Back to Top" href="#top"></a>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- end s-footer__bottom -->
		</div>

    </footer> <!-- end s-footer -->


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>


    <!-- Java Script
    ================================================== -->
    
    <script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
	

<!--Auto set align blog-->
	<script>
function resizeGridItem(item){
  grid = document.getElementsByClassName("grid")[0];
  rowHeight = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-auto-rows'));
  rowGap = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-row-gap'));
  rowSpan = Math.ceil((item.querySelector('.content').getBoundingClientRect().height+rowGap)/(rowHeight+rowGap));
    item.style.gridRowEnd = "span "+rowSpan;
}

function resizeAllGridItems(){
  allItems = document.getElementsByClassName("item");
  for(x=0;x<allItems.length;x++){
    resizeGridItem(allItems[x]);
  }
}

function resizeInstance(instance){
    item = instance.elements[0];
  resizeGridItem(item);
}

window.onload = resizeAllGridItems();
window.addEventListener("resize", resizeAllGridItems);

allItems = document.getElementsByClassName("item");
for(x=0;x<allItems.length;x++){
  imagesLoaded( allItems[x], resizeInstance);
}
	</script>
<!--//Auto set align blog-->
</body>

</html>