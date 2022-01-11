            
let navbar = document.querySelector(".navbar")
let sticky = navbar.offsetTop

window.addEventListener("scroll" , ()=>{

    if(window.pageYOffset >= sticky){
        navbar.classList.add("sticky")
    }

    else{
        navbar.classList.remove("sticky")
    }
})

// END OF STICKY NAVBAR

let img = document.querySelectorAll(".card")
img.forEach((item)=>{
    item.addEventListener('mouseenter',displayFunc)
})
function displayFunc(){
    console.log(this);
}
// let card_body = document.querySelectorAll(".card-body")
// let buttons = document.querySelectorAll(".buttons")
// let headline = document.querySelectorAll(".headlinedis")
// let more = document.querySelectorAll(".more")

// for(let imgno = 0; cardno <=imgno.length; imgno++){

//     card_body[imgno].addEventListener("mouseover" , ()=> {

//         card_body[imgno].classList.remove("d-none")
//     })
// }
             
