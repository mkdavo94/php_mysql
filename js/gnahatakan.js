$("document").ready(function () {
    $("#send").click(function () {
        var ID = $("#ID").val();

        var fail="";
        if (~~ID!=ID || ID.length=="" )
            fail = "Սխալ ID  եք  գրել";
        if (fail != "") {
            $('#message').html(fail + "<div class='clear'></div>");
            $('#message').show();
            return false;
        }


        var danni = $("form").serialize();

        $.ajax({
            url: 'db_gnahatakan.php',
            type: 'POST',
            data: danni,
            success: function (data) {
                $('#message').html(data + "<div class='clear'></div>");
                $('#message').show();
                $('#formm')[0].reset()

//                        if (data=='Hagox grancvel ek') {
//                            alert("Tvyalner@ bervel en");
//                        } else {
//                            alert("sxal ka");
//                        }
            }
        });
    });
});