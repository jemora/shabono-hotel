<html>
<HEAD>
<title>Menú con capas y submenús</title>

<!-- Original:  Daren Craddock (darencraddock@hotmail.com) -->
<!-- Web Site:  http://www.birkdale.sheffield.sch.uk -->
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css" />
<p align="center"><b>Menú con capas y submenús
<script language="JavaScript">

<!-- hide script from old browsers
// Script to create a drop-down menu effect using layers.
//(c)Copyright Daren Craddock 2002
//You may use this code in any application, no limits,
//provided that you acknowledge Daren Craddock as the originator.
// big() makes selected layer longer (height property)

function big(lyr) {
document.all[lyr].style.height='180px'; }

/* small() makes selected layer shorter (height property)*/

function small(lyr) {
document.all[lyr].style.height='32px';

}

/* start() makes all layers short to start with (height property)*/

function start() {

document.all.Layer1.style.height='32px';
document.all.Layer2.style.height='32px';
document.all.Layer3.style.height='32px'; }

//-- !>

</script>

</HEAD>

</b>

<BODY onLoad="start()">

</p>
<p align="center">

<BODY onLoad="start()">

</p>

<div id="Layer1" style="position:absolute; width:155px; height:128px; z-index:1; left: 74px; top: 38px; background-color: #FFFFCC; layer-background-color: #FFFFCC; border: 1px none #000000; overflow: hidden" onMouseOver="big('Layer1')"; onMouseOut="small('Layer1')"> 

  <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif">
    <a href="menu1.html">Menu 1</a>
    <br />
    <span class="small">detalles sobre la web la web detalles sobre la web detalles sobre la webdetalles sobre la webdetalles sobre la webdetalles sobre la webdetalles sobre la webdetalles sobre la web</span><br>
    <br>
  </font></div>
</div>

