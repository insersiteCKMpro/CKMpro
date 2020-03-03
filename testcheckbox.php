<?php 
require_once("include/header.php");
?>
<style>
    div {
    position: relative;
    }
    input[type="checkbox"] {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    }
    h2 {
    font-size: 30px;
    font-weight: 400;
    color: #4a19ff;
    margin: 20px 0 0;
    }
    label {
    cursor: pointer;
    }
    label {
    position: relative;
    display: block;
    padding-left: 30px;
    font-family: "Spicy Rice", cursive;
    }
    label::before {
    content: "";
    position: absolute;
    width: 0;
    height: 0;
    top: 50%;
    left: 10px;
    border-left: 8px solid black;
    border-top: 8px solid transparent;
    border-bottom: 8px solid transparent;
    margin-top: -8px;
    }
    input[type="checkbox"]:checked ~ h2 label::before {
    border-left: 8px solid transparent;
    border-top: 8px solid black;
    border-right: 8px solid transparent;
    margin-left: -4px;
    margin-top: -4px;
    }

    p {
    max-height: 0;
    overflow: hidden;
    padding-left: 30px;
    transition: max-height 0.4s ease;
    font-family: "Habibi", serif;
    }
    input[type="checkbox"]:checked ~ h2 ~ p {
    max-height: 80px;
    }

    body {
    background: #fbbe05;
    }
</style>
<div class="radbox">
    <div class="form-check labe">Activité*</div>
    <div class="star">
        <div class="checkio">
            <div class="custom-control custom-radio text-center put">
                <input type="checkbox" class="custom-control-input" id="customControlValidation1 faq-1"
                    name="radio-stacked" onclick="askCategory1()">
                <label class="custom-control-label" for="customControlValidation1 faq-1"></label>
            </div>
            <div class="custom-control custom-radio text-center put">
                <input type="checkbox" class="custom-control-input" id="customControlValidation2 faq-2"
                    name="radio-stacked" onclick="askCategory2()">
                <label class="custom-control-label" for="customControlValidation2 faq-2"></label>
            </div>
            <div class="custom-control custom-radio text-center put">
                <input type="checkbox" class="custom-control-input" id="customControlValidation3 faq-3"
                    name="radio-stacked" onclick="askCategory3()">
                <label class="custom-control-label" for="customControlValidation3 faq-3"></label>
            </div>
        </div>
        <div class="checkio1">
            <p class="text-center put1">3D<br>
                Deratisation <br>
                Desinfection <br>
                Desinsectisation <br>
            </p>
            <p class="text-center put1">Nettoyage</p>
            <p class="text-center put1">Espaces Verts</p>
        </div>
    </div>
</div>
<br>
<select class="form-control" style="display:none" id="showInDropDown1">3D
    <option disabled="disabled" selected="selected">Default select</option>
    <option disabled="disabled" selected="selected">Default select</option>
    <option disabled="disabled" selected="selected">Default select</option>
    <option disabled="disabled" selected="selected">Default select</option>
</select>
<br>
<select class="form-control" style="display:none" id="showInDropDown2">Nettoyage
    <option disabled="disabled" selected="selected">Default select</option>
    <option disabled="disabled" selected="selected">Default select</option>
    <option disabled="disabled" selected="selected">Default select</option>
</select>
<br>
<select class="form-control" style="display:none" id="showInDropDown3">Espace vert
    <option disabled="disabled" selected="selected">Default select</option>
    <option disabled="disabled" selected="selected">Default select</option>
    <option disabled="disabled" selected="selected">Default select</option>
    <option disabled="disabled" selected="selected">Default select</option>
    <option disabled="disabled" selected="selected">Default select</option>
</select>

<div class="custom-control custom-switch">
  <input type="checkbox" class="custom-control-input" id="customSwitch1">
  <label class="custom-control-label" for="customSwitch1">Toggle this switch element</label>
</div>
<div class="custom-control custom-switch">
  <input type="checkbox" class="custom-control-input" disabled id="customSwitch2">
  <label class="custom-control-label" for="customSwitch2">Disabled switch element</label>
</div>
<?php 
require_once("include/footer.php");
?>