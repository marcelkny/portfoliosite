const myPortfoliocards = [
    {title: "Profilseite", image: "img/project_profil.JPG", githublink: "https://github.com/marcelkny/portfoliosite", demolink: "", text: "Github Repository für diese Profilseite."}

];

const portfoliosection = document.getElementById("portfoliosectioncontent");
myPortfoliocards.forEach(el => {
    let cardcol = document.createElement("div");
    cardcol.classList.add("card_col");

    let portfoliocard = document.createElement("div");
    portfoliocard.classList.add("portfolio_card");

    let cardimagediv = document.createElement("div");
    cardimagediv.classList.add("cardimg_div");
    portfoliocard.appendChild(cardimagediv);


    let cardimage = document.createElement("img");
    cardimage.classList.add("card_img_top");
    cardimage.src = el["image"];
    cardimagediv.appendChild(cardimage);

    let cardhdiv = document.createElement("div");
    cardhdiv.classList.add("card_h");
    cardhdiv.innerHTML = el["title"];
    portfoliocard.appendChild(cardhdiv);

    let cardtext = document.createElement("p");
    cardtext.classList.add("card_text");
    cardtext.innerHTML = el["text"];
    portfoliocard.appendChild(cardtext);

    let cardbuttons = document.createElement("div");
    cardbuttons.classList.add("cardbuttons");

    if(el["githublink"] !== ""){
        let cardbutton = document.createElement("a");
        cardbutton.classList.add("cardbutton");
        cardbutton.href = el["githublink"];
        cardbutton.innerHTML = "Github";
        cardbutton.target = "_blank";
        cardbuttons.appendChild(cardbutton);
    }
    if(el["demolink"] !== ""){
        let cardbutton = document.createElement("a");
        cardbutton.classList.add("cardbutton");
        cardbutton.href = el["demolink"];
        cardbutton.innerHTML = "Demoseite";
        cardbutton.target = "_blank";
        cardbuttons.appendChild(cardbutton);
    }


    portfoliocard.appendChild(cardbuttons);
    cardcol.appendChild(portfoliocard);
    portfoliosection.appendChild(cardcol);
    

});