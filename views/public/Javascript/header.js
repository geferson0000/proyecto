const $settingsIcon = document.querySelector('.settingsIcon');
const $settingsList = document.querySelector('.settings-list');
const $navIconUser = document.querySelector('.nav-iconUser');
const $sideButton = document.querySelector('.sideButton');
const $one = document.querySelector('.one');
const $two = document.querySelector('.two');
const $three = document.querySelector('.three');
const $navbar = document.querySelector('.navbar');
let navbar = false;

$navIconUser.addEventListener('click', e => e.preventDefault());

$sideButton.addEventListener('click', (e)=>{
  // animation button
  if (!navbar){
    navbar = true;
    $two.classList.remove('desactiveSideButtonTwo');
    $two.classList.add('activeTwo');
    $one.classList.add('activeOne');
    $three.classList.add('activeThree');
    $navbar.classList.add('activeNavbar');
    $sideButton.classList.add('activeSideButton');
  } else {
    navbar = false;
    $two.classList.add('desactiveSideButtonTwo');
    $one.classList.remove('activeOne');
    $two.classList.remove('activeTwo');
    $three.classList.remove('activeThree');    
    $navbar.classList.remove('activeNavbar');
    $sideButton.classList.remove('activeSideButton');
  }
});


$settingsIcon.addEventListener('click', (e) => {
  if ($settingsList.style.maxHeight != '20vh'){
    $settingsList.style.maxHeight = '20vh';
    $settingsList.style.maxWidth = '20vw';
    $settingsList.style.border = 'solid 1px #444';
    $settingsList.style.paddingTop = '1vh';
    $settingsList.style.paddingBottom = '1vh';
  } else {
    $settingsList.style.maxHeight = '0vh';
    $settingsList.style.maxWidth = '0vw';
    $settingsList.style.border = 'solid 0px #444';
    $settingsList.style.paddingTop = '0vh';
    $settingsList.style.paddingBottom = '0vh';
  }
});


const $linksTitle = document.querySelectorAll('.links-title');
const $linksList = document.querySelectorAll('.links-list');

function toggleList(list) {
  if (list.style.maxHeight != '15vh') {
    list.style.maxHeight = '15vh';
  } else {
    list.style.maxHeight = '0vh';
  }
}

$linksTitle[0].addEventListener('click', e => { 
  toggleList($linksList[0])
});

$linksTitle[1].addEventListener('click', e => { 
  toggleList($linksList[1])
});

$linksTitle[2].addEventListener('click', e => { 
  toggleList($linksList[2])
});
