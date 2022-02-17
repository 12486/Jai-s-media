<?php include('index_header.php'); ?>
			<?php include('dbcon.php'); ?>
            <head>
      <style>
         body {
            background-image: url("images/a.jpg");
            background-attachment: fixed; 
             background-size: cover;
            
         }
      </style>
   </head>
    <body>
        <div class="container" style="color:red;">
            <!-- Codrops top bar -->
            <div class="codrops-top" >
            <div class="clr"><div class="title">jAI's MEDIA</div></div>
            </div><!--/ Codrops top bar -->
            <section>				
			
                <div id="container_demo" >
				
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
								<?php include('login_form.php'); ?>
                        </div>
                        <div id="register" class="animate form">
								<?php include('sign_up_form.php'); ?>
                        </div>
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>