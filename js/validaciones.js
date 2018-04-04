function validarDatosGET()
{
    var verificar = true;

    if(!document.valida_datos_get_frm.nombre_txt.value)
    {
        alert('El campo nombre es requerido');
        document.valida_datos_get_frm.nombre_txt.focus();
        verificar = false;
    }
    
    else if(!document.valida_datos_get_frm.password_txt.value)
    {
        alert('El campo contraseña es requerido');
        document.valida_datos_get_frm.password_txt.focus();
        verificar = false;
    }
    
    else if(!document.valida_datos_get_frm.sexo_rdo[0].checked &&
            !document.valida_datos_get_frm.sexo_rdo[1].checked)
    {
        alert('El campo sexo es requerido');
        document.valida_datos_get_frm.sexo_rdo[1].focus();
        verificar = false;
    }
    
    if(verificar)
    {
        !document.valida_datos_get_frm.submit();
    }
}

function validarDatosPOST()
{
    var verificar = true;

    if(!document.valida_datos_post_frm.nombre_txt.value)
    {
        alert('El campo nombre es requerido');
        document.valida_datos_post_frm.nombre_txt.focus();
        verificar = false;
    }
    
    else if(!document.valida_datos_post_frm.password_txt.value)
    {
        alert('El campo contraseña es requerido');
        document.valida_datos_post_frm.password_txt.focus();
        verificar = false;
    }
    
    else if(!document.valida_datos_post_frm.sexo_rdo[0].checked &&
            !document.valida_datos_post_frm.sexo_rdo[1].checked)
    {
        alert('El campo sexo es requerido');
        document.valida_datos_post_frm.sexo_rdo[1].focus();
        verificar = false;
    }
    
    if(verificar)
    {
        !document.valida_datos_post_frm.submit();
    }
}

window.onload = function()
{
    document.querySelector('#enviar-get').onclick = validarDatosGET;    
    document.querySelector('#enviar-post').onclick = validarDatosPOST;
};


