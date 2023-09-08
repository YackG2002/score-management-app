document.addEventListener("DOMContentLoaded", function() {

    var scoreA = 0;
    const afficheScoreA = document.querySelector('.score-a');
    const teamAScoreButton = document.querySelector('#teamAButton');
    const teamAColorClassement = document.querySelector('.first-team');
    const myFirstColor = teamAColorClassement.getAttribute('data-variable');
    const clasementTeamA = document.getElementById("teamAScore");
    teamAScoreButton.addEventListener('click', function(){
        scoreA +=1;
        afficheScoreA.innerHTML = scoreA ;
        clasementTeamA.style.width = scoreA + '%';
        clasementTeamA.style.backgroundColor = myFirstColor;
    });
        
    var scoreB = 0;
    const afficheScoreB = document.querySelector('.score-b');
    const teamBScoreButton = document.querySelector('#teamBButton');
    const clasementTeamB = document.getElementById("teamBScore");
    const teamBColorClassement = document.querySelector('.second-team');
    const mySecondColor = teamBColorClassement.getAttribute('data-variable');
    teamBScoreButton.addEventListener('click', function() {
        scoreB +=1;
        afficheScoreB.innerHTML = scoreB;
        clasementTeamB.style.width = scoreB + '%';
        clasementTeamB.style.backgroundColor = mySecondColor;
    });
    
    const bouttonDeFin = document.querySelector('.end-of-game');
    bouttonDeFin.addEventListener('click', function(){      
        Swal.fire({
            title: "REDIRECTION !",
            text: "You'll be redirect in another page wait a moment...",
            icon: "info", 
            timer: 1000,
            showConfirmButton: false, 
            allowOutsideClick: false, 
            timerProgressBar: true 
        });  
        setTimeout(function() {
            window.location.href = "oldMatch.php";
        }, 1000);
    });

});