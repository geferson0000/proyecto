const $linkHeader = document.createElement("link");

$linkBootstrap.setAttribute("rel", "stylesheet");
$linkBootstrap.setAttribute("href", "views/public/css/header.css");
document.head.appendChild($linkHeader);

const $headerTitlePage = document.querySelector(".header-title-page");
const $title = document.getElementsByTagName("title");
let title = $title[0].childNodes[0].data;
$headerTitlePage.textContent = title;



