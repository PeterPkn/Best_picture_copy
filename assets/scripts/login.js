'use strict';
document.addEventListener("DOMContentLoaded", init);

function init() {
    document.getElementById('submit').addEventListener('click', login);
    document.getElementById('closebtn').addEventListener('click', close);
}

function login() {
    let login = (document.getElementById('if').innerText==='Anmelden');
    let xmlhttp = new XMLHttpRequest();

    xmlhttp.addEventListener("load", function (){
        console.log(this.responseText)
        if(!this.responseText.includes('success')) {
            document.getElementById('error').innerText = this.responseText.split("#")[1];
            document.getElementById('alert').style.display = 'block';
            document.getElementById('closebtn').style.display = 'inline';
            document.getElementById('main').style.marginTop = '4em';
        }
        else {
            window.location.href = "../index.php";
        }

    });

    let names = (login) ? ['email', 'password'] : ['firstname', 'surname', 'email', 'password'];
    let post = '';
    let values = [];
    values['email'] = document.getElementById('email').value;
    values['password'] = document.getElementById('password').value;
    if(!login) {
        values['firstname'] = document.getElementById('firstname').value;
        values['surname'] = document.getElementById('surname').value;
    }

    for (let name of names) {
        post+= (values[name]==='') ? '' : '&' +name +'=' +values[name];
    }


    xmlhttp.open("post", (login) ? "../php/endpoints/login.php" :  "../php/endpoints/register.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded; charset=UTF-8");
    xmlhttp.send(post.substr(1));
}

function close() {
    document.getElementById('closebtn').parentElement.style.display='none';
    document.getElementById('main').style.marginTop = '7em';
}