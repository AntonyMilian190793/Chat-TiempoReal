const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error-txt");

form.onsubmit = (e)=>{
  e.preventDefault();//impidiendo que el formulario se envíe
}

continueBtn.onclick  = ()=>{
  // empezando ajax
  let xhr = new XMLHttpRequest(); //creando  XML objeto
  xhr.open("POST", "php/signup.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
      if(xhr.status === 200){
        let data = xhr.response;
        if(data == "success"){
          location.href = "users.php"
        }else{
          errorText.textContent = data;
          errorText.style.display = "block";
        }
      }
    }
  }
  //tenemos que enviar los datos del formulario  atraves de ajax a php
  let formData = new FormData(form);//creando un nuevo formData objeto
  xhr.send(formData);//envisamos el formulario de datos a php
}
