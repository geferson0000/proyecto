// const $navIconUser = document.querySelector('.nav-iconUser');

// $navIconUser.addEventListener('click', e => e.preventDefault());

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
