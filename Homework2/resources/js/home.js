
function mostradescrizione(event){
    const testo = event.currentTarget;
    testo.removeEventListener("click",mostradescrizione);
    const desc = event.currentTarget.parentNode.querySelector("li");
    desc.classList.remove("hidden");
    testo.textContent = "Nascondi ID";
    testo.addEventListener("click",nascondidescrizione);
}

function nascondidescrizione(event){
    const testo = event.currentTarget;
    testo.removeEventListener("click",nascondidescrizione);
    const desc = event.currentTarget.parentNode.querySelector("li");
    desc.classList.add("hidden");
    testo.textContent = "Mostra ID";
    testo.addEventListener("click",mostradescrizione);
}

function aggiungipreferito(event){

    const title = event.currentTarget.parentNode.querySelector("h2").textContent;
    const img = event.currentTarget.parentNode.querySelector("img").src;
    const descr = event.currentTarget.parentNode.querySelector("li").textContent;
    let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

   
    fetch("aggiungipreferito/aggiungi",{
        headers:{
            "Content-Type": "application/json",
            "Accept": "application7json, text-plain, */*",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-TOKEN": token,
            "Content-type": "application/x-www-form-urlencoded"

        },
        method: "POST",
        body: JSON.stringify({
            titolo: title,
            img:img,
            descr: descr
        })
    }).then(esito).then(onJSONesito);
    
}

function esito(response){

    return response.json();
}

function onJSONesito(json){

    if(json.var == true){
        alert("Questo elemento è già nei tuoi preferiti!");
    }else{
        alert("Elemento aggiunto correttamente");
    }
}




function ricerca(event){
    event.preventDefault();
    const content = document.querySelector("#content").value;
    if(!content){
        const section  = document.querySelector("section.griglia");
        section.innerHTML ="";
        alert("Inserire testo nella barra di ricerca!");
        
    }
    else{
        const text = encodeURIComponent(content);
        fetch("ricerca?q="+text, {method:'GET'}).then(onResponse).then(onJSONshow);
    } 

}

function onResponse(response){
    return response.json();
}

function onJSONshow(json){
    const results = json.d;
    const section = document.querySelector("section.griglia");
    section.innerHTML="";
    for(result of results){

        const container = document.createElement("div");
        container.classList.add("elemento");
        container.id ="articolo";

        const title = document.createElement("h2");
        title.textContent = result.l;
        title.classList.add("title");

        const immagine = document.createElement("img");
        immagine.src = result.i.imageUrl;
        immagine.classList.add("copertina");

        const testo = document.createElement("span");
        testo.textContent = "Mostra ID";
        
        var descrizione = document.createElement("li");
        descrizione.classList.add("hidden");
        descrizione.textContent = result.id;

        const bottone = document.createElement("button");
        bottone.innerHTML = "Aggiungi ai preferiti";
       
       
        container.appendChild(immagine);
        container.appendChild(title);
        container.appendChild(testo);
        container.appendChild(descrizione);
        container.appendChild(bottone);

        section.appendChild(container);

        testo.addEventListener("click",mostradescrizione);
        bottone.addEventListener("click",aggiungipreferito);

    }
}

function mostratop(){
    fetch("top").then(onResponse).then(onJSONtop);
}


function onJSONtop(json){
    const results = json.tv_shows;
    const section =document.querySelector("section.top");
    section.innerHTML ="";
    for(result of results){
        const container = document.createElement("div");
        container.classList.add("elemento");
        container.id ="articolo"; 

        const title = document.createElement("h2");
        title.textContent = result.name;
        title.classList.add("title");

        const immagine = document.createElement("img");
        immagine.src = result.image_thumbnail_path;
        immagine.classList.add("copertina");

        
        container.appendChild(immagine);
        container.appendChild(title);

        section.appendChild(container);

    }
}

let cont = 0;
const form = document.querySelector("#ricerca");
form.addEventListener("submit",ricerca);
mostratop();
