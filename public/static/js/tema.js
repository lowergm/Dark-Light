document.body.classList.add("light")

document.querySelector("header").classList.add("light")

document.getElementById("tema").addEventListener("click", ()=>{
    document.body.classList.toggle("dark");
    document.body.classList.toggle("light");
    document.querySelector("header").classList.toggle("dark");
    document.querySelector("header").classList.toggle("light");
});
