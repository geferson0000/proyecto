const $settingsList = document.querySelector('.settings-list');
const $settingsIcon = document.querySelector('.settingsIcon');


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