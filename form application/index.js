formEl = document.querySelector(".myForm");
labelsEl = document.querySelectorAll("label");
inputsEl = document.querySelectorAll(".input");
textareaEl = document.querySelector("textarea");
submitBtn = document.querySelector("button");
radioOptions = document.querySelectorAll(".radio-option");

// inputsWarning = inputsEl.closest('');

// console.log(inputsWarning);
console.log(inputsEl);
console.log(formEl);

let valid = false;
var validRegexEmail =
  /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
var validRegexphone = /^[0-9] + $/;

inputsEl.forEach((el, i) => {
  el.addEventListener("input", () => {
    console.log(el, i);
    // document.querySelectorAll(".warning").forEach((el) => {
    //   el.style.display = "none";
    // });

    console.log(el["type"]);

    if (!el.value) {
      document.querySelectorAll(".warning")[i].style.display = "initial";

      if (el["type"] == "email") {
        document.querySelectorAll(".warning")[i].innerHTML =
          "This field cannot be empty";
        document.querySelectorAll(".warning")[i].style.display = "initial";
        console.log("hello");
      }
    } else {
      document.querySelectorAll(".warning")[i].style.display = "none";

      if (
        //prettier-ignore
        el['type'] == 'email' && !el.value.match(validRegexEmail)
      ) {
        document.querySelectorAll(".warning")[i].innerHTML =
          "Not a valid email";
        document.querySelectorAll(".warning")[i].style.display = "initial";
        console.log("hello");
      }
    }
  });
});

submitBtn.addEventListener("click", function (e) {
  // e.preventDefault();

  console.log(inputsEl[1]["type"]);

  for (i = 0; i < inputsEl.length; i++) {
    console.log(inputsEl[i]);

    if (
      //prettier-ignore
      inputsEl[i]["type"] == 'email' && !inputsEl[i].value.match(validRegexEmail)
    ) {
      valid = false;
      break;
    }

    if (!inputsEl[i].value) {
      valid = false;
      break;
    } else {
      valid = true;
    }
  }

  if (valid) {
    for (i = 0; i < radioOptions.length; i++) {
      if (radioOptions[i].checked) {
        valid = true;
        break;
      } else {
        valid = false;
      }
    }
  }

  if (valid == false) {
    e.preventDefault();
    window.alert("one or more value is invalid");
  } else {
    // window.alert("form submitted");
    // inputsEl.forEach((el) => (el.value = ""));
    // radioOptions.forEach((el) => (el.checked = false));
    console.log(document.getElementById("myForm"));
    // document.getElementById("myForm").submit();
    formEl.reset();
  }
});

/*
const hello = () => {
  console.log('hello');
}*/

// const hello = function () {
//   console.log("hello");
// };

// function hello() {
//   console.log("hello");
// }
