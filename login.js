/* ================= LOGIN VALIDATION ================= */

function validateLogin(){


    /* ================= GET INPUT VALUES ================= */

    let employeeId =

    document.getElementById(
    "employee_id"
    ).value.trim();


    let password =

    document.getElementById(
    "password"
    ).value.trim();



    /* ================= EMPLOYEE ID VALIDATION ================= */

    /*
        Supports:

        Employee IDs → 100001
        HR IDs       → 51001
        Admin IDs    → 81000001
    */

    let idPattern =
    /^[0-9]{5,8}$/;


    if(!idPattern.test(employeeId)){

        alert(

        "ID must contain 5 to 8 digits"

        );

        return false;
    }



    /* ================= PASSWORD VALIDATION ================= */

    if(password.length < 6){

        alert(

        "Password must contain minimum 6 characters"

        );

        return false;
    }



    /* ================= SUCCESS ================= */

    return true;
}



/* ================= PASSWORD TOGGLE ================= */

const passwordInput =

document.getElementById(
"password"
);


const togglePassword =

document.getElementById(
"togglePassword"
);


if(togglePassword){

    togglePassword.addEventListener(
    "click",

    function(){


        if(passwordInput.type === "password"){

            passwordInput.type = "text";

            togglePassword.classList.remove(
            "fa-eye"
            );

            togglePassword.classList.add(
            "fa-eye-slash"
            );
        }

        else{

            passwordInput.type = "password";

            togglePassword.classList.remove(
            "fa-eye-slash"
            );

            togglePassword.classList.add(
            "fa-eye"
            );
        }

    });

}