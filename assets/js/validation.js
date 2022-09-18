const checkIfElemExist = (elemId) =>{
    const element = document.getElementById(elemId)
    let checkBool;
    if (element===null){
        checkBool = false;
    }else{
        checkBool = true;
    }
    return checkBool;
}

const addElemValue = (text,elemId) =>{
    const elem = document.createElement('p');
    elem.id = 'error'+text;
    elem.innerHTML = 'Incorrect '+text;
    console.log(elem);
    const elemBefore = document.getElementById(elemId);
    elemBefore.after(elem);
}

const removeElement = (elemId) =>{
    const element = document.getElementById(elemId);
    element.remove();
}


const validateName = () => {
    const name = document.getElementById('name');
    let  name_value = name.value;

    let test = /^[a-zA-Z]+$/.test(name_value);
    if (! test){
        if ( ! checkIfElemExist('errorname')){
            addElemValue('name', 'name');
        }
    }else{
        removeElement('errorname');

    }

}

const validateFirstname = () => {
    const firstname = document.getElementById('firstname');
    let  firstname_value = firstname.value;

    let test = /^[a-zA-Z]+$/.test(firstname_value);
    if (! test){
        if ( ! checkIfElemExist('errorfirstname')){
            addElemValue('firstname', 'firstname');
        }
    }else{
        removeElement('errorfirstname');

    }
}

const validateEmail = () => {
    const email = document.getElementById('email');
    let  email_value = email.value;

    let test = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email_value);
    if (! test){
        if ( ! checkIfElemExist('erroremail')){
            addElemValue('email', 'email');
        }
    }else{
        removeElement('erroremail');

    }
}
const validateFile = () => {
    const file = document.getElementById('file');
    let  file_value = file.value;

    let test = /^[a-zA-Z]+$/.test(file_value);
    if (! test){

    }
}
const validateDescription = () => {
    const description = document.getElementById('description');
    let  description_value = description.value;

    let test = /^[a-zA-Z]+$/.test(description_value);
    if (! test){
        if ( ! checkIfElemExist('errordescription')){
            addElemValue('description', 'description');
        }
    }else{
        removeElement('errordescription');

    }
}
