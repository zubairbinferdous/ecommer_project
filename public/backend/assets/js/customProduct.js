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

// auto title input

const takeProductTitle = document.getElementById("ProductNameId");
const takeSeoItemField = document.getElementById("seoTitleId");
takeProductTitle.addEventListener("input", () => {
    takeSeoItemField.value = takeProductTitle.value;
});

// select the value and store in a array

var selectedOptions = [];
function disableOption(event) {
    var selectedValue = event.target.value;
    if (selectedValue !== "") {
        var selects = document.querySelectorAll("#attributeSelectId");
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

var selectedOptions = [];

function disableOption(event, attributeName) {
    var selectedValue = event.target.value;
    var attributeNames = attributeName;
    var selects = document.querySelectorAll("#attributeValue");
    console.log(selectedValue, attributeNames, selects.length);
    selectedOptions.push({
        attributeName: attributeNames,
        attributeValue: selectedValue,
    });

    // if (selectedValue !== "") {
    //     var selects = document.querySelectorAll("#attributeValue");

    //     var selectedOptionsObject = {};
    //     selects.forEach(function (select) {
    //         var options = select.options;
    //         for (var i = 0; i < options.length; i++) {
    //             if (options[i].value === selectedValue) {
    //                 options[i].classList.add("selected-option");
    //             }
    //             if (options[i].selected) {
    //                 selectedOptionsObject[select.id] = options[i].value;
    //                 break;
    //             }
    //         }
    //     });

    // }

    // console.log(selectedOptions);

    var inps_size = document.getElementsByName("attributeValue[1][]");
    var inps_color = document.getElementsByName("attributeValue[2][]");

    var max_length = 0;

    if (inps_size.length < inps_color.length) {
        max_length = inps_color.length;
    } else {
        max_length = inps_size.length;
    }
    //console.log(max_length);
    var is_same = false;
    for (var i = 1; i < max_length; i++) {
        //alert(is_same);
        for (var j = 0; j < i; j++) {
            if (
                inps_size[i].value == inps_size[j].value &&
                inps_color[i].value == inps_color[j].value
            ) {
                is_same = true;
                break;
            }
        }
    }
    if (is_same) {
        alert("Same Product Attribute is not allowed");
        event.target.value = "null";
    }
}

// create add more field

document
    .getElementById("duplicateButton")
    .addEventListener("click", function () {
        var originalSetAttributeValue =
            document.getElementById("SetAttributeValue");
        var newSetAttributeValue = originalSetAttributeValue.cloneNode(true);

        // let attributeSelectId  = document.getElementById('attributeSelectId');
        // var lastOption = attributeSelectId.querySelector('option:last-child');
        // console.log(lastOption)

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

        var inputFields = newSetAttributeValue.querySelectorAll("input");
        inputFields.forEach(function (input) {
            input.value = "";
        });
        var textareaFields = newSetAttributeValue.querySelectorAll("textarea");
        textareaFields.forEach(function (textarea) {
            textarea.value = "";
        });

        originalSetAttributeValue.parentNode.appendChild(newSetAttributeValue);
        var removeButton = document.createElement("button");
        removeButton.textContent = "Remove";
        removeButton.classList.add("button_remove_item");

        removeButton.addEventListener("click", function () {
            newSetAttributeValue.parentNode.removeChild(newSetAttributeValue);
        });
        newSetAttributeValue.appendChild(removeButton);
        // document.getElementById("duplicatedSets").appendChild(newSetAttributeValue);
    });

// Function to display the uploaded images
function previewImages(event) {
    const files = event.target.files;
    const previewContainer = document.getElementById("imagePreview");
    previewContainer.innerHTML = ""; // Clear existing previews

    for (let i = 0; i < files.length; i++) {
        const file = files[i];
        if (file) {
            const reader = new FileReader();
            reader.onload = function() {
              const img = document.createElement("img");
              img.src = reader.result;
              img.classList.add("preview-image");
  
              const previewItem = document.createElement("div");
              previewItem.classList.add("preview-item");
              previewItem.appendChild(img);
  
              const removeBtn = document.createElement("button");
              removeBtn.classList.add("remove-btn");
              removeBtn.innerHTML = "X";
              removeBtn.addEventListener("click", function() {
                previewContainer.removeChild(previewItem);
              });
              
              previewItem.appendChild(removeBtn);
              previewContainer.appendChild(previewItem);
            }
            reader.readAsDataURL(file);
          }
    }
}

// Function to remove all uploaded images 


// Event listener for file input change
document.getElementById("fileInput").addEventListener("change", previewImages);



// // Function to display the uploaded images
function previewImagesOne(event) {
    const files = event.target.files;
    const previewContainer = document.getElementById("imagePreviewOne");
    const previewContainerSeo = document.getElementById("fileSeo");
    previewContainer.innerHTML = ""; 

    console.log('hello')

    for (let i = 0; i < files.length; i++) {
        const file = files[i];
        if (file) {
            const reader = new FileReader();
            reader.onload = function() {
              const img = document.createElement("img");
              img.src = reader.result;
              img.classList.add("preview-image");
  
              const previewItem = document.createElement("div");
              previewItem.classList.add("preview-item");
              previewItem.appendChild(img);
  
              const removeBtn = document.createElement("button");
              removeBtn.classList.add("remove-btn");
              removeBtn.innerHTML = "X";
              removeBtn.addEventListener("click", function() {
                previewContainer.removeChild(previewItem);
              });
              previewItem.appendChild(removeBtn);
  
              previewContainer.appendChild(previewItem);
            
            }
            reader.readAsDataURL(file);
          }
    }
}

// Function to remove all uploaded images

// Event listener for file input change
document.getElementById("fileInputOne").addEventListener("change", previewImagesOne);






// // Function to display the uploaded images
function previewImagesSeo(event) {
    const files = event.target.files;
    const previewContainer = document.getElementById("imagePreviewSeo");
    previewContainer.innerHTML = ""; // Clear existing previews

    for (let i = 0; i < files.length; i++) {
        const file = files[i];
        if (file) {
            const reader = new FileReader();
            reader.onload = function() {
              const img = document.createElement("img");
              img.src = reader.result;
              img.classList.add("preview-image");
  
              const previewItem = document.createElement("div");
              previewItem.classList.add("preview-item");
              previewItem.appendChild(img);
  
              const removeBtn = document.createElement("button");
              removeBtn.classList.add("remove-btn");
              removeBtn.innerHTML = "X";
              removeBtn.addEventListener("click", function() {
                previewContainer.removeChild(previewItem);
              });
              previewItem.appendChild(removeBtn);
  
              previewContainer.appendChild(previewItem);
            }
            reader.readAsDataURL(file);
          }
    }
}

// Function to remove all uploaded images

// Event listener for file input change
document.getElementById("fileSeo").addEventListener("change", previewImagesSeo);


