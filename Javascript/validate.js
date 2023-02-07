const validator = (htmlElement, name) => { // valida lo que esta ingresado en el input
  function messageError(name) {
    return `deberisa ingresar un ${name} entre 4 y 20 letras`;
  };
  htmlElement.addEventListener('input', () => {
    if (htmlElement.validity.tooShort) { // si esta demasiado corto
      htmlElement.setCustomValidity(messageError(name)); // cambiando el valor del error del mensaje a mostrar
    } else {
      htmlElement.setCustomValidity('');
    }
  });
};

export default validator;