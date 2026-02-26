if ( recaptcha ) {
    if(typeof grecaptcha !== "undefined" ) {
        grecaptcha.ready(function() {
            try {
                grecaptcha.execute(recaptcha, {action: 'php_email_form_submit'})
                .then(token => {
                    formData.set('recaptcha-response', token);
                    console.log("reCAPTCHA Token:", formData.get('recaptcha-response')); // Debug
                    php_email_form_submit(thisForm, action, formData);
                })
            } catch(error) {
                displayError(thisForm, error);
            }
        });
    } else {
        displayError(thisForm, 'The reCAPTCHA javascript API url is not loaded!')
    }
}
