<?php  
	include("header.php");
?>


<!-- nav bar -->
<link href="css/font-awesome.min.css" rel="stylesheet">
<div class="container">
<div class="row">
    <div class="col-sm-3">
        <a href="#contactEng" class="btn btn-danger btn-block btn-compose-email">Contact Me</a>
        <ul class="nav nav-pills nav-stacked nav-email shadow mb-20">
            <li class="active">
                <a href="#mail-inbox.html">
                    <i class="fa fa-inbox"></i> Location  <span class="label pull-right">Lagos</span>
                </a>
            </li>
            <li class="active">
                <a href="#mail-inbox.html">
                    <i class="fa fa-inbox"></i> Member Since  <span class="label pull-right">August,2018</span>
                </a>
            </li>
            <li class="active">
                <a href="#mail-inbox.html">
                    <i class="fa fa-inbox"></i> Recent Delivery <span class="label pull-right">10 days</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-file-text-o"></i> Avg. Response Time <span class="label label-info pull-right inbox-notification">35</span>
                </a>
            </li>
        </ul><!-- /.nav -->

        <h5 class="nav-email-subtitle">More</h5>
        <ul class="nav nav-pills nav-stacked nav-email mb-20 rounded shadow">
            <li>
                <a href="#">
                    <i class="fa fa-folder-open"></i> Report User </span>
                </a>
            </li>

        </ul><!-- /.nav -->
    </div>
    <div class="col-sm-9">
        
        <!-- resumt -->
        <div class="panel panel-default">
               <div class="panel-heading resume-heading">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="col-xs-12 col-sm-4">
                           <figure>
                              <img class="img-borthered img-responsive" alt="" src="images/img1.jpg">
                           </figure>
                           <div class="row">
                              <div class="col-xs-12 social-btns">
                                 <img src="images/twi-icons.png">
                                 <img src="images/fb-icons.png">
                                 <img src="images/mail-icons.png">
                               	 <img src="images/you-icons.png">
                              </div> 
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-8">
                           <ul class="list-group">
                              <li class="list-group-item">John Doe</li>
                              <li class="list-group-item">Software Engineer</li>
                              <li class="list-group-item">Lagos, Nigeria</li>
                              <li class="list-group-item">Joh Doe compuetrs</li>
                              <li class="list-group-item"><i class="fa fa-phone"></i> 000-000-0000 </li>
                              <li class="list-group-item"><i class="fa fa-envelope"></i> john@example.com</li>
                              <li class="list-group-item"><span class="glyphicon glyphicon-star"><span class="glyphicon glyphicon-star"><span class="glyphicon glyphicon-star"><span class="glyphicon glyphicon-star"><span class="glyphicon glyphicon-star"></li>
                              <br>
                              <li></li>
                          <div class="bs-callout bs-callout-danger">
                            <h4>Engineer Description</h4>
                            <p>
                               Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel vidit mollis complectitur. Quis verear mel ne. Munere vituperata vis cu, 
                               te pri duis timeam scaevola, nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti mediocritatem ei.
                            </p>
                            <p>
                               Odio recteque expetenda eum ea, cu atqui maiestatis cum. Te eum nibh laoreet, case nostrud nusquam an vis. 
                               Clita debitis apeirian et sit, integre iudicabit elaboraret duo ex. Nihil causae adipisci id eos.
                            </p>
                         </div>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="bs-callout bs-callout-danger">
                  <h4>Summary</h4>
                  <p>
                     Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel vidit mollis complectitur. Quis verear mel ne. Munere vituperata vis cu, 
                     te pri duis timeam scaevola, nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti mediocritatem ei.
                  </p>
                  <p>
                     Odio recteque expetenda eum ea, cu atqui maiestatis cum. Te eum nibh laoreet, case nostrud nusquam an vis. 
                     Clita debitis apeirian et sit, integre iudicabit elaboraret duo ex. Nihil causae adipisci id eos.
                  </p>
               </div>
               <div class="bs-callout bs-callout-danger">
                  <h4>Send message to supplier</h4></span>
        <form class="form-vertical" method="post" id="contactEng" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">

                  <?php
                    // read and fetch pages form pages table
                    $myquery = "SELECT * FROM pages";
                    $myresult = mysqli_query($con, $myquery);

                    // check if the sql query is okay
                    if(!mysqli_query($con, $myquery)){
                      echo "Error: ".mysqli_error($con);
                    }

                  ?>

           

                  <div class="form-group">
                    <label for="title">Subject</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Subject" />
                    <?php if(isset($errorTitle)){ echo $errorTitle; } ?>
                  </div>


                  <div class="form-group">
                    <label for="body">Message</label>          
                    <textarea rows="8" name="body" id="body" class="form-control" placeholder="Enter your inquiry details such as product name , color , size and problems. etc" ></textarea>
                    <?php if(isset($errorBody)){ echo $errorBody; } ?>
                  </div>

                  


                  <button type="submit" name="submit" class="btn btn-danger">send</button>
      </form>
               </div>
               
               <div class="bs-callout bs-callout-danger">
                  <h4>Key Expertise</h4>
                  <ul class="list-group">
                     <li class="list-group-item"> Desktop Repairs </li>
                     <li class="list-group-item"> Software Installations</li>
                  </ul>
               </div>
               <div class="bs-callout bs-callout-danger">
                  <h4>Language and Platform Skills</h4>
                  <ul class="list-group">
                     <a class="list-group-item inactive-link" href="#">
                        <div class="progress">
                           <div data-placement="top" style="width: 70%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="1" role="progressbar" class="progress-bar progress-bar-success">
                              <span class="sr-only">70%</span>
                              <span class="progress-type">English Language</span>
                           </div>
                        </div>


                        <div class="progress">
                           <div data-placement="top" style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-warning">
                              <span class="sr-only">60%</span>
                              <span class="progress-type">Yoruba</span>
                           </div>
                        </div>

                        <div class="progress-meter">
                           <div style="width: 25%;" class="meter meter-left"><span class="meter-text">I suck</span></div>
                           <div style="width: 25%;" class="meter meter-left"><span class="meter-text">I know little</span></div>
                           <div style="width: 30%;" class="meter meter-right"><span class="meter-text">I'm a guru</span></div>
                           <div style="width: 20%;" class="meter meter-right"><span class="meter-text">I''m good</span></div>
                        </div>
                     </a>
                  </ul>
               </div>
               <div class="bs-callout bs-callout-danger">
                  <h4>Education</h4>
                  <table class="table table-striped table-responsive ">
                     <thead>
                        <tr>
                           <th>Degree</th>
                           <th>Graduation Year</th>
                           <th>CGPA</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>Masters in Computer Science and Engineering</td>
                           <td>2014</td>
                           <td> 3.50 </td>
                        </tr>
                        <tr>
                           <td>BSc. in Computer Science and Engineering</td>
                           <td>2011</td>
                           <td> 3.25 </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
        <!-- resume -->

    </div>
</div>
</div>

<?php  
	include("footer.php");
?>