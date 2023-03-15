console.log('hello world!');

const $controlAdd = document.querySelector(".controlAdd");
const $modal = document.querySelector(".modals");
const $modalAdd = document.querySelector(".modal-add");

$controlAdd.addEventListener("click", (e) => {
  $modal.classList.add("modal-active");
  $modalAdd.classList.add("modal-add-active");
})






















































// This function will be used each time we want to deactivate a custom widget
// It takes one parameter
// select : the DOM node with the `select` class to deactivate
function deactivateSelect(select) {

  // If the widget is not active there is nothing to do
  if (!select.classList.contains('active')) return;

  // We need to get the list of options for the custom widget
  var optList = select.querySelector('.optList');

  // We close the list of option
  optList.classList.add('hidden');

  // and we deactivate the custom widget itself
  select.classList.remove('active');
}

// This function will be used each time the user wants to (de)activate the widget
// It takes two parameters:
// select : the DOM node with the `select` class to activate
// selectList : the list of all the DOM nodes with the `select` class
function activeSelect(select, selectList) {

  // If the widget is already active there is nothing to do
  if (select.classList.contains('active')) return;

  // We have to turn off the active state on all custom widgets
  // Because the deactivateSelect function fulfill all the requirement of the
  // forEach callback function, we use it directly without using an intermediate
  // anonymous function.
  selectList.forEach(deactivateSelect);

  // And we turn on the active state for this specific widget
  select.classList.add('active');
}

// This function will be used each time the user wants to open/closed the list of options
// It takes one parameter:
// select : the DOM node with the list to toggle
function toggleOptList(select) {

  // The list is kept from the widget
  var optList = select.querySelector('.optList');

  // We change the class of the list to show/hide it
  optList.classList.toggle('hidden');
}

// This function will be used each time we need to highlight an option
// It takes two parameters:
// select : the DOM node with the `select` class containing the option to highlight
// option : the DOM node with the `option` class to highlight
function highlightOption(select, option) {

  // We get the list of all option available for our custom select element
  var optionList = select.querySelectorAll('.option');

  // We remove the highlight from all options
  optionList.forEach(function (other) {
    other.classList.remove('highlight');
  });

  // We highlight the right option
  option.classList.add('highlight');
};




































// We handle the event binding when the document is loaded.
window.addEventListener('load', function () {
  var selectList = document.querySelectorAll('.select');

  // Each custom widget needs to be initialized
  selectList.forEach(function (select) {

    // as well as all its `option` elements
    var optionList = select.querySelectorAll('.option');

    // Each time a user hovers their mouse over an option, we highlight the given option
    optionList.forEach(function (option) {
      option.addEventListener('mouseover', function () {
        // Note: the `select` and `option` variable are closures
        // available in the scope of our function call.
        highlightOption(select, option);
      });
    });

    // Each times the user click on a custom select element
    select.addEventListener('click', function (event) {
      // Note: the `select` variable is a closure
      // available in the scope of our function call.

      // We toggle the visibility of the list of options
      toggleOptList(select);
    });

    // In case the widget gain focus
    // The widget gains the focus each time the user clicks on it or each time
    // they use the tabulation key to access the widget
    select.addEventListener('focus', function (event) {
      // Note: the `select` and `selectList` variable are closures
      // available in the scope of our function call.

      // We activate the widget
      activeSelect(select, selectList);
    });

    // In case the widget loose focus
    select.addEventListener('blur', function (event) {
      // Note: the `select` variable is a closure
      // available in the scope of our function call.

      // We deactivate the widget
      deactivateSelect(select);
    });
  });
});










































// This function updates the displayed value and synchronizes it with the native widget.
// It takes two parameters:
// select : the DOM node with the class `select` containing the value to update
// index  : the index of the value to be selected
function updateValue(select, index) {
  // We need to get the native widget for the given custom widget
  // In our example, that native widget is a sibling of the custom widget
  var nativeWidget = select.previousElementSibling;

  // We also need  to get the value placeholder of our custom widget
  var value = select.querySelector('.value');

  // And we need the whole list of options
  var optionList = select.querySelectorAll('.option');

  // We set the selected index to the index of our choice
  nativeWidget.selectedIndex = index;

  // We update the value placeholder accordingly
  value.innerHTML = optionList[index].innerHTML;

  // And we highlight the corresponding option of our custom widget
  highlightOption(select, optionList[index]);
};

// This function returns the current selected index in the native widget
// It takes one parameter:
// select : the DOM node with the class `select` related to the native widget
function getIndex(select) {
  // We need to access the native widget for the given custom widget
  // In our example, that native widget is a sibling of the custom widget
  var nativeWidget = select.previousElementSibling;

  return nativeWidget.selectedIndex;
};








































// We handle event binding when the document is loaded.
window.addEventListener('load', function () {
  var selectList = document.querySelectorAll('.select');

  // Each custom widget needs to be initialized
  selectList.forEach(function (select) {
    var optionList = select.querySelectorAll('.option'),
        selectedIndex = getIndex(select);

    // We make our custom widget focusable
    select.tabIndex = 0;

    // We make the native widget no longer focusable
    select.previousElementSibling.tabIndex = -1;

    // We make sure that the default selected value is correctly displayed
    updateValue(select, selectedIndex);

    // Each time a user clicks on an option, we update the value accordingly
    optionList.forEach(function (option, index) {
      option.addEventListener('click', function (event) {
        updateValue(select, index);
      });
    });

    // Each time a user uses their keyboard on a focused widget, we update the value accordingly
    select.addEventListener('keyup', function (event) {
      var length = optionList.length,
          index  = getIndex(select);

      // When the user hits the down arrow, we jump to the next option
      if (event.keyCode === 40 && index < length - 1) { index++; }

      // When the user hits the up arrow, we jump to the previous option
      if (event.keyCode === 38 && index > 0) { index--; }

      updateValue(select, index);
    });
  });
});


















































function updateValue(select, index) {
  var nativeWidget = select.previousElementSibling;
  var value = select.querySelector('.value');
  var optionList = select.querySelectorAll('.option');

  // We make sure that all the options are not selected
  optionList.forEach(function (other) {
    other.setAttribute('aria-selected', 'false');
  });

  // We make sure the chosen option is selected
  optionList[index].setAttribute('aria-selected', 'true');

  nativeWidget.selectedIndex = index;
  value.innerHTML = optionList[index].innerHTML;
  highlightOption(select, optionList[index]);
};


