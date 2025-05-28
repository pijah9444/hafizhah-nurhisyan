// let mahasiswa = {
//     "nama" : "hafizhah nurhisyan",
//     "nim" : "2217020022",
//     "email": "hafizhah nurhisyan"
// }

// console.log(mahasiswa);

let xhr = new XMLHttpRequest();
xhr.onreadystatechange = function() {
    if(xhr.readystate == 4 && xhr.status == 200){
        let mahasiswa =JSON.parse (this.responseText);
        console.log(mahasiswa);
    }
}
xhr.open('Get', 'coba.json', true);
xhr.send();