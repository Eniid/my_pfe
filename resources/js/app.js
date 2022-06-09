/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


//window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const annimElt = document.getElementsByClassName("annim");
const annimEltH = document.getElementsByClassName("annim_home");

console.log(annimElt);

function annime() {
    console.log("coucou");

    oneElt.classList.add('annimation_suite')
}

for (var i = 0; i < annimElt.length; i++) {
    let oneElt = annimElt[i];
    oneElt.classList.add('annimation')

}


for (var i = 0; i < annimEltH.length; i++) {
    let oneElth = annimEltH[i];
    oneElth.classList.add('annimation_home')

}


window.addEventListener("scroll", e => { // On fait en sorte que l'action se passe lorsque qu'on scrolle
    document.querySelectorAll(".annim").forEach(element => { // On boucle sur tous les éléments qui ont la class annim
        const scrollDeLaPage = window.pageYOffset; // On récupère le scroll de la page
        const positionDeLElement = element.offsetTop; // Puis la position de l'élément .annim
        const tailleDeLaPage = window.innerHeight // et on prend la taille de la page
        if (scrollDeLaPage >= positionDeLElement - tailleDeLaPage + 1500) { // Si on est plus bas que l'élément en bas + 200px (à modifier si tu veux que l'event se passe plus tôt)
            element.classList.add("animation_suite"); // on ajoute la class
        }

        const teste = positionDeLElement - tailleDeLaPage + 1500;



    })
}, false)




window.addEventListener("scroll", e => { // On fait en sorte que l'action se passe lorsque qu'on scrolle
    document.querySelectorAll(".annim_home").forEach(element => { // On boucle sur tous les éléments qui ont la class annim
        const scrollDeLaPage = window.pageYOffset; // On récupère le scroll de la page
        const positionDeLElement = element.offsetTop; // Puis la position de l'élément .annim
        const tailleDeLaPage = window.innerHeight // et on prend la taille de la page
        if (scrollDeLaPage >= positionDeLElement - tailleDeLaPage + 290) { // Si on est plus bas que l'élément en bas + 200px (à modifier si tu veux que l'event se passe plus tôt)
            element.classList.add("animation_suite_home"); // on ajoute la class
        }

        const teste = positionDeLElement - tailleDeLaPage + 1500;



    })
}, false)







// darkmode

document.addEventListener("click", e => {
    const cb = document.querySelector("input#switch_cb")
    if (cb.checked) {
        document.body.classList.add("dark")
        window.localStorage.setItem("darkmode", "enable")
    } else {
        document.body.classList.remove("dark")
        window.localStorage.removeItem("darkmode")
    }
}, false)

const dm = window.localStorage.getItem("darkmode")
if (dm) {
    const cb = document.querySelector("input#switch_cb")
    cb.checked = true
    document.body.classList.add("dark")

}




// const element = document.querySelector(".revers_scrool")
// element.addEventListener("wheel", e => {
//     //e.preventDefault()
//     element.scrollLeft += e.deltaY
// }, true)
