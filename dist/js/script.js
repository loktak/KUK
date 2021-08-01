var blackout = document.querySelector(".blackout");
var siteFormContainer = document.querySelector(".site-form");
var formTitle = document.querySelector(".site-form__title");
var titleInput = document.getElementById("form-title");
var formSubmit = document.getElementById("form-submit");


function showForm(title, submitText) {
    blackout.classList.remove("display-none");
    siteFormContainer.classList.remove("display-none");
    formTitle.innerHTML = title;
    titleInput.value = title;
    formSubmit.value = submitText;
}

function closeForm() {
    blackout.classList.add("display-none");
    siteFormContainer.classList.add("display-none");
    titleInput.value = 'spam';
    formTitle.innerHTML = 'Заполните форму';
    formSubmit.value = 'Отправить форму';
}

function openNav() {
    var innerNav = document.getElementById("inner-menu");
    if (innerNav.classList.contains("site-navigation__list--open")) {
        innerNav.classList.remove("site-navigation__list--open");
    } else {
        innerNav.classList.add("site-navigation__list--open");
    }
}