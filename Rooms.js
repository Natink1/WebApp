const hiddents = document.querySelectorAll('.hidet');
const Button = document.querySelectorAll('.downbut');


Button.forEach((Button, index) =>{
Button.addEventListener('click', () => {
    const hiddent = hiddents[index];
    if (hiddent.style.display === "none" || hiddent.style.display === "")
        {
        hiddent.style.display = "block";
        Button.innerHTML = '&#9650';
    }
    else{
        Button.innerHTML = '&#9660';
        hiddent.style.display = 'none';
    }

});
}
);



// const hidden2 = document.getElementById('hidden2');
// const Button2 = document.getElementById('morebut2');
// Button2.addEventListener('click', () => {
//     if (hidden2.style.display === "none" || hidden2.style.display === ""){
//         hidden2.style.display = "list-item";
//     }
//     else{
//         hidden2.style.display = 'none';
//     }
// }
// );


// const hidden3 = document.getElementById('hidden3');
// const Button3 = document.getElementById('morebut3');
// Button3.addEventListener('click', () => {
//     if (hidden3.style.display === "none" || hidden3.style.display === ""){
//         hidden3.style.display = "list-item";
//     }
//     else{
//         hidden3.style.display = 'none';
//     }
// }
// );

