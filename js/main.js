$(function () {
    console.log("ready!");
 

    $("#formContact").submit(function (e) {
        e.preventDefault();


        $form = $("#formContact");
        $formMessage = $("#formMessage");
        $name = $("#name").val();
        $firstname = $("#firstname").val();
        $email = $("#email").val();
        $content = $("#text-zone").val();
        $dataString = 'name=' + $name +
                      '&email=' + $email +
                      '&firstname=' + $firstname +
                      '&content=' + $content +
                      '&g-recaptcha-response=' + grecaptcha.getResponse();

        $inputs = $form.find("input, button, textarea");
        $inputs.prop("disabled", true);

        // AJAX code to submit form.
        $request = $.ajax({
            type: "POST",
            url: $form.attr('action'),
            data: $dataString,
            dataType: 'JSON',
            cache: false,
        });
    
        $request.done(function (response) {

            $formMessage.removeClass('error');
            $formMessage.addClass('success');

            // Set the message text.
            if (response['success']) {
                $formMessage.text('Votre message a bien \u00e9t\u00e9 envoy\u00e9.');
            }
            else {
                $formMessage.text(response['error']);
            }
        });

        $request.fail(function (data) {

            $formMessage.removeClass('success');
            $formMessage.addClass('error');

            // Set the message text.
            if (data.responseText !== '') {
                $formMessage.text(data.responseText);
            } else {
                $formMessage.text('Oops! Une erreur s\'est produite, votre message n\'a pas pu \u00eatre envoy\u00e9.');
            }
        });  
    });


    $(".btn-detail").on('click', function (e) {
        e.preventDefault();
        $token = $("#table-message").data('token');
        $id = $(this).attr('id');
        $dataString = 'token=' + $token +
            '&id=' + $id;
        console.log($dataString);
        // AJAX code to get details.
        $request = $.ajax({
            type: "POST",
            url: '?type=login&action=detail',
            data: $dataString,
            dataType: 'JSON',
            cache: false,
        });

        $request.done(function (response) {

            $("#message-name").html(response['name']);
            $("#message-firstname").html(response['firstname']);
            $("#message-content").html(response['content']);
            $("#message-email").html(response['email']);
            $("#message-hour").html(response['hour']);
            $("#message-date").html(response['date']);

            $snackBar = $("#snackbar");
            // Add the "show" class to DIV
            $snackBar.addClass("show");
 
            $("#toast-btn").on('click', function (e) {
                $snackBar.removeClass("show");
            })
       
        });

        $request.fail(function (data) {
            console.log(data.responseText);
        });
    });
});

