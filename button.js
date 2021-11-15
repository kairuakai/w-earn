
var storeNumber = localStorage.getItem("storeNumber");

function addOne(){
  
    var points = parseInt(document.getElementById('claimPoints').innerHTML);
    localStorage.setItem("storeNumber", JSON.stringify(points));

    alert("Wait for 5 seconds to claim free points");
    setTimeout(function(){ 
        alert("You Receive 10 points in WEEMS"); 
        document.getElementById('claimPoints').innerHTML=points+10;
        // points = points + 10;
    },5000);

}

// function get(){
//   localStorage.getItem("storeNumber");
//    JSON.parseInt(document.getElementById('claimPoints').innerHTML=storeNumber+10);
  
// }

function addPoints(){
    var points = parseInt(document.getElementById('claimPoints').innerHTML);
    localStorage.setItem("storeNumber",points);
    setTimeout(function(){ 
        alert("You Receive 10 points in WEEMS"); 
    parseInt(document.getElementById('claimPoints').innerHTML=points+10);
    },3000);
  
}


function watch(){
    alert('Watch ads to earn money');
    var points = parseInt(document.getElementById('claimPoints').innerHTML);
    localStorage.setItem("storeNumber",points);
    setTimeout(function(){ alert("You Receive 10 points in WEEMS"); 
    document.getElementById('claimPoints').innerHTML=points+10;
    },3000);
}

function convert(){
    alert("Convert Points to Money");
}