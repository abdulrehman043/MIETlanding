<?php
require 'conn.php';
if(isset($_POST['registerbtn']))
{
    $name=$_POST['firstname'];
    $email=$_POST['lastname'];
    $phone=$_POST['youremail'];
    $state=$_POST['state1'];
    $course=$_POST['cars'];
    $branch=$_POST['cars2'];

    $query= "INSERT INTO contact(`firstname`,`lastname`,`youremail`,`state1`,`cars`,`cars2`) VALUES ('$name','$email','$phone','$state','$course','$branch');";

    if(mysqli_query($conn,$query))
   {
        echo "Succesfully Inserted";

   }
    else

   {
   echo "Not Successful";
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mangalmay Admissions Open</title>
    <!--BBBootstrap Css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href=" https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</head>

<body>

    <div class="first-section">
        <section class="fisrt-section">
            <div class="container-form">
                <div class="row">
                    <img src="./Images/WhatsApp Image 2022-05-19 at 12.05.26 PM.jpeg">
                    <img id="mobile-img-first" src="./Images/WhatsApp Image 2022-05-19 at 12.05.25 PM.jpeg">
                    <div class="card d-flex justify-content-center mx-auto my-3 p-5">
                        <h6 class="text-muted">INFORMATION</h6>
                        <h2>Contact Us</h2>

                        <div class="form-row">
                            <div class="form-group col-md-6 first">
                                <label for="inputFirstName">Enter Name <span>*</span></label>
                                <input type="text" class="form-control" id="inputFirstName" name="firstname" required>
                                <div id="fname_error" class="val_error"></div>
                            </div>
                            <div class="form-group col-md-6 first">
                                <label for="inputLastName">E-Mail Address <span>*</span></label>
                                <input type="text" class="form-control" id="inputLastName" name="lastname">
                                <div id="lname_error" class="val_error"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail">Phone Number <span>*</span></label>
                                <input type="email" class="form-control" id="inputEmail" name="youremail">
                                <div id="email_error" class="val_error"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPhone">Select State <span>*</span></label>
                                <select id="cars" name="state1">
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh	</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Odisha">Odisha</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkim">Sikkim</option>
                                    <option value="Chhattisgarh">Tamil Nadu</option>
                                    <option value="Telangana">Telangana</option>
                                    <option value="Tripura">Tripura</option>
                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="Uttarakhand">Uttarakhand</option>
                                    <option value="West Bengal">West Bengal</option>
                                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                    <option value="Chandigarh">Chandigarh</option>
                                    <option value="Dadra & Nagar Haveli and Daman & Diu">Dadra & Nagar Haveli and Daman & Diu</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                    <option value="Lakshadweep">Lakshadweep</option>
                                    <option value="Puducherry">Puducherry</option>
                                    <option value="Ladakh">Ladakh</option>
                                    
                                </select>

                                <div id="phone_error" class="val_error"></div>
                            </div>
                        </div>




                        <div class="form-group mt-0">
                            <label for="exampleFormControlTextarea1">Course<span>*</span></label>
                            <!-- <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                name="yourmessage"></textarea> -->
                            <select id="cars" name="cars">
                                <option value="btech">B.Tech</option>
                               
                            </select>
                            <div id="message_error" class="val_error"></div>
                        </div>
                        <div class="form-group mt-0">
                            <label for="exampleFormControlTextarea1">Select Branch <span>*</span></label>
                            <!-- <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                name="yourmessage"></textarea> -->
                            <select id="cars" name="cars2">
                                <option value="cse">CSE</option>
                                <option value="cseai">CSE- AI</option>
                                <option value="ece">ECE</option>
                               
                            </select>
                            <div id="message_error" class="val_error"></div>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">&nbsp;&nbsp;Send me offers &
                                updates</label>
                        </div>
                        <div class="form-button pt-4">
                            <button type="submit" input type="submit" class="btn btn-primary btn-block btn-lg" value="Register"
                                name="registerbtn"><span>SEND MESSAGE</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="schorlarship-wrapper section">
        <div class="scholarship-container">
            <div class="_3_col_section schorlarship">
                <div class="sc-col">
                    <p class="bold yellow">SCHOLARSHIPS</p>
                </div>

                <div class="col merit-text">
                    <p class="light white" style="color:yellow ;">Up to 100% Merit based Scholarships<sup>*</sup></p>
                    <p class="light white disclaimer" style="color:yellow ;">*For further details, refer T&amp;C on <a
                            href="#">MIMT</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="points-and-vision">
        <div class="points-para">
            <h3 id="first-para">MIET Application 2022 <br> <span style="font-size :18px;">Key Points</span></h3>
            <p id="vision-bullet-points"><b>1.</b> The online application form is for admission into different
                programmes offered in KL U at Hyderabad, Vijayawada.</p>
            <p id="vision-bullet-points"><b>1.</b> The online application form is for admission into different
                programmes offered in KL U at Hyderabad, Vijayawada.</p>
            <p id="vision-bullet-points"><b>1.</b> The online application form is for admission into different
                programmes offered in KL U at Hyderabad, Vijayawada.</p>
            <p id="vision-bullet-points"><b>1.</b> The online application form is for admission into different
                programmes offered in KL U at Hyderabad, Vijayawada.</p>
            <p id="vision-bullet-points"><b>1.</b> The online application form is for admission into different
                programmes offered in KL U at Hyderabad, Vijayawada.</p>


        </div>
        <img id="para-side" src="./Images/WhatsApp Image 2022-05-26 at 3.11.11 PM.jpeg">

        <img id="para-side-mobile" src="./Images/WhatsApp Image 2022-05-26 at 3.11.11 PM.jpeg">
    </section>

    <section id="clients" class="section-bg">

        <div class="container">

            <div class="section-header">
                <h3>Our Recruiters</h3>

            </div>

            <div class="row no-gutters clients-wrap clearfix wow fadeInUp"
                style="visibility: visible; animation-name: fadeInUp;">

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460149/abof.png"
                            class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460224/cropped-cropped-20170720-lucuLogo-squ2-e1500543540803.png"
                            class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460269/104840a62d46c05d285762857fecb61a.png"
                            class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460358/client-4.png"
                            class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460379/client-5.png"
                            class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460398/client-6.png"
                            class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460418/client-7.png"
                            class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="https://bootstrapmade.com/demo/themes/NewBiz/img/clients/client-8.png"
                            class="img-fluid" alt="">
                    </div>
                </div>

            </div>

        </div>

    </section>

    <section class="wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
        <div class="container">
            <div class="row">
                <!-- counter -->
                <div class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated"
                    data-wow-duration="300ms"
                    style="visibility: visible; animation-duration: 300ms; animation-name: fadeInUp;">
                    <i class="fa fa-beer medium-icon"></i>
                    <span id="anim-number-pizza" class="counter-number"></span>
                    <span class="timer counter alt-font appear" data-to="980" data-speed="7000">2800</span>
                    <p class="counter-title">Beer Ordered</p>
                </div>
                <!-- end counter -->
                <!-- counter -->
                <div class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated"
                    data-wow-duration="600ms"
                    style="visibility: visible; animation-duration: 600ms; animation-name: fadeInUp;">
                    <i class="fa fa-heart medium-icon"></i>
                    <span class="timer counter alt-font appear" data-to="980" data-speed="7000">980</span>
                    <span class="counter-title">Happy Clients</span>
                </div>
                <!-- end counter -->
                <!-- counter -->
                <div class="col-md-3 col-sm-6 bottom-margin-small text-center counter-section wow fadeInUp xs-margin-bottom-ten animated"
                    data-wow-duration="900ms"
                    style="visibility: visible; animation-duration: 900ms; animation-name: fadeInUp;">
                    <i class="fa fa-anchor medium-icon"></i>
                    <span class="timer counter alt-font appear" data-to="810" data-speed="7000">810</span>
                    <span class="counter-title">Projects Completed</span>
                </div>
                <!-- end counter -->
                <!-- counter -->
                <div class="col-md-3 col-sm-6 text-center counter-section wow fadeInUp animated"
                    data-wow-duration="1200ms"
                    style="visibility: visible; animation-duration: 1200ms; animation-name: fadeInUp;">
                    <i class="fa fa-user medium-icon"></i>
                    <span class="timer counter alt-font appear" data-to="600" data-speed="7000">600</span>
                    <span class="counter-title">Clients Served</span>
                </div>
                <!-- end counter -->
            </div>
        </div>
    </section>
    

    <div class="services pd">
        <div class="container">
          <h3 class="title">Branches</h3>
          <div class="row text-center">
            <div class="col-md-3">
              <div class="square"><i class="fas fa-code"></i></div>
              <div class="serv">
                <h5>CSE</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="serv">
                <div class="square"><i class="fas fa-cogs"></i></div>
                <h5>ECE</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="square"><i class="fas fa-globe"></i></div>
              <div class="serv">
                <h5>Civil</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="square"><i class="fas fa-user-shield"></i></div>
              <div class="serv">
                <h5>Mechanical</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="feat bg-gray pt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="section-head col-sm-12">
          <h4><span>Why Choose</span> Us?</h4>
          <p>When you choose us, you'll feel the benefit of 10 years' experience of Web Development. Because we know the digital world and we know that how to handle it. With working knowledge of online, SEO and social media.</p>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_one"><i class="fa fa-globe"></i></span>
            <h6>Modern Design</h6>
            <p>We use latest technology for the latest world because we know the demand of peoples.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_two"><i class="fa fa-anchor"></i></span>
            <h6>Creative Design</h6>
            <p>We are always creative and and always lisen our costomers and we mix these two things and make beast design.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_three"><i class="fa fa-hourglass-half"></i></span>
            <h6>24 x 7 User Support</h6>
            <p>If our customer has any problem and any query we are always happy to help then.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_four"><i class="fa fa-database"></i></span>
            <h6>Business Growth</h6>
            <p>Everyone wants to live on top of the mountain, but all the happiness and growth occurs while you're climbing it</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_five"><i class="fa fa-upload"></i></span>
            <h6>Market Strategy</h6>
            <p>Holding back technology to preserve broken business models is like allowing blacksmiths to veto the internal combustion engine in order to protect their horseshoes.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_six"><i class="fa fa-camera"></i></span>
            <h6>Affordable cost</h6>
            <p>Love is a special word, and I use it only when I mean it. You say the word too much and it becomes cheap.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section>
  <div class="about">
    <div class="title-ab"><h1>About The Company</h1></div>
    <div class="desc"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores modi vel blanditiis doloribus commodi impedit!. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p></div>
  </div>
  <div class="row-ab">
    <div class="card-ab">
      <div class="card_img">
        <i class="fas fa-rocket"></i>
        </div>
      <div class="card_title">HTML</div>
      <div class="card_body"><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p></div>
    </div>
    <div class="card-ab">
      <div class="card_img">
        <i class="fab fa-cloudversify"></i>
      </div>
      <div class="card_title">CSS</div>
      <div class="card_body"><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p></div>
    </div>
    <div class="card-ab">
      <div class="card_img">
        <i class="fas fa-user-astronaut"></i>
      </div>
      <div class="card_title">JAVASCRIPT</div>
      <div class="card_body"><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p></div>
    </div>
    
  </div>

</section>
<div class="title-clife"><h1>Life at MIET</h1></div>
<section class="campus-life">

<div class="col-md-4">

           
                <div class="image">
                    <img src="https://i.imgur.com/ptT381b.jpg"/>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="image">
                    <img src="https://i.imgur.com/EGtKPqm.jpg"/>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="image">
                    <img src="https://i.imgur.com/cv3bPVx.jpg"/>
                </div>
            </div>
            
</section>

    <script src="index.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
   
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"> </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>