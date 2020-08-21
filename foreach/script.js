const object = document.querySelectorAll(".object")
addEventListener('click', ob => {
        if (ob.path[0].classList.contains("object")) {
            document.getElementById("audio_shot").play();
            setTimeout(() => {
                document.getElementById("audio_explosion").play();
            }, 500);
            const selector = '#' + ob.path[0].id + '>div'
            const id = document.querySelector(selector)
            id.classList.remove("target")
            id.classList.add("on-fire")
            setTimeout(() => {
                id.classList.remove("on-fire")
                id.classList.add("burned");
                ob.path[0].classList.add("burned")
            }, 1500);
        } else {
            // MISSED COMMANDS
            document.getElementById("audio_shot").play();
            setTimeout(() => {
                document.getElementById("audio_miss").play();
            }, 500);
            console.log('miss')
        }
    }
)