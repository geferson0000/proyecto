const $settingsIcon = document.querySelector('.settingsIcon');
const $settingsList = document.querySelector('.settings-list');
const $navIconUser = document.querySelector('.nav-iconUser');
const $sideButton = document.querySelector('.sideButton');
const $one = document.querySelector('.one');
const $two = document.querySelector('.two');
const $three = document.querySelector('.three');
const $navbar = document.querySelector('.navbar');
let navbar = true;
let settingsArrow = false;

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
  if (!settingsArrow){
    settingsArrow = true;
    $settingsList.classList.add('activeSettings');
  } else {
    settingsArrow = false;
    $settingsList.classList.remove('activeSettings');
  }
});
