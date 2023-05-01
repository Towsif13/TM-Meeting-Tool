//table data
$(document).ready(function () {
  $("#meetings").DataTable({ pageLength: 50, aaSorting: [[2, "desc"]] }); //sort by third column and show 50 entries by default
});

// //datepicker
// $(function () {
//   $("#datepicker").datepicker();
// });

//checkbox selection
(function () {
  const form = document.querySelector("#meeting-form");
  const checkboxes = form.querySelectorAll("input[type=checkbox]");
  const checkboxLength = checkboxes.length;
  const firstCheckbox = checkboxLength > 0 ? checkboxes[0] : null;

  function init() {
    if (firstCheckbox) {
      for (let i = 0; i < checkboxLength; i++) {
        checkboxes[i].addEventListener("change", checkValidity);
      }

      checkValidity();
    }
  }

  function isChecked() {
    for (let i = 0; i < checkboxLength; i++) {
      if (checkboxes[i].checked) return true;
    }

    return false;
  }

  function checkValidity() {
    const errorMessage = !isChecked()
      ? "At least one checkbox must be selected."
      : "";
    firstCheckbox.setCustomValidity(errorMessage);
  }

  init();
})();

// add inventors
window.addEventListener("load", () => {
  const input = document.querySelector("#inventor-name-input");
  const list_element = document.querySelector("#inventors");
  const inventor_add_button = document.querySelector("#add-inventor-button");

  inventor_add_button.addEventListener("click", () => {
    const inventor_name = input.value;

    const inventor_element = document.createElement("div");
    inventor_element.classList.add("input-group", "input-group-sm", "inventor");

    const inventor_input_element = document.createElement("input");
    inventor_input_element.classList.add("form-control", "inventor-name");
    inventor_input_element.type = "text";
    inventor_input_element.value = inventor_name;
    inventor_input_element.setAttribute("readonly", "readonly");

    inventor_element.appendChild(inventor_input_element);

    const inventor_delete_element = document.createElement("button");
    inventor_delete_element.classList.add(
      "btn",
      "btn-outline-danger",
      "inventor-delete-btn"
    );
    inventor_delete_element.innerHTML = "Delete";

    inventor_element.appendChild(inventor_delete_element);

    list_element.appendChild(inventor_element);

    input.value = "";

    inventor_delete_element.addEventListener("click", () => {
      list_element.removeChild(inventor_element);
    });

    //get all the inventor names
    const all_inventors_names = document.querySelectorAll(".inventor-name");
    for (let index = 0; index < all_inventors_names.length; index++) {
      const element = all_inventors_names[index].value;
      console.log(element);
    }

    // const test_btn = document.getElementById("#test-btn");
    // test_btn.addEventListener("click", () => {
    //   const all_inventors_names = document.querySelectorAll(".inventor-name");
    //   for (let index = 0; index < all_inventors_names.length; index++) {
    //     const element = all_inventors_names[index].value;
    //     console.log(element);
    //   }
    // });
  });
});

// // JavaScript array to store the input texts
// var textArray = [];

// // Add event listener to the "Add Text" button
// document.getElementById("addButton").addEventListener("click", function () {
//   var inputText = document.getElementById("inputText").value;
//   textArray.push(inputText);
//   var listItem = document.createElement("li");
//   listItem.textContent = inputText;
//   document.getElementById("textList").appendChild(listItem);
//   document.getElementById("inputText").value = "";
// });

// // Add event listener to the form submit event
// document.querySelector("form").addEventListener("submit", function (event) {
//   // Convert JavaScript array to a JSON string
//   var jsonString = JSON.stringify(textArray);
//   // Add a hidden input field to the form with the JSON string
//   var hiddenInput = document.createElement("input");
//   hiddenInput.setAttribute("type", "hidden");
//   hiddenInput.setAttribute("name", "textArray");
//   hiddenInput.setAttribute("value", jsonString);
//   document.querySelector("form").appendChild(hiddenInput);
// });
