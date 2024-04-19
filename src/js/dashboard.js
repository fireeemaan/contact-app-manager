function hideElement(elementId) {
  const element = document.getElementById(elementId);
  element.style.display = "none";
}

function showElement(elementId) {
  const element = document.getElementById(elementId);
  element.style.display = "block";
}

// Edit Button Event Listener
const editBtn = document.querySelectorAll(".edit-btn");
editBtn.forEach((button) => {
  button.addEventListener("click", function (event) {
    showElement("edit-contact");

    const trParent = event.target.closest("tr");
    const trId = trParent.id;

    const row = document.getElementById(trId);
    const name = row.children[1].textContent;
    const phone = row.children[2].textContent;

    const id = document.getElementById("id-field");
    const nameInput = document.getElementById("name-field");
    const phoneInput = document.getElementById("phone-field");

    id.value = parseInt(trId.replace(/\D/g, ""));
    nameInput.value = name;
    phoneInput.value = phone;
  });
});
