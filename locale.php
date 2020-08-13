<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="mahmoud" />

	<title>Test GitHub</title>
</head>

<body>
    <div class="sosa">
        deiaal
    </div>
    <form action="" method="post" id="langForm">
        <select tabindex="4" name="lang"  class="filter form-control caret_background2" id="langSelect">
          <option value="" ><?=__("Language")?></option>
          <option value="en" <?php if($_SESSION['locale'] == 'en') echo "selected='selected'"; ?> >English</option>
          <option value="ar" <?php if($_SESSION['locale'] == 'ar') echo "selected='selected'"; ?> >???????</option>
        </select>
    </form>
    
    <style>
        body{
            background:red;
            font-size:15px;
        }
    </style>
                
    <script>
        alert("ymaaaha");
        console.log("dadad");
    </script>
</body>
</html>