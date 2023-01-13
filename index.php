
<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
p {
  text-align: center;
  font-size: 60px;
  margin-top: 180px;
  color:white;
  font-family: ' Italics';
}
body{
 background-image:linear-gradient(to right, red, pink);
}

</style>
</head>
<body>

<p id="shhh"></p>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 14, 2023 15:18:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("shhh").innerHTML = days + "D " + hours + "H "
  + minutes + "M " + seconds + "S ";
    
  // If the count down is over, write some text 
  
  if (distance < 0) {
    clearInterval();
    document.getElementById("shhh").innerHTML = "HAPPY    HAPPIEST    BRITHDAY    TO    U";
  }
}, 1000);
</script>

	
</body>
</html>
