<?PHP
echo "\t <link rel= \"stylesheet\" href=\"css/styles.css\" />\n";
echo"<link rel='shortcut icon' href='favicon.ico' />";
echo"<link rel='stylesheet' type='text/css' href='css/styles.css' />";
echo <<<HEREDOC
 <!--Latest Minified Version of boostrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel='stylesheet' href='css/styles.css' type='text/css'>
        <link rel='shortcut icon' href='images/rsz_nakedlogo.ico'>
        <!--import jqQuery-ui CSS for datepicker-->
        <link rel='stylesheet' href='https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css'>
        <!--import jQuery library from jQuery CDN-->
        <script type='text/javascript' src='https://code.jquery.com/jquery-3.1.1.min.js'></script>
        <!--import jQuery-ui JS for datepicker-->
        <script type='text/javascript' src='https://code.jquery.com/ui/1.12.1/jquery-ui.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
HEREDOC;
echo "\t<meta charset = \"UTF-8\" />\n"; # add this between the echos for <title> and <link />
echo "\t<meta name =\"keywords\" content=\"$keywordList\"/>\n";
echo "\t<meta name =\"description\" content=\"$description\"/>\n";
?>
