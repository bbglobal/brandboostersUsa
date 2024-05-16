@php
    require base_path('vendor/autoload.php');
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    if (isset($_GET['contact'])) {
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
            $mail->Body = "{$_GET['name']}, <br/> <a href='mailto:{$_GET['email']}'>{$_GET['email']}</a>, <br/> <a href='mailto:{$_GET['number']}'>{$_GET['number']}</a>, <br/><br/> {$_GET['message']}";
    
            $mail->AltBody = "{$_GET['name']}, <br/> <a href='mailto:{$_GET['email']}'>{$_GET['email']}</a>, <br/> <a href='mailto:{$_GET['number']}'>{$_GET['number']}</a>, <br/><br/> {$_GET['message']}";
    
            $mail->send();
            $sent = 'Success';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
@endphp
@extends('layouts.main')
@push('description')
    Get in touch with our experts through a call at (315) 907-4273 or email us at info@brandboosters.us.
@endpush
@push('keywords')
    Contact Us, Brand Boosters USA, call at (315) 907-4273, email us at info@brandboosters.us
@endpush
@push('rel')
    https://brandboosters.us/contact
@endpush
@push('title')
    <title> Contact Us | Brand Boosters USA </title>
@endpush
@section('main-section')
    <section class="hero-other">
        <h1 class="animate__animated animate__jackInTheBox">Contact Us</h1>
    </section>
    <section id="projects-section" class="pt-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4 text-center">
                    <div class="icon mb-3">
                        <img src="assets/img/phone-call.png" alt="image" width="100px">
                    </div>
                    <div class="text">
                        <a href="tel:3159074273">
                            (315) 907-4273
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 text-center"> 
                    <div class="icon mb-3">
                        <img src="assets/img/mail.png" alt="image" width="100px">
                    </div>
                    <div class="text">
                        <a href="mailto:info@brandboosters.us">
                            info@brandboosters.us
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 text-center">
                    <div class="icon mb-3">
                        <img src="assets/img/map.png" alt="image" width="100px">
                    </div>
                    <div class="text">

                        <address>
                            <a href="javascript:void(0)">
                                18 Georgia St, Valley Stream, NY 11580
                            </a>
                        </address>
                    </div>
                </div>
                <div class="col-12 my-5 text-center">
                    <h2>Get In Touch</h2>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <lottie-player src="https://lottie.host/eda3ad61-0411-4540-ac62-211a49430e9f/oAznVFfJFu.json"
                        background="transparent" speed="1" style="width: 100%;" loop
                        autoplay></lottie-player>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <form method="get">
                        <div class="mb-3 mt-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="name" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="cName" class="form-label">Company Name:</label>
                            <input type="text" class="form-control" id="cName" name="cName">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="number" class="form-label">Phone Number:</label>
                            <input type="number" class="form-control" id="number" name="number">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="services" class="form-label">Message:</label>
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <button name="contact" class="btn-outline-brandBoosters">
                            Send
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
