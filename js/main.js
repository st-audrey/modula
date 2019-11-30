$(function () {
    console.log("ready!");


    function sendAjaxRequest() {
        if (grecaptcha === undefined) {
            alert('Recaptcha not defined');
            return;
        }

        var response = grecaptcha.getResponse();

        if (!response) {
            alert('Coud not get recaptcha response');
            return;
        }

        $.ajax({
            url: 'validate-recaptcha.php',
            success: function (result) {
                alert(result);
            },
            type: 'POST',
            data: {
                recaptcha: response
            }
        });
    }


    $("#sendMessage").submit(function (e) {
        e.preventDefault;
        alert("The paragraph was clicked.");
    });

});

//$(function () {
//    $("#contact-form").submit(function () {
//        alert("test");
//        $.ajax({
//            url: "" ,
//            type: 'post',
//            data: ,
//            dataType:
//            success : function(code_html, statut) {
                
//            },

//            error: function (resultat, statut, erreur) {

//            },

//            complete: function (resultat, statut) {

//            }
//        });
//    });                       
//});




