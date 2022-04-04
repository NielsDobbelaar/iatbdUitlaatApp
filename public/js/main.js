
var checked = 0;

const hondCheckBox = document.getElementById("HondCheck");
const katCheckBox = document.getElementById("KatCheck");
const vogelcheckBox = document.getElementById("VogelCheck");
const overigCheckBox = document.getElementById("OverigCheck");

var posts = document.getElementsByClassName('gridCard')

const checkFun = () => {
    for(let post of posts){
        post.style.display = "none";
    }

    checked = 0;

    if(hondCheckBox.checked){
        checked ++;
        for(let post of posts){
            if(post.dataset.soort == "Hond"){
            post.style.display = "";
            }
        }
    }
    if(katCheckBox.checked){
        checked ++;
        for(let post of posts){
            if(post.dataset.soort == "Kat"){
            post.style.display = "";
            }
        }
    }
    if(vogelcheckBox.checked){
        checked ++;
        for(let post of posts){
            if(post.dataset.soort == "Vogel"){
            post.style.display = "";
            }
        }
    }
    if(overigCheckBox.checked){
        checked ++;
        for(let post of posts){
            if(post.dataset.soort == "Overig"){
            post.style.display = "";
            }
        }
    }

    if(checked == 0){
        for(let post of posts){
            post.style.display = "";
        }
    }

}
