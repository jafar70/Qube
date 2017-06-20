<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Demo Contact Form'; 
		$to = 'jsalami60@gmail.com'; 
		$subject = 'Message from Contact Demo ';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Qube</title>
    <link rel="shortcut icon" href="img/Qube_Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/1102aa779d.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="bg-navbar">
        <div class="container">
            <nav class="navbar fixed-top navbar-toggleable-md navbar-light" id="commRollover">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="img/qube_navbar_brand.webp" width="126px" height="54px"></a>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="feature.php">FEATURE</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="support.php">SUPPORT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="buy-now.php">BUY NOW</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    
    <div class="mobile-navbar">
    <nav class="navbar fixed-top navbar-toggleable-sm navbar-light bg-inverse desktop-navbar">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.php"><img src="img/qube_navbar_brand.webp" width="126px" height="54px"></a>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="feature.php">FEATURE</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="support.php">SUPPORT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="buy-now.php">BUY NOW</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /container -->
    </nav>
    </div>

    <div class="feature-class support">
       <div class="container">
        <div class="col-md-12">
            <i class="fa fa-lightbulb-o fa-5x" aria-hidden="true"></i>
            <h1 class="section-title">How can we help you?</h1>
            <p class="lead text-center">Control Your Lights From Anywhere</p>
            <p class="text-center"><a class="btn btn-lg btn-primary contactusbtn"  role="button">Contact Us</a></p> 
        </div>
       </div>
    </div>
    <div class="">
        <div class="container">
            <h1>Socket Selection</h1>
            <p>Qube works with a power supply between 110-260V ranges.</p>
            <p style="text-align:left;text-decoration: underline;"><b>Countries that uses E26 bulbs:</b></p>
            <ul><li style="text-align:left" class="s-text-color-black">Anguilla</li><li style="text-align:left" class="s-text-color-black">Aruba</li><li style="text-align:left" class="s-text-color-black">Bahamas</li><li style="text-align:left" class="s-text-color-black">Barbados</li><li style="text-align:left" class="s-text-color-black">Belize</li><li style="text-align:left" class="s-text-color-black">Bermuda</li><li style="text-align:left" class="s-text-color-black">Canada</li><li style="text-align:left" class="s-text-color-black">Cayman Islands</li><li style="text-align:left" class="s-text-color-black">Colombia</li><li style="text-align:left" class="s-text-color-black">Costa Rica</li><li style="text-align:left" class="s-text-color-black">Cuba</li><li style="text-align:left" class="s-text-color-black">Dominican Republic</li><li style="text-align:left" class="s-text-color-black">Ecuador</li><li style="text-align:left" class="s-text-color-black">El Salvador</li><li style="text-align:left" class="s-text-color-black">Guatemala</li><li style="text-align:left" class="s-text-color-black">Haiti</li><li style="text-align:left" class="s-text-color-black">Honduras</li><li style="text-align:left" class="s-text-color-black">Jamaica</li><li style="text-align:left" class="s-text-color-black">Japan</li><li style="text-align:left" class="s-text-color-black">Libyan Arab Jamahiriya</li><li style="text-align:left" class="s-text-color-black">Mexico</li><li style="text-align:left" class="s-text-color-black">Nicaragua</li><li style="text-align:left" class="s-text-color-black">Panama</li><li style="text-align:left" class="s-text-color-black">Taiwan</li><li style="text-align:left" class="s-text-color-black">Trinidad and Tobago</li><li style="text-align:left" class="s-text-color-black">United States</li><li style="text-align:left" class="s-text-color-black">Venezuela</li><li style="text-align:left" class="s-text-color-black">Virgin Islands, British</li></ul>
            <p style="text-align:left;text-decoration: underline;"><b>Countries that uses E27 bulbs:</b></p>
            <ul><li style="text-align:left">Afghanistan</li><li style="text-align:left">Aland Islands</li><li style="text-align:left">Albania</li><li style="text-align:left">Algeria</li><li style="text-align:left">Andorra</li><li style="text-align:left">Angola</li><li style="text-align:left">Antigua And Barbuda</li><li style="text-align:left">Argentina</li><li style="text-align:left">Armenia</li><li style="text-align:left">Australia</li><li style="text-align:left">Austria</li><li style="text-align:left">Azerbaijan</li><li style="text-align:left">Bahrain</li><li style="text-align:left">Bangladesh</li><li style="text-align:left">Belarus</li><li style="text-align:left">Belgium</li><li style="text-align:left">Benin</li><li style="text-align:left">Bhutan</li><li style="text-align:left">Bolivia</li><li style="text-align:left">Bosnia And Herzegovina</li><li style="text-align:left">Botswana</li><li style="text-align:left">Bouvet Island</li><li style="text-align:left">Brazil</li><li style="text-align:left">British Indian Ocean Territory</li><li style="text-align:left">Brunei</li><li style="text-align:left">Bulgaria</li><li style="text-align:left">Burkina Faso</li><li style="text-align:left">Burma</li><li style="text-align:left">Burundi</li><li style="text-align:left">Cambodia</li><li style="text-align:left">Cameroon</li><li style="text-align:left">Cape Verde</li><li style="text-align:left">Central African Republic</li><li style="text-align:left">Chad</li><li style="text-align:left">Chile</li><li style="text-align:left">China</li><li style="text-align:left">Christmas Island</li><li style="text-align:left">Cocos (Keeling) Islands</li><li style="text-align:left">Comoros</li><li style="text-align:left">Congo</li><li style="text-align:left">Congo, The Democratic Republic Of The</li><li style="text-align:left">Cook Islands</li><li style="text-align:left">Côte d'Ivoire</li><li style="text-align:left">Croatia</li><li style="text-align:left">Cyprus</li><li style="text-align:left">Czech Republic</li><li style="text-align:left">Denmark</li><li style="text-align:left">Djibouti</li><li style="text-align:left">Dominica</li><li style="text-align:left">Egypt</li><li style="text-align:left">Equatorial Guinea</li><li style="text-align:left">Eritrea</li><li style="text-align:left">Estonia</li><li style="text-align:left">Ethiopia</li><li style="text-align:left">Falkland Islands (Malvinas)</li><li style="text-align:left">Faroe Islands</li><li style="text-align:left">Fiji</li><li style="text-align:left">Finland</li><li style="text-align:left">France</li><li style="text-align:left">French Guiana</li><li style="text-align:left">French Polynesia</li><li style="text-align:left">French Southern Territories</li><li style="text-align:left">Gabon</li><li style="text-align:left">Gambia</li><li style="text-align:left">Georgia</li><li style="text-align:left">Germany</li><li style="text-align:left">Ghana</li><li style="text-align:left">Gibraltar</li><li style="text-align:left">Greece</li><li style="text-align:left">Greenland</li><li style="text-align:left">Grenada</li><li style="text-align:left">Guadeloupe</li><li style="text-align:left">Guernsey</li><li style="text-align:left">Guinea</li><li style="text-align:left">Guinea Bissau</li><li style="text-align:left">Guyana</li><li style="text-align:left">Heard Island And Mcdonald Islands</li><li style="text-align:left">Holy See (Vatican City State)</li><li style="text-align:left">Hong Kong</li><li style="text-align:left">Hungary</li><li style="text-align:left">Iceland</li><li style="text-align:left">India</li><li style="text-align:left">Indonesia</li><li style="text-align:left">Iran, Islamic Republic Of</li><li style="text-align:left">Iraq</li><li style="text-align:left">Ireland</li><li style="text-align:left">Isle Of Man</li><li style="text-align:left">Israel</li><li style="text-align:left">Italy</li><li style="text-align:left">Jersey</li><li style="text-align:left">Jordan</li><li style="text-align:left">Kazakhstan</li><li style="text-align:left">Kenya</li><li style="text-align:left">Kiribati</li><li style="text-align:left">Korea, Democratic People's Republic Of</li><li style="text-align:left">Kosovo</li><li style="text-align:left">Kuwait</li><li style="text-align:left">Kyrgyzstan</li><li style="text-align:left">Lao People's Democratic Republic</li><li style="text-align:left">Latvia</li><li style="text-align:left">Lebanon</li><li style="text-align:left">Lesotho</li><li style="text-align:left">Liberia</li><li style="text-align:left">Liechtenstein</li><li style="text-align:left">Lithuania</li><li style="text-align:left">Luxembourg</li><li style="text-align:left">Macao</li><li style="text-align:left">Macedonia, The Republic Of</li><li style="text-align:left">Madagascar</li><li style="text-align:left">Malawi</li><li style="text-align:left">Malaysia</li><li style="text-align:left">Maldives</li><li style="text-align:left">Mali</li><li style="text-align:left">Malta</li><li style="text-align:left">Martinique</li><li style="text-align:left">Mauritania</li><li style="text-align:left">Mauritius</li><li style="text-align:left">Mayotte</li><li style="text-align:left">Moldova, Republic of</li><li style="text-align:left">Monaco</li><li style="text-align:left">Mongolia</li><li style="text-align:left">Montenegro</li><li style="text-align:left">Montserrat</li><li style="text-align:left">Morocco</li><li style="text-align:left">Mozambique</li><li style="text-align:left">Myanmar</li><li style="text-align:left">Namibia</li><li style="text-align:left">Nauru</li><li style="text-align:left">Nepal</li><li style="text-align:left">Netherlands</li><li style="text-align:left">Netherlands Antilles</li><li style="text-align:left">New Caledonia</li><li style="text-align:left">New Zealand</li><li style="text-align:left">Niger</li><li style="text-align:left">Nigeria</li><li style="text-align:left">Niue</li><li style="text-align:left">Norfolk Island</li><li style="text-align:left">Norway</li><li style="text-align:left">Oman</li><li style="text-align:left">Pakistan</li><li style="text-align:left">Palestinian Territory, Occupied</li><li style="text-align:left">Papua New Guinea</li><li style="text-align:left">Paraguay</li><li style="text-align:left">Peru</li><li style="text-align:left">Philippines</li><li style="text-align:left">Pitcairn</li><li style="text-align:left">Poland</li><li style="text-align:left">Portugal</li><li style="text-align:left">Qatar</li><li style="text-align:left">Reunion</li><li style="text-align:left">Romania</li><li style="text-align:left">Russia</li><li style="text-align:left">Rwanda</li><li style="text-align:left">Saint Barthélemy</li><li style="text-align:left">Saint Helena</li><li style="text-align:left">Saint Kitts And Nevis</li><li style="text-align:left">Saint Lucia</li><li style="text-align:left">Saint Martin</li><li style="text-align:left">Saint Pierre And Miquelon</li><li style="text-align:left">Samoa</li><li style="text-align:left">San Marino</li><li style="text-align:left">Sao Tome And Principe</li><li style="text-align:left">Saudi Arabia</li><li style="text-align:left">Senegal</li><li style="text-align:left">Serbia</li><li style="text-align:left">Seychelles</li><li style="text-align:left">Sierra Leone</li><li style="text-align:left">Singapore</li><li style="text-align:left">Slovakia</li><li style="text-align:left">Slovenia</li><li style="text-align:left">Solomon Islands</li><li style="text-align:left">Somalia</li><li style="text-align:left">South Africa</li><li style="text-align:left">South Georgia And The South Sandwich Islands</li><li style="text-align:left">South Korea</li><li style="text-align:left">Spain</li><li style="text-align:left">Sri Lanka</li><li style="text-align:left">St. Vincent</li><li style="text-align:left">Sudan</li><li style="text-align:left">Suriname</li><li style="text-align:left">Svalbard And Jan Mayen</li><li style="text-align:left">Swaziland</li><li style="text-align:left">Sweden</li><li style="text-align:left">Switzerland</li><li style="text-align:left">Syria</li><li style="text-align:left">Tajikistan</li><li style="text-align:left">Tanzania, United Republic Of</li><li style="text-align:left">Thailand</li><li style="text-align:left">Timor Leste</li><li style="text-align:left">Togo</li><li style="text-align:left">Tokelau</li><li style="text-align:left">Tonga</li><li style="text-align:left">Tunisia</li><li style="text-align:left">Turkey</li><li style="text-align:left">Turkmenistan</li><li style="text-align:left">Turks And Caicos Islands</li><li style="text-align:left">Tuvalu</li><li style="text-align:left">Uganda</li><li style="text-align:left">Ukraine</li><li style="text-align:left">United Arab Emirates</li><li style="text-align:left">United Kingdom</li><li style="text-align:left">Uruguay</li><li style="text-align:left">Uzbekistan</li><li style="text-align:left">Vanuatu</li><li style="text-align:left">Vietnam</li><li style="text-align:left">Wallis And Futuna</li><li style="text-align:left">Western Sahara</li><li style="text-align:left">Yemen</li><li style="text-align:left">Zambia</li><li style="text-align:left">Zimbabwe</li></ul>
        </div>
    </div>
    
    <div class="feature-class contactus1" id="contactus1">
       <div class="container">
        <div class="col-md-12">
            <h1 class="section-title">Contact Us</h1>
            <p class="lead text-center">Estimated reply time: 2 days</p>
            <div class="col-md-6 offset-md-3">
                <form class="form-horizontal" role="form" method="post" action="support.php">
                    <div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<center><?php echo $result; ?>	</center>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
							<?php echo "<p class='text-danger'>$errName</p>";?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
							<?php echo "<p class='text-danger'>$errEmail</p>";?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
							<?php echo "<p class='text-danger'>$errMessage</p>";?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
							<?php echo "<p class='text-danger'>$errHuman</p>";?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
						</div>
					</div>
				</form> 
            </div>
        </div>
       </div>
    </div>
    
    <footer>
    <div class="footer">
        <ul class="socialmedialinks">
            <li>
                <span class="fa-stack fa-sm">
                  <i class="fa fa-square fa-stack-2x"></i>
                  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </span>
            </li>
            <li>
                <span class="fa-stack fa-sm">
                  <i class="fa fa-square fa-stack-2x"></i>
                  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
            </li>
            <li>
                <span class="fa-stack fa-sm">
                  <i class="fa fa-square fa-stack-2x"></i>
                  <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
                </span>
            </li>
            <li>
                <span class="fa-stack fa-sm">
                  <i class="fa fa-square fa-stack-2x"></i>
                  <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
                </span>
            </li>
            <li>
                <span class="fa-stack fa-sm">
                  <i class="fa fa-square fa-stack-2x"></i>
                  <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                </span>
            </li>
            <br><br>
            <li>
                <a href="#!">Privacy Policy</a>
            </li>
            <li>
                <a href="#!">Terms of Service</a>
            </li>
            <li>
                <a href="#!">Returns and Warranty</a>
            </li>
        </ul>
        
        
        <p>© 2017 Qube, Qube designs are trademarks of Qube, LLC. All rights reserved.<br>Email: social@qube-smarthome.com <br> Created by <a href="https://josalami.herokuapp.com/" target="_blank">Jafar Salami</a></p>
    </div>
    </footer>
    <!-- Modal -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <div>
                        <iframe width="100%" height="350" src=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="js/bootstrap.youtubemodal.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript">
        $(".contactusbtn").click(function() {
            $('html,body').animate({
                scrollTop: $(".contactus1").offset().top},
                3000);
        });
    </script>
    
</body>

</html>