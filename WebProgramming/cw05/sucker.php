
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <!-- WebPro Spring 2022 -->
	<!-- Author: Kendall Castilla -->
	<!-- Date: 03/05/2022 -->

	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade_styles.css" type="text/css" rel="stylesheet" />
	</head>

    <?php
    $normal = TRUE;
    foreach ($_POST as $key=>$value) {
        if(isset($_POST[$key]) && trim($value) != "")
            continue;
        else
            $normal = FALSE;
            break;
    }
    if($normal) {
        $file = fopen("sucker.txt", "a+");
        $txt = $_POST["user_name"];
        foreach($_POST as $key=>$val) 
        {
            if($key == "user_name")
                continue;
            $txt = $txt."; ".$val;
        }
        fwrite($file, $txt);
        fwrite($file, "\n");
        fclose($file);

        echo "
            <body>
                <h1>Thanks, sucker!</h1>

                <p>Your information has been recorded.</p>

                <dl>
                    <dt>Name</dt>";
                    echo "<dd>"; echo $_POST["user_name"]; echo "</dd>";

                    echo "<dt>Section</dt>";
                    echo "<dd>"; print $_POST["section"]; echo "</dd>";

                    echo "<dt>Credit Card</dt>";
                    echo "<dd>"; print $_POST["cardno"]." (".$_POST["cardtype"].")"; echo "</dd>";
                echo "</dl>";

                $file = fopen("sucker.txt", "r");
                echo "<pre>";
                echo fread($file, filesize("sucker.txt"));
                echo "</pre>";
                fclose($file);

            echo "</body>";

    }

    else {
        echo "<body>";
        echo "<h1>Sorry</h1>";
        echo "<p>You didn't fill out the form completely. <a href='buyagrade.html'>Try again?</a></p>";
        echo "</body>";
    }
?>

</html> 