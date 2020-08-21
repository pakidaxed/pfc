const object = document.querySelectorAll(".object")
const score = document.querySelector(".score")
let targets_burned = 0
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
            score.classList.toggle("score-add")
            setTimeout(() => {
                score.classList.toggle("score-add")
            }, 300);
            setTimeout(() => {
                id.classList.remove("on-fire")
                if (ob.path[0].classList.contains("thug")) {
                    ob.path[0].classList.add("thug-burned")
                } else {
                    ob.path[0].classList.add("burned")
                }
            }, 1500);
            targets_burned += 1
            if (targets_burned === targets) {
                score.classList.toggle("score-win")
                score.innerHTML = "MISSION PASSED !"
            } else {
                score.innerHTML = targets_burned + '/' + targets;
            }
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
