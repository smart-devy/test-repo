<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="mahmoud" />

	<title>Test GitHub</title>
</head>

<body>
    
    
    <script>
$('.marquee').marquee({
  //duration in milliseconds of the marquee
  duration: 20000,
  //gap in pixels between the tickers
  gap: 10,
  //time in milliseconds before the marquee will start animating
  delayBeforeStart: 0,
  //'left' or 'right'
  direction: 'left',
  //true or false - should the marquee be duplicated to show an effect of continues flow
  duplicated: true
});
</script>
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
        }
    </style>
                
    <script>
        alert("ymaaaha");
        
          $("#langSelect").change(function(){
              $("#langForm").submit();
          });
                
    </script>
</body>
</html>