var element = document.body;

const p = document.getElementById("p");
p.style.color ='brown';



function ubahWarna(){
    alert('Anda yakin mengubah tema?');
    element.classList.toggle("light");
}


