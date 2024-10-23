<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'fname' => 'required|string',
            'lname' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'subject' => 'required|string',
            'msg' => 'required|string',
        ]);

        $firstName = $request->input('fname');
        $lastName = $request->input('lname');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $subject = $request->input('subject');
        $message = $request->input('msg');

        // Create an instance of PHPMailer
        $mail = new PHPMailer(true);

        try {
            // Server settings


            // Recipients
            $mail->setFrom('infomini@addsolutions.biz', 'BS Agro');
            $mail->addAddress('krishanthapathum9@gmail.com'); // Add a recipient

            // Embedding the image
            $mail->AddEmbeddedImage(public_path('images/Group 89mailn.png'), 'logo_img', 'Group 89mailn');

            // Email content
            $mail->isHTML(true);
            $mail->Subject = $subject;

            // HTML for email
            $html_start = '
                <html>
                <head>
                    <style>
                        body { font-family: Arial, sans-serif; color: #333; }
                        h2 { color: #5F9EA0; }
                        p { font-size: 14px; line-height: 1.5; }
                        .header { text-align: center; }
                        .footer { margin-top: 20px; text-align: center; font-size: 12px; color: #888; }
                        img { max-width: 150px; height: auto; padding: 5px; margin-top: 20px; margin-bottom: 20px;}
                        .header-back { background-color:#0b3d2c;}
                    </style>
                </head>
                <body>
                <div class="header">
                    <div class="header-back">
                        <img src="cid:logo_img" alt="BS Agro Logo" />
                    </div>
                </div>
            ';

            $html_end = '
                <hr>
                <div class="footer">
                    <p>BS Agro &copy; 2024</p>
                </div>
                </body>
                </html>
            ';

            $emailBody = "
                <h2>Contact Form Submission</h2>
                <p><strong>First Name:</strong> $firstName</p>
                <p><strong>Last Name:</strong> $lastName</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Phone:</strong> $phone</p>
                <p><strong>Subject:</strong> $subject</p>
                <p><strong>Message:</strong> $message</p>
            ";

            // Combine email parts
            $mail->Body = $html_start . $emailBody . $html_end;

            // Send email
            $mail->send();
            return redirect('/thankyou');
        } catch (Exception $e) {
            return redirect('/contact')->with('error', "Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
        }
    }
}
