<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="advance.css">
    <link rel="stylesheet" href="bower_components/material-design-lite/material.min.css">
    <title>Tip Calculator</title>
  </head>
  <body>
      <div class="mdl-layout mdl-js-layout mdl-color--grey-100">
    	<main class="mdl-layout__content">
    		<div class="mdl-card mdl-shadow--6dp">
    			<div class="mdl-card__title mdl-color--primary mdl-color-text--white">
    				<h2 style="margin-left:25%"class="mdl-card__title-text">Tip Calculator</h2>
    			</div>
    	  	<div class="mdl-card__supporting-text">
    				<form action="#">
    					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    						<input style="width:40%; margin-left:30%;text-align:center;valign:middle;"class="mdl-textfield__input" type="text" name="bill"/>
                <label style="text-align:center"class="mdl-textfield__label "for="bill">Bill Subtotal</label>
    					</div>
              <p style="text-align:center">Tip Percentage</p>
              <div style="margin-left:20%">
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                  <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                  <span class="mdl-radio__label">10% </span>
                </label>
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                  <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1">
                  <span class="mdl-radio__label">15% </span>
                </label>
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                  <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1">
                  <span class="mdl-radio__label">20%</span>
                </label>
              </div>
    				</form>
    			</div>
    			<div class="mdl-card__actions mdl-card--border">
    				<button style="margin-left:35%"class="mdl-button mdl-button--colored mdl-js-button
             mdl-js-ripple-effect">Submit</button>
    			</div>
    		</div>
    	</main>
    </div>
  </body>
  <source src="bower_components/material-design-lite/material.min.js" >
</html>
