const tdElements = document.querySelectorAll('td');
const thElements = document.querySelectorAll('th');
const bodyRows = document.querySelectorAll('tbody tr');
const tdButtons = document.querySelectorAll('tbody tr td:last-child');


tdElements.forEach((td) => {
    td.classList.add('px-7');
    td.classList.add('py-4');
});

bodyRows.forEach((tr) => {
    tr.classList.add('border-y');
    tr.classList.add('border-black/20');
});

thElements.forEach((th) => {
    th.classList.add('px-6');
    th.classList.add('py-3');
});


tdButtons.forEach((td) => {
    const buttonDelete = document.createElement('button');
    buttonDelete.textContent = 'Delete';

    td.appendChild(buttonDelete);
});


