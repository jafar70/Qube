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
    <link rel="stylesheet" type="text/css" href="css/bootstrap-formhelpers.min.css">
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
                        <li class="nav-item">
                            <a class="nav-link" href="support.php">SUPPORT</a>
                        </li>
                        <li class="nav-item active">
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
                <li class="nav-item">
                    <a class="nav-link" href="support.php">SUPPORT</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="buy-now.php">BUY NOW</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /container -->
    </nav>
    </div>

    <div class="product">
        <div class="container">
            <h1 class="text-center">Buy Your Qube Online Today!</h1>
            <p class="lead text-center">Check out our products.</p>
            <div class="row">
                <div class="col-md-6">
                   <figure class="figure">
                       <img id="zoom_01" src="img/dp_ml5els.png" class="img-fluid" data-zoom-image="img/dp_ml5els-large.png" width="400px"/>
                       <figcaption class="figure-caption text-center">Roll over image to zoom in</figcaption>
                   </figure>
                </div>
                <div class="col-md-6 product-section">
                    <h3>Qube Smart Bulb (Wi-Fi, Bluetooth, Dimmable, Multi-Color)</h3>
                    <p><b>$29.99</b></p>
                    <p>With Qube™, you can control your lights anytime, anywhere and also create countless automation. </p>
                    <p>1000 lumens, 16 million colors and shades of warm to cool whites. Available in E26, E27 and B22 sizes. </p>
                    <p>30 Day Guarantee. 1-Year Warranty.</p>
                    <form>
                      <div class="form-group">
                        <select class="form-control" id="exampleSelect1">
                          <option>Select an option</option>
                          <option>E26</option>
                          <option>E26</option>
                          <option>B22</option>
                        </select>
                      </div>
                      <div class="input-group">
                         <label for="inputPassword3" class="col-sm-2 col-form-label"><p>Quantity</p></label>
                          <span class="input-group-btn">
                              <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                  <i class="fa fa-minus" aria-hidden="true"></i>
                              </button>
                          </span>
                          <input type="text" name="quant[1]" class="form-control form-control-lg input-number" value="1" min="1" max="10" style="position: relative;z-index: 1;">
                          <span class="input-group-btn">
                              <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                                  <i class="fa fa-plus" aria-hidden="true"></i>
                              </button>
                          </span>
                      </div>
                      <br><br>
                      <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="glance">
        <div class="container text-center">
            <hr class="style-two">
            <h1>At a glance.</h1>
            <br><br>
            <a class="btn btn-lg btn-outline-primary" href="#" role="button" data-toggle="modal" data-target="#videoModal" data-theVideo="https://www.youtube.com/embed/OqawbcKihoo"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Watch How It Works</a>
        </div>
    </div>
    
    <div class="specs">
        <div class="container">
            <h4 class="text-center">Specifications</h4>
        </div>
    </div>
    <div class="details">
        <div class="container">
            <p><b>Brightness:</b> 1000 Lumens</p>
            <p><b>Color Temperature:</b> >80 CRI from 2500-9000K</p>
            <p><b>Voltage:</b> 100-240V AC / 50-60 Hz</p>
            <p><b>Max power:</b> 13W</p>
            <p><b>Color:</b> 16M colors</p>
            <p><b>Wi-Fi Enabled:</b> 2.4 GHz Wi-Fi</p>
            <p><b>Bluetooth:</b> Bluetooth Smart 4.1</p>
            <p><b>Height:</b> 4.76"</p>
            <p><b>Width:</b> 2.46"</p>
            <p><b>Lifetime:</b> 22 years</p>
            <p><b>Socket:</b> E26, E27 and B22</p>
            <p><b>Software upgradeable</b></p>
        </div>
    </div>
    
    <div class="specs1">
        <div class="container">
            <h4 class="text-center">Common Questions</h4>
        </div>
    </div>
    <div class="details">
        <div class="container">
            <p><b>What platform does Qube support?</b><br> 
            Qube supports both Android and iOS (launching May 2017) platforms.</p>
            <p><b>What makes Qube different?</b> <br>
            Qube is unique in 3 aspects:<br>
            1. It is designed for home automation: Qube senses the user entering the room with their phone, tablet or any other personal identifiable Bluetooth device (e.g. Fitbit/Jawbone/Shine) and turns on the lights to the user's optimal preference when they are around.<br>
            2. It is affordable. A typical smart bulb in the market costs $50 on average. Qube is available at $29.<br>
            3. It does not need an external hub.</p>
            <p><b>What does it do?</b><br>
            Qube allows you to: 1) Control your lights remotely and automatically, 2) Customize notification lighting reminders through IFTTT, 3) Adjust the mood to your liking, 4) Set alarm schedules, 5) Detect your presence for home automation, and 6) Save energy.</p>
            <p><b>How do I set it up?</b> <br>
            Similar to any normal LED Bulb, you can plug Qube into a compatible LED socket, and that is it. You can then download our app on Apple Store or Google Play Store to control it on your smartphone.</p>
            <p><b>Why can't I pair with Qube?</b> <br>
            If you can't pair with your bulb, follow the in-app instructions to reset your bulb by turning off and on your bulb for 3 times, with a 1-second interval each time before you turn off/on your bulb.</p>
            <p><b>How fast does Qube work?</b> <br>
            Qube is tested to have a maximum latency of 0.5s, the fastest in the market. It is tested to have 95% efficiency in transmitting light commands and messages. This is only possible because Qube offers both Wi-Fi and BLE, which let you access your bulbs from anywhere, at any time.</p>
            <p><b>What is the warranty for Qube?</b> <br>
            Qube will include a one-year limited warranty. We will do a 1 for 1 exchange for any faulty product within the period of 1 year.</p>
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
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="js/bootstrap.youtubemodal.js"></script>
    <script src="js/bootstrap-formhelpers.js"></script>
    <script src='js/jquery.elevatezoom.js'></script>
    <script>
     $("#zoom_01").elevateZoom();
        
     
    </script>
</body>

</html>