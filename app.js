function dodaj(){
    let data = new FormData();

    data.append("korisnik_id", 1);
    data.append("usluga_id", document.getElementById("usluga").value);
    data.append("datum", document.getElementById("datum").value);
    data.append("vrijeme", document.getElementById("vrijeme").value);

    fetch("php/dodaj.php", {
        method: "POST",
        body: data
    })
    .then(() => ucitaj());
}

function ucitaj(){
    fetch("php/prikaz.php")
    .then(res => res.json())
    .then(data => {
        let html = "";

        data.forEach(r => {
    html += `
        <p>
        ${r.naziv} <br>
        ${r.datum} ${r.vrijeme}
        <br>
        <button onclick="obrisi(${r.id})">Obriši</button>
        </p>
    `;
});

        document.getElementById("lista").innerHTML = html;
    });
}

function obrisi(id){
    fetch("php/obrisi.php?id=" + id)
    .then(() => ucitaj());
}

ucitaj();
