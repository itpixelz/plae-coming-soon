jQuery(document).ready(function() {
  jQuery('.page-loader').fadeOut();
  jQuery('.countdown').countdown({
    // date: 'June 7, 2087 15:03:26',
    date: 'September 18, 2019 12:00:00',
    hours: timezone_offset_minutes,
    //TODO: might need formatting and also get it from the data
  });

  jQuery('#ajax-contact-form').submit(function(event) {
    alert('Handler for .submit() called.');

    /* stop form from submitting normally */
    event.preventDefault();

    let $form = $('#ajax-contact-form'),
        url = $form.prop('action'),
        name = $form.find('input[name="name"]').val(),
        email = $form.find('input[name="email"]').val(),
        phone = $form.find('input[name="phone"]').val(),
        message = $form.find('textarea[name="msg"]').val(),
        subject = $form.find('input[name="subject"]').val(),
        submit = $form.find('button[type="submit"]');

    /* Send the data using post */

    let posting = $.post(url, {
      name: name,
      email: email,
      phone: phone,
      subject: subject,
      message: message,
      action: 'sendmail',
    });

    /* Disable submit button while posting */
    //  submit.prop('disabled', true);

    /* Put the results in a div */
    posting.done(function(data, statusText, xhr) {
      var status = xhr.status;                //200
      var head = xhr.getAllResponseHeaders(); //Detail header info

      /*  console.log(data);
        console.log(JSON.parse(data));
        let jsonData = JSON.parse(data);


        if (jsonData.success) {
          // Show the button
          $form.hide();
          $('.saythanks').show();
        }
        else {
          console.log('there was an error');
          // Show user an error
          // Log to google analytics etc
  //        submit.prop('disabled', false);
        }*/

      if (status === 200) {
        $form.hide();
        $('.saythanks').show();
      }
      else {
        // Show user an error
        // Log to google analytics etc
        submit.prop('disabled', false);
      }

    });

  });

});

