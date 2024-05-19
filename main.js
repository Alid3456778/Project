const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) =>{
        console.log(entry)
        if(entry.isIntersecting){
            entry.target.classList.add('show');
        }else{
            entry.target.classList.remove('show');
        }
    });
    });
    
    const hiddenElements = document.querySelectorAll('.anii');
  
    hiddenElements.forEach((el) => observer.observe(el));
    

    var main = document.querySelector(".main");
    var cursor = document.querySelector(".cursor");
    
    main.addEventListener("mousemove",function(dets){
        cursor.style.left=`${dets.x}px`
        cursor.style.top=`${dets.y}px`
    })

    var img = document.querySelector(".globe");
    var hh = document.querySelector(".one");

    img.addEventListener("mousemove",function(){
        cursor.style.display=`none`
    })
    img.addEventListener("mouseleave",function(){
        cursor.style.display=`block`
    })

    hh.addEventListener("mousemove",function(){
        cursor.style.display=`none`
    })
    hh.addEventListener("mouseleave",function(){
        cursor.style.display=`block`
    })


    // hh.forEach(function(i){
    //     i.addEventListener("mouseenter",function(){
    //         hh.style.zIndex=12
    //     })
    //})

      