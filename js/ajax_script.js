$(document).ready(function () {

    var cmp = 0;
    $("#btn_sub").click(function () {
        var bien = $("#bien").val();
        var Lit = $("#Lit").val();
        var Vue = $("#Vue").val();
        var pension = $("#pension").val();
        var img_bien = document.getElementById("img_Bine").src;
        var NB_Jour = $("#NB_Jour").val();

        var prix = $("#prix").val();

        var nb_bambin = $("#NB_bambin").val();
        var nb_enfant = $("#NB_enfant").val();
        var nb_adulte = $("#NB_adulte").val();
        var select_bambin = $("#select_bambin").val();
        var select_enfant = $("#select_enfant").val();
        var select_adulte = $("#select_adulte").val();

        cmp = 0;
        $.ajax({
            url: "../controller/controller_2.php",
            method: "POST",
            data: {
                bien: bien,
                Lit: Lit,
                Vue: Vue,
                pension: pension,
                prix: prix,
                img_bien: img_bien,
                NB_Jour: NB_Jour,
                nb_bambin: nb_bambin,
                nb_enfant: nb_enfant,
                nb_adulte: nb_adulte,
                select_bambin: select_bambin,
                select_enfant: select_enfant,
                select_adulte: select_adulte,
                cmp: cmp
            },
            success: function (data, status) {
                $("#succ").html(data);
                // document.getElementById("bien").value = "Null";
            }
        })
        $("#bien").val("Null")
        $("#Lit").val("Null");
        $("#Vue").val("Null");
        $("#pension").val("Null");
        $("#NB_Jour").val("1");
        $("#prix").val("0");
        $("#NB_bambin").val("Null");
        $("#NB_enfant").val("Null");
        $("#NB_adulte").val("Null");
        $("#select_bambin").val("Null");
        $("#select_enfant").val("Null");
        $("#select_adulte").val("Null");
        // window.location.href = "http://localhost/Brief5_Php/View/profil_client.php";

    });

    $("#btn_plus").click(function () {
        var bien = $("#bien").val();
        var Lit = $("#Lit").val();
        var Vue = $("#Vue").val();
        var pension = $("#pension").val();
        var img_bien = document.getElementById("img_Bine").src;
        var NB_Jour = $("#NB_Jour").val();

        var prix = $("#prix").val();

        var nb_bambin = $("#NB_bambin").val();
        var nb_enfant = $("#NB_enfant").val();
        var nb_adulte = $("#NB_adulte").val();
        var select_bambin = $("#select_bambin").val();
        var select_enfant = $("#select_enfant").val();
        var select_adulte = $("#select_adulte").val();
        cmp++;


        $.ajax({
            url: "../controller/controller_2.php",
            method: "POST",
            data: {
                bien: bien,
                Lit: Lit,
                Vue: Vue,
                pension: pension,
                prix: prix,
                img_bien: img_bien,
                NB_Jour: NB_Jour,
                nb_bambin: nb_bambin,
                nb_enfant: nb_enfant,
                nb_adulte: nb_adulte,
                select_bambin: select_bambin,
                select_enfant: select_enfant,
                select_adulte: select_adulte,
                cmp: cmp
            },
            success: function (data, status) {
                $("#succ").html(data);
                // document.getElementById("bien").value = "Null";
            }
        })
        $("#bien").val("Null")
        $("#Lit").val("Null");
        $("#Vue").val("Null");
        $("#pension").val("Null");
        $("#NB_Jour").val("1");
        $("#prix").val("0");
        $("#NB_bambin").val("Null");
        $("#NB_enfant").val("Null");
        $("#NB_adulte").val("Null");
        $("#select_bambin").val("Null");
        $("#select_enfant").val("Null");
        $("#select_adulte").val("Null");
        // window.location.href = "http://localhost/Brief5_Php/View/profil_client.php";

    });
});






















// $(document).ready(function() {
    //     var bien = $("#bien").val();
    //     var Lit = $("#Lit").val();
    //     var Vue = $("#Vue").val();
    //     var img_bien = $("#img_Bine").val();
    //     var pension = $("#pension").val();
    //     var nb_bambin = $("#NB_bambin").val();
    //     var nb_enfant = $("#NB_enfant").val();
    //     var nb_adulte = $("#NB_adulte").val();
    //     var select_bambin = $("#select_bambin").val();
    //     var select_enfant = $("#select_enfant").val();
    //     var select_adulte = $("#select_adulte").val();
    //     $("#btn_res").click(function() {
    //         $.post("../controller/controller_2.php", {
    //             bien: bien,
    //             Lit: lit,
    //             Vue: vue,
    //             // img_bien: img_bien,
    //             pension: pension,
    //             // nb_bambin: nb_bambin,
    //             // nb_enfant: nb_enfant,
    //             // nb_adulte: nb_adulte,
    //             // select_bambin: select_bambin,
    //             // select_enfant: select_enfant,
    //             // select_adulte: select_adulte
    //         }, function(data, status) {
    //             $("#succ").html(data);
    //             alert(status);
    //         });
    //     });
    // });