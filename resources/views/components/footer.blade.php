<section class="ap-sec seosteps seostep1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Committed to Our Client's Success</h2>
                <p>At Brand Boosters USA, we are dedicated to ensuring our clients’ success on all digital platforms
                    through our streamlined and transparent approach. From design and development to branding, we are
                    always here to assist you.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row appr-warp">
            <div class="col-12 col-md-12 col-lg-6 mt-3">
                <div class="box-wrap box-boxi boxiesng boxiesnghome">
                    <figure>
                        <img src="assets/img/writing-that-reflects-perfection.svg" alt="Customer Icon">
                    </figure>
                    <h4>EXPERTISE</h4>
                    <p class="list-scroll1">Our primary goal since entering the digital landscape has been to provide
                        professional and innovative design solutions to clients all over the world. We consistently
                        deliver projects within agreed-upon deadlines, ensuring precision and accuracy in all endeavors,
                        thanks to our extensive hands-on experience. When you work with us, you can be confident that
                        your concerns are in capable hands.</p>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 mt-3">
                <div class="box-wrap box-boxi boxiesng boxiesnghome">
                    <figure>
                        <img src="assets/img/punctuality.svg" alt="Customer Icon">
                    </figure>
                    <h4>TIMELINESS</h4>
                    <p class="list-scroll1">Client satisfaction is our top priority. To ensure on-time deliveries, we
                        prioritize meeting all requirements within the timeframes specified. Tardiness and
                        miscommunication are never an issue with Brand Boosters USA. By adhering to deadlines, we
                        believe in cultivating long-term and harmonious relationships with our clients</p>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 mt-3">
                <div class="box-wrap box-boxi boxiesng boxiesnghome">
                    <figure>
                        <img src="assets/img/award-winners.svg" alt="Customer Icon">
                    </figure>
                    <h4>APPROACHABLE</h4>
                    <p class="list-scroll1">At Brand Boosters USA, our mission is to simplify the process and make them
                        easily accessible to you. We prioritize keeping clients informed about work progress. Our
                        experts handle all complex projects with the utmost professionalism, always respecting your
                        ideas and requirements.</p>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 mt-3">
                <div class="box-wrap box-boxi boxiesng boxiesnghome">
                    <figure>
                        <img src="assets/img/diversity.svg" alt="Customer Icon">
                    </figure>
                    <h4>Driven</h4>
                    <p class="list-scroll1">We don't believe in the concept of "impossible" because every challenge is
                        an opportunity for us. To assist our clients in achieving their goals, we draw on the collective
                        expertise of our designers, developers, and branding specialists. We tailor our approach to your
                        specific requirements, with results being our top priority.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="clients-section" class="clientswrp home-logo-clint ">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pb-5">
                <h2 style="color: #000;">Our Clients</h2>
            </div>
            <div class="col-md-12">
                <div class="txtwrp">
                    <ul class="partnerslider">
                        <li>
                            <img src="assets/img/clients-logos/clients-01.webp" alt="Client Logo" width="80%">
                        </li>
                        <li>
                            <img src="assets/img/clients-logos/clients-02.webp" alt="Client Logo" width="80%">
                        </li>
                        <li>
                            <img src="assets/img/clients-logos/clients-03.png" alt="Client Logo" width="40%">
                        </li>
                        <li>
                            <img src="assets/img/clients-logos/clients-04.png" alt="Client Logo" width="80%"
                                style="margin-top: 10px;">
                        </li>
                        {{-- <li>
                            <img src="assets/img/clients-logos/clients-06.png" alt="Client Logo" width="80%">
                        </li> --}}
                        <li>
                            <img src="assets/img/clients-logos/clients-07.png" alt="Client Logo" width="50%">
                        </li>
                        <li>
                            <img src="assets/img/clients-logos/clients-08.png" alt="Client Logo" width="80%"
                                style="filter: brightness(0);">
                        </li>
                        <li>
                            <img src="assets/img/clients-logos/clients-09.png" alt="Client Logo" width="80%"
                                style="filter: brightness(0); margin-top:10px;">
                        </li>
                        <li>
                            <img src="assets/img/clients-logos/clients-10.png" alt="Client Logo" width="50%">
                        </li>
                        <li>
                            <img src="assets/img/clients-logos/clients-11.png" alt="Client Logo" width="50%">
                        </li>
                        <li>
                            <img src="assets/img/clients-logos/clients-12.png" alt="Client Logo" width="80%">
                        </li>
                        <li>
                            <img src="assets/img/clients-logos/clients-13.png" alt="Client Logo" width="80%">
                        </li>
                        <li>
                            <img src="assets/img/clients-logos/clients-14.png" alt="Client Logo" width="50%">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@php
    require base_path('vendor/autoload.php');
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    if (isset($_GET['send'])) { 
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
    
        try {
            //Server settings
            $mail->SMTPDebug = 0; //Enable verbose debug output
            $mail->isSMTP(); //Send using SMTP
            $mail->Host = 'brandboostersglobal.com'; //Set the SMTP server to send through
            $mail->SMTPAuth = true; //Enable SMTP authentication
            $mail->Username = 'info@brandboostersglobal.com'; //SMTP username
            $mail->Password = 'Q~+,MS@~w&jB'; //SMTP password
            $mail->SMTPSecure = 'ssl'; //Enable implicit TLS encryption
            $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
            //Recipients
            $mail->setFrom('info@brandboostersglobal.com', 'Brnad Boosters Global');
            $mail->addAddress('info@brandboostersglobal.com', 'Brnad Boosters Global');
    
            //Content
            $mail->isHTML(true); //Set email format to HTML
            $mail->Subject = "{$_GET['name']}, {$_GET['email']}";
            $mail->Body = "{$_GET['name']}, <br/> <a href='mailto:{$_GET['email']}'>{$_GET['email']}</a>, <br/> <a href='mailto:{$_GET['number']}'>{$_GET['number']}</a>, <br/><br/> {$_GET['service']} , <br/><br/> {$_GET['message']}";
    
            $mail->AltBody = "{$_GET['name']}, <br/> <a href='mailto:{$_GET['email']}'>{$_GET['email']}</a>, <br/> <a href='mailto:{$_GET['number']}'>{$_GET['number']}</a>, <br/><br/> {$_GET['service']} , <br/><br/> {$_GET['message']}";
    
            $mail->send();
            $sent = 'Success';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
@endphp
<section id="projects-section" class="pt-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 mb-5 text-center">
                <div data-aos="fade-up" data-aos-duration="1500">
                    <img src="assets/img/projects-head.png" alt="about-image" width="100%">
                </div>
                <h2>ABOUT YOUR PROJECT</h2>
            </div>
            <form method="get" class="row">
                <div class="mb-3 mt-3 col-12 col-md-6 col-lg-6">
                    <label for="name" class="form-label">Name:</label>
                    <input type="name" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3 mt-3 col-12 col-md-6 col-lg-6">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3 mt-3 col-12 col-md-6 col-lg-6">
                    <label for="number" class="form-label">Phone Number:</label>
                    <input type="number" class="form-control" id="number" name="number">
                </div>
                <div class="mb-3 mt-3 col-12 col-md-6 col-lg-6">
                    <label for="whatServices" class="form-label">Services:</label>
                    <select class="form-control" id="whatServices" name="service">
                        <option>--Select--</option>
                        <option value="Logo Design">Logo Design</option>
                        <option value="Graphic Design">Graphic Design</option>
                        <option value="Video Animation">Video Animation</option>
                        <option value="Mobile App Development">Mobile App Development</option>
                        <option value="Wordpress Desing and Development">Wordpress Desing and Development</option>
                        <option value="Website Desing and Development">Website Desing and Development</option>
                        <option value="Social Media Marketing">Social Media Marketing</option>
                        <option value="Ecommerce">Ecommerce</option>
                        <option value="Branding">Branding</option>
                        <option value="SEO">SEO</option>
                        <option value="PPC">PPC</option>
                    </select>
                </div>
                <div class="mb-3 mt-3">
                    <label for="services" class="form-label">Message:</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="text-center">
                    <button name="send" class="btn-outline-brandBoosters">
                        Send
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>