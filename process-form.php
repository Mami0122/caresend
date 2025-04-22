<?php
session_start();

if(isset($_SESSION['errors'])){
  unset($_SESSION['errors']);
}

$errors = [];

if(!isset($_POST['token']) || $_SESSION['token'] !== $_POST['token'] ){
  $errors[] = 'お問い合わせの送信に失敗しました。';
}

function e(string $str, string $charset = 'UTF-8'): string{
  return htmlspecialchars($str, ENT_QUOTES | ENT_HTML5, $charset, false);
}

foreach($_POST as $key => $value){
  if(strpos($key, 'fld_') === 0){
    $_SESSION[$key] = e($value);

    if($key == 'fld_lastName'){
      if(empty($value)){
        $errors[] = '姓を入力してください。';
      }elseif(preg_match('/[ぁ-ん]+|[ァ-ヴー]+|[一-龠]/u', $value)){
        // 日本語が含まれているのでOK
        $fld_lastName = $value;
      }else{
          $errors[] = '姓は日本語で入力してください。';
      }
    }elseif($key === 'fld_firstName'){
      if(empty($value)){
        $errors[] = '名を入力してください。';
      }elseif(preg_match('/[ぁ-ん]+|[ァ-ヴー]+|[一-龠]/u', $value)){
        // 日本語が含まれているのでOK
        $fld_firstName = $value;
      }else{
          $errors[] = '名は日本語で入力してください。';
      }
    }elseif($key === 'fld_company'){
      if (empty($value)){
        $errors[] = '会社名を入力してください。';
      }
    }elseif($key === 'fld_email'){
      if (empty($value)){
        $errors[] = 'メールアドレスを入力してください。';
      } else{
        if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
          // 有効なメールアドレスなのでOK 
        }else{
          $errors[] = 'メールアドレスの形式が正しくありません。';
        }
      }
    }elseif($key === 'fld_tel'){
      if(empty($value)){
        $errors[] = '電話番号を入力してください。';
      }elseif(preg_match('/^0[0-9]{1,4}-?[0-9]{1,4}-?[0-9]{4}\z/', $value)){
        // 有効な電話番号なのでOK 
      }
      else{
        $errors[] = '電話番号の形式が正しくありません。';
      }
    }
  }
}

// バリデーションでエラーが有ったらリダイレクト
if($errors){
  $_SESSION['errors'] = $errors;

  if(isset($_SESSION['fld_sectionID']) && $_SESSION['fld_sectionID'] == 'section-form'){
    header('Location: ./index.php#section-form');
    exit();  
  }

  header('Location: ./index.php');
  exit();  
}

mb_language("uni"); 
mb_internal_encoding("UTF-8"); // 文字エンコーディングをUTF-8に設定


// 管理者宛のメール送信
$admin_email = "mimitoume0122@gmail.com";
$admin_subject = "CareSendウェブサイトより資料請求のお問い合わせがありました。";

$admin_message =  "";
$admin_message .= "お名前：{$fld_lastName}　{$fld_firstName}\r\n";
$admin_message .= "会社名：{$_SESSION['fld_company']}\r\n";
$admin_message .= "メールアドレス：{$_SESSION['fld_email']}\r\n";
$admin_message .= "電話番号：{$_SESSION['fld_tel']}\r\n";

$admin_headers = "From:" . mb_encode_mimeheader('CareSend','UTF-8'). "<{$admin_email}>\r\n";
$admin_headers .= "Reply-To:{$admin_email}\r\n";
$admin_headers .= "Content-Type:text/plain; charset=UTF-8\r\n";
$admin_headers .= "Content-Transfer-Encoding: 8bit";


if(mb_send_mail($admin_email, $admin_subject, $admin_message, $admin_headers)){

  // 問い合わせ者宛の自動返信
  $to = $_SESSION['fld_email'];
  $subject = "【サービス資料のご送付】CareSend";
  $message = "{$fld_lastName}　{$fld_firstName}様\r\n\r\n";
  $message .= "この度はサービス資料のご送付依頼をいただき、誠に有り難うございます。\r\n";
  $message .= "資料を添付いたしますのでご査収ください。\r\n\r\n";
  $message .= "また、ご不明点等がございましたら、是非、お気軽にお問い合わせください。\r\n";
  $message .= "よろしくお願いいたします。\r\n";

  $headers = "From:" . mb_encode_mimeheader('CareSend','UTF-8'). "<{$admin_email}>\r\n";
  $headers .= "Reply-To:{$admin_email}\r\n";
  $headers .= "Content-Type:text/plain;charset=UTF-8\r\n";
  $headers .= "Content-Transfer-Encoding:8bit";
  $mail_check = mb_send_mail($to, $subject, $message, $headers);

  if( $mail_check){
    unset($_SESSION);
  }
  header('Location: ./thanks.php');
  exit();

} else {
  $_SESSION['errors'][] = "お問い合わせの送信に失敗しました。\n恐れいりますがもう一度お試しいただきますようお願いいたします。";

  if(isset($_SESSION['fld_sectionID']) && $_SESSION['fld_sectionID'] == 'section-form'){
    header('Location: ./index.php#section-form');
    exit();
  }else{
    header('Location: ./index.php');
  }
}