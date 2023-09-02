const container = document.querySelectorAll(".container"), //Will select the container from login page and also register page.
pwShowHide = document.querySelectorAll(".showHidePw"), //
pwFields = document.querySelectorAll(".password");

//Will loop through each of the eye icon. If the user clicks the eye icon, it will turn on or off according
//to the current 
pwShowHide.forEach(eyeIcon =>{
    eyeIcon.addEventListener("click", ()=>{
        pwFields.forEach(pwFields =>{
            if(pwFields.type === "password"){
                pwFields.type = "text";

                pwShowHide.forEach(icon => {
                    icon.classList.replace("uil-eye-slash", "uil-eye");
                })
            }else{
                pwFields.type = "password";

                pwShowHide.forEach(icon => {
                    icon.classList.replace("uil-eye", "uil-eye-slash");
                })
            }
        })
    })
})
