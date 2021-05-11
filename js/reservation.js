var pension = document.getElementById("pension");
var bien = document.getElementById("bien");
var A_enfant = document.getElementById("Aavec_en")
var div_lit = document.getElementById("Div_Lit");
var div_Vue = document.getElementById("Div_Vue");
var Div_Pension = document.getElementById("Div_Pension")
var Div_Enfant = document.getElementById("Div_Enfant")
var Div_select = document.getElementById("Div_select")
var chamber_desc = document.getElementById("chamber_desc")
var vue_desc = document.getElementById("vue_desc")
var pension_desc = document.getElementById("pension_desc")
var total_desc = document.getElementById("total_desc")
var img_Bine = document.getElementById("img_Bine");
var btn_plus = document.getElementById("plus_r");
var plus_form = document.getElementById("plus_form");
var prix = document.getElementById("prix");
var prix_chambr_double = 1000;
var prix_chambr_simple = 400;
var vue_extrieur = 20;
var add_chambre_simple_lit = ((prix_chambr_simple / 100) + 70);
var bambin_lit = ((prix_chambr_simple / 100) + 25);
var enfant_chambre = ((prix_chambr_simple / 100) + 50);
var pension_c = 500;
var pension_d = 250;
var prix_chambre = 0;
var total = 0;
function chick_bien() {

    switch (bien.value) {
        case "chambre double": div_lit.innerHTML = `
                                            <label for="Lit" class="form-label">Type De Lit</label>
                                            <select class="form-select" name="Lit" onchange="chick_lit()" id="Lit" required>
                                                <option value="Null" selected hidden>Choose...</option>
                                                <option value="Lit double">Lit double</option>
                                                <option value="Lit simple">2 Lit simple</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please select a valid Lit.
                                            </div>`;
            chamber_desc.innerText = "Chambre double"
            img_Bine.src = "../img/bc.jpg";
            prix_chambre = prix_chambr_double;
            totalprix()
            pension.removeAttribute("disabled")
            A_enfant.removeAttribute("disabled")
            document.getElementById("Demi").removeAttribute("disabled")


            break;
        case "chambre simple":
            Div_Vue.innerHTML = "<hr class='my-4>' "
            div_lit.innerHTML = `<label for="Vue" class="form-label">Type De Vue</label>
                                            <select  onchange="chick_vue()" name="Vue" class="form-select" id="Vue" required>
                                                <option value="Null" selected hidden>Choose...</option>
                                                <option value="interieur">Vue interieur</option>
                                                <option value="extrieur">Vue extrieur</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please select a valid Vue.
                                            </div>`
            chamber_desc.innerText = "Chambre simple"
            img_Bine.src = "../img/h3.jpg";
            prix_chambre = prix_chambr_simple;
            totalprix()
            pension.removeAttribute("disabled")
            A_enfant.removeAttribute("disabled")
            document.getElementById("Demi").removeAttribute("disabled")
            break;
        case "Appartement":
            chamber_desc.innerText = "Appartement"
            img_Bine.src = "../img/pt.jpg";
            div_lit.innerHTML = div_Vue.innerHTML = "<hr class='my-4>' "
            prix_chambre = 1200;
            totalprix()
            pension.setAttribute("disabled", "true");
            A_enfant.setAttribute("disabled", "true");
            document.getElementById("Demi").setAttribute("disabled", "true");
            break;
        case "bungalow":
            chamber_desc.innerText = "Bungalow"
            img_Bine.src = "../img/bn.jpg";
            prix_chambre = 1400;
            totalprix()
            pension.setAttribute("disabled", "true");
            A_enfant.setAttribute("disabled", "true");
            document.getElementById("Demi").setAttribute("disabled", "true");
            div_lit.innerHTML = div_Vue.innerHTML = "<hr class='my-4>' "

            break;
        case "Null":
            pension.setAttribute("disabled", "true");
            Div_Vue.innerHTML = "<hr class='my-4>' "
            div_lit.innerHTML = "<hr class='my-4>' "
            prix_chambre = 0;
            totalprix()

            break;
        default:

            prix_chambre = 0;
            totalprix()
            break;
    }
}

function chick_lit() {
    var Lit = document.getElementById("Lit").value;
    switch (Lit) {
        case "Lit double":
            div_Vue.innerHTML = `<label for="Vue" class="form-label">Type De Vue</label>
                        <select class="form-select" name="Vue" onchange="chick_vue()" onchange="totalprix()" id="Vue" required>
                            <option value="Null" selected hidden>Choose...</option>
                            <option value="interieur">Vue interieur</option>
                            <option value="extrieur">Vue extrieur</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid Vue.
                        </div>`
            break;
        case " Lit simple":
            div_Vue.innerHTML = `<label for="Vue" class="form-label">Type De Vue</label>
                        <select class="form-select" name="Vue" onchange="chick_vue()"  id="Vue" required>
                            <option value="Null" selected hidden>Choose...</option>
                            <option value="interieur">Vue interieur</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid Ponsion.
                        </div>`

            break;
        default:
            break;
    }
}
var prix_vue = 0;
function chick_vue() {
    var vue = document.getElementById("Vue").value
    if (vue == "interieur") {
        vue_desc.innerText = "Vue interieur"
        prix_vue = 0;
        totalprix();

    } else if (vue == "extrieur") {
        vue_desc.innerText = "Vue extrieur"
        prix_vue = vue_extrieur;
        totalprix();

    } else {
        vue_desc.innerText = "Vue !!"
        prix_vue = 0
        totalprix();
    }
}
var prix_pension = 0;
function chick_Pension() {

    switch (pension.value) {
        case "demi":
            Div_Pension.innerHTML = `<label for="Ponsion_ch" class="form-label">Type De Demi</label>
            <select class="form-select" onchange="demi()"  id="Demi" required>
                <option value="Null" selected hidden>Choose...</option>
                <option value="dej/dej">petit dej/dej</option>
                <option value="dej/diner">petit dej/diner</option>
            </select>
            <div class="invalid-feedback">
                Please select a valid Ponsion.
            </div>`
            pension_desc.innerText = "Demi"
            prix_pension = pension_d;
            totalprix();
            break;
        case "complete": pension_desc.innerText = "Complete"
            prix_pension = pension_c;
            totalprix();
            Div_Pension.innerHTML = "<hr class='my-4>' "
            break;
        case "sans": pension_desc.innerText = "Sans"
            Div_Pension.innerHTML = "<hr class='my-4>' "
            prix_pension = 0;
            totalprix();
            break;
        default:
            Div_Pension.innerHTML = "<hr class='my-4>' "
            prix_pension = 0;
            totalprix();
            break;
    }
}
function demi() {
    var demi = document.getElementById("Demi").value;
    if (demi == "dej/dej") {
        pension_desc.innerText = "Demi petit dej/dej"

    } else if (demi == "dej/diner") {
        pension_desc.innerText = "Demi petit dej/diner"

    } else
        pension_desc.innerText = "Demi"

}

function chick_enfant() {
    if (A_enfant.checked) {
        Div_Enfant.innerHTML =
            `<div class="row">
                <div  class="col-6">
                    <label for="nbenfant" class="form-label">Nomber   bambin(s) <= 2 ans </label>
                    <input type="text"  class="form-control" oninput="viseble()"  id="NB_bambin" placeholder="Nomber  bambin(s)">
                </div>
                <div  class="col-6 invisible" id="bn">
                <label for="nbenfant" class="form-label">Select chambre !</label>
                    <select class="form-select" id="select_bambin" onchange="check_bn()" required>
                        <option value="Null" selected hidden>Choose...</option>
                        <option value="avec lit 25%">avec lit 25%</option>
                        <option value="sans lit">sans lit</option>
                    </select>
                </div>
                <div  class="col-6">
                    <label for="nbenfant" class="form-label">Nomber  enfant(s) entre 2 ans et 14 ans </label>
                    <input type="text"  class="form-control" oninput="viseble()"  id="NB_enfant" placeholder="Nomber  enfant(s)">
                </div>
                <div  class="col-6 invisible" id="en">
                <label for="nbenfant" class="form-label">Select chambre ef !</label>
                    <select class="form-select" id="select_enfant" onchange="check_en()" required>
                        <option value="Null" selected hidden >Choose...</option>
                        <option value="chambre simple 50%">chambre simple 50%</option>
                    </select>
                </div>
                    <div  class="col-6">
                    <label for="nbenfant" class="form-label">Nomber  adulte(s) > 14 ans </label>
                    <input type="text"  class="form-control"  oninput="viseble()"  id="NB_adulte" placeholder="Nomber  adulte(s)">
                </div>
                <div  class="col-6 invisible"  id="ad">
                <label for="nbenfant" class="form-label">Select chambre !</label>
                    <select class="form-select" id="select_adulte" onchange="check_ad()" required>
                        <option value="Null" selected hidden>Choose...</option>
                        <option value="chambre simple">chambre simple</option>
                        <option value="chambre simple lit 70%">chambre simple avec lit 70%</option>
                    </select>
                </div>
            </div>`;

    } else {
        Div_Enfant.innerHTML = "<hr class='my-4>' ";
        Div_Enfant_NB.innerHTML = "<hr class='my-4>' ";
        // alert("111")
    }
}
var prix_En = 0;
var prix_Bn = 0;
var prix_Ad = 0;
function check_bn() {
    var bn = document.getElementById("select_bambin").value
    switch (bn) {
        case "sans lit":
            prix_Bn = 0;
            totalprix()
            break;

        case "avec lit 25%":
            prix_Bn = bambin_lit;
            totalprix()
            break;
        default:
            break;
    }

}
function check_en() {
    var en = document.getElementById("select_enfant").value
    switch (en) {
        case "chambre simple 50%":
            prix_En = enfant_chambre;
            totalprix()
            break;

        case "Null":
            prix_En = 0;
            totalprix()
            break;
        default:
            break;
    }
}
function check_ad() {
    var ad = document.getElementById("select_adulte").value
    switch (ad) {
        case "chambre simple":
            prix_Ad = 0;
            totalprix()

            break;

        case "chambre simple lit 70%":
            prix_Ad = add_chambre_simple_lit;
            totalprix()
            break;
        case "Null":
            prix_Ad = 0;
            totalprix()
            break;
        default:
            break;
    }
}

function totalprix() {

    var NB_Jour = document.getElementById("NB_Jour");
    total = (prix_chambre + ((prix_vue / 100) * prix_chambre) + prix_pension) * NB_Jour.value + prix_Bn + prix_En + prix_Ad;
    if (total > 0) {
        prix.value = total;
        total_desc.innerText = total + " DH";
        prix.classList.remove("invisible");

        document.getElementById("lb_prix").innerText = "DH";
    } else {
        prix.value = "";
        total_desc.innerText = " DH";
        document.getElementById("lb_prix").innerText = " ";
        prix.classList.add("invisible");

    }
}

function viseble() {
    var inp_B = document.getElementById("NB_bambin").value;
    var inp_E = document.getElementById("NB_enfant");
    var inp_A = document.getElementById("NB_adulte");

    var div_B = document.getElementById("bn");
    var div_E = document.getElementById("en");
    var div_A = document.getElementById("ad");


    if (parseInt(inp_B) > 0) {
        div_B.classList.add("visible");
        div_B.classList.remove("invisible");



    } else {
        div_B.classList.add("invisible");
        div_B.classList.remove("visible");
        document.getElementById("select_bambin").value = "Null"

    }

    if (parseInt(inp_E.value) > 0) {
        div_E.classList.add("visible");
        div_E.classList.remove("invisible");

    } else {
        div_E.classList.add("invisible");
        div_E.classList.remove("visible");
        document.getElementById("select_enfant").value = "Null"
    }
    if (parseInt(inp_A.value) > 0) {
        div_A.classList.add("visible");
        div_A.classList.remove("invisible");
    } else {
        div_A.classList.add("invisible");
        div_A.classList.remove("visible");
        document.getElementById("select_adulte").value = "Null"
    }



}

function checkout() {
    var checkout = document.getElementById("checkout");
    checkout.classList.remove("invisible");
}



