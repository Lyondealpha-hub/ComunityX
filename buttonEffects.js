let postmore_btn = document.querySelector('#postmore-btn');
let currentstatus = false
function postmoredisplay(){
  if(currentstatus == true){
    document.getElementById('postmore').style.display = "block";
    return currentstatus = false;
  }else{
    document.getElementById('postmore').style.display = "none";
    return currentstatus = true;
  }
}
postmore_btn.onclick = postmoredisplay;


function textchange(){
    let b = document.getElementById("subbutton");
    if(b.innerHTML === "Subscribe"){
      b.innerHTML = "Subscribed";
      b.style.color = "white";
      b.style.backgroundColor = "red";
    }else{
      b.innerHTML = "Subscribe"
      b.style.color = "#000";
      b.style.backgroundColor = "#efefef";
    }

}

function colorchange(){
  var like = document.getElementById("likebtn");
  var likeicon = document.getElementById('likeicon');
  if(likeicon.style.color === 'black'){
    likeicon.style.color = "red";
  }else {
    likeicon.style.color = "black";
  }

}

// this second function was used trying to apply to all posts/pokes.
// but I'm thinking of a better solution
function colorchange1(){
  var pokebtn = document.getElementById("pokebtn")
  var pokeicon = document.getElementById("pokeicon");
  if(pokeicon.style.color === "black"){
    pokeicon.style.color = 'red';
  }else {
    pokeicon.style.color = 'black';
  }

}


/*function settingbutton(){
  var target = document.getElementById('Settings-info');
  var click = target.style.display = "none";
  if (click == true){
    document.getElementById('profile').style.display = "block";
    return execute= false;
  }

}*/
// this is working
 currentstatus = false;
function show_hide(){
    if(currentstatus==true){
       document.getElementById("Settings-info").style.display="block";
        return currentstatus=false;
    }else { // this is for hidong it when you click
        document.getElementById("profile").style.display = "none";
      let settingsbutton = document.getElementById('settingstool-btn');
      let clearhidebtn = document.getElementById('hide-btn');
      clearhidebtn.innerHTML = " ";// cleans the hide text in the button
      /*backbutton.innerHTML = "Back"*/
      let newElement= document.createElement('a');
      let backbutton = document.createTextNode('Back');
      newElement.appendChild(backbutton);
      document.getElementById('hide-btn').appendChild(newElement);
      newElement.setAttribute('href', 'index.html');//this isn't correct need to link it back to an id not page
      newElement.style.fontSize = '18px';

        settingsbutton.innerHTML = "Settings"
        settingsbutton.style.fontSize = "18px";
        settingsbutton.style.width = "35%";
        settingsbutton.style.padding = "4px 4px";
        settingsbutton.style.float = "right"
        return currentstatus =true;
    }
}

let lastbtn = document.querySelector('#bottom-btn');
