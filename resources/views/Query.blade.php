<!-- ***** Query Submission Section Starts ***** -->
<section class="section" id="query">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-form">
                    <form id="contact" action="{{url('/query')}}" method="post">

                        @csrf

                      <div class="row">
                        <div class="col-lg-12">
                            <h4>Submit Your Query</h4>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                          <fieldset>
                            <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                          </fieldset>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                          <fieldset>
                          <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                        </fieldset>
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <input name="subject" type="text" id="subject" placeholder="Subject*" required="">
                          </fieldset>
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <textarea name="message" rows="6" id="message" placeholder="Your Query*" required=""></textarea>
                          </fieldset>
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <button type="submit" id="form-submit" class="main-button-icon">Submit Query</button>
                          </fieldset>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Query Submission Section Ends ***** -->
