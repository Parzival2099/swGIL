let bxCodRecCon = document.getElementById('bx-rec-cod');
let bxCorrCon = document.getElementById('bx-rec-corr');
let bxNewCon = document.getElementById('bx-cam-con');

let btnEnv = document.getElementById('btn-envcod');
let btnvol2 = document.getElementById('btn-vol2');
let btnVerCod = document.getElementById('btn-subval');

bxCodRecCon.style.display = 'none';
bxNewCon.style.display = 'none';

btnEnv.addEventListener('click', () => {
    bxCodRecCon.style.display = 'block';
    bxCorrCon.style.display = 'none';
});

btnvol2.addEventListener('click', () => {
    bxCodRecCon.style.display = 'none';
    bxCorrCon.style.display = 'block';
});

btnVerCod.addEventListener('click', ()=>{
    bxNewCon.style.display = 'block';
    bxCodRecCon.style.display = 'none';
})

function leerCorreo(id1, id2, id3) {
    let correo = document.getElementById(id1).value;
    document.getElementById(id2).innerHTML = correo;
    document.getElementById(id3).innerHTML = correo;
}