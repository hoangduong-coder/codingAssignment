//When the screen width is less than or equal 700px, this function will activate the
//"glass" button so that when you click on the button, the search box will appear
//If you click the "glass" button again, the search box will close
function display(){
    var x = document.getElementById("SearchPart");
    if(x.className === "navRightPart"){
        x.className += " responsive";
    }
    else {
        x.className = "navRightPart";
    }
}

//Number of clients, employees and daily users annimation
const number = document.querySelectorAll('.number');
const speed = 100;

number.forEach(counter => {
    const newNumber = () => {
        const target = Number(counter.getAttribute('data-target'));
        const count = Number(counter.innerText);
        const step = Math.round(target / speed);
        if(count < target){
            counter.innerText = count + step;
            setTimeout(newNumber, 1);
        }
        else{
            counter.innerText = target;
        }
    };
    newNumber();
});


