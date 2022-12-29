const form = document.getElementById('form')
const username = document.getElementById('username')
const address = document.getElementById('address')
const email = document.getElementById('email')
const gender = document.getElementById('gender')
const city = document.getElementById('city')
const phone = document.getElementById('phone')

//Show input error messages
function showError(input, message) {
  const formControl = input.parentElement
  formControl.className = 'form-control error'
  const small = formControl.querySelector('small')
  small.innerText = message
}

//show success colour
function showSuccess(input) {
  const formControl = input.parentElement
  formControl.className = 'form-control success'
  /* const success_message = document.getElementById('success_message') */
  /*   success_message.style.display = 'block' */
}

//check email is valid
function checkEmail(input) {
  const re =
    /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
  if (re.test(input.value.trim())) {
    showSuccess(input)
  } else {
    showError(input, 'Email is not invalid')
  }
}

//checkRequired fields
function checkRequired(inputArr) {
  inputArr.forEach(function (input) {
    if (input.value.trim() === '') {
      showError(input, `${getFieldName(input)} is required`)
    } else {
      showSuccess(input)
    }
  })
}

//check input Length
function checkLength(input, min, max) {
  if (input.value.length < min) {
    showError(
      input,
      `${getFieldName(input)} must be at least ${min} characters`
    )
  } else if (input.value.length > max) {
    showError(
      input,
      `${getFieldName(input)} must be les than ${max} characters`
    )
  } else {
    showSuccess(input)
  }
}

//get FieldName
function getFieldName(input) {
  return input.id.charAt(0).toUpperCase() + input.id.slice(1)
}

// check passwords match
function checkPasswordMatch(input1, input2) {
  if (input1.value !== input2.value) {
    showError(input2, 'Passwords do not match')
  }
}

function checkPhone(inputtxt) {
  var phoneno = /^\d{10}$/
  if (inputtxt.value.match(phoneno)) {
    return true
  } else {
    showError(inputtxt, 'Invalid phone number')
    return false
  }
}

//Event Listeners
form.addEventListener('submit', function (e) {
  e.preventDefault()

  checkRequired([username, address, gender, email, city, phone])
  checkLength(username, 3, 15)
  checkEmail(email)
  checkPhone(phone)
})
