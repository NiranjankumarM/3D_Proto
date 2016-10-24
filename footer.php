         <link rel="stylesheet" type="text/css" href="css/footer.css"/>
 
 <!-- contact fold starts		-->
        <div class="fa-contact-container">
            <div class="fa-product-row-title">
                <h2>Looking for more stuff ?</h2>
            </div>
            <div class="fa-product-rowcontent">
                <div class="fa-product-content-leftcol large-6">
                    <div class="fa-text-holder">
                        <h2>Lets Discuss</h2>
                        <table>
                            <tr>
                                <th>Reach Us at
                                </th>
                                <td>+91 98759 49728</td>
                            </tr>
                            <tr>
                                <th>Email
                                </th>
                                <td>
                                    info@3dproto.in</td>
                            </tr>
                            <tr>
                                <th>Follow Us</th>
                                <td>
                                    <div class="image">
                                        <div class="fb"><img src="image/twt.png"/></div>
                                        <div class="twt"><img src="image/fb.png"/></div>
                                        <div class="inst"><img src="image/inst.png"/></div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="fa-product-content-rightcol large-5">

                    <form id="contactt" method="post" class="foo-formholder">
                        <input type="text" name="Name" placeholder="Full Name"/>
                        <input type="email" name="Email" placeholder="Email"/>
                        <input type="text" name="MobNo" placeholder="Phone"/>
                        <textarea class="query" name="Query" placeholder="Message"></textarea>

                        <textarea id="Page" name="Page" type='text'></textarea>

                        <textarea id="Status" name="Status" type='text'>Open</textarea>

                        <textarea id="Comments" name="Comments" type='text'></textarea>

                        <input type="submit" value="Send Message"/>

                    </form>

                </div>
                <div class="fa-product-content-leftcol-mob large-6">
                    <div class="fa-text-holder">
                        <h2>Lets Discuss</h2>
                        <table>
                            <tr>
                                <th>Reach Us at
                                </th>
                                <td>+91 98759 49728</td>
                            </tr>
                            <tr>
                                <th>Email
                                </th>
                                <td>
                                    info@3dproto.in</td>
                            </tr>
                            <tr>
                                <th>Follow Us</th>
                                <td>
                                    <div class="image">
                                        <div class="fb"><img src="image/twt.png"/></div>
                                        <div class="twt"><img src="image/fb.png"/></div>
                                        <div class="inst"><img src="image/inst.png"/></div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <!-- Custom Theme JavaScript -->
  		<script>
  // Variable to hold request
var request;

// Bind to the submit event of our form
$("#contactt").submit(function(event){

    // Abort any pending request
    if (request) {
        request.abort();
    }
    // setup some local variables
    var $form = $(this);

    // Let's select and cache all the fields
    var $inputs = $form.find("input, select, button, textarea");

    // Serialize the data in the form
    var serializedData = $form.serialize();

    // Let's disable the inputs for the duration of the Ajax request.
    // Note: we disable elements AFTER the form data has been serialized.
    // Disabled form elements will not be serialized.
    $inputs.prop("disabled", true);

    // Fire off the request to /form.php
    request = $.ajax({
        url: "https://script.google.com/macros/s/AKfycbwP2ySU06JeiAzxb5QI5rVIWlzGPoU6b4CJ_Pwmq78_gNVa6u0i/exec",
        type: "post",
        data: serializedData
    });

    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        // Log a message to the console
        console.log("Hooray, it worked!");
        console.log(response);
        console.log(textStatus);
        console.log(jqXHR);
				 $('#contactt')[0].reset();
    });

    // Callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown){
        // Log the error to the console
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });

    // Callback handler that will be called regardless
    // if the request failed or succeeded
    request.always(function () {
        // Reenable the inputs
        $inputs.prop("disabled", false);
    });

    // Prevent default posting of form
    event.preventDefault();
});

		</script>


  <script>


var newURL = window.location.pathname;
document.getElementById("Page").innerHTML = newURL;

 </script>

        <!-- contact fold ends		-->

    </section>

    <footer>
        <div class="fa-footer-rights">
            <h1>Copyright © 2016 3DProto. All rights reserved.</h1>
        </div>
    </footer>