function includeHTML() {
    document.querySelectorAll('[data-include]').forEach(async (element) => {
        const file = element.getAttribute('data-include');
        
        if (file) {
            try {
               const response = await fetch(file);
                const content = await response.text();
                element.innerHTML = content;
           } catch (error) {
                 console.error(`Error loading ${file}:`, error);
                element.innerHTML = "Content could not be loaded.";
            }
        }
    });
}

// Call the function on page load
window.onload = includeHTML;



window.alert=("wellcome to fitzone");
function openNav() {
    document.getElementById("mySidepanel").style.width = "250px";
}
  
function closeNav() {
    document.getElementById("mySidepanel").style.width = "0";
}
function calculateBMI() {
    const weight = parseFloat(document.getElementById('weight').value);
    const height = parseFloat(document.getElementById('height').value);

    if (weight && height) {
        var bmi = (weight / (height * height)).toFixed(2);
        if (bmi<18){
            document.getElementById('bmiResult').innerText = `You are underweight & risk of (weakend immunity, bone health issue, hair ,skin and nail probloms) and your BMI is = ${bmi}`;
        }else if(bmi<24){
            document.getElementById('bmiResult').innerText = `You are fit & good health and your BMI is = ${bmi}`
        }else {
            document.getElementById('bmiResult').innerText = `You are overweight & higher risk of(heart attack , stoke, blood pressure, joint problems,)and your BMI is = ${bmi}`;
        }
    } else {
        document.getElementById('bmiResult').innerText = 'Please enter valid inputs!';
    }
}

// Workout Tracker
function addWorkout() {
    const workoutInput = document.getElementById('workout');
    const workout = workoutInput.value;

    if (workout) {
        const list = document.getElementById('workoutList');
        const listItem = document.createElement('li');
        listItem.textContent = workout;
        list.appendChild(listItem);

        // Clear input field
        workoutInput.value = "   _";
    } else {
        alert('Please enter a workout!');
    }
}



connect.addEventListener("click",function(){
    let name = document.getElementById("name");
    let email = document.getElementById("email");
    let pass = document.getElementById("pass");
    let number = document.getElementById("number");
    
    if(name.value ==""|| email.value == ""|| pass.value == "" ||number.value==""){
        alert("Please Enter Details");
     }
        else{
            alert("THANKS FOR CONNECTING");
        }
})