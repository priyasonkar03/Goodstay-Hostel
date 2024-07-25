function marqueScreen (){
    window.addEventListener("wheel",function(dets){
        if(dets.deltaY>0){
            gsap.to(".marque",{
                transform:'translateX(-200%)',
                // delay:1
                duration:4,
                repeat:-1,
                ease:"none"
            })        
            gsap.to(".marque img",{
                rotate:180
            })
        }
        else{
            gsap.to(".marque",{
                transform:'translateX(0%)',
                // delay:1
                duration:4,
                repeat:-1,
                ease:"none"
            })
            gsap.to(".marque img",{
                rotate:0
            })
        }
    })
}
marqueScreen()

function breakTheText(){
    var h3 = document.querySelector("h3")
    var h3Text = h3.textContent
    // console.log(h1Text);
    var splittedText = h3Text.split("")
    // console.log(splittedText);
    var clutter = ""
    //=======This is the array
    splittedText.forEach(function(elem){
        // console.log("Hello");
        clutter += `<span>${elem}</span>`
    })
    // console.log(clutter);
    h3.innerHTML = clutter
}
breakTheText()
// ========First method
gsap.from("h3 span",{
    y:50,
    opacity:0,
    duration:1,
    delay:0.5,
    stagger:0.15    //or -0.15
})