let xhr = new XMLHttpRequest(); // untuk akses JSON

xhr.onreadystatechange = function (){ //cek dlu 
    if(xhr.readyState == 4 && xhr.status == 200) { //ready gk
        let mahasiswa = JSON.parse(this.responseText); // JSON -> Objek
        console.log(mahasiswa); //cetak
    }
}

xhr.open('GET','coba.json',true); 
xhr.send();