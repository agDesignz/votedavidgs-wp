<?php

function contactForm($colorScheme = 'secondary') {

  $validation_messages = [];
$success_message = '';

if ( isset( $_POST['contact_form'] ) ) {

  //Sanitize the data
  $first_name = isset( $_POST['first_name'] ) ? sanitize_text_field( $_POST['first_name'] ) : '';
  $last_name = isset( $_POST['last_name'] ) ? sanitize_text_field( $_POST['last_name'] ) : '';
  $email     = isset( $_POST['email'] ) ? sanitize_text_field( $_POST['email'] ) : '';
  $phone     = isset( $_POST['phone'] ) ? sanitize_text_field( $_POST['phone'] ) : '';
  $address     = isset( $_POST['address'] ) ? sanitize_text_field( $_POST['address'] ) : '';
  $message   = isset( $_POST['message'] ) ? sanitize_textarea_field( $_POST['message'] ) : '';

  //Validate the data
  if ( strlen( $first_name ) === 0 ) {
    $validation_messages[] = esc_html__( 'Please enter your first name.', 'twentytwentyone' );
  }

  if ( strlen( $last_name ) === 0 ) {
    $validation_messages[] = esc_html__( 'Please enter your last name.', 'twentytwentyone' );
  }

  if ( strlen( $email ) === 0 or
       ! is_email( $email ) ) {
    $validation_messages[] = esc_html__( 'Please enter a valid email address.', 'twentytwentyone' );
  }

  if ( strlen( $message ) === 0 ) {
    $validation_messages[] = esc_html__( 'Please enter a valid message.', 'twentytwentyone' );
  }

  //Send an email to the WordPress administrator if there are no validation errors
  if ( empty( $validation_messages ) ) {

    $adminEmail    = get_option( 'admin_email' );
    $subject = 'Website contact form message from ' . $full_name;
    $adminMessage = '
    <h4>New message from the website contact form:</h4>
    <h4>Message from: ' . $first_name .' ' . $last_name.'</h4>
    <h4>Phone: <a href="tel:' . $phone . '">' . $phone . '</a></h4>
    <h4>Address: ' . $address . '</a></h4>
    <h4>Email: <a href="mailto:' . $email . '">' . $email . '</a></h4>
    <p>
      ' . $message . '
    </p>';

    $adminMessage = stripslashes($adminMessage);

    $customerSubject = 'Thank you for your message, ' . $full_name;
    $customerMessage = '
    <h4>This is a confirmation that you sent us the following message:</h4>
    <p>
    ' . $message . '
    </p>
    <h4>Thank you for your support.</h4>
    ';
    $customerMessage = stripslashes($customerMessage);

    wp_mail( $adminEmail, $subject, $adminMessage );
    wp_mail( $email, $customerSubject, $customerMessage );

    $total_success = 'Your message has been successfully sent.';
    $success_message = esc_html__( $total_success, 'twentytwentyone' );

  }

}

//Display the validation errors
if ( ! empty( $validation_messages ) ) {
  foreach ( $validation_messages as $validation_message ) {
    echo '<div class="validation-message">' . esc_html( $validation_message ) . '</div>';
  }
}

//Display the success message
if ( strlen( $success_message ) > 0 ) {
  echo '<div class="success-message">' . esc_html( $success_message ) . '</div>';
}

?>

  <form action="<?php echo esc_url( get_permalink() ); ?>" method="post" class="contact-form">
    <input type="text" name="first_name" size="45" class="contact-form__input contact-form__input--half" aria-required="true" placeholder="First Name">
    <input type="text" name="last_name" size="45" class="contact-form__input contact-form__input--half" aria-required="true" placeholder="Last Name">
    <input type="email" name="email" size="45" class="contact-form__input" aria-required="true" placeholder="Email">
    <input type="tel" name="phone" size="45" class="contact-form__input" aria-required="true" placeholder="Phone">
    <input type="text" name="address" size="45" class="contact-form__input" aria-required="true" placeholder="Address">
    <textarea name="textarea-398" cols="40" rows="10" class="contact-form__input contact-form__input--message" placeholder="Message (optional)"></textarea>
    <div class="contact-form__options">
      <h4 class="contact-form__heading">I would like to:</h4>
      <div class="contact-form__option-item">
        <input type="checkbox" name="door-knock" id="door-knock">
        <label class="contact-form__label" for="door-knock">Door knock with David</label>
      </div>
      <div class="contact-form__option-item">
        <input type="checkbox" name="yard-sign" id="yard-sign">
        <label class="contact-form__label" for="yard-sign">Request a yard sign</label>
      </div>
      <div class="contact-form__option-item">
        <input type="checkbox" name="endorse" id="endorse">
        <label class="contact-form__label" for="endorse">Give an endorsement</label>
      </div>

    </div>
    <input type="submit" value="<?php echo esc_attr( 'Submit' ); ?>" class="contact-form__submit btn">
    <div class="contact-form__output"></div>
  </form>

<?php }
