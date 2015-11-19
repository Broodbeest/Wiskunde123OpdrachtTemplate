<!DOCTYPE html>
<html>

<head>
    <title>Example GeoGebra HTML worksheet 2</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=10" />
</head>

<body>

<p>
<iframe scrolling="no"
src="http://www.geogebratube.org/material/iframe/id/23587/width/600/height/715///rc/false/ai/false/sdz/false/smb/false/stb/false/stbh/true/ld/false/sri/false/at/preferhtml5"
width="600px"
height="715px"
style="border:0px;">
</iframe>
</p>

<h1>Example GeoGebra applet embedding 1</h1>
<p>This is an example of an HTML file containing three GeoGebra applets loaded from GeoGebraTube.</p>

<script type="text/javascript" src="//www.geogebratube.org/scripts/deployggb.js"></script>
<script type="text/javascript">

    // Create applet for material_id 27876 from tube.
    // The second parameter forces not to use webSimple (this is necessary when multiple applets are used on one page, if one cannot use webSimple).
    var applet1 = new GGBApplet({material_id: "27876"}, true);

    // Create applet for material_id 17499 from tube. The second parameter forces not to use webSimple.
    // The third parameter sets the bordercolor. Additional parameters can be defined as described here: http://wiki.geogebra.org/en/Reference:Applet_Parameters
    var applet2 = new GGBApplet({material_id: "17499"});

    // Create applet for material_id 17501 from tube.
    var applet3 = new GGBApplet({material_id: "17501"});

    window.onload = function() {
        applet1.inject('applet_container1', 'preferHTML5');
        applet2.inject('applet_container2', 'preferHTML5');
        applet3.inject('applet_container3', 'preferHTML5');
    }
</script>
<h3>
Here is the first applet:
</h3><p>
<div style="width:600px;height:300px;display:inline" id="applet_container1"></div>
</p>
<h3>
Here is the second applet:
</h3>
<p>
<div style="width:600px;height:300px;display:inline" id="applet_container2"></div>
</p>
<p>
Here is the third applet:<p>
<div style="width:600px;height:300px;display:inline" id="applet_container3"></div>
<p>
    That is all!

</body>

</html>
