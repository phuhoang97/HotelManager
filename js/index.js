const roomContainer = document.getElementById("room-container");
roomContainer.addEventListener("click", (e) => {
    if(e.target.classList.contains("status-button")){
        const children = e.target.parentElement.children;
        Array.from(children).forEach((element, index) => {
            if(element.classList.contains("status")){
                setTimeout(()=>{
                    if(element.innerText == "Phòng trống") {
                        element.innerText = "Phòng đang sử dụng"
                        element.style.color = "red"
                    } else {
                        element.innerText = "Phòng trống",
                        element.style.color = "green"
                    }
                },500)
                
            }
        });
    }
})