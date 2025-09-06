<?php

namespace App\Models;
use Mail;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;
class SendMails extends Model
{
    use HasFactory;
    public static function contact_form($name,$email,$subject,$message){ 
        //The Generic mailler Goes here
        $messageee = ''.$message.'';
        $data = array(
            'content'=>$messageee,
            'name'=>$name,
            'email'=>$email,
            'subject'=>$subject,
        );

        $subject = "Contact Form: $subject";
     
        $appEmail = 'mailer@pipdotfx.com';
    
    
        $SenderEmail = $email;
        $SenderName = $name;

        $toVariable = $appEmail;

        $toVariableName = 'Pipdot FX Consultants Limited';


        Mail::send('mailTheme', $data, function($message) use ($subject,$SenderEmail,$SenderName,$toVariable,$toVariableName,$email,$name){
            $message->from($SenderEmail , $SenderName);
            $message->to($toVariable, $toVariableName)->cc('albertmuhatia@gmail.com')->replyTo($SenderEmail, $SenderName)->subject($subject);
        });
    }

    public static function approvePayment($name,$email,$subject,$message){ 
        //The Generic mailler Goes here
        $messageee = ''.$message.'';
        $data = array(
            'content'=>$messageee,
            'name'=>$name,
            'email'=>$email,
            'subject'=>$subject,
        );

        $subject = "$subject";
     
        $appEmail = 'mailer@pipdotfx.com';
    
    
        $SenderEmail = $email;
        $SenderName = $name;

        $toVariable = $appEmail;

        $toVariableName = 'Pipdot FX Consultants Limited';


        Mail::send('mailTheme', $data, function($message) use ($subject,$SenderEmail,$SenderName,$toVariable,$toVariableName,$email,$name){
            $message->from($toVariable , $toVariableName);
            $message->to($SenderEmail, $SenderName)->cc('info@pipdotfx.com')->cc('pipdotforex@gmail.com')->bcc('albertmuhatia@gmail.com')->replyTo($toVariable, $toVariableName)->subject($subject);
        });
    }

    public static function approvePaymentRequest($email,$Transcode){ 
        $subject = "Request Approval";
        //The Generic mailler Goes here
        $messageee = '';
        $data = array(
            'Transaction'=>$Transcode,
            'email'=>$email,
            'subject'=>$subject,
        );

        $subject = "$subject";
     
        $appEmail = 'mailer@pipdotfx.com';
    
    
        $SenderEmail = $email;
        $SenderName = $email;

        $toVariable = $appEmail;

        $toVariableName = 'Pipdot FX Consultants Limited';


        Mail::send('mailThemes', $data, function($message) use ($subject,$SenderEmail,$SenderName,$toVariable,$toVariableName,$email){
            $message->from($toVariable , $toVariableName);
            $message->to('info@pipdotfx.com', 'PipdotFx')->cc('pipdotforex@gmail.com')->bcc('albertmuhatia@gmail.com')->replyTo($toVariable, $toVariableName)->subject($subject);
        });
    }

    public static function commentApproval($post){ 
        $subject = "Comment Approval";
        $BlogPost = Blog::find($post);
        //The Generic mailler Goes here
        $messageee = 'Dear Admin, a new comment has been posted for the post '.$BlogPost->title.' ';
        $data = array(
            'messageee'=>$messageee,
           
        );

        $subject = "$subject";
     
        $appEmail = 'mailer@pipdotfx.com';
        $email = $appEmail;
    
        $SenderEmail = $email;
        $SenderName = $email;

        $toVariable = $appEmail;

        $toVariableName = 'Pipdot FX Consultants Limited';


        Mail::send('mailComment', $data, function($message) use ($subject,$SenderEmail,$SenderName,$toVariable,$toVariableName,$email){
            $message->from($toVariable , $toVariableName);
            $message->to('info@pipdotfx.com', 'PipdotFx')->cc('pipdotforex@gmail.com')->bcc('albertmuhatia@gmail.com')->replyTo($toVariable, $toVariableName)->subject($subject);
        });
    }

    

    

}
