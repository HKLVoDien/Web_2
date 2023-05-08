var username = document.querySelector("#username");
var address = document.querySelector("#address");
var phone = document.querySelector("#phone");
var password = document.querySelector("#password");
var confirmPassword = document.querySelector("#password-confirm");
var form = document.querySelector("form");
function showError(input, message) {
  var formControl = input.parentElement;
  formControl.className = "form-control error";
  var small = formControl.querySelector("small");
  small.innerText = message;
}

function showSuccess(input) {
  var formControl = input.parentElement;
  formControl.className = "form-control success";
  var small = formControl.querySelector("small");
  small.innerText = "";
}

function checkEmptyError(listInput) {
  let isEmptyError = false;
  listInput.forEach((input) => {
    input.value = input.value.trim();
    if (!input.value) {
      isEmptyError = true;
      showError(input, "Không được để trống !");
    }
  });
  return isEmptyError;
}

function checkAddressError(input) {
  const regexAddress =
    /[^a-z0-9A-Z_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễếệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]/u;
  input.value = input.value.trim();
  let isAddressError = !regexAddress.test(input.value);
  if (!isAddressError) {
    showSuccess(input);
  } else {
    showError(input, "Địa chỉ bạn nhập không hợp lệ !");
  }
  return isAddressError;
}

// function checkEmailError(input){
//     const regexEmail = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
//     input.value = input.value.trim();
//     let isEmaiError = !regexEmail.test(input.value)     // input có nằm trong regexEmail hay ko
//     if (!isEmaiError){ // nếu input có nằm trong regexEmail => đk đúng
// 		showSuccess(input)
//     }else{
//         showError(input,'Email bạn nhập không hợp lệ !');
//     }
//     return isEmaiError;
// }
function checkPhoneError(input) {
  const regexPhone = /^[0-9]{10}$/; // chỉ chấp nhận 10 chữ số
  input.value = input.value.trim();
  let isPhoneError = !regexPhone.test(input.value); // input có nằm trong regexPhone hay ko
  if (!isPhoneError) {
    // nếu input có nằm trong regexPhone => đk đúng
    showSuccess(input);
  } else {
    showError(input, "Số điện thoại bạn nhập không hợp lệ !");
  }
  return isPhoneError;
}

function checkLengthErrorUsername(input, min, max) {
  input.value = input.value.trim();
  if (input.value.length < min) {
    showError(input, `Tên đăng nhập phải có ít nhất ${min} ký tự !`);
    return true;
  }
  if (input.value.length > max) {
    showError(input, `Tên đăng nhập không được vượt quá ${max} ký tự !`);
    return true;
  }
  showSuccess(input);
  return false;
}

function checkLengthErrorPassword(input, min, max) {
  input.value = input.value.trim();
  if (input.value.length < min) {
    showError(input, `Mật khẩu phải có ít nhất ${min} ký tự !`);
    return true;
  }
  if (input.value.length > max) {
    showError(input, `Mật khẩu không được vượt quá ${max} ký tự !`);
    return true;
  }
  showSuccess(input);
  return false;
}

function checkMatchPasswordError(password, confirmPassword) {
  if (password.value !== confirmPassword.value) {
    showError(confirmPassword, "Mật khẩu xác nhận không đúng !");
    return true;
  }
  showSuccess(confirmPassword);
  return false;
}
function saveUserData() {
  var usernameValue = document.querySelector("#username").value; // lấy ra giá trị
  var addressValue = document.querySelector("#address").value;
  var phoneValue = document.querySelector("#phone").value;
  var passwordValue = document.querySelector("#password").value;
  var user = {
    // tạo mảng
    username: usernameValue, // tên gọi phần tử :
    address: addressValue,
    phone: phoneValue,
    password: passwordValue,
  };
  var json = JSON.stringify(user); // phiên dịch mảng user có js type -> mảng Json  mà Json thì dữ liệu được phiên dịch thành string hết
  localStorage.setItem(usernameValue, json);
  // lưu mảng json vào localStorage (key,dataList) key giống như khóa chính phân biệt dữ liệu *key và datalsit kiểu string
  return user; // trả về object user
}

const signup = document.querySelector(".signup");
signup.addEventListener("submit", function (e) {
  e.preventDefault();
  let isMacthError = checkMatchPasswordError(password, confirmPassword);
  let isPasswordLengthError = checkLengthErrorPassword(password, 6, 20);
  let isUserNameLengthError = checkLengthErrorUsername(username, 7, 20);
  let isPhoneError = checkPhoneError(phone);
  let isAddressError = checkAddressError(address);
  let isEmptyError = checkEmptyError([
    username,
    address,
    phone,
    password,
    confirmPassword,
  ]);
  if (
    !isAddressError &&
    !isPhoneError &&
    !isEmptyError &&
    !isMacthError &&
    !isPasswordLengthError &&
    !isUserNameLengthError
  ) {
    const modalsucess = document.querySelector(".modal--seoul");
    setTimeout(function () {
      modalsucess.classList.add("active");
    }, 1000);
    const btnSuccess = document.querySelector(".btn_success");
    btnSuccess.addEventListener("click", function () {
      signup.submit();
    });
  }
});
