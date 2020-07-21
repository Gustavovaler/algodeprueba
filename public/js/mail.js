


function comfirm(e){
    const send_mail = document.getElementById('form-mail');
    e.preventDefault();
    if (window.confirm("Quieres enviar el email?")) { 
        send_mail.submit();
      }
}