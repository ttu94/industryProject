@extends('layouts.unregisteredMaster')

@section('title')
	Contact Us
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
   <h2>Contact Us</h2>
@endsection

@section('content')
<div class="container-fluid">
    <br>
    <div class="row">
        <!--LEFT SIDE OF SCREEN-->
        <div class="col-md-6">
            <iframe class="aboutUsImageOne" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3537.4015585955476!2d153.06056591092639!3d-27.55004541144087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x16a2c299555e1370!2sGriffith+Institute+for+Drug+Discovery+(GRIDD)!5e0!3m2!1sen!2sau!4v1493115715649" width="750" height="600" frameborder="0" style="border-color:black" allowfullscreen></iframe>
        </div>
        <!--RIGHT SIDE OF SCREEn-->

        <div class="col-md-6">
                <div class="blocks">
                        <h3>Our Location</h3>
                        <div class="basicFontStyle" style="text-align: justify">
                            Building N75, Brisbane <br>
                            Innovation Park, <br>
                            Nathan Campus, Griffith University <br>
                            Tel: +61 123 456 789 <br>
                            Fax: +61 123 456 789 <br>
                            info@amarelo.com <br>
                            <form action="/action_page.php">
                               
                                <input type="text" id="contactName" name="name" placeholder="Name" width="200px" required>
                                <br>
    
                                <input type="text" id="contactEmail" name="email" placeholder="Email" required>
                                <br>
    
                                <input type="text" id="contactSubject" name="subject" placeholder="Subject">
                                <br>
    
                                <textarea id="comment" name="comment" placeholder="How can we help you?" height="1000px"></textarea>
                                <br>
                                <button type="submit, button" form="contactUsForm" value="Submit" data-toggle="modal" data-target="#myModal">Submit</button>
                              
                            </form>
                            
                              <!-- Modal -->
                              <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog modal-sm">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title">Thank You!</h4>
                                    </div>
                                    <div class="modal-body">
                                      <p>Thank You for your enquiry.<br>
                                          We'll be sure to emaul you soon!<br>
                                          Have a nice day!
                                      </p>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                </div>
        </div>
        

    </div>
</div>

@endsection
