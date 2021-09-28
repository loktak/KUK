var blackout = document.querySelector(".blackout");
var siteFormContainer = document.querySelector(".site-form");
var formTitle = document.querySelector(".site-form__title");
var titleInput = document.getElementById("form-title");
var formSubmit = document.getElementById("form-submit");
var formMessage = document.getElementById("message");
var formMessageLabel = document.getElementById("messageLabel");

var paintsLinks = document.querySelectorAll(".assortment__navigation-link");
var paintsSlides = document.querySelectorAll(".assortment__list-elmt");
var assortmentList = document.getElementById("assortment-list");

var phpActivePaintsSlides = document.querySelectorAll(".php-open");
var phpActivePaintsLinks = document.querySelectorAll(".php-current-link");


var callBackForm = document.getElementById("request");
var successMessage = document.querySelector(".site-form__success");

function showForm(title, submitText, from, message = 'no') {
    blackout.classList.remove("display-none");
    siteFormContainer.classList.remove("display-none");
    formTitle.innerHTML = title;
    titleInput.value = from;
    formSubmit.value = submitText;
    successMessage.classList.remove("site-form__success--show");
    callBackForm.classList.remove("site-form__form--hide");
    if (message !== 'no') {
        formMessage.classList.remove("site-form__input--hide");
        formMessage.placeholder=message;
        formMessageLabel.classList.remove("site-form__label--hide");
    }
}

function closeForm() {
    blackout.classList.add("display-none");
    siteFormContainer.classList.add("display-none");
    titleInput.value = 'spam';
    formTitle.innerHTML = 'Заполните форму';
    formSubmit.value = 'Отправить форму';
    formMessage.classList.add("site-form__input--hide");
    formMessageLabel.classList.add("site-form__label--hide");
}

window.addEventListener("keydown", function (evt) {
    if (evt.keyCode === 27) {
      evt.preventDefault();
      closeForm();
    }
  });

function openNav() {
    var innerNav = document.getElementById("inner-menu");
    if (innerNav.classList.contains("site-navigation__list--open")) {
        innerNav.classList.remove("site-navigation__list--open");
    } else {
        innerNav.classList.add("site-navigation__list--open");
    }
}

function openPaintSlide(index) {
    var current = index;

    paintsSlides.forEach(element => {
        element.classList.remove("php-open");
        element.classList.add("visually-hidden");
    });

    phpActivePaintsLinks.forEach(element => {
        element.classList.remove("php-current-link");
        element.classList.remove("assortment__navigation-link--current");
    });

    current = index;
    assortmentList.classList.remove("visually-hidden");
    paintsSlides[current].classList.remove("visually-hidden");
    paintsLinks[current].classList.add("assortment__navigation-link--current");
}



$(function () {
    $("a[href^='#']").click(function () {
        var _href = $(this).attr("href");
        $("html, body").animate({ scrollTop: $(_href).offset().top + "px" });
        return false;
    });
});

$(document).ready(function () {

    $("#request").submit(function () {
        $.ajax({
            type: "POST",
            url: "../php/call-back.php",
            data: $(this).serialize()
        }).done(function () {
            $(this).find("input").val("");
            successMessage.classList.add("site-form__success--show");
            callBackForm.classList.add("site-form__form--hide");
            $("#request").trigger("reset");
        });
        return false;
    });
});

$(document).ready(function () {

    $("#cookie-form").submit(function () {
        $.ajax({
            type: "POST",
            url: "../php/cookie.php",
            data: $(this).serialize()
        }).done(function () {
            $(this).find("input").val("");
            document.querySelector(".cookie").classList.add("cookie--hide");
        });
        return false;
    });
});
