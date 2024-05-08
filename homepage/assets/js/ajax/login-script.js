$(document).ready(function () {
    loginForm();
});
function loginForm() {
    $(document).on("submit", "#formlogin", function (event) {
        event.preventDefault();
        var form = $(this);
        var userEmail = form.find("#userEmail").val();
        var userPassword = form.find("#userPassword").val();

        $.ajax({
            method: "POST",
            url: "./phpscripts/user-login.php",
            data: { userEmail, userPassword },
            dataType: "json",
            success: function (response) {
                if (response.status === "success") {
                    $("#liveToast .toast-body p")
                        .text(response.message)
                        .addClass("text-success")
                        .removeClass("text-danger");
                    $("#liveToast").toast("show");

                    $("button, a, select, input").prop("disabled", true);

                    if (response.user_type === "admin") {
                        setTimeout(function () {
                            window.location.href =
                                "./user/admin-index-page.php";
                        }, 3000);
                    } else {
                        setTimeout(function () {
                            window.location.href = "./user/user-index-page";
                        }, 3000);
                    }
                } else {
                    $("#liveToast .toast-body p")
                        .text(response.message)
                        .addClass("text-danger");
                    $("#liveToast").toast("show");
                }
            },
            error: function (xhr, status, error) {
                console.log("AJAX Error:", error);
            },
        });
    });
}
