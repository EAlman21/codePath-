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
    				<h2 id="title"class="mdl-card__title-text">Tip Calculator</h2>
    			</div>
    	  	<div class="mdl-card__supporting-text">
    				<form action="#">
    					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    						<input id="input"class="mdl-textfield__input" type="text" name="bill"/>
                <label id="label"class="mdl-textfield__label "for="bill">Bill Subtotal</label>
    					</div>
              <p>Tip Percentage</p>
              <div id="buttons">
                <?php
                  for ($i=10; $i <=20 ; $i = $i+5) {
                    echo "
                    <label class=mdl-radio mdl-js-radio mdl-js-ripple-effect for=option-1>
                      <input type=radio id=option-1 class=mdl-radio__button name=options value=$i checked>
                      <span class=mdl-radio__label>$i% </span>
                    </label>";
                  }
                ?>
              </div>
    				</form>
    			</div>
    			<div class="mdl-card__actions mdl-card--border">
    				<button id="result" class="mdl-button mdl-button--colored mdl-js-button
             mdl-js-ripple-effect">Submit</button>
    			</div>
    		</div>
    	</main>
    </div>
  </body>
  <source src="bower_components/material-design-lite/material.min.js" >
</html>
