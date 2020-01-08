<?php
echo <<<HEREDOC
<!DOCTYPE html>
<html lang="en">

        <head>
                <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
                <meta name="author" content="You Yi Xue Xi" />
		<meta name="viewport" content="width=device-width, initial-scale=1">	
                <title>Intentional Learning</title>
HEREDOC;
                                require 'headerBackend.php';
echo <<<HEREDOC
        </head>
        <body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/zh_CN/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
HEREDOC;
				require 'dynamicHeader.php';
                                require 'headerFrontend.php';
echo <<<HEREDOC
		</section>
		<div class="container-fluid">
                    <div class="row">
                        <div class="Main col-xs-12 col-sm-12  col-md-8 " >
HEREDOC;
                                require 'main.php';

echo <<<HEREDOC
                        </div>
		    </div>
		</div>
        <footer>
                <section class='footerUpper'>
HEREDOC;
                                require 'footer.php';
echo <<<HEREDOC
                </section>
        </footer>
        </body>
</html>
HEREDOC;
?>
