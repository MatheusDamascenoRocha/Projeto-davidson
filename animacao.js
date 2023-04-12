const target = document.querySelectorAll('[data-anime]')
const classe = "animate"

function animeScroll(){
const windowTop=window.pageYOffset + ((window.innerHeight*3)/4)
target.forEach(function(elemento){
    if ((windowTop)>elemento.offsetTop) {
        elemento.classList.add(classe)
    }
    else{
        elemento.classList.remove(classe)
    }
})
}

animeScroll()

if (target.length) {
    window.addEventListener('scroll',function(){
        animeScroll()
    })
}