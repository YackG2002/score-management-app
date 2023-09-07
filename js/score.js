document.addEventListener("DOMContentLoaded", function() {
    let scoreA = 0;
    const afficheScoreA = document.querySelector('.score-a');
    const teamAScoreButton = document.querySelector('#teamAButton');
    teamAScoreButton.addEventListener('click', function(){
        scoreA +=1;
        afficheScoreA.innerHTML = scoreA ;
    });
    
    let scoreB = 0;
    const afficheScoreB = document.querySelector('.score-b');
    const teamBScoreButton = document.querySelector('#teamBButton');
    teamBScoreButton.addEventListener('click', function() {
        scoreB +=1;
        afficheScoreB.innerHTML = scoreB;
    });
   
});