<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'ventaspse@dimaltsa.com.mx';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_lastname = $_POST['lastname'];
  $contact->from_work = $_POST['work'];
  $contact->from_phone = $_POST['phone'];
  $contact->from_phone2 = $_POST['cellphone'];
  $contact->from_email = $_POST['email'];
  
  
  
  $contact->from_bermocoll = $_POST['service1'];
  $contact->from_cantidad1 = $_POST['probudget1'];
   $contact->from_bermocoll = $_POST['service2'];
  $contact->from_cantidad1 = $_POST['probudget2'];
  $contact->from_bermocoll = $_POST['service3'];
  $contact->from_cantidad1 = $_POST['probudget3'];
  $contact->from_bermocoll = $_POST['service4'];
  $contact->from_cantidad1 = $_POST['probudget4'];
  $contact->from_bermocoll = $_POST['service5'];
  $contact->from_cantidad1 = $_POST['probudget5'];
  $contact->from_bermocoll = $_POST['service6'];
  $contact->from_cantidad1 = $_POST['probudget6'];
  $contact->from_bermocoll = $_POST['service7'];
  $contact->from_cantidad1 = $_POST['probudget7'];
  
  $contact->from_bermocoll = $_POST['service8'];
  $contact->from_cantidad1 = $_POST['probudget8'];
  $contact->from_cantidad1 = $_POST['probudget9'];
  
  $contact->from_bermocoll = $_POST['service10'];
  $contact->from_cantidad1 = $_POST['probudget10'];
  $contact->from_cantidad1 = $_POST['probudget11'];
  
  $contact->from_bermocoll = $_POST['service12'];
  $contact->from_cantidad1 = $_POST['probudget12'];
  $contact->from_cantidad1 = $_POST['probudget13'];
  
  $contact->from_bermocoll = $_POST['service14'];
  $contact->from_cantidad1 = $_POST['probudget14'];
  $contact->from_cantidad1 = $_POST['probudget15'];
  
  $contact->from_bermocoll = $_POST['service16'];
  $contact->from_cantidad1 = $_POST['probudget16'];
  $contact->from_cantidad1 = $_POST['probudget17'];
  
  
  
  
  $contact->subject = $_POST['subject'];
  
  

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $contact->add_message( $_POST['name'], 'Nombre');
  $contact->add_message( $_POST['lastname'], 'Apellido');
  $contact->add_message( $_POST['work'], 'Empresa');
  $contact->add_message( $_POST['phone'], 'Telefono');
  $contact->add_message( $_POST['cellphone'], 'Telefono2');
  $contact->add_message( $_POST['email'], 'Email');
  
  $contact->add_message('');
  $contact->add_message('');
  
  $contact->add_message([''],'Solicitud de cotización, según el detalle siguiente');
  $contact->add_message('');
  
  $contact->add_message( $_POST['service1'], 'Material');
  $contact->add_message( $_POST['probudget1'], 'Cantidad');
  
  $contact->add_message('');
  $contact->add_message( $_POST['service2'], 'Material');
  $contact->add_message( $_POST['probudget2'], 'Cantidad');
  
  $contact->add_message('');
  $contact->add_message( $_POST['service3'], 'Material');
  $contact->add_message( $_POST['probudget3'], 'Cantidad');
  
  $contact->add_message('');
  $contact->add_message( $_POST['service4'], 'Material');
  $contact->add_message( $_POST['probudget4'], 'Cantidad');
  
  $contact->add_message('');
  $contact->add_message( $_POST['service5'], 'Material');
  $contact->add_message( $_POST['probudget5'], 'Cantidad');
  
  $contact->add_message('');
  $contact->add_message( $_POST['service6'], 'Material');
  $contact->add_message( $_POST['probudget6'], 'Cantidad');
  
  $contact->add_message('');
  $contact->add_message( $_POST['service7'], 'Material');
  $contact->add_message( $_POST['probudget7'], 'Cantidad');
  
  $contact->add_message('');
  $contact->add_message( $_POST['service8'], 'Material');
  $contact->add_message( $_POST['probudget8'], 'Cantidad');
  $contact->add_message( $_POST['probudget9'], 'Medida');
  
  $contact->add_message('');
  $contact->add_message( $_POST['service10'], 'Material');
  $contact->add_message( $_POST['probudget10'], 'Cantidad');
  $contact->add_message( $_POST['probudget11'], 'Medida');
  
  $contact->add_message('');
  $contact->add_message( $_POST['service12'], 'Material');
  $contact->add_message( $_POST['probudget12'], 'Cantidad');
  $contact->add_message( $_POST['probudget13'], 'Medida');
  
  $contact->add_message('');
  $contact->add_message( $_POST['service14'], 'Material');
  $contact->add_message( $_POST['probudget14'], 'Cantidad');
  $contact->add_message( $_POST['probudget15'], 'Medida');
  
  $contact->add_message('');
  $contact->add_message( $_POST['service16'], 'Material');
  $contact->add_message( $_POST['probudget16'], 'Cantidad');
  $contact->add_message( $_POST['probudget17'], 'Medida');
  
  
  $contact->add_message('');
  $contact->add_message('');
  $contact->add_message( $_POST['message'], 'Mensaje', 10);
  
  

  echo $contact->send();
?>
