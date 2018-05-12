/*
   These functions perform letious validations
   the input of each is a HTML form input element.
   each function calls common update message function
   which takes the input and the validation valid
   as a boolean. The update message function hides
   or displays the "invalid *" display
*/
window.onload = runFormValidation;
document.getElementById('formSubmit').addEventListener("click", function() {
   if (runFormValidation()){
   }
});

function runFormValidation(){
   let form = document.getElementById('checkoutForm');
   let formInputs = form.getElementsByTagName('input');
   let formSelects = form.getElementsByTagName('select');
   let fnArr = [];
   let passed = true;
   for (input in formInputs){
      if (formInputs[input].oninput){
         if (!formInputs[input].oninput())
            passed = false;
      }
   }
   for (select in formSelects){
      if (formSelects[select].oninput){
         if (!formSelects[select].oninput())
            passed = false;
      }
   }
   return passed;
}


function validateName(input){
   let valid = true;
   return updateMsg(input, valid);
}

function validateStreet(input){
   let patt = /\d{1,}(\s{1}\w{1,})(\s{1}?\w{1,})/;
   let valid = patt.test(input.value); 
   return updateMsg(input, valid);
}

function validateCity(input){
   let patt = /[a-zA-Z]+(?:[\s][a-zA-Z]+)*/;
   let valid = patt.test(input.value); 
   return updateMsg(input, valid);
}

function validateState(input){
   let valid = (input.value != "false");
   return updateMsg(input, valid);
}

function validateZipcode(input){
   let patt = /\d{5}/;
   let valid = patt.test(input.value);
   if (valid){
      let arr = input.value.split(patt);
      let noExtras = (arr[0] == '' && arr[1] == '');
      valid = noExtras;
   }
   return updateMsg(input, valid);
}

function validatePhonenumber(input){
   let patt = /\d{10}/;
   let valid = patt.test(input.value);
   if (valid){
      let arr = input.value.split(patt);
      let noExtras = (arr[0] == '' && arr[1] == '');
      valid = noExtras;
   }
   return updateMsg(input, valid);
}

function validateCardType(input){
   let valid = (input.value != "false");
   return updateMsg(input, valid);
}

function validateCCN(input){
   let spacesPattern = /\s*\d{4}\ \d{4}\ \d{4}\ \d{4}\s*/;
   let spaces = spacesPattern.test(input.value);

   let pattNoSpaces = /\s*\d{16}\s*/g;
   let noSpaces = pattNoSpaces.test(input.value);

   let valid = (spaces != noSpaces);

   if (valid){
      let patternToSplit = spaces ? spacesPattern:pattNoSpaces;
      let arr = input.value.split(patternToSplit)
      let noExtras = (arr[0] == '' && arr[1] == '');
      valid = noExtras;
   }

   return updateMsg(input, valid);
} 

function validateExpDate(input){
   let expDatePattern = /^(0[1-9]|1[0-2])\/([0-9]{2})$/;
   let valid = expDatePattern.test(input.value);
   return updateMsg(input, valid);
}

/*
   param1: HTML input elementre  
   param2: boolean valid of input 
           value's validation 
*/
function updateMsg(input, valid){
   if (valid)
      valid = (input.value != '');
   let error = input.nextElementSibling;
   if (valid)
      error.style.display = "none";
   else
      error.style.display = "block";
   return valid;
}

function showReceipt(){
   console.log("purchase sent");
}
