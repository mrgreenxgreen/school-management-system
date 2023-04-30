

// const name = document.getElementByName("name")
// const age = document.getElementsByName("checkAge")
// const gender = document.getElementsByName("checkGender")
// const schoolyear = document.getElementsByName("checkSY")
// const skills = document.getElementByName("skills")
// const trainings = document.getElementByName("trainings")

function checkSubmit(){
const a1 = document.getElementsByName("checkA1")
const a2 = document.getElementsByName("checkA2")
const a3 = document.getElementsByName("checkA3")
const a4 = document.getElementsByName("checkA4")
const a5 = document.getElementsByName("checkA5")
const a6 = document.getElementsByName("checkA6")
const b1 = document.getElementsByName("checkB1")
const b2 = document.getElementsByName("checkB2")
const b3 = document.getElementsByName("checkB3")
const b4 = document.getElementsByName("checkB4")
const b5 = document.getElementsByName("checkB5")
const c1 = document.getElementsByName("checkC1")
const c2 = document.getElementsByName("checkC2")
const c3 = document.getElementsByName("checkC3")
const c4 = document.getElementsByName("checkC4")
const c5 = document.getElementsByName("checkC5")
const c6 = document.getElementsByName("checkC6")
const d1 = document.getElementsByName("checkD1")
const d2 = document.getElementsByName("checkD2")
const d3 = document.getElementsByName("checkD3")
const d4 = document.getElementsByName("checkD4")
const d5 = document.getElementsByName("checkD5")
const d6 = document.getElementsByName("checkD6")
const e1 = document.getElementsByName("checkE1")
const e2 = document.getElementsByName("checkE2")
const e3 = document.getElementsByName("checkE3")
const e4 = document.getElementsByName("checkE4")
const e5 = document.getElementsByName("checkE5")
const e6 = document.getElementsByName("checkE6")
const e7 = document.getElementsByName("checkE7")
const e8 = document.getElementsByName("checkE8")
const g1 = document.getElementsByName("checkG1")
const g2 = document.getElementsByName("checkG2")
const g3 = document.getElementsByName("checkG3")
const g4 = document.getElementsByName("checkG4")
const form = document.getElementById("form1")

form.addEventListener('submit',(e)=>{
    var checknumberA1 = 0;
    var checknumberA2 = 0;
    var checknumberA3 = 0;
    var checknumberA4 = 0;
    var checknumberA5 = 0;
    var checknumberA6 = 0;
    var checknumberB1 = 0;
    var checknumberB2 = 0;
    var checknumberB3 = 0;
    var checknumberB4 = 0;
    var checknumberB5 = 0;
    var checknumberC1 = 0;
    var checknumberC2 = 0;
    var checknumberC3 = 0;
    var checknumberC4 = 0;
    var checknumberC5 = 0;
    var checknumberC6 = 0;
    var checknumberD1 = 0;
    var checknumberD2 = 0;
    var checknumberD3 = 0;
    var checknumberD4 = 0;
    var checknumberD5 = 0;
    var checknumberD6 = 0;
    var checknumberE1 = 0;
    var checknumberE2 = 0;
    var checknumberE3 = 0;
    var checknumberE4 = 0;
    var checknumberE5 = 0;
    var checknumberE6 = 0;
    var checknumberE7 = 0;
    var checknumberE8 = 0;
    var checknumberG1 = 0;
    var checknumberG2 = 0;
    var checknumberG3 = 0;
    var checknumberG4 = 0;

    for(var ctr = 0; ctr < a1.length; ctr++){
        if(a1[ctr].checked==true){
       checknumberA1++;
     }
     }
    
    for(var ctr = 0; ctr < a2.length; ctr++){
        if(a2[ctr].checked==true){
            checknumberA2++;
        }
    }
    for(var ctr = 0; ctr < a3.length; ctr++){
        if(a3[ctr].checked==true){
            checknumberA3++;
        }
    }
    for(var ctr = 0; ctr < a4.length; ctr++){
        if(a4[ctr].checked==true){
            checknumberA4++;
        }
    }
    for(var ctr = 0; ctr < a5.length; ctr++){
        if(a5[ctr].checked==true){
            checknumberA5++;
        }
    }
    for(var ctr = 0; ctr < a6.length; ctr++){
        if(a6[ctr].checked==true){
            checknumberA6++;
        }
    }
    for(var ctr = 0; ctr < b1.length; ctr++){
        if(b1[ctr].checked==true){
            checknumberB1++;
        }
    }
    for(var ctr = 0; ctr < b2.length; ctr++){
        if(b2[ctr].checked==true){
            checknumberB2++;
        }
    }
    for(var ctr = 0; ctr < b3.length; ctr++){
        if(b3[ctr].checked==true){
            checknumberB3++;
        }
    }
    for(var ctr = 0; ctr < b4.length; ctr++){
        if(b4[ctr].checked==true){
            checknumberB4++;
        }
    }
    for(var ctr = 0; ctr < b5.length; ctr++){
        if(b5[ctr].checked==true){
            checknumberB5++;
        }
    }
    for(var ctr = 0; ctr < c1.length; ctr++){
        if(c1[ctr].checked==true){
            checknumberC1++;
        }
    }
    for(var ctr = 0; ctr < c2.length; ctr++){
        if(c2[ctr].checked==true){
            checknumberC2++;
        }
    }
    for(var ctr = 0; ctr < c3.length; ctr++){
        if(c3[ctr].checked==true){
            checknumberC3++;
        }
    }
    for(var ctr = 0; ctr < c4.length; ctr++){
        if(c4[ctr].checked==true){
            checknumberC4++;
        }
    }
    for(var ctr = 0; ctr < c5.length; ctr++){
        if(c5[ctr].checked==true){
            checknumberC5++;
        }
    }
    for(var ctr = 0; ctr < c6.length; ctr++){
        if(c6[ctr].checked==true){
            checknumberC6++;
        }
    }
    for(var ctr = 0; ctr < d1.length; ctr++){
        if(d1[ctr].checked==true){
            checknumberD1++;
        }
    }
    for(var ctr = 0; ctr < d2.length; ctr++){
        if(d2[ctr].checked==true){
            checknumberD2++;
        }
    }
    for(var ctr = 0; ctr < d3.length; ctr++){
        if(d3[ctr].checked==true){
            checknumberD3++;
        }
    }
    for(var ctr = 0; ctr < d4.length; ctr++){
        if(d4[ctr].checked==true){
            checknumberD4++;
        }
    }
    for(var ctr = 0; ctr < d5.length; ctr++){
        if(d5[ctr].checked==true){
            checknumberD5++;
        }
    }
    for(var ctr = 0; ctr < d6.length; ctr++){
        if(d6[ctr].checked==true){
            checknumberD6++;
        }
    }
    for(var ctr = 0; ctr < e1.length; ctr++){
        if(e1[ctr].checked==true){
            checknumberE1++;
        }
    }
    for(var ctr = 0; ctr < e2.length; ctr++){
        if(e2[ctr].checked==true){
            checknumberE2++;
        }
    }
    for(var ctr = 0; ctr < e3.length; ctr++){
        if(e4[ctr].checked==true){
            checknumberE3++;
        }
    }
    for(var ctr = 0; ctr < e4.length; ctr++){
        if(e4[ctr].checked==true){
            checknumberE4++;
        }
    }
    for(var ctr = 0; ctr < e5.length; ctr++){
        if(e5[ctr].checked==true){
            checknumberE5++;
        }
    }
    for(var ctr = 0; ctr < e6.length; ctr++){
        if(e6[ctr].checked==true){
            checknumberE6++;
        }
    }
    for(var ctr = 0; ctr < e7.length; ctr++){
        if(e7[ctr].checked==true){
            checknumberE7++;
        }
    }
    for(var ctr = 0; ctr < e8.length; ctr++){
        if(e8[ctr].checked==true){
            checknumberE8++;
        }
    }
    for(var ctr = 0; ctr < g1.length; ctr++){
        if(g1[ctr].checked==true){
            checknumberG1++;
        }
    }
    for(var ctr = 0; ctr < g2.length; ctr++){
        if(g2[ctr].checked==true){
            checknumberG2++;
        }
    }
    for(var ctr = 0; ctr < g3.length; ctr++){
        if(g3[ctr].checked==true){
            checknumberG3++;
        }
    }
     for(var ctr = 0; ctr < g4.length; ctr++){
        if(g4[ctr].checked==true){
            checknumberG4++;
        }
    }



     if(checknumberA1 <= 0 ){
        const promptA1 = document.getElementById("promptA1").style.display ="block"
       

   
    }
    if(checknumberA2 <= 0 ){
        const promptA2 = document.getElementById("promptA2").style.display ="block"
  

  
    }
    
    if(checknumberA3 <= 0 ){
        const promptA3 = document.getElementById("promptA3").style.display ="block"
  


    }
    if(checknumberA4 <= 0 ){
        const promptA4 = document.getElementById("promptA4").style.display ="block"


 
    }
    if(checknumberA4 <= 0 ){
        const promptA4 = document.getElementById("promptA4").style.display ="block"
  
    e.preventDefault();

   
    }
    if(checknumberA5 <= 0 ){
        const promptA5 = document.getElementById("promptA5").style.display ="block"
  
    e.preventDefault();

  
    }
    if(checknumberA6 <= 0 ){
        const promptA6 = document.getElementById("promptA6").style.display ="block"
  
    e.preventDefault();

    }
    if(checknumberB1 <= 0 ){
        const promptB1 = document.getElementById("promptB1").style.display ="block"
  
    e.preventDefault();

   
    }
    if(checknumberB2 <= 0 ){
        const promptB2 = document.getElementById("promptB2").style.display ="block"
  
    e.preventDefault();

   
    }
    if(checknumberB3 <= 0 ){
        const promptB3 = document.getElementById("promptB3").style.display ="block"
  
    e.preventDefault();

    
    }
    if(checknumberB4 <= 0 ){
        const promptB4 = document.getElementById("promptB4").style.display ="block"
  
    e.preventDefault();

    }
    if(checknumberB5 <= 0 ){
        const promptB5 = document.getElementById("promptB5").style.display ="block"
  
    e.preventDefault();

    }
    if(checknumberC1 <= 0 ){
        const promptC1 = document.getElementById("promptC1").style.display ="block"
  
    e.preventDefault();

    }
    if(checknumberC2 <= 0 ){
        const promptC2 = document.getElementById("promptC2").style.display ="block"
  
    e.preventDefault();

    }
    if(checknumberC3 <= 0 ){
        const promptC3 = document.getElementById("promptC3").style.display ="block"
  
    e.preventDefault();

    }
    if(checknumberC4 <= 0 ){
        const promptC4 = document.getElementById("promptC4").style.display ="block"
  
    e.preventDefault();

    }
    if(checknumberC5 <= 0 ){
        const promptC5 = document.getElementById("promptC5").style.display ="block"
  
    e.preventDefault();

    }
    if(checknumberC6 <= 0 ){
        const promptC6 = document.getElementById("promptC6").style.display ="block"
  
    e.preventDefault();

    }
    if(checknumberD1 <= 0 ){
        const promptD1 = document.getElementById("promptD1").style.display ="block"
  
    e.preventDefault();

    }
    if(checknumberD2 <= 0 ){
        const promptD2 = document.getElementById("promptD2").style.display ="block"
  
    e.preventDefault();

    }
    if(checknumberD3 <= 0 ){
        const promptD3 = document.getElementById("promptD3").style.display ="block"
  
    e.preventDefault();

    }
    if(checknumberD4 <= 0 ){
        const promptD4 = document.getElementById("promptD4").style.display ="block"
  
    e.preventDefault();

    }
    if(checknumberD5 <= 0 ){
        const promptD5 = document.getElementById("promptD5").style.display ="block"
  
    e.preventDefault();

    }
    if(checknumberD6 <= 0 ){
        const promptD6 = document.getElementById("promptD6").style.display ="block"
  
    e.preventDefault();

    }
    if(checknumberE1 <= 0 ){
        const promptE1 = document.getElementById("promptE1").style.display ="block"
  
    e.preventDefault();

    }
    if(checknumberE2 <= 0 ){
        const promptE2 = document.getElementById("promptE2").style.display ="block"
  
    e.preventDefault();

    }
    if(checknumberE3 <= 0 ){
        const promptE3 = document.getElementById("promptE3").style.display ="block"
  
    e.preventDefault();

    }
    if(checknumberE4 <= 0 ){
        const promptE4 = document.getElementById("promptE4").style.display ="block"
  
    e.preventDefault();

    }
    if(checknumberE5 <= 0 ){
        const promptE5 = document.getElementById("promptE5").style.display ="block"
  
    e.preventDefault();

    }
    if(checknumberE6 <= 0 ){
        const promptE6 = document.getElementById("promptE6").style.display ="block"
  
    e.preventDefault();

    }
    if(checknumberE7 <= 0 ){
        const promptE7 = document.getElementById("promptE7").style.display ="block"
  
    e.preventDefault();

    }
    if(checknumberE8 <= 0 ){
        const promptE8 = document.getElementById("promptE8").style.display ="block"
  
    e.preventDefault();

    }
    if(checknumberG1 <= 0 ){
        const promptG1 = document.getElementById("promptG1").style.display ="block"
  
    e.preventDefault();

    }
    if(checknumberG2 <= 0 ){
        const promptG2 = document.getElementById("promptG2").style.display ="block"
  
    e.preventDefault();

    }
    if(checknumberG3 <= 0 ){
        const promptG3 = document.getElementById("promptG3").style.display ="block"
  
    e.preventDefault();

    }
    if(checknumberG4 <= 0 ){
        const promptG4 = document.getElementById("promptG4").style.display ="block"
  
    e.preventDefault();

    }



}
)

}
