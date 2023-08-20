
  // Get rid of small loading animation
  [...document.querySelectorAll(".input-location-dependant")].forEach(element =>
    element.classList.toggle("d-none")
  );

  // Function to set multiple attributes at once
  const setAttributes = (el, attrs) => {
    for (var key in attrs) {
      el.setAttribute(key, attrs[key]);
    }
  };

  const toggleSubCat = target => {
    let category = target.value,                                                         // Get value of state
      selectSubCatOption = ["Select SubCategory..."],                                            // Define this once so as not to repeat it multiple times
      subcategoryList = {
        Fashion: [
          "Watche",
          "Glasses",
          "Cufflinks"
        ],
        Fabrics: [
            "Atampa",
            "Shadda",
            "Yadi",
            "Lace",
            "Material"
        ],
        Jewellery: [
            "Necklace",
            "Bracelet"
        ],
        Bags: [
            "Shoulder Bag",
            "Hand Bag",
            "Purse",
            "Waist Bag",
            "Backpack"
        ],
        Cosmetics: [
          "Lotion",
          "Cream",
          "Shower Gel",
          "BSC"
        ],
        Shoes: [
            "Casuals",
            "Oxfords",
            "Outdoor",
            "Sandals",
            "Slippers",
            "Sneakers",
            "Boots",
            "Loafers",
            "Half Shoes",
            "Wedges",
            "Mules",
            "Heels",
            "Ballerinas/Toms"
        ]

    }[category],                                                                       // Ternary switch operator to show list of LGAs based on chosen state
    lgas = [...selectSubCatOption, ...Object.values(subcategoryList)],                         // Join select LGA option with list of LGAs
    form = target.parentElement.parentElement.parentElement.parentElement,          // Get parent up to the forth generation just in case LGA select element is deeply nested
    SubCatSelect = form.querySelector(".select-sub"),                                  // Get the LGA select element
    length = SubCatSelect.options.length;                                              // Get number of options already existing in LGA select element

  // Clear LGS select element
  for (i = length - 1; i >= 0; i--) {
    SubCatSelect.options[i] = null;
  }

  // Populate LGA select element
  lgas.forEach(lga => {
    let opt = document.createElement("option");                                     // Create option element
    opt.appendChild(document.createTextNode(lga));                                  // Append LGA to it
    opt.value = lga;                                                                // Set the value to LGA

    // Make option asking you to select unclickable
    lga.includes("elect")
      ? setAttributes(opt, { disabled: "disabled", selected: "selected" })
      : "";

    // Add this option element to LGA select element
    SubCatSelect.appendChild(opt);
  });
};
