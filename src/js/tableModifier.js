const tdElements = document.querySelectorAll("td");
const thElements = document.querySelectorAll("th");
const bodyRows = document.querySelectorAll("tbody tr");
const tdButtons = document.querySelectorAll("tbody tr td:last-child");

tdElements.forEach((td) => {
  td.classList.add("px-7");
  td.classList.add("py-4");
});

bodyRows.forEach((tr) => {
  tr.classList.add("border-y");
  tr.classList.add("border-black/20");
});

thElements.forEach((th) => {
  th.classList.add("px-6");
  th.classList.add("py-3");
});

Promise.all([
  fetch("../../assets/img/delete-icon.svg").then((response) => response.text()),
  fetch("../../assets/img/edit-icon.svg").then((response) => response.text()),
]).then(([deleteIcon, editIcon]) => {
  const lastTdElements = document.querySelectorAll("tbody tr td:last-child");

  lastTdElements.forEach((td) => {
    const buttonDelete = document.createElement("button");
    buttonDelete.innerHTML = deleteIcon;
    buttonDelete.className = "p-2 bg-red-500 rounded-lg mr-2 hover:bg-red-600";

    const buttonEdit = document.createElement("button");
    buttonEdit.innerHTML = editIcon;
    buttonEdit.className = "p-2 bg-blue-500 rounded-lg hover:bg-blue-600";

    td.appendChild(buttonDelete);
    td.appendChild(buttonEdit);
  });
  const svgActions = document.querySelectorAll("tbody tr td svg");
  svgActions.forEach((svg) => {
    svg.setAttribute("width", "20");
    svg.setAttribute("height", "20");
  });
});
