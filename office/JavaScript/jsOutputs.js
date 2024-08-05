
// let demo = document.getElementById('demo');

// demo.innerHTML = "Hello JavaScript";

// document.write('Helloooo buddy');

// window.alert('This page is ' + demo)

// console.log("hello java");

// window.print('hello python')


// let btnHide =  document.getElementById("btn-hide");

// let elements = document.getElementsByClassName("element");


// function for showing and hidding pera
let tagElemen = document.getElementById('demo');
let tagElement = tagElemen.querySelectorAll('p.element');

// console.log(tagElement[0].innerHTML); //selecting a particulor tags element


function show(){
    // tagElement[0].style.display = "block";
    tagElement[0].style.visibility = "visible";
}

function hide(){
    // tagElement[0].style.display = "none";
    tagElement[0].style.visibility = "hidden";
}


// function for hidding containt of a peragraph using id
let elements = document.getElementById("element");

function replace(){
    elements.innerHTML = "Button clicked !";
}

function revert(){
    elements.innerHTML = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat eaque nobis incidunt ipsa odio reiciendis ab! Eos vitae quia id!";
}


// function for changing attribute value of src using img id

let img = document.getElementById("image");

function on(){
    img.src = "./onn.png";
}

function off(){
    img.src = "./offf.png";
}

// function for showing full date of Wed Jul 31 2024 16:11:00 GMT+0530 (India Standard Time)

let date = document.getElementById("date");

function showDate(){
    date.innerHTML = Date();
}

function hideDate(){
    date.innerHTML = " ";
}


// validating a input only accept number between range 

function validate(){

    let result = document.getElementById('result');
    let number = document.getElementById('number').value;

    if(isNaN(number) || number < 1 || number > 10){
        result.innerHTML = "Input is Not Valid. ❌ "
        result.style.color = "red";
    }else{
        result.innerHTML = "Input is Okay. ✅ ";
        result.style.color = "green";

    }

}

// Animate 

// function animate(){

//     let id = null;
//     const element = document.getElementById("animate");
//     let pos = 0;
//     clearInterval(id);
//     id = setInterval(frame, 5);

//     function frame(){
//         if(pos >= 350){
//             clearInterval(id);
//         }else{
//             pos++;
//             element.style.right = pos + 'px';
//             element.style.top = pos + 'px';
//         }
//     }

// }


// animating a div

function animated() {
    let img = document.getElementById('img');
    img.src = "./Cat Walk Animated GIF.gif";
    let id = null;
    const element = document.getElementById("animate");
    const maxPos = window.innerWidth - element.offsetWidth;
    let pos = 0;
    clearInterval(id);
    id = setInterval(frame, 5);

    function frame() {
        if (pos >= maxPos - 90) {
            clearInterval(id);
            element.style.left = 0 + 'px';
            img.src = "./cat.png";

        } else {
            pos++;
            element.style.left = pos + 'px';
            // element.style.top = pos + 'px';
        }
    }
}


// Mouse over event

function mOver(demo){
    demo.innerHTML = "You'r mouse is here";
    demo.style.backgroundColor = "blue";
    demo.style.color = "#fff";
}

function mOut(demo){
    demo.innerHTML = "Hello Mouse is here (MouseOut is Working)";
    demo.style.backgroundColor = "transparent";
}


// addEventListener use

let Event = document.getElementById("addEvent");
let Event0 = document.getElementById("addEvent0");
let EventClick = document.getElementById("eventClick");

Event.addEventListener('click', addEvent);

function addEvent(){

    if (typeof(Storage) !== "undefined") {
        
        if (localStorage.clickcount) {
          localStorage.clickcount = Number(localStorage.clickcount)+1;
        } else {
          localStorage.clickcount = 0;
        }
    } else {
        alert("Sorry, your browser does not support web storage...");
    }

    let count = Number(localStorage.clickcount) - 1;
    Event.innerHTML = 'Clicked Count-> ' + count;
    // console.log(Number(localStorage.clickcount - 1));
    
    
    if(count%2 == 0){
        EventClick.innerHTML = "You Click Even Time on Button";
        EventClick.style.backgroundColor = "green";
    }else{
        EventClick.innerHTML = "You Click Odd Time on Button";
        EventClick.style.backgroundColor = "red";
    }

    // localStorage.setItem(count);
    // alert("Button is clicked !");
}

Event0.addEventListener('click', function(){

    if (typeof(Storage) !== "undefined") {
        if (localStorage.clickcount) {
          localStorage.clickcount = 0;
        } else {
          localStorage.clickcount = 0;
        }
        alert("You are Click Count is set to 0");
    } else {
        alert("Sorry, Something Wrong Heppen");
    }

    addEvent();
    EventClick.innerHTML = "Count reset 0";
    EventClick.style.backgroundColor = "yellow";
    EventClick.style.color = "black";

});



let btnElement = document.getElementById('changebg');
var count = 0;

btnElement.addEventListener('click', function(){
    
    let bgcolor = randomBgColor();
    let color = randomColor();

    if(count%2==0){
        let pbox = document.getElementById('pbox');
        let cbox = document.getElementById("cbox");

        pbox.style.backgroundColor = bgcolor;
        cbox.style.backgroundColor = color;
    }else{
        pbox.style.backgroundColor = bgcolor;
        cbox.style.backgroundColor = color;
    }

    count = count + 1;
    
});


function randomColor(){
    var letters = '0123456789ABCDEF'
    var color = '#';

    for(let i=0; i < 6; i++){
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

function randomBgColor(){
    var letters = '0123456789ABCDEF'
    var color = '#';

    for(let i=0; i < 6; i++){
        color += letters[Math.floor(Math.random() * 16)];
    }

    return color;
}




var collapse = document.getElementsByClassName('collapse');

for (let i=0; i< collapse.length; i++){
    
    collapse[i].addEventListener("click",function(){

        this.classList.toggle('active');
        var content = this.nextElementSibling;

        if(content.style.maxHeight){
            content.style.maxHeight = null;
        }
        else{
            content.style.maxHeight =content.scrollHeight + 'px';
        }
    });

}


// var check = document.getElementById('check');
// var random = Math.floor(Math.random() * 10);
// var re = document.getElementById("result");




// check.addEventListener('click',function(){
//     re.innerHTML = "kese ";
//     let num = Number(document.getElementById('num').value);
//     let i;
//     console.log(random);

//     if(isNaN(num) || num < 0 || num > 10){
//         console.log("Wrong number");
//     }else{
//         // for(let i= 4; i > 0; i--){
//             if(num == random){
//                 re.innerHTML = "You win !";
//                 console.log('hello');
//             }else{
//                 if(num > random){
//                     re.innerHTML = `Guess Number Below ! ${num }<br/> You have ${i} Guesses left `;
//                 console.log('less');

//                 }else{
//                     re.innerHTML = `Guess Number Greater than ! ${num} <br/> You have ${i} Guesses left `;
//                 console.log('greater');

//                 }
//             }
//         // }
//     }

//     re.innerHTML = "hello";

// });





// var hello = document.getElementById('hello');
// let button = document.getElementById('button');

// button.addEventListener('click', function(){
//     hello.innerHTML = "Verry good";
// })



let btn1 = document.getElementById('btn1');
let btn2 = document.getElementById('btn2');
let btn3 = document.getElementById('btn3');
let first = document.getElementById('first');
let second = document.getElementById('second');
let third = document.getElementById('third');


btn1.addEventListener('click', function(){
    first.innerHTML = second.innerHTML;
});


btn2.addEventListener('click', function(){
    second.innerHTML = third.firstChild.nodeValue;
})

btn3.addEventListener('click', function(){
    third.innerHTML = first.childNodes[0].nodeValue
})


let btn = document.getElementById('button');
var num = 0;

btn.addEventListener('click', function(){
    const newDiv = document.createElement('div');
    const node = document.createTextNode('This is New Apppend Div');

    newDiv.appendChild(node);

    const element = document.getElementById('conten');
    element.appendChild(newDiv);
    newDiv.setAttribute('id',`Added${num}`)
    num = num + 1;

    newDiv.style.border = '1px solid green';
    newDiv.style.padding = '10px';
    newDiv.style.margin = '10px';
    
    // alert('done');
});

// let remBtn = document.getElementById('remove');

// remBtn.addEventListener('click', function(){
//     let parent = document.getElementById('conten');
//     let child = document.getElementById(`Added${num}`);
//     console.log(child);
//     parent.removeChild(child);
// });
let remBtn = document.getElementById('remove');

remBtn.addEventListener('click', function() {
    let parent = document.getElementById('conten');
    let child = document.getElementById(`Added${num-1}`);

    if (parent && child) {
        parent.removeChild(child);
        console.log(`Element with ID 'Added${num}' removed.`);
        num = num - 1;
    } else {
        alert(`Please Add Element First!!`);
    }
});



let button2 = document.getElementById('button2');
var number = 0;

button2.addEventListener('click', function(){
    const div = document.createElement('div');
    const textNode = document.createTextNode("You add this Element");
    div.appendChild(textNode);

    const contener = document.getElementById('content');
    const locationDiv = document.getElementById('d4');
    contener.insertBefore(div, locationDiv);

    div.setAttribute('id',`Add${number}`)
    number = number + 1;
    
    div.style.border = '1px solid purple';
    div.style.padding = '10px';
    div.style.margin = '10px';
});


let removeElement = document.getElementById('remove1');

removeElement.addEventListener('click', function(){
    // let parent = document.getElementById('content');
    let child = document.getElementById(`Add${number-1}`);

    if(parent && child){
        child.parentNode.removeChild(child);
        console.log(`Element with ID 'Add${num}' removed.`);
        number = number - 1;
    }else {
        alert(`Please Add Element First!!`);
    }
})


// We can use replaceChild for change DOM directly and replace a div to another div



/*

// JavaScript Functions

function sum(...args){
    let sum = 0
    for (let arg of args){
        sum = arg + sum;
    }
    console.log(sum); 
}

sum(5,6,1,2,43,7,8,);


// let max = -Infinity;
// console.log(typeof(max));


function argSum(){
    let sum = 0;
    for(let i=0 ; i< arguments.length; i++ ){
        sum += arguments[i];
    }
    console.log(sum);
}

argSum(12,3040,25,41,21,125,63,2,52,14,5,);




function findMax(){
    let max = arguments[0];

    for(let i=0; i< arguments.length; i++){
        if(max < arguments[i]){
            max = arguments[i];
        }else{
            continue;
        }
    }
    console.log(max);
}

findMax(2,6,3,4,1,7,2,5,6,9)


// call() method

const person = {
    firstName : 'John',
    lastName : 'Doe',
}
const person2 = {
    firstName : 'Tonny',
    lastName : 'Stark',
} 

const findName = {
    fullName : function(){
        return this.firstName + " " + this.lastName;
    }
}

const log =findName.fullName.call(person);

console.log(log)

console.log(findName.fullName.call(person2));


// Using arguments

const findAddress = {
    cityName : function(city, country){
        return "City : " + city + " Country : " + country;
    },
    fullName : function(city, country){
        return "FirstName : " + this.firstName + " LastName : " + this.lastName + " city : " + city + " Country : " + country;
    },
}

// fullname function 
console.log(findAddress.fullName.call(person, 'Oslo' , 'Norway'));

// cityName function
console.log(findAddress.cityName.call(person, 'Oslo' , 'Norway'));





// JavaScript apply() Method same as call method only diffrence apply take args in array.
const man = {
    firstName : 'Harshit',
    lastName : 'Patel',
}

const man2 = {
    firstrname : 'Harshit',
    lastName : 'Patel',
}

const about = {
    getAbout : function() {
        return "FirstName : " + this.firstName + " LastName : " + this.lastName;
    },
    getAddress : function(city, country){
        return "City : " + city + " Country : " + country;
    }
}

console.log(about.getAbout.apply(man));

console.log(about.getAddress.apply(man2, ['Amdawad', 'India']));



// Bind in JavaScript

// Bind method will be 

const aObject = {
    firstName : 'John',
    lastName : ' Doe',
    fullName : function(){
        let x = document.getElementById('bind');
        x.innerHTML = 'Bind Method : ' + this.firstName + " " + this.lastName;
        return "FullName : "+ this.firstName + this.lastName;
    }
}

console.log(setTimeout(aObject.fullName, 2000));

let fullName = aObject.fullName.bind(aObject);
setTimeout(fullName, 6000);



// callBack function
function calc(a, b, callback){
    let sum = a + b;
    callback(sum);
}

function display(sum){
    console.log(sum);
}

calc(2,10, display);



const myArray = [12,-5,-8,-9,20,-56,-96,-41,23,158];

function findNeg(num){
    if(num>=0){
        return false;
    }else{
        return true;
    }
}

// function display2(num){
    // console.log(num);
// }

function filterOut(myArray, callback){
    let newArray = [];

    for(let x of myArray){
        if(callback(x)){
            newArray.push(x);
            // display2(x);
        }
    }
    return newArray;
}

const negativeNum = filterOut(myArray, findNeg);

console.log(negativeNum);



const positive = (x)=> x>=0;

console.log(positive(2));






// setTimeout & Interval

function disple(value){
    console.log(value);
}

// setTimeout print value after 3 second
setTimeout(function(){disple('I love JavaScript ')}, 3000);


// Internval

function displey(){
    let date = new Date();

    console.log(date.getHours()+":"+ date.getMinutes()+":" +date.getSeconds());
}

// setInterval(displey, 1000);

setTimeout(displey,3000);


// Promise

function hello(value){
    console.log(value);
}

let myPromise = new Promise(function(resolve,reject){
    let a = 10 > 2;
    if(a){
        resolve("Response : true");
    }
    else{
        reject("Error : false");
    }
});

myPromise.then(
    function(value){
        hello(value);
    },

    function(error){
        // console.log("Error : ", error);
        hello(value);
    }
)



function dataDisplay(data){
    console.log(data);
}


const promise = new Promise(function(resolve,reject){
    let data = [1,2,3,45,6,874,9];
    let compare = [1,2,3,45,6,874,9];

    if(data.length === compare.length){
        resolve(data);
    }else{
        reject("Data is not match");
    }
});

promise.then(
    function(data){
        dataDisplay(data);
    },
    function(data){
        dataDisplay(data);
    }
);


const promises = new Promise(function(resolve,reject){
    let compare = {
        name : 'Harshit',
        age : 20,
        add : "amd"
    };
    let person = {
        name : 'Harshit',
        age : 20,
        add : "amd"
    };

    if(compare.name == person.name && compare.age == person.age){
        resolve(person);
    }else{
        reject("Data Object Not Match");
    }
});


promises.then(
    function(data){
        displayDataObject(data);
    },
    function(data){
        displayDataObject(data);
    }
);

function displayDataObject(data){
    console.log(data);
}




const MakePromise = new Promise(function(res,rej){
    let check = function(){
        let array = [1,2,3];
        let array2 = [3,2,1];
        let sum = 0, sum2 = 0;

        for(let i= 0; i<array.length; i++){
            sum += array[i];
            sum2 += array[i];
        }


        if(sum === sum2){
            return true;
        }else{
            return false;
        }
    }

    if(check == true){
        res("Data is Matched");
    }
    else{
        rej("Data is not Matched");
    }
})

function res(data){
    displayData(data);
}
function rej(data){
    displayData(data);
}

MakePromise.then(res,rej);

function displayData(data){
    console.log(data);
}



// Async and await

var c = 0;

async function hey(){
    let myPromise = new Promise(function(res,rej){
        if(c % 2 == 0){
            c +=1 ;
            res("I love you");
        }
        c +=1 ;
        setTimeout(console.log("hello"),5000);
    });

    console.log(await myPromise);
}

hey();
hey();
hey();
hey();
hey();
hey();

*/


// JavaScript Classes

class Car{
    
    constructor(Name,Age){
        this.name = Name;
        this.age = Age;
    }

    getPrint(){
        console.log(this.name, this.age);
    }

    getBirthday(){
        let date = new Date().getFullYear();
        console.log(date - this.age);
    }

}

const obj = new Car("Mustang", 1969);
obj.getPrint();
obj.getBirthday();




class Parent{
    constructor(name,age,property,child){
        this.name = name;
        this.age = age;
        this.property = property;
        this.child = child;
    }

    get display(){
        console.log(`Name is : ${this.name} age is ${this.age} Property is ${this.property} Child is ${this.child}`);
    }

    set display(name){
        this.name = name;
    }
}

const parent = new Parent('John',50,'Father','rohan');

parent.display;

parent.display = "Kay";

parent.display;


class Parent2 extends Parent{
    constructor(name, age, property, child,address){
        super(name,age,property,child);
        this.add = address;
    }

    getAddress(){
        console.log(this.add);
    }

}

const parent2 = new Parent2('Earen', 30, 'Father', 'Yoger', 'Japan');
parent2.display;
console.log(parent2.add); // we dan call direct function 
parent2.getAddress(); //we can call method

