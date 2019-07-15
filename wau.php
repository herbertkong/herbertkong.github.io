<?php
header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');
if(null === $_GET['who']){
echo "<div style='display:none;'>";
} else {
$url = "http://whos.amung.us/stats/t4wn0grrpfli/";
header("Location: ".$url);
die("<a href='".$url."'>Click for Statisitcs</a>");
}
?>
<script id="_wautyt">var _wau = _wau || []; _wau.push(["small", "t4wn0grrpfli", "tyt"]);
(function() {var s=document.createElement("script"); s.async=true;
s.src="http://widgets.amung.us/small.js";
document.getElementsByTagName("head")[0].appendChild(s);
})();</script>
<?php
if(null === $_GET['who']){
echo '</div>';
}
?>