<?php
session_start();

// Including head and header
require '../includes/head.php';
include '../includes/header.php';
?>

<body>

     <main class="justify-content-center contact_container">
        
        <section class="row">

            <div class="d-none d-md-block col-12 text-center welcome_note">
                <h1>Contact Us!</h1>
            </div>

        </section>

        <br/>

        <div class="contact_hero_image">

            <section class="row content_element">

                <!-- Empty element used for styling -->
                <div class="col-sm-12 col-xl-6 text-center content_element">
                </div>

                <div class="col-sm-12 col-xl-6 justify-content-center text-center content_element">

                    <br/>

                    <h2 class="contact_h2">Send an e-mail to Millhouse!</h2>

                    <form action="mailto:blog@millhouse.se" class="card contact_card">

                        <label for="fname">First Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="Your name..">

                        <label for="lname">Last Name</label>
                        <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                        <label for="subject">Subject</label>
                        <textarea id="subject" name="subject" placeholder="Your message.." style="height:200px"></textarea>

                        <br/>

                        <input name="mail_to" type="submit" class="btn btn-primary contact_button" value="Send">
                        
                    </form>

                    <br/>

                </div>

            </section>

        </div>

    </main>

</body> 

<br/>

<!-- Include footer -->

<?php include '../includes/footer.php';?> 
