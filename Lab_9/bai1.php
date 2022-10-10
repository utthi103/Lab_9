<?php
          require "PHPMailer-master/src/PHPMailer.php";  
          require "PHPMailer-master/src/SMTP.php"; 
          require 'PHPMailer-master/src/Exception.php'; 
          $mail = new PHPMailer\PHPMailer\PHPMailer(true);  
            try {
               // $mail->SMTPDebug = 2;  // 0,1,2: chế độ debug. khi mọi cấu hình đều tớt thì chỉnh lại 0 nhé
                $mail->isSMTP();  
                $mail->CharSet  = "utf-8";
                $mail->Host = 'smtp.gmail.com';  //SMTP servers
                $mail->SMTPAuth = true; // Enable authentication
		    $nguoigui = 'truongthiutthi2003@gmail.com';
		    $matkhau = 'gdpmfamagvjoyrzp';// mật khẩu ứng dụng đã tạo ở bước 3
            $tennguoigui = 'TRUONG THI UT THI';
            $mail->Username = $nguoigui; // SMTP username
            $mail->Password = $matkhau;   // SMTP password
            $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
            $mail->Port = 465;  // port to connect to                
            $mail->setFrom($nguoigui, $tennguoigui ); 
            $to = "thittu.21it@vku.udn.vn";
            $to_name = "Thi";
            
            $mail->addAddress($to, $to_name); //mail và tên người nhận
           // $mail->addAddress("nlquan@vku.udn.vn","lequan");
            /* $recipients = "test1@test.com,test2@test.com,test3@test.com,test1@test.com";
$email_array = explode(",",$recipients);*/
            $mail->isHTML(true);  // Set email format to HTML
            $mail->Subject = 'Gửi thư từ php';      
            $noidungthu = "<b>Chào bạn!</b><br>Chúc an lành!" ;
            $mail->Body = $noidungthu;
            $mail->AddAttachment("exct.png","picture");
            $mail->smtpConnect( array(
                "ssl" => array(
                    "verify_peer" => false,
                    "verify_peer_name" => false,
                    "allow_self_signed" => true
                )
            ));
            $mail->send();
            // echo 'Đã gửi mail xong';
            // alert('');
            echo '<script>
            alert("Đã gửi mail xong")
            </script>';
            
        } catch (Exception $e) {
            // echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
            $loi = $mail->ErrorInfo;
            echo $loi;
            // echo '<script>
            // alert("sjdfkfds" + $loi)
            // </script>';

            echo "<script>
            alert('Đã gửi mail den '+ '$loi' +'xonq gòi đó bà dàa')
            </script>";
        }

?>
