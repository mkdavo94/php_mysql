    $("document").ready(function () {
        $("#send").click(function () {
            var name = $("#name").val();
            var surname = $("#surname").val();
            var email = $("#email").val();
            var testName = function(name){return !/[a-zA-Z]{3}[a-zA-Z]+/.test(name)}
            var fail="";
            if (testName(name))
                fail = "Սխալ անուն  եք  գրել";
            else
            if (testName(surname))
                fail = "Սխալ ազգանուն  եք  գրել";
            else if (email.split('@').length - 1 == 0 || email.split('.').length - 1 == 0)
                fail = "Սխալ email  եք  գրել";
            if (fail != "") {
                $('#message').html(fail + "<div class='clear'></div>");
                $('#message').show();

                return false;
            }


            var dannie = $("form").serialize();

            $.ajax({
                url: 'db_grancvel.php',
                type: 'POST',
                data: dannie,
                dataType:'html',
                success: function (data) {
                    $('#message').html(data + "<div class='clear'></div>");
                    $('#message').show();
                    $('#form')[0].reset()

                }
            });
        });
    });

