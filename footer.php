  <footer class="page-footer brown lighten-2">
    <div class="social center row">
      <!-- LinkedIn -->
      <a href="https://www.linkedin.com/in/justinepope1"><i class="col s2 offset-s4 fa fa-linkedin" aria-hidden="true" style="font-size:48px"></i></a>
	  <!-- GitHub -->
      <a href="https://github.com/justinepope"><i class="col s2 fa fa-github" aria-hidden="true" style="font-size:48px"></i></a>
	</div>
	  		  <div class="row tel">
				   <div class="center">
		  				tel:&nbsp;<a class="brown-text text-lighten-3" href="tel:1-503-490-3356">503.490.3356</a> &nbsp;
					  	email:&nbsp;<a class="brown-text text-lighten-3" href="mailto:justine.pope@icloud.com?Subject=Justine%20Pope%20portfolio" target="_top">justine.pope@icloud.com</a>
				  </div>
			  </div>
    <div class="footer-copyright">
      	<div class="container">
			<p>&copy;2016<a class="brown-text text-lighten-3"  href="http://justinepope.com">&nbsp;Justine Pope</a></p>
	  	</div>
    </div>
	
  </footer>


  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/portfolio.js"></script>
<!-- 
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script type="text/javascript" src="https://rawgit.com/space10-community/conversational-form/master/dist/conversational-form.min.js" crossorigin></script>


    <script>
      (function(){
        setTimeout(function() {
          $(document).on("click", "#toggle-conversation", function(){
            if(!window.ConversationalForm){
              window.ConversationalForm = new cf.ConversationalForm({
                formEl: document.getElementById("conversational"),
                context: document.getElementById("form-outer"),
                userImage: "images/user.jpg"
              });
            }
            $(this).addClass("disabled");
            var form = $(".conversational-form");
            if (form.hasClass("conversational-form--show")) {
              $(this).removeClass("active");
              $(this).text("Turn On");
              $(".conversational-form").removeClass("conversational-form--show");
            } else {
              $(this).addClass("active");
              $(this).text("Turn Off");
              $(".conversational-form").addClass("conversational-form--show");
            }
            $(this).removeClass("disabled");
          });
        }, 200);
      })();
    </script>
-->
<script>
	var $contactForm = $('#contact-form');
	$contactForm.submit(function(e) {
		e.preventDefault();
		$.ajax({
			url: '//formspree.io/justine.pope@icloud.com',
			method: 'POST',
			data: $(this).serialize(),
			dataType: 'json',
			beforeSend: function() {
				$contactForm.append('<div class="alert alert--loading">Sending message…</div>');
			},
			success: function(data) {
				$contactForm.find('.alert--loading').hide();
				$contactForm.append('<div class="alert alert--success">Message sent!</div>');
			},
			error: function(err) {
				$contactForm.find('.alert--loading').hide();
				$contactForm.append('<div class="alert alert--error">Ops, there was an error.</div>');
			}
		});
	});
</script>
  </body>
</html>