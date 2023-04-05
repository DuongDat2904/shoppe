window.addEventListener("load", function() {
    const sliner = document.querySelector(".sliner");
    const slinerMain = document.querySelector(".sliner-main");
    const nextBtn = document.querySelector(".sliner-next")
    const pveBtn = document.querySelector(".sliner-pve")
    const slinerItems = document.querySelectorAll(".sliner-item")
    const slinerItemwight = slinerItems[0].offsetWidth;
    const slinerlenght = slinerItems.length;
    let postionX = 0;
    let index = 0;
    nextBtn.addEventListener("click", function() {
        clickbtn(1);
    })
    pveBtn.addEventListener("click", function() {
        clickbtn(-1);
    })

    function clickbtn(direction) {
        if (direction == 1) {

            nextBtn.style = `display:none`;
            pveBtn.style = `display:block`;
            slinerMain.style = `transform:translateX(-480px)`;
            console.log(index);
        } else if (direction == -1) {
            pveBtn.style = `display:none`;
            nextBtn.style = `display:block`;
            slinerMain.style = `transform:translateX(0)`;

        }
    }
})

window.addEventListener("load", function() {
    const sliner = document.querySelector(".sliner1");
    const slinerMain = document.querySelector(".sliner-main1");
    const nextBtn = document.querySelector(".sliner-next1")
    const pveBtn = document.querySelector(".sliner-pve1")
    const slinerItems = document.querySelectorAll(".sliner-item1")
    const slinerItemwight = slinerItems[0].offsetWidth;
    const slinerlenght = slinerItems.length;
    let postionX = 0;
    let index = 0;
    nextBtn.addEventListener("click", function() {
        clickbtn(1);
    })
    pveBtn.addEventListener("click", function() {
        index = 1;
        clickbtn(-1);
    })

    function clickbtn(direction) {
        if (direction == 1) {
            slinerMain.style = `transform:translateX(-1000px)`;
            pveBtn.style = `display:block`;
            index++;
            console.log(index);
            if (index == 2) {
                slinerMain.style = `transform:translateX(-2000px)`;
                nextBtn.style = `display:none`;
                pveBtn.style = `display:block`;
            }
        } else if (direction == -1) {
            index--;
            console.log(index);
            if (index == 0) {
                pveBtn.style = `display:none`;
                nextBtn.style = `display:block`;
            }
            slinerMain.style = `transform:translateX(0px)`;
        }
    }
})

window.addEventListener("load", function() {
    let sliners = new Array();
    const sliner = document.querySelector(".sliner3");
    const slinerMain = document.querySelector(".sliner-main3");
    const nextBtn = document.querySelector(".sliner-next3")
    const pveBtn = document.querySelector(".sliner-pve3")
    const slinerItems = document.querySelectorAll(".sliner-item3")
    const slinerItemwight = slinerItems[0].offsetWidth;
    const slinerlenght = slinerItems.length;
    const dotItems = this.document.querySelectorAll(".web5_main_dot-li")
    let postionX = 0;
    let index = 0;

    nextBtn.addEventListener("click", function() {
        clickbtn(1);
    })
    pveBtn.addEventListener("click", function() {
        clickbtn(-1);
    })

    function clickbtn(direction) {
        if (direction == 1) {
            if (index >= slinerlenght - 1) {
                index = slinerlenght - 1;
                return;
            }
            console.log(direction);
            postionX = postionX - slinerItemwight;
            slinerMain.style = `transform:translateX(${postionX}px)`;
            index++;

        } else if (direction == -1) {
            if (index <= 0) {
                index = 0;
                return;
            }
            postionX = postionX + slinerItemwight;
            slinerMain.style = `transform:translateX(${postionX}px)`;
            index--;
            console.log(direction);
        }
    }


})


//load web 

window.addEventListener("load", function() {
        var modal = document.getElementById("myModal");
        const sliner = document.querySelector(".sliner4");
        const btn = document.querySelector(".button-close")
        btn.addEventListener("click", function() {
            clickbtn(1);
        })

        function clickbtn(direction) {
            console.log(direction);
            sliner.style = `display: none`;
        }
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    })
    //chat
window.addEventListener("load", function() {

    const chat = document.querySelector(".chat");
    const chatLock = document.querySelector(".chat-lock");
    const sliner1 = document.querySelector(".chat__mini");
    const btn = document.querySelector(".button-chat")
    const btn1 = document.querySelector(".button-chat2");
    btn.addEventListener("click", function() {
        clickbtn1(1);
    });
    btn1.addEventListener("click", function() {
        clickbtn2(-1);
    });

    function clickbtn1(direction) {
        console.log(direction);
        if (direction == 1) {
            chat.style = `width:225px !important; display:block`;
            chatLock.style = `width: 220px;`;
            btn.style = `display:none`;
        }
    }

    function clickbtn2(direction) {
        console.log(direction);
        sliner1.style = `display: block`;
        chat.style = `display: none`;
        chatLock.style = `width: 632px;`;
        chat.style = `width:225px ;`;
        btn.style = `display:block`;
    }
})

window.addEventListener("load", function() {
    const chat1 = document.querySelector(".open");
    const sliner = document.querySelector(".chat__mini");
    const btn = document.querySelector(".chat_mini_content")
    btn.addEventListener("click", function() {
        clickbtn2(1);
    })

    function clickbtn2(direction) {
        console.log(direction);
        sliner.style = `display: none`;
        chat1.style = `display: block`;
    }
})

window.addEventListener("load", function() {
    const sliner = document.querySelector(".sliner5");
    const slinerMain = document.querySelector(".sliner-main5");
    const nextBtn1 = document.querySelector(".sliner-next5")
    const pveBtn1 = document.querySelector(".sliner-pve5")
    const slinerItems = document.querySelectorAll(".sliner-item5")
    const slinerlenght = slinerItems.length;
    let postionX = 0;
    let index = 0;
    nextBtn1.addEventListener("click", function() {
        clickbtn4(1);
    })
    pveBtn1.addEventListener("click", function() {
        clickbtn4(-1);
    })

    function clickbtn4(direction) {
        if (direction == 1) {
            slinerMain.style = `transform:translateX(-400px)`;
            pveBtn1.style = `display:block`;
            nextBtn1.style = `display:none`;
            index++;
            console.log(index);
        } else if (direction == -1) {
            slinerMain.style = `transform:translateX(0)`;
            nextBtn1.style = `display:block`;
            pveBtn1.style = `display:none`;
            console.log(direction);
        }
    }
})

window.addEventListener("load", function() {
    const sliner = document.querySelector(".sliner6");
    const slinerMain = document.querySelector(".sliner-main6");
    const nextBtn1 = document.querySelector(".sliner-next6")
    const pveBtn1 = document.querySelector(".sliner-pve6")
    const slinerItems = document.querySelectorAll(".sliner-item6")
    let postionX = 0;
    let index = 0;
    nextBtn1.addEventListener("click", function() {
        clickbtn3(1);
    })
    pveBtn1.addEventListener("click", function() {
        clickbtn3(-1);
    })

    function clickbtn3(direction) {
        if (direction == 1) {
            slinerMain.style = `transform:translateX(-1000px)`;
            pveBtn1.style = `display:block`;
            index++;
            console.log(index);
            if (index == 2) {
                slinerMain.style = `transform:translateX(-2000px)`;
                nextBtn1.style = `display:block`;
                pveBtn1.style = `display:block`;

            }
            if (index == 3) {
                slinerMain.style = `transform:translateX(-2800px)`;
                nextBtn1.style = `display:none`;
                pveBtn1.style = `display:block`;
            }


        } else if (direction == -1) {
            index--;
            console.log(index);
            if (index == 0) {
                pveBtn1.style = `display:none`;
                nextBtn1.style = `display:block`;
                slinerMain.style = `transform:translateX(0px)`;
                return;
            }
            if (index == 1) {
                slinerMain.style = `transform:translateX(-1000px)`;
                nextBtn1.style = `display:block`;
                pveBtn1.style = `display:block`;
            }
            if (index == 2) {
                slinerMain.style = `transform:translateX(-2000px)`;
                nextBtn1.style = `display:block`;
                pveBtn1.style = `display:block`;

            }
        }
    }
})


/*đăng nhập QR*/
window.addEventListener("load", function() {
        const qr = document.querySelector(".qr");
        const btn = document.querySelector(".qr-content")
        btn.addEventListener("click", function() {
            clickbtn0(1);
        })

        function clickbtn0(direction) {
            if (direction == 1) {
                console.log(direction);
            }
        }
    })
    // toast 

function launch_toast() {
    var x = document.getElementById("toast")
    x.className = "show";
    setTimeout(function() {
        x.className = x.className.replace("show", "");
    }, 5000);
}