
// Navbar

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('showSidebar').addEventListener('click',function(){
        const sidebar = document.querySelector('.sidebar');
        sidebar.style.display = 'flex';
    });
    document.getElementById('hideSidebar').addEventListener('click',function(){
        const sidebar = document.querySelector('.sidebar');
        sidebar.style.display = 'none';
    });
});


// Clock Running Code 
document.addEventListener('DOMContentLoaded', function() {

    setInterval(function(){
        const day = ['Sun','Mon','Tue','Wed','Thur','Fri','Sat'];
        const month = ['Jan','Fab','Mar','Apr','May','Jun','Jul','Aug','Sept','Oct','Nev','Dec']
        const hour = document.getElementById('hour');
        const minute = document.getElementById('minute');
        const second = document.getElementById('second');
        const date = document.getElementById('date');
        
        const time = new Date();
        hour.innerHTML = pad(time.getHours());
        minute.innerHTML = pad(time.getMinutes());
        second.innerHTML = pad(time.getSeconds());
        const Day = time.getDay();
        const Month = time.getMonth();
        
        date.innerHTML = day[Day] + " "+time.getDate()+" " + month[Month] + " " + time.getFullYear();
        // console.log(time.getSeconds());
    },1000);

});


// code for adding 0 if number less than 10

function pad(number) {
    if(number < 10){
        return "0" + number;
    }
    return number;
}


// Stopwatch Code 

document.addEventListener('DOMContentLoaded', function() {

    const minutes = document.getElementById('Minite');
    const seconds = document.getElementById('Second');
    const miniSeconds = document.getElementById('miniSecond');    
    let miliSecond = 0, second = 0, minute = 0, interval;
    
    // start function which is run the update function.
    document.getElementById('Start').addEventListener('click',function(){
        if(!interval){
            interval = setInterval(update, 1);
        }
    });
    
    // Stop function which is stop the update function.
    document.getElementById('Stop').addEventListener('click',function(){
        clearInterval(interval);
        interval=null;
    });
    
    
    //update function which is update miliseconds, seconds and hours.
    function update(){
    
        miliSecond +=1;
    
        if(miliSecond == 1000){
            miliSecond = 0;
            second += 1;
        }
    
        if(second == 60){
            second = 0;
            minute += 1;
        }
    
        minutes.innerHTML = pad(minute);
        seconds.innerHTML = pad(second);
        miniSeconds.innerHTML = miliSecond < 10 ? '00' + miliSecond : miliSecond < 100 ? '0' + miliSecond : miliSecond;
        // console.log(miliSecond);
    }
    
    
    // Reset function which is stop the update function and also reset value to 0.
    document.getElementById('Reset').addEventListener('click',function(){    
        clearInterval(interval);
        interval = null;
    
        minutes.innerHTML = "00";
        seconds.innerHTML = "00";
        miniSeconds.innerHTML = "000";
        miliSecond = 0, second = 0, minute = 0;
    });
    

});



document.addEventListener('DOMContentLoaded', function() {
    // Utility function to populate dropdowns
    function populateDropdown(dropdownId, range) {
        const dropdown = document.getElementById(dropdownId);
        for (let i = 0; i < range; i++) {
            const item = document.createElement('div');
            item.textContent = String(i).padStart(2, '0');
            dropdown.appendChild(item);
        }
    }

    // Populate dropdowns
    populateDropdown('hour-items', 24);
    populateDropdown('minute-items', 60);
    populateDropdown('second-items', 60);

    const dropdowns = document.querySelectorAll('.custom-dropdown');
    dropdowns.forEach(function(dropdown) {
        const selected = dropdown.querySelector('.dropdown-selected');
        const items = dropdown.querySelector('.dropdown-items');
        const options = items.querySelectorAll('div');

        selected.addEventListener('click', function() {
            items.style.display = items.style.display === 'none' || items.style.display === '' ? 'block' : 'none';
        });

        options.forEach(function(option) {
            option.addEventListener('click', function (event) {
                if (event.target.tagName === "DIV") {
                    selected.textContent = event.target.textContent;
                    items.style.display = "none";
                }
            });
        });

        document.addEventListener('click', function(e) {
            if (!dropdown.contains(e.target)) {
                items.style.display = 'none';
            }
        });
    });

    let timerInterval;
    let totalSeconds;
    const startTimer = document.getElementById('start');
    const remain = document.getElementById('remain');

    startTimer.addEventListener('click', function() {
        const hour = parseInt(document.getElementById('hour-selected').textContent, 10) || 0;
        const minute = parseInt(document.getElementById('minute-selected').textContent, 10) || 0;
        const second = parseInt(document.getElementById('second-selected').textContent, 10) || 0;

        totalSeconds = hour * 3600 + minute * 60 + second;

        if (totalSeconds <= 0) {
            alert('Please Select Time !!!!!!');
        } else {
            clearInterval(timerInterval);
            timerInterval = setInterval(function() {
                if (totalSeconds > 0) {
                    totalSeconds--;
                    remain.style.color = 'black';
                    updateDisplay();
                } else {
                    remain.style.color = 'red';
                    alert('Timer Stopped Because Time Up !!!');
                    clearInterval(timerInterval);
                }
            }, 1000);
        }
    });

    document.getElementById('stop').addEventListener('click', function() {
        clearInterval(timerInterval);
    });

    document.getElementById('reset').addEventListener('click', function() {
        clearInterval(timerInterval);
        totalSeconds = 0;
        document.getElementById('hour-selected').textContent = 'HH';
        document.getElementById('minute-selected').textContent = 'MM';
        document.getElementById('second-selected').textContent = 'SS';
        remain.style.color = 'white';
        updateDisplay();
    });

    function updateDisplay() {
        const hours = Math.floor(totalSeconds / 3600);
        const minutes = Math.floor((totalSeconds % 3600) / 60);
        const seconds = totalSeconds % 60;
        const result = `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
        remain.textContent = result;
    }
});


// cusomize buttons
const isClock = document.getElementById('isClockChecked');

isClock.addEventListener('click', function() {
        let isClockChecked = document.getElementById('isClockChecked').checked;
        
        if(isClockChecked){
            document.getElementById('clockNone').style.display = 'none';
        }else{
            document.getElementById('clockNone').style.display = 'block';
        }
        // console.log(isClockChecked);

});

const isStopWatch = document.getElementById('isStopWatchChecked');

isStopWatch.addEventListener('click', function() {
        let isStopWatchChecked = document.getElementById('isStopWatchChecked').checked;
            
        if(isStopWatchChecked){
            document.getElementById('stopWatchNone').style.display = 'none';
        }else{
            document.getElementById('stopWatchNone').style.display = 'block';
        }
        // console.log(isClockChecked);
});

const isTimer = document.getElementById('isTimerChecked');

isTimer.addEventListener('click', function() {
    let isTimerChecked = document.getElementById('isTimerChecked').checked;
    
    if(isTimerChecked){
        document.getElementById('timerNone').style.display = 'none';
    }else{
        document.getElementById('timerNone').style.display = 'block';
    }

});
