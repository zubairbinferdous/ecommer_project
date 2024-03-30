// // Initialize an array to keep track of selected options
// var selectedOptions = [];

// // Function to disable or enable options based on selected value
// // function disableOption(event) {
// //     var selectedValue = event.target.value;
// //     if (selectedValue !== "") {
// //         // Disable selected option in other selects
// //         var selects = document.querySelectorAll("select");
// //         selects.forEach(function (select) {
// //             var options = select.options;
// //             for (var i = 0; i < options.length; i++) {
// //                 if (options[i].value === selectedValue) {
// //                     options[i].disabled = true;
// //                     options[i].classList.add("selected-option");
// //                 }
// //             }
// //         });
// //         selectedOptions.push(selectedValue);
// //     }
// // }


var selectedOptions = [];

function disableOption(event) {
    var selectedValue = event.target.value;
    if (selectedValue !== "") {
        // Disable selected option in other selects
        var selects = document.querySelectorAll("select");
        selects.forEach(function (select) {
            var options = select.options;
            for (var i = 0; i < options.length; i++) {
                if (options[i].value === selectedValue) {
                    options[i].classList.add("selected-option");
                }
            }
        });
        selectedOptions.push(selectedValue);
    }
}



// variation tab ber
let select = document.getElementById("pvSimple");
select.addEventListener("change", function (e) {
    let simple = document.getElementById("SimpleProductData");
    let variation = document.getElementById("VariationProductData");

    if (e.target.value === "Simple") {
        simple.classList.remove("displayProduct");
        variation.classList.add("displayProduct");
    }
    if (e.target.value === "Variation") {
        variation.classList.remove("displayProduct");
        simple.classList.add("displayProduct");
    }
    if (e.target.value === "null") {
        variation.classList.add("displayProduct");
        simple.classList.add("displayProduct");
    }
});

// if select any option it will show there value
function toggleDropdown(attributeId) {
    var checkbox = document.getElementById("attribute_" + attributeId);
    var dropdown = document.getElementById("dropdown_" + attributeId);
    var inputFields = document.getElementById("Attribute-item-value");

    // Count the number of checked checkboxes
    var checkedCount = document.querySelectorAll(
        ".attribute-checkbox:checked"
    ).length;

    if (checkedCount > 0) {
        inputFields.style.display = "block";
    } else {
        inputFields.style.display = "none";
    }

    if (checkbox.checked) {
        dropdown.style.display = "block";
    } else {
        dropdown.style.display = "none";
    }
}

// Initially hide all dropdowns and input fields
window.onload = function () {
    var attributes = document.querySelectorAll(".Attribute-item-value");
    attributes.forEach(function (attribute) {
        attribute.style.display = "none";
    });

    var inputFields = document.getElementById("Attribute-item-value");
    inputFields.style.display = "none";
};

document
    .getElementById("duplicateButton")
    .addEventListener("click", function () {
        var originalSetAttributeValue =
            document.getElementById("SetAttributeValue");
        var newSetAttributeValue = originalSetAttributeValue.cloneNode(true);
        var inputFields = newSetAttributeValue.querySelectorAll("input");
        inputFields.forEach(function (input) {
            input.value = "";
        });
        var textareaFields = newSetAttributeValue.querySelectorAll("textarea");
        textareaFields.forEach(function (textarea) {
            textarea.value = "";
        });

        var selects = document.querySelectorAll("select");
        selects.forEach(function (select) {
            var options = select.options;
            for (var i = 0; i < options.length; i++) {
                if (selectedOptions.includes(options[i].value)) {
                    const option = newSetAttributeValue.querySelector(
                        'option[value="' + options[i].value + '"]'
                    );
                    option.classList.add("selected-option");
                }
            }
        });

        originalSetAttributeValue.parentNode.appendChild(newSetAttributeValue);

        var removeButton = document.createElement("button");
        removeButton.textContent = "Remove";
        removeButton.classList.add("button_remove_item");
        removeButton.addEventListener("click", function () {
            newSetAttributeValue.parentNode.removeChild(newSetAttributeValue);
        });

        newSetAttributeValue.appendChild(removeButton);
        document
            .getElementById("duplicatedSets")
            .appendChild(newSetAttributeValue);
    });
