<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Myreno-2018-Home-BU</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amarante">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-v2-Modal--Full-with-Google-Map.css">
    <link rel="stylesheet" href="assets/css/footer-servitech.css">
    <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
    <link rel="stylesheet" href="assets/css/ImageHeader-1.css">
    <link rel="stylesheet" href="assets/css/ImageHeader.css">
    <link rel="stylesheet" href="assets/css/NMDIGbanner.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body style="font-size:16px;">
    <?php
    if(isset($_POST['send'])){
        error_reporting(0);
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $suburb = $_POST['suburb'];
        $startField = $_POST['startField'];
        $description = $_POST['description'];
        $post = $_POST['post'];

        $message = '<html><body>';
        $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
        $message .= "<tr style='background: #eee;'><td><strong>Post:</strong> </td><td>" . strip_tags($post) . "</td></tr>";
        $message .= "<tr><td><strong>Name:</strong> </td><td>" . strip_tags($name) . "</td></tr>";
        $message .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($phone) . "</td></tr>";
        $message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($email) . "</td></tr>";
        $message .= "<tr><td><strong>Suburb:</strong> </td><td>" . strip_tags($suburb) . "</td></tr>";
        $message .= "<tr><td><strong>When Would you like to start:</strong> </td><td>" . strip_tags($startField) . "</td></tr>";
        $message .= "<tr><td><strong>Description:</strong> </td><td>" . $description . "</td></tr>";
        $message .= "</table>";
        $message .= "</body></html>";

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: Myreno <webmaster@myreno.com.au>' . "\r\n";
        $to = "info@myreno.com.au";
        //$to = "zubairtahir98@gmail.com";
        $subject = "Contact Form";

        $result = mail($to,$subject,$message,$headers);
    }
    ?>

    <nav class="navbar navbar-light navbar-expand-md" style="height:77px;">
        <div class="container"><a class="navbar-brand" href="#" style="font-size:45px;color:#3bc2ed;font-family:'Source Sans Pro', sans-serif;height:93px;"><img src="assets/img/MRA-2016-logo-0nly7-1.png" id="logo" style="width:189px;height:71px;"></a><button class="navbar-toggler" data-toggle="collapse"
                data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto" style="font-size:17px;line-height:25px;">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#" style="color:rgb(26,41,48);">Home</a></li>
                    <li class="nav-item" role="presentation" style="height:40px;"><a class="nav-link" href="#" style="color:#1a2930;">About</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="color:#1a2930;">Service</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="color:#1a2930;">Free quote</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="color:#1a2930;">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="d-flex justify-content-center" id="banner" style="background-color:#4abdac;padding:0px;padding-bottom:0px;height:340px;padding-top:38px;">
        <div class="jumbotron" style="background-color:#fbaf13;height:249px;padding-top:5px;width:437px;padding-bottom:60px;margin:1px;padding-right:16px;">
            <h2 style="margin:8px;color:rgba(255,255,255,0.9);font-weight:350;background-color:rgba(255,235,235,0);"><strong>Handyman Melbourne</strong></h2>
            <p style="margin:1px;color:rgba(255,251,251,0.92);font-weight:normal;">Door repairs Melbourne wide &nbsp;</p>
            <p style="color:#ffffff;font-weight:normal;">Home or Office</p>
            <p><a class="btn btn-primary" role="button" href="#" style="background-color:#f24444;color:#ffffff;width:194px;height:41px;padding:8px;line-height:25px;letter-spacing:2px;"><strong>Free Quote</strong></a></p>
        </div>
    </div>
    <div class="dark-section" style="width:1200;">
        <div class="container front-pics" id="box2" style="padding-top:55px; padding-bottom:60px;">
            <h2 style="padding-right:10px;padding-left:10px;color:rgb(109,112,115);"><strong>Door repairs Melbourne wide</strong></h2>
        </div>
        <div class="container front-pics" id="doors" style="width:100%;padding-bottom:58px;">
            <div class="row">
                <div class="col-md-4" style="width:100%;">
                    <div class="card">
                        <h4 style="padding:12px;font-size:22px;color:rgb(241,152,20);"><strong>Forced entry</strong></h4><img class="img-fluid card-img w-100 d-block" src="assets/img/forced entry-1.jpg" style="padding-bottom:0px;">
                        <div class="card-body">
                            <p class="card-text" style="color:rgb(79,78,78);padding-top:0px;font-size:18px;">Broken door or frame</p>
                            <button class="btn btn-primary" type="button" data-id="Forced entry" data-toggle="modal" data-target="#myModal">Contact</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="width:100%;">
                    <div class="card">
                        <h4 style="padding:12px;font-size:22px;color:rgb(241,152,20);"><strong>Sliding door</strong></h4><img class="img-fluid card-img w-100 d-block" src="assets/img/sliding-patio-door.jpeg">
                        <div class="card-body">
                            <p class="card-text" style="color:rgb(79,78,78);font-size:18px;">Repair sliding door</p>
                            <button class="btn btn-primary" type="button" data-id="Sliding door" data-toggle="modal" data-target="#myModal">Contact</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="width:100%;">
                    <div class="card">
                        <h4 style="padding:12px;font-size:21px;color:rgb(241,152,20);"><strong>Bi-fold door</strong></h4><img class="img-fluid card-img w-100 d-block" src="assets/img/Bi-fold doorsdoor-.jpeg">
                        <div class="card-body">
                            <p class="card-text" style="color:rgb(79,78,78);font-size:18px;">Repair Bi-fold door</p>
                            <button class="btn btn-primary" type="button" data-id="Bi-fold door" data-toggle="modal" data-target="#myModal">Contact</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container front-pics" id="doors" style="width:100%;padding-bottom:58px;">
            <div class="row">
                <div class="col-md-4" style="width:100%;">
                    <div class="card">
                        <h4 style="padding:12px;font-size:22px;color:rgb(241,152,20);padding-bottom:22px;"><strong>Genral door repair</strong></h4><img class="img-fluid card-img w-100 d-block" src="assets/img/choose-great-locksmith.jpg" style="padding-bottom:0px;">
                        <div class="card-body">
                            <p class="card-text" style="color:rgb(79,78,78);padding-top:0px;font-size:18px;">Door repair service</p>
                            <button class="btn btn-primary" type="button" data-id="Genral door repair" data-toggle="modal" data-target="#myModal">Contact</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="width:100%;">
                    <div class="card">
                        <h4 style="padding:12px;font-size:22px;color:rgb(241,152,20);"><strong>Handyman</strong></h4><img class="img-fluid card-img w-100 d-block" src="assets/img/myreno-handyman.png">
                        <div class="card-body">
                            <p class="card-text" style="color:rgb(79,78,78);font-size:18px;">Handyman Melbourne</p>
                            <button class="btn btn-primary" type="button" data-id="Handyman" data-toggle="modal" data-target="#myModal">Contact</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="width:100%;">
                    <div class="card">
                        <h4 style="padding:12px;font-size:22px;color:rgb(241,152,20);padding-bottom:27px;"><strong>Trusted Handyman&nbsp;</strong></h4>
                        <div class="card-body">
                            <p class="text-left card-text" style="color:rgb(102,102,102);font-size:18px;font-family:'Source Sans Pro', sans-serif;"><i class="fa fa-home" style="padding-left:0px;color:rgb(255,169,90);padding-right:10px;"></i>Expert handyman</p>
                            <p class="text-left card-text" style="color:rgb(102,102,102);font-size:18px;font-family:'Source Sans Pro', sans-serif;"><i class="fa fa-check" style="padding-left:0px;color:rgb(255,169,90);padding-right:10px;"></i>Free online quotes</p>
                            <p class="text-left card-text" style="color:rgb(102,102,102);font-size:18px;font-family:'Source Sans Pro', sans-serif;"><i class="fa fa-map-marker" style="padding-left:0px;color:rgb(255,169,90);padding-right:10px;"></i>Melbourne based</p>
                            <p class="text-left card-text" style="color:rgb(102,102,102);font-size:18px;font-family:'Source Sans Pro', sans-serif;"><i class="fa fa-check" style="padding-left:0px;color:rgb(255,169,90);padding-right:10px;"></i>Expert advice</p>
                            <p class="text-left card-text" style="color:rgb(102,102,102);font-size:18px;font-family:'Source Sans Pro', sans-serif;"><i class="fa fa-calendar-times-o" style="padding-left:0px;color:rgb(255,169,90);padding-right:10px;"></i>Prompt &amp; reliable</p>
                            <p class="text-left card-text" style="color:rgb(102,102,102);font-size:18px;font-family:'Source Sans Pro', sans-serif;"><i class="fa fa-check" style="padding-left:0px;color:rgb(255,169,90);padding-right:10px;"></i>Job done right</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container front-pics" id="box2" style="padding-top:3px;padding-bottom:15px;">
        <div class="row">
            <div class="col-md-12" id="pic-one">
                <p class="text-center" style="color:rgb(82,82,82);width:100%;.pic-one:align-center;padding-right:10px;padding-left:10px;font-size:18px;padding-top:17px;padding-bottom:0px;">Wer'e a local handyman bunisness for all Melbourne suburbs | Get your Free no obligation quote today.&nbsp;</p>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal" role="dialog" style="position: fixed !important;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="model-head">
                        <h1 class="freeQuote">Forced entry</h1>
                        <h2>Free Quote</h2>
                    </div>
                    <form action="index.php" method="post" role="form">
                        <input type="hidden" id="post" name="post">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control input-sm" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control input-sm" placeholder="Phone" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control input-sm" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="suburb" class="form-control input-sm" placeholder="Suburb" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="wrapper">
                                <select name="startField" class="custom-select" required>
                                    <option selected="selected" value="">When Would you like to start</option>
                                    <option value="Soon">Soon</option>
                                    <option value="Next Week">Next Week</option>
                                    <option value="Soon as possible">Soon as possible</option>
                                    <option value="Just after a quote">Just after a quote</option>
                                    <option value="Not sure">Not sure</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea name="description" class="form-control" placeholder="Breif description of work" required></textarea>
                        </div>
                        <div class="form-group submit">
                            <button type="submit" name="send" id="contact" class="btn btn-primary btn-lg btn-block">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="mySuccessModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body alert alert-success success">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div>
                        <strong>Success!</strong> Thankyou for contacting us.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer style="margin-top:2px;background-color:#252323;padding-top:57px;padding-bottom:-11px;padding-left:50px;">
        <div class="row">
            <div class="col-sm-6 col-md-4 footer-navigation">
                <h3><a href="#" style="font-family:'Source Sans Pro', sans-serif;font-size:23px;">Myreno Handyman&nbsp;</a></h3>
                <p class="links" style="font-size:15px;">Forced enrty &nbsp;Call 0423 873 997</p>
                <p class="company-name">Myreno Australia © 2018 </p>
            </div>
            <div class="col-sm-6 col-md-4 footer-contacts">
                <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                    <p style="font-size:15px;"><span class="new-line-span"></span> Melbourne Vic</p>
                </div>
                <div><i class="fa fa-phone footer-contacts-icon"></i>
                    <p class="footer-center-info email text-left" style="font-size:15px;"> 1300 799 466</p>
                </div>
                <div><i class="fa fa-envelope footer-contacts-icon"></i>
                    <p> <a href="#" target="_blank" style="color:rgb(99,224,232);font-size:15px;">info@myreno.com.au</a></p>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-4 footer-about" style="background-color:rgba(47,47,47,0);height:383px;">
                <div>
                    <div class="container-fluid">
                        <form action="javascript:void(0);" method="get" id="contactForm"><input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.awebsite.com"><input class="form-control" type="hidden" name="subject" value="Awebsite.com Contact Form"><input class="form-control"
                                type="hidden" name="to" value="email@awebsite.com">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div id="successfail"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12 col-md-12" id="message">
                                    <h2 class="h4" style="padding-bottom:27px;height:28px;"> <i class="fa fa-envelope" style="padding-right:9px;color:rgb(255,157,10);"></i>Contact Us<small></small></h2>
                                    <div class="form-group"><label for="from-name">Name</label><span class="required-input">*</span>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user-o"></i></span></div><input class="form-control" type="text" name="name" required="" placeholder="Full Name" id="from-name"></div>
                                    </div>
                                    <div class="form-group"><label for="from-email">Email</label><span class="required-input">*</span>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-envelope-o"></i></span></div><input class="form-control" type="text" name="email" required="" placeholder="Email Address" id="from-email"></div>
                                    </div>
                                    <div class="form-group"><input class="form-control" type="text" name="Message" placeholder="Message" style="height:68px;"></div>
                                    <div class="form-group">
                                        <div class="form-row">
                                            <div class="col"><button class="btn btn-primary btn-block" type="reset" style="padding-bottom:6px;"><i class="fa fa-undo"></i> Reset</button></div>
                                            <div class="col"><button class="btn btn-primary btn-block" type="submit" style="padding-top:6px;">Submit <i class="fa fa-chevron-circle-right"></i></button></div>
                                        </div>
                                    </div>
                                    <hr class="d-flex d-md-none">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal fade" role="dialog" tabindex="-1" id="modal1">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Contact Information</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                                <div class="modal-body">
                                    <form action="javascript:void(0);" method="get" id="contactForm"><input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.awebsite.com"><input class="form-control" type="hidden" name="subject" value="Awebsite.com Contact Form"><input class="form-control"
                                            type="hidden" name="to" value="email@awebsite.com">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div id="successfail"></div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-12 col-md-6" id="message">
                                                <h2 class="h4"><i class="fa fa-envelope"></i> Contact Us<small><small class="required-input">&nbsp;(*required)</small></small>
                                                </h2>
                                                <div class="form-group"><label for="from-name">Name</label><span class="required-input">*</span>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user-o"></i></span></div><input class="form-control" type="text" name="name" required="" placeholder="Full Name" id="from-name"></div>
                                                </div>
                                                <div class="form-group"><label for="from-email">Email</label><span class="required-input">*</span>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-envelope-o"></i></span></div><input class="form-control" type="text" name="email" required="" placeholder="Email Address" id="from-email"></div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                                        <div class="form-group"><label for="from-phone">Phone</label><span class="required-input">*</span>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-phone"></i></span></div><input class="form-control" type="text" name="phone" required="" placeholder="Primary Phone" id="from-phone"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                                        <div class="form-group"><label for="from-calltime">Best Time to Call</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></div><select class="form-control" name="call time" id="from-calltime"><optgroup label="Best Time to Call"><option value="Morning" selected="">Morning</option><option value="Afternoon">Afternoon</option><option value="Evening">Evening</option></optgroup></select></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group"><label for="from-comments">Comments</label><textarea class="form-control" rows="5" name="comments" placeholder="Enter Comments" id="from-comments"></textarea></div>
                                                <div class="form-group">
                                                    <div class="form-row">
                                                        <div class="col"><button class="btn btn-primary btn-block" type="reset"><i class="fa fa-undo"></i> Reset</button></div>
                                                        <div class="col"><button class="btn btn-primary btn-block" type="submit">Submit <i class="fa fa-chevron-circle-right"></i></button></div>
                                                    </div>
                                                </div>
                                                <hr class="d-flex d-md-none">
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <h2 class="h4"><i class="fa fa-location-arrow"></i> Locate Us</h2>
                                                <div class="form-row">
                                                    <div class="col-12">
                                                        <div class="static-map"><a href="https://www.google.com/maps/place/Daytona+International+Speedway/@29.1815062,-81.0744275,15z/data=!4m13!1m7!3m6!1s0x88e6d935da1cced3:0xa6b3e1bc0f2fc83a!2s1801+W+International+Speedway+Blvd,+Daytona+Beach,+FL+32114!3b1!8m2!3d29.187028!4d-81.0703076!3m4!1s0x88e6d949a4cb8593:0x1387c6c0b5c8cc97!8m2!3d29.1851681!4d-81.0705292"
                                                                target="_blank" rel="noopener"> <img class="img-fluid" src="http://maps.googleapis.com/maps/api/staticmap?autoscale=2&amp;size=600x210&amp;maptype=roadmap&amp;format=png&amp;visual_refresh=true&amp;markers=size:mid%7Ccolor:0xff0000%7Clabel:%7C582+1801+W+International+Speedway+Blvd+Daytona+Beach+FL+32114&amp;zoom=12" alt="Google Map of Daytona International Speedway"></a></div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-12 col-lg-6">
                                                        <h2 class="h4"><i class="fa fa-user"></i> Our Info</h2>
                                                        <div><span><strong>Name</strong></span></div>
                                                        <div><span>email@awebsite.com</span></div>
                                                        <div><span>www.awebsite.com</span></div>
                                                        <hr class="d-sm-none d-md-block d-lg-none">
                                                    </div>
                                                    <div class="col-sm-6 col-md-12 col-lg-6">
                                                        <h2 class="h4"><i class="fa fa-location-arrow"></i> Our Address</h2>
                                                        <div><span><strong>Office Name</strong></span></div>
                                                        <div><span>55 Icannot Dr</span></div>
                                                        <div><span>Daytone Beach, FL 85150</span></div>
                                                        <div><abbr data-toggle="tooltip" data-placement="top" title="Office Phone: 555-867-5309">O:</abbr> 555-867-5309</div>
                                                        <hr class="d-sm-none">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Contact-Form-v2-Modal--Full-with-Google-Map.js"></script>
    <script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>
    <script>
        $('#myModal').on('show.bs.modal', function(e) {
            $(".success").css({ display: "none" });
            var bookId = $(e.relatedTarget).data('id');
            $('.freeQuote').text(bookId);
            $('#post').val(bookId);
        });
    </script>
<?php
if(isset($_POST['send'])){ ?>
    <script>
        $('#mySuccessModal').modal('show');
    </script>
<?php } ?>
</body>
</html>