const divs = document.getElementsByClassName('pers_info_25');
let buttonArray = Array.from(divs);



const myTxt = [];
myTxt["pers_info_hum"] = "Humans";
myTxt["pers_info_crea"] = "Creativity";
myTxt["pers_info_nat"] = "Nature";
myTxt["pers_info_tech"] = "Tech";
// console.log(myTxt)


function showPersInfo(id){
    let button = document.getElementById(id);
    let box = document.getElementById('info_txt_div');





    let meinText = "";
    buttonArray.forEach(element => {
        
        element.classList.remove('pers_info_25_active');
        element.classList.remove('pers_info_25_inactive');
        element.classList.add('pers_info_25');
        


        if(id == element['id']){
            element.classList.add('pers_info_25_active');
            element.classList.remove('pers_info_25');
            meinText = myTxt[element['id']];

            


        }
        else{
            element.classList.remove('pers_info_25');
            element.classList.remove('pers_info_25_active');
            element.classList.add('pers_info_25_inactive');
            
        }
        
    });
    
    box.style.borderColor = 'whitesmoke';
            box.style.backgroundColor = 'rgb(34, 34, 34)';
            box.innerHTML = '<p>'+meinText+'</p>';
    

    



    
}