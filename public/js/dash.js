function hideElement(elementId) {
  const element = document.getElementById(elementId);
  element.style.display = "none";
}

function showElement(elementId) {
  const element = document.getElementById(elementId);
  element.style.display = "block";
}

// const form = document.querySelectorAll("#edit-form");

// form.addEventListener("submit", (event) => {
//   console.log("test");
//   event.preventDefault();
//   // const idSelected = document.getElementById("id").value;

//   // fetch("api/contact_api.php")
//   //   .then((response) => response.json())
//   //   .then((data) => {
//   //     console.log(data);
//   //   });
// });

const editBtn = document.querySelectorAll(".edit-btn");
editBtn.forEach((button) => {
  button.addEventListener("click", (event) => {
    showElement("edit-contact");

    const trParent = event.target.closest("tr");
    const trId = trParent.id;

    const url = "api/contact_api.php?id=" + trId;
    console.log(url);

    fetch(url)
      .then((response) => response.json())
      .then((data) => {
        document.getElementById("id-field").value = data.id;
        document.getElementById("name-field").value = data.name;
        document.getElementById("phone-field").value = data.phone;
      })
      .catch((error) => console.error("Error:", error));
  });
});
