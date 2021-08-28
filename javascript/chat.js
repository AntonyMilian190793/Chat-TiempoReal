const form = document.querySelector(".typing-area"),
inputField = form.querySelector(".input-field"),
sendBtn = form.querySelector("button"),
chatBox = document.querySelector(".chat-box");


form.onsubmit = (e)=>{
  e.preventDefault();//impidiendo que el formulario se envíe
}

sendBtn.onclick = ()=>{
  // empezando ajax
  let xhr = new XMLHttpRequest(); //creando  XML objeto
  xhr.open("POST", "php/insert-chat.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
      if(xhr.status === 200){
        inputField.value = ""; // una vez insertado el mensaje en la base de datos , saldremos en blanco input field
        scrollTpBotton();
      }
    }
  }
  //tenemos que enviar los datos del formulario  atraves de ajax a php
  let formData = new FormData(form);//creando un nuevo formData objeto
  xhr.send(formData);//envisamos el formulario de datos a php
}

chatBox.onmouseenter = ()=>{
  chatBox.classList.add("active");
}

chatBox.onmouseleave = ()=>{
  chatBox.classList.remove("active");
}

  setInterval(() =>{
    // empezando con ajax
    let xhr = new XMLHttpRequest(); //creando  XML objeto
    xhr.open("POST", "php/get-chat.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
          let data = xhr.response;
            chatBox.innerHTML = data;
            if(!chatBox.classList.contains("active")){// si activamos la clase que no contiene en el vhatbot activamos el scrol boton
              scrollToBottom();
            }
        }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);
  }, 500);//esta funcion puede correr normalmente despues de 500ms


function scrollToBottom(){
  chatBox.scrollTop = chatBox.scrollHeight;
}
