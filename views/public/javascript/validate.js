const validator = (htmlElement, name) => {
  function messageError(name) {
    return `should enter a ${name} between 4 and 20 letters`;
  };
  htmlElement.addEventListener('input', () => {
    if (htmlElement.validity.tooShort) {
      htmlElement.setCustomValidity(messageError(name));
    } else {
      htmlElement.setCustomValidity('');
    }
  });
};

export default validator;