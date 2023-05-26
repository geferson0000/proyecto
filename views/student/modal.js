export function toggleModal(modal, add) {
  if (modal.style.display != 'flex') {
    modal.style.display = 'flex';
    add.style.display = 'flex';
    setTimeout(() => {
      modal.style.opacity = 1;
      add.style.opacity = 1;
    }, 1);

  } else {
    add.style.opacity = 0;
    modal.style.opacity = 0;
    setTimeout(() => {
      modal.style.display = 'none';
      add.style.display = 'none';
    }, 1000);
  }
}
