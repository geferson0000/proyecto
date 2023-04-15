const $linkHeader = document.createElement("link");

$linkHeader.setAttribute("rel", "stylesheet");
$linkHeader.setAttribute("href", "views/public/css/header.css");
document.head.appendChild($linkHeader);

const $headerTitlePage = document.querySelector(".header-title-page");
const $title = document.getElementsByTagName("title");
let title = $title[0].childNodes[0].data;
$headerTitlePage.textContent = title;

const connection = async (e) => {

  const $url = document.querySelector(".url");
  let url = $url.textContent + "sign/logout";
  console.log(url);

  let response = await fetch(url, { 
    method: "GET",
  });

  let data = await response.text();
  data = JSON.parse(data);
  
  data.ok == true ? 
    location.reload() 
    : false;
}

document.querySelector(".itemTwo-input").addEventListener("click", connection);



