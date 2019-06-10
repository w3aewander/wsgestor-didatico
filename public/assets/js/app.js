$(document).ready(function () {

        $(".bt-fb").draggable();
});


const loginFB = () => {
    FB.login(function (response) {
        if (response.authResponse) {
            console.log("Response: ", response.authResponse);
            FB.api('/me', function (response) {
                console.log("Resposta:" , response);
                $.ajax({
                    type: 'POST',
                    url: 'config_session.php',
                    data: { logado: true, nome: response.name, email:response.email, accessToken: response.accessToken },
                    success: () => {
                        //alert('Legal, conectou com facebook.');
                        location.href = "index.php";
                    }
                });

            });
        } else {
            console.log('Login não autorizado.');
        }
    },{scope:'public_profile,email'});
}
