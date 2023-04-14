const $linkBootstrap = document.createElement("link");

$linkBootstrap.setAttribute("rel", "stylesheet");
$linkBootstrap.setAttribute("href", "views/public/bootstrap/CSS/bootstrap.css");
document.head.appendChild($linkBootstrap);

const $linkColor = document.createElement("link");

$linkColor.setAttribute("rel", "stylesheet");
$linkColor.setAttribute("href", "views/public/css/color.css");
document.head.appendChild($linkColor);

const $linkNavbar = document.createElement("link");

$linkNavbar.setAttribute("rel", "stylesheet");
$linkNavbar.setAttribute("href", "views/public/css/navbar.css");
document.head.appendChild($linkNavbar);