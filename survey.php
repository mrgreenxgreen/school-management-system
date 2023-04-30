<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Survey</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet"  href="./css/survey.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <style>
            table,tr,td,th{
                padding:10px;
                border:1px solid green;
                border-collapse: collapse;
            }

            th{
                text-align: center;
            }
        
        </style>
        <script defer src="validatesurvey.js"></script>
    </head>
    <body>
       <div class="bg">

    <form method="post" action="" name="form1" id="form1">  
            <div class="inputSurvey">
            <!-- name:start -->
            <div>
            <label>Name:</label><br/>   
            <input type="text" name="name" placeholder="first name, M.I. , last name" style="width:500px;"/>
            </div>
            <!-- name:end -->

             <!-- Age:start -->
           
            <div >
                <label>Age:</label>
                <input type="checkbox" id="ageOne" name="checkAge" value="20-25 years old" onClick="onlyOne(this)">
                <input type="checkbox" id="ageTwo" name="checkAge" value="26-30 years old"onClick="onlyOne(this)">
                <input type="checkbox" id="ageThree" name="checkAge" value="31-35 years old"onClick="onlyOne(this)">
        
            </div>
            <script>
            function onlyOne(checkbox) {
                var checkboxes = document.getElementsByName('checkAge')
                checkboxes.forEach((item) => {
                    if (item !== checkbox) item.checked = false
                })
            }
            </script>
            <!-- Age:end -->

            <!-- Gender:start -->
            <div>
                <label>Gender:</label>
                <input type="checkbox" id="ageOne" name="checkGender" value="Male" onClick="gender(this)">
                <input type="checkbox" id="ageTwo" name="checkGender" value="Female"onClick="gender(this)">
            </div>
            <script>
            function gender(checkbox) {
                var checkboxes = document.getElementsByName('checkGender')
                checkboxes.forEach((item) => {
                    if (item !== checkbox) item.checked = false
                })
            }
            </script>
            <!-- Gender:end -->

            <!-- School Year:start -->
            <div>
                <label>School Year:</label>
                <input type="checkbox" id="ageOne" name="checkSY" value="Male" onClick="SY(this)">
                <input type="checkbox" id="ageTwo" name="checkSY" value="Female"onClick="SY(this)">
                <input type="checkbox" id="ageTwo" name="checkSY" value="Female"onClick="SY(this)">
            </div>
            <script>
            function SY(checkbox) {
                var checkboxes = document.getElementsByName('checkSY')
                checkboxes.forEach((item) => {
                    if (item !== checkbox) item.checked = false
                })
            }
            </script>
            <!-- School Year:end -->

            <!-- Skills acquired:start-->
            <div>
                <label>Skills acquired:</label><br/>
                <input type="text" id="skills" name="skills" >

            </div>
            <!-- Skills acquired:end -->
            <!-- Trainings attended:start -->
            <div>
                <label>Trainings attended:</label><br/>
                <input type="text" id="trainings" name="trainings" >
            </div>
            <!-- Trainings attended:end -->


            <!-- part 2: of survey -->
            <!-- Instruction: start-->
            <table>
                <tr>
                    <td><b> 1 - Did not meet job requirements</b></td>
                    <td>Significant performance improvement urgently needed.</td>
                </tr>
                <tr>
                    <td><b> 2 - Met normal job requirements with few exceptions</b></td>
                    <td>Work improvement plan was needed to bring performance to a satisfactory level.</td>
                </tr>
                <tr>
                    <td><b> 3 - Met minimum job requirements</b></td>
                    <td>Improvements in performance needed in one or more elements.</td>
                </tr>
                <tr>
                    <td><b> 4 - Fully met job requirements</b></td>
                    <td>Performance was what expected of a person in his/her position.</td>
                </tr>
                <tr>
                    <td><b> 5 - Exceeded job requirements</b></td>
                    <td>Student performance was impressive, exceeded what is normally expected in this position.</td>
                </tr>
                <tr>
                    <td><b> NA - Not Applicable</b></td>
                    
                </tr>
            </table>
            <!-- Instruction: end-->

            <!-- Rating:start -->
            <table>
               
                <tr>
                    <td></td>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>NA</th>

                </tr>
                <tr>
                    <th><b>A.School Habits</b></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>1. Reports to school on time</td>
                    <td><input type="checkbox" id="ageTwo" name="checkA1" value="1"onClick="AOne(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkA1" value="2"onClick="AOne(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkA1" value="3"onClick="AOne(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkA1" value="4"onClick="AOne(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkA1" value="5"onClick="AOne(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkA1" value="NA"onClick="AOne(this)"></td>
                    <td><p id="promptA1" style="display:none;color:red;font-style:italic;"> Required </p></td>
                    <script>
                         function AOne(checkbox) {
                        var checkboxes = document.getElementsByName('checkA1')
                        checkboxes.forEach((item) => {
                            if (item !== checkbox) item.checked = false
                        })
                        }
                    </script>
                </tr>
               
                
                <tr>
                    <td>2. Reports to school regularly</td>
                    <td><input type="checkbox" id="ageTwo" name="checkA2" value="1"onClick="ATwo(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkA2" value="2"onClick="ATwo(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkA2" value="3"onClick="ATwo(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkA2" value="4"onClick="ATwo(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkA2" value="5"onClick="ATwo(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkA2" value="NA"onClick="ATwo(this)"></td>
                    <td><p id="promptA2" style="display:none;color:red;font-style:italic;"> Required </p></td>

                    <script>
                         function ATwo(checkbox) {
                        var checkboxes = document.getElementsByName('checkA2')
                        checkboxes.forEach((item) => {
                            if (item !== checkbox) item.checked = false
                        })
                        }
                    </script>
                </tr>
                <tr>
                    <td>3. Observes classroom time periods</td>
                    <td><input type="checkbox" id="ageTwo" name="checkA3" value="1"onClick="AThree(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkA3" value="2"onClick="AThree(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkA3" value="3"onClick="AThree(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkA3" value="4"onClick="AThree(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkA3" value="5"onClick="AThree(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkA3" value="NA"onClick="AThree(this)"></td>
                    <td><p id="promptA3" style="display:none;color:red;font-style:italic;"> Required </p></td>

                    <script>
                         function AThree(checkbox) {
                        var checkboxes = document.getElementsByName('checkA3')
                        checkboxes.forEach((item) => {
                            if (item !== checkbox) item.checked = false
                        })
                        }
                    </script>
                </tr>
                <tr>
                    <td>4. Performs activities without much supervision</td>
                    <td><input type="checkbox" id="ageTwo" name="checkA4" value="1"onClick="AFour(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkA4" value="2"onClick="AFour(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkA4" value="3"onClick="AFour(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkA4" value="4"onClick="AFour(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkA4" value="5"onClick="AFour(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkA4" value="NA"onClick="AFour(this)"></td>
                    <td><p id="promptA4" style="display:none;color:red;font-style:italic;"> Required </p></td>

                    <script>
                         function AFour(checkbox) {
                        var checkboxes = document.getElementsByName('checkA4')
                        checkboxes.forEach((item) => {
                            if (item !== checkbox) item.checked = false
                        })
                        }
                    </script>
                </tr>
                <tr>
                    <td>5. Practices self-discipline in his/her tasks</td>
                    <td><input type="checkbox" id="ageTwo" name="checkA5" value="1"onClick="AFive(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkA5" value="2"onClick="AFive(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkA5" value="3"onClick="AFive(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkA5" value="4"onClick="AFive(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkA5" value="5"onClick="AFive(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkA5" value="NA"onClick="AFive(this)"></td>
                    <td><p id="promptA5" style="display:none;color:red;font-style:italic;"> Required </p></td>

                    <script>
                         function AFive(checkbox) {
                        var checkboxes = document.getElementsByName('checkA5')
                        checkboxes.forEach((item) => {
                            if (item !== checkbox) item.checked = false
                        })
                        }
                    </script>
                </tr>
                <tr>
                    <td>6. Demonstrate dedication and commitment to activities given</td>
                    <td><input type="checkbox" id="ageTwo" name="checkA6" value="1"onClick="ASix(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkA6" value="2"onClick="ASix(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkA6" value="3"onClick="ASix(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkA6" value="4"onClick="ASix(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkA6" value="5"onClick="ASix(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkA6" value="NA"onClick="ASix(this)"></td>
                    <td><p id="promptA6" style="display:none;color:red;font-style:italic;"> Required </p></td>

                    <script>
                         function ASix(checkbox) {
                        var checkboxes = document.getElementsByName('checkA6')
                        checkboxes.forEach((item) => {
                            if (item !== checkbox) item.checked = false
                        })
                        }
                    </script>
                </tr>
                <tr>
                    <th><b>B. Affective Qualities</b></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>1. Adequate knowledge regarding the task assigned</td>
                    <td><input type="checkbox" id="ageTwo" name="checkB1" value="1"onClick="BOne(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkB1" value="2"onClick="BOne(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkB1" value="3"onClick="BOne(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkB1" value="4"onClick="BOne(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkB1" value="5"onClick="BOne(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkB1" value="NA"onClick="BOne(this)"></td>
                    <td><p id="promptB1" style="display:none;color:red;font-style:italic;"> Required </p></td>

                    <script>
                         function BOne(checkbox) {
                        var checkboxes = document.getElementsByName('checkB1')
                        checkboxes.forEach((item) => {
                            if (item !== checkbox) item.checked = false
                        })
                        }
                    </script>
                </tr>
                <tr>
                    <td>2. Emotionally intelligent in handling situations</td>
                    <td><input type="checkbox" id="ageTwo" name="checkB2" value="1"onClick="BTwo(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkB2" value="2"onClick="BTwo(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkB2" value="3"onClick="BTwo(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkB2" value="4"onClick="BTwo(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkB2" value="5"onClick="BTwo(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkB2" value="NA"onClick="BTwo(this)"></td>
                    <td><p id="promptB2" style="display:none;color:red;font-style:italic;"> Required </p></td>

                    <script>
                         function BTwo(checkbox) {
                        var checkboxes = document.getElementsByName('checkB2')
                        checkboxes.forEach((item) => {
                            if (item !== checkbox) item.checked = false
                        })
                        }
                    </script>
                </tr>
                <tr>
                    <td>3. Flexibility in balancing tasks given</td>
                    <td><input type="checkbox" id="ageTwo" name="checkB3" value="1"onClick="BThree(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkB3" value="2"onClick="BThree(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkB3" value="3"onClick="BThree(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkB3" value="4"onClick="BThree(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkB3" value="5"onClick="BThree(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkB3" value="NA"onClick="BThree(this)"></td>
                    <td><p id="promptB3" style="display:none;color:red;font-style:italic;"> Required </p></td>

                    <script>
                         function BThree(checkbox) {
                        var checkboxes = document.getElementsByName('checkB3')
                        checkboxes.forEach((item) => {
                            if (item !== checkbox) item.checked = false
                        })
                        }
                    </script>
                </tr>
                <tr>
                    <td>4. Familiarity inoperating food machinery/equipment</td>
                    <td><input type="checkbox" id="ageTwo" name="checkB4" value="1"onClick="BFour(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkB4" value="2"onClick="BFour(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkB4" value="3"onClick="BFour(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkB4" value="4"onClick="BFour(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkB4" value="5"onClick="BFour(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkB4" value="NA"onClick="BFour(this)"></td>
                    <td><p id="promptB4" style="display:none;color:red;font-style:italic;"> Required </p></td>

                    <script>
                         function BFour(checkbox) {
                        var checkboxes = document.getElementsByName('checkB4')
                        checkboxes.forEach((item) => {
                            if (item !== checkbox) item.checked = false
                        })
                        }
                    </script>
                </tr>
                <tr>
                    <td>5. Demonstrate enthusiasm in learning new things</td>
                    <td><input type="checkbox" id="ageTwo" name="checkB5" value="1"onClick="BFive(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkB5" value="2"onClick="BFive(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkB5" value="3"onClick="BFive(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkB5" value="4"onClick="BFive(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkB5" value="5"onClick="BFive(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkB5" value="NA"onClick="BFive(this)"></td>
                    <td><p id="promptB5" style="display:none;color:red;font-style:italic;"> Required </p></td>

                    <script>
                         function BFive(checkbox) {
                        var checkboxes = document.getElementsByName('checkB5')
                        checkboxes.forEach((item) => {
                            if (item !== checkbox) item.checked = false
                        })
                        }
                    </script>
                </tr>
                <tr>
                    <th><b>C. Work Habits</b></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>1. Reports to work on time</td>
                    <td><input type="checkbox" id="ageTwo" name="checkC1" value="1"onClick="COne(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkC1" value="2"onClick="COne(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkC1" value="3"onClick="COne(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkC1" value="4"onClick="COne(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkC1" value="5"onClick="COne(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkC1" value="NA"onClick="COne(this)"></td>
                    <td><p id="promptC1" style="display:none;color:red;font-style:italic;"> Required </p></td>

                    <script>
                         function COne(checkbox) {
                        var checkboxes = document.getElementsByName('checkC1')
                        checkboxes.forEach((item) => {
                            if (item !== checkbox) item.checked = false
                        })
                        }
                    </script>
                </tr>
                <tr>
                    <td>2. Reports to work regularly</td>
                    <td><input type="checkbox" id="ageTwo" name="checkC2" value="1"onClick="CTwo(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkC2" value="2"onClick="CTwo(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkC2" value="3"onClick="CTwo(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkC2" value="4"onClick="CTwo(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkC2" value="5"onClick="CTwo(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkC2" value="NA"onClick="CTwo(this)"></td>
                    <td><p id="promptC2" style="display:none;color:red;font-style:italic;"> Required </p></td>

                    <script>
                         function CTwo(checkbox) {
                        var checkboxes = document.getElementsByName('checkC2')
                        checkboxes.forEach((item) => {
                            if (item !== checkbox) item.checked = false
                        })
                        }
                    </script>
                </tr>
                <tr>
                    <td>3. Observes proper break time periods</td>
                    <td><input type="checkbox" id="ageTwo" name="checkC3" value="1"onClick="CThree(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkC3" value="2"onClick="CThree(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkC3" value="3"onClick="CThree(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkC3" value="4"onClick="CThree(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkC3" value="5"onClick="CThree(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkC3" value="NA"onClick="CThree(this)"></td>
                    <td><p id="promptC3" style="display:none;color:red;font-style:italic;"> Required </p></td>

                    <script>
                         function CThree(checkbox) {
                        var checkboxes = document.getElementsByName('checkC3')
                        checkboxes.forEach((item) => {
                            if (item !== checkbox) item.checked = false
                        })
                        }
                    </script>
                </tr>
                <tr>
                    <td>4. Performs tasks without much supervision</td>
                    <td><input type="checkbox" id="ageTwo" name="checkC4" value="1"onClick="CFour(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkC4" value="2"onClick="CFour(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkC4" value="3"onClick="CFour(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkC4" value="4"onClick="CFour(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkC4" value="5"onClick="CFour(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkC4" value="NA"onClick="CFour(this)"></td>
                    <td><p id="promptC4" style="display:none;color:red;font-style:italic;"> Required </p></td>

                    <script>
                         function CFour(checkbox) {
                        var checkboxes = document.getElementsByName('checkC4')
                        checkboxes.forEach((item) => {
                            if (item !== checkbox) item.checked = false
                        })
                        }
                    </script>
                </tr>
                <tr>
                    <td>5. Practices self-discipline in his/her work</td>
                    <td><input type="checkbox" id="ageTwo" name="checkC5" value="1"onClick="CFive(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkC5" value="2"onClick="CFive(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkC5" value="3"onClick="CFive(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkC5" value="4"onClick="CFive(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkC5" value="5"onClick="CFive(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkC5" value="NA"onClick="CFive(this)"></td>
                    <td><p id="promptC5" style="display:none;color:red;font-style:italic;"> Required </p></td>

                    <script>
                         function CFive(checkbox) {
                        var checkboxes = document.getElementsByName('checkC5')
                        checkboxes.forEach((item) => {
                            if (item !== checkbox) item.checked = false
                        })
                        }
                    </script>
                </tr>
                <tr>
                    <td>6. Demonstrate dedication and commitment to the tasks assigned</td>
                    <td><input type="checkbox" id="ageTwo" name="checkC6" value="1"onClick="CSix(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkC6" value="2"onClick="CSix(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkC6" value="3"onClick="CSix(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkC6" value="4"onClick="CSix(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkC6" value="5"onClick="CSix(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkC6" value="NA"onClick="CSix(this)"></td>
                    <td><p id="promptC6" style="display:none;color:red;font-style:italic;"> Required </p></td>

                    <script>
                         function CSix(checkbox) {
                        var checkboxes = document.getElementsByName('checkC6')
                        checkboxes.forEach((item) => {
                            if (item !== checkbox) item.checked = false
                        })
                        }
                    </script>
                </tr>
                <tr>
                    <th><b>D. Work Skills</b></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>1. Demosntrates the ability to operate machines needed on the job</td>
                    <td><input type="checkbox" id="ageTwo" name="checkD1" value="1"onClick="DOne(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkD1" value="2"onClick="DOne(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkD1" value="3"onClick="DOne(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkD1" value="4"onClick="DOne(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkD1" value="5"onClick="DOne(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkD1" value="NA"onClick="DOne(this)"></td>
                    <td><p id="promptD1" style="display:none;color:red;font-style:italic;"> Required </p></td>

                    <script>
                         function DOne(checkbox) {
                        var checkboxes = document.getElementsByName('checkD1')
                        checkboxes.forEach((item) => {
                            if (item !== checkbox) item.checked = false
                        })
                        }
                    </script>
                </tr>
                <tr>
                    <td>2. Handles the details assigned to him/her</td>
                    <td><input type="checkbox" id="ageTwo" name="checkD2" value="1"onClick="DTwo(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkD2" value="2"onClick="DTwo(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkD2" value="3"onClick="DTwo(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkD2" value="4"onClick="DTwo(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkD2" value="5"onClick="DTwo(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkD2" value="NA"onClick="DTwo(this)"></td>
                    <td><p id="promptD2" style="display:none;color:red;font-style:italic;"> Required </p></td>

                    <script>
                         function DTwo(checkbox) {
                        var checkboxes = document.getElementsByName('checkD2')
                        checkboxes.forEach((item) => {
                            if (item !== checkbox) item.checked = false
                        })
                        }
                    </script>
                </tr>
                <tr>
                    <td>3. Shows flexibility(whenever the need arises) in the process of going through his/her task</td>
                    <td><input type="checkbox" id="ageTwo" name="checkD3" value="1"onClick="DThree(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkD3" value="2"onClick="DThree(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkD3" value="3"onClick="DThree(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkD3" value="4"onClick="DThree(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkD3" value="5"onClick="DThree(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkD3" value="NA"onClick="DThree(this)"></td>
                    <td><p id="promptD3" style="display:none;color:red;font-style:italic;"> Required </p></td>

                    <script>
                         function DThree(checkbox) {
                        var checkboxes = document.getElementsByName('checkD3')
                        checkboxes.forEach((item) => {
                            if (item !== checkbox) item.checked = false
                        })
                        }
                    </script>
              
                </tr>
                <tr>
                    <td>4. Manifests thoroughness and precise attention to details</td>
                    <td><input type="checkbox" id="ageTwo" name="checkD4" value="1"onClick="DFour(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkD4" value="2"onClick="DFour(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkD4" value="3"onClick="DFour(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkD4" value="4"onClick="DFour(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkD4" value="5"onClick="DFour(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkD4" value="NA"onClick="DFour(this)"></td>
                    <td><p id="promptD4" style="display:none;color:red;font-style:italic;"> Required </p></td>

                    <script>
                         function DFour(checkbox) {
                        var checkboxes = document.getElementsByName('checkD4')
                        checkboxes.forEach((item) => {
                            if (item !== checkbox) item.checked = false
                        })
                        }
                    </script>
                </tr>
                <tr>
                    <td>5. Fully understands the linkage or connection between his/her task to previous, intervening and subsequent tasks</td>
                    <td><input type="checkbox" id="ageTwo" name="checkD5" value="1"onClick="DFive(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkD5" value="2"onClick="DFive(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkD5" value="3"onClick="DFive(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkD5" value="4"onClick="DFive(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkD5" value="5"onClick="DFive(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkD5" value="NA"onClick="DFive(this)"></td>
                    <td><p id="promptD5" style="display:none;color:red;font-style:italic;"> Required </p></td>

                    <script>
                         function DFive(checkbox) {
                        var checkboxes = document.getElementsByName('checkD5')
                        checkboxes.forEach((item) => {
                            if (item !== checkbox) item.checked = false
                        })
                        }
                    </script>
                </tr>
                <tr>
                    <td>6.Usually comes up with sound suggestions to problems</td>
                    <td><input type="checkbox" id="ageTwo" name="checkD6" value="1"onClick="DSix(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkD6" value="2"onClick="DSix(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkD6" value="3"onClick="DSix(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkD6" value="4"onClick="DSix(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkD6" value="5"onClick="DSix(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkD6" value="NA"onClick="DSix(this)"></td>
                    <td><p id="promptD6" style="display:none;color:red;font-style:italic;"> Required </p></td>

                    <script>
                         function DSix(checkbox) {
                        var checkboxes = document.getElementsByName('checkD6')
                        checkboxes.forEach((item) => {
                            if (item !== checkbox) item.checked = false
                        })
                        }
                    </script>
                </tr>
                <tr>
                    <th><b>E. Social Skills</b></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>1. Shows tact in dealing with different people he/she comes in contact with</td>
                    <td><input type="checkbox" id="ageTwo" name="checkE1" value="1"onClick="EOne(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkE1" value="2"onClick="EOne(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkE1" value="3"onClick="EOne(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkE1" value="4"onClick="EOne(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkE1" value="5"onClick="EOne(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkE1" value="NA"onClick="EOne(this)"></td>
                    <td><p id="promptE1" style="display:none;color:red;font-style:italic;"> Required </p></td>

                    <script>
                         function EOne(checkbox) {
                        var checkboxes = document.getElementsByName('checkE1')
                        checkboxes.forEach((item) => {
                            if (item !== checkbox) item.checked = false
                        })
                        }
                    </script>
                </tr>
                <tr>
                    <td>2. Shows respect and courtesy in dealing with peers and superiors at all times</td>
                    <td><input type="checkbox" id="ageTwo" name="checkE2" value="1"onClick="ETwo(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkE2" value="2"onClick="ETwo(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkE2" value="3"onClick="ETwo(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkE2" value="4"onClick="ETwo(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkE2" value="5"onClick="ETwo(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkE2" value="NA"onClick="ETwo(this)"></td>
                    <td><p id="promptE2" style="display:none;color:red;font-style:italic;"> Required </p></td>

                    <script>
                         function ETwo(checkbox) {
                        var checkboxes = document.getElementsByName('checkE2')
                        checkboxes.forEach((item) => {
                            if (item !== checkbox) item.checked = false
                        })
                        }
                    </script>
                </tr>
                <tr>
                    <td>3. Willingly helps others(whenever necessary) in the performance of their tasks</td>
                    <td><input type="checkbox" id="ageTwo" name="checkE3" value="1"onClick="EThree(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkE3" value="2"onClick="EThree(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkE3" value="3"onClick="EThree(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkE3" value="4"onClick="EThree(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkE3" value="5"onClick="EThree(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkE3" value="NA"onClick="EThree(this)"></td>
                    <td><p id="promptE3" style="display:none;color:red;font-style:italic;"> Required </p></td>

                    <script>
                         function EThree(checkbox) {
                        var checkboxes = document.getElementsByName('checkE3')
                        checkboxes.forEach((item) => {
                            if (item !== checkbox) item.checked = false
                        })
                        }
                    </script>
                </tr>
                <tr>
                    <td>4. Is capable of learning from and listening to co-workers</td>
                    <td><input type="checkbox" id="ageTwo" name="checkE4" value="1"onClick="EFour(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkE4" value="2"onClick="EFour(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkE4" value="3"onClick="EFour(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkE4" value="4"onClick="EFour(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkE4" value="5"onClick="EFour(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkE4" value="NA"onClick="EFour(this)"></td>
                    <td><p id="promptE4" style="display:none;color:red;font-style:italic;"> Required </p></td>

                    <script>
                         function EFour(checkbox) {
                        var checkboxes = document.getElementsByName('checkE4')
                        checkboxes.forEach((item) => {
                            if (item !== checkbox) item.checked = false
                        })
                        }
                    </script>
                </tr>
                <tr>
                    <td>5. Shows appreciation and gratitude for any form of assistance granted to him/her by others</td>
                    <td><input type="checkbox" id="ageTwo" name="checkE5" value="1"onClick="EFive(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkE5" value="2"onClick="EFive(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkE5" value="3"onClick="EFive(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkE5" value="4"onClick="EFive(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkE5" value="5"onClick="EFive(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkE5" value="NA"onClick="EFive(this)"></td>
                    <td><p id="promptE5" style="display:none;color:red;font-style:italic;"> Required </p></td>

                    <script>
                         function EFive(checkbox) {
                        var checkboxes = document.getElementsByName('checkE5')
                        checkboxes.forEach((item) => {
                            if (item !== checkbox) item.checked = false
                        })
                        }
                    </script>
                </tr>
                <tr>
                    <td>6. Shows poise, self-confidence personally well-groomed and always wears appropriate dress</td>
                    <td><input type="checkbox" id="ageTwo" name="checkE6" value="1"onClick="ESix(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkE6" value="2"onClick="ESix(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkE6" value="3"onClick="ESix(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkE6" value="4"onClick="ESix(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkE6" value="5"onClick="ESix(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkE6" value="NA"onClick="ESix(this)"></td>
                    <td><p id="promptE6" style="display:none;color:red;font-style:italic;"> Required </p></td>

                    <script>
                         function ESix(checkbox) {
                        var checkboxes = document.getElementsByName('checkE6')
                        checkboxes.forEach((item) => {
                            if (item !== checkbox) item.checked = false
                        })
                        }
                    </script>
                </tr>
                <tr>
                    <td>7. Show emotional maturity</td>
                    <td><input type="checkbox" id="ageTwo" name="checkE7" value="1"onClick="ESeven(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkE7" value="2"onClick="ESeven(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkE7" value="3"onClick="ESeven(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkE7" value="4"onClick="ESeven(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkE7" value="5"onClick="ESeven(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkE7" value="NA"onClick="ESeven(this)"></td>
                    <td><p id="promptE7" style="display:none;color:red;font-style:italic;"> Required </p></td>

                    <script>
                         function ESeven(checkbox) {
                        var checkboxes = document.getElementsByName('checkE7')
                        checkboxes.forEach((item) => {
                            if (item !== checkbox) item.checked = false
                        })
                        }
                    </script>
                </tr>
                <tr>
                    <td>8. Exhibits great potential in the overall performance of his/her tasks</td>
                    <td><input type="checkbox" id="ageTwo" name="checkE8" value="1"onClick="EEight(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkE8" value="2"onClick="EEight(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkE8" value="3"onClick="EEight(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkE8" value="4"onClick="EEight(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkE8" value="5"onClick="EEight(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkE8" value="NA"onClick="EEight(this)"></td>
                    <td><p id="promptE8" style="display:none;color:red;font-style:italic;"> Required </p></td>

                    <script>
                         function EEight(checkbox) {
                        var checkboxes = document.getElementsByName('checkE8')
                        checkboxes.forEach((item) => {
                            if (item !== checkbox) item.checked = false
                        })
                        }
                    </script>
                </tr>
                <tr>
                    <th><b>G. Problems Encountered</b></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>1. Limited exposure both dining and kitchen area</td>
                    <td><input type="checkbox" id="ageTwo" name="checkG1" value="1"onClick="GOne(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkG1" value="2"onClick="GOne(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkG1" value="3"onClick="GOne(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkG1" value="4"onClick="GOne(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkG1" value="5"onClick="GOne(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkG1" value="NA"onClick="GOne(this)"></td>
                    <td><p id="promptG1" style="display:none;color:red;font-style:italic;"> Required </p></td>

                    <script>
                         function GOne(checkbox) {
                        var checkboxes = document.getElementsByName('checkG1')
                        checkboxes.forEach((item) => {
                            if (item !== checkbox) item.checked = false
                        })
                        }
                    </script>
                </tr>
                <tr>
                    <td>2. Adaptability in new working environment</td>
                    <td><input type="checkbox" id="ageTwo" name="checkG2" value="1"onClick="GTwo(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkG2" value="2"onClick="GTwo(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkG2" value="3"onClick="GTwo(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkG2" value="4"onClick="GTwo(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkG2" value="5"onClick="GTwo(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkG2" value="NA"onClick="GTwo(this)"></td>
                    <td><p id="promptG2" style="display:none;color:red;font-style:italic;"> Required </p></td>

                    <script>
                         function GTwo(checkbox) {
                        var checkboxes = document.getElementsByName('checkG2')
                        checkboxes.forEach((item) => {
                            if (item !== checkbox) item.checked = false
                        })
                        }
                    </script>
                </tr>
               
                <tr>
                    <td>3. Difficulty in handling guest-related situations</td>
                    <td><input type="checkbox" id="ageTwo" name="checkG3" value="1"onClick="GThree(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkG3" value="2"onClick="GThree(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkG3" value="3"onClick="GThree(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkG3" value="4"onClick="GThree(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkG3" value="5"onClick="GThree(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkG3" value="NA"onClick="GThree(this)"></td>
                    <td><p id="promptG3" style="display:none;color:red;font-style:italic;"> Required </p></td>

                    <script>
                         function GThree(checkbox) {
                        var checkboxes = document.getElementsByName('checkG3')
                        checkboxes.forEach((item) => {
                            if (item !== checkbox) item.checked = false
                        })
                        }
                    </script>
                </tr>
                <tr>
                    <td>4. Unfamiliar in operating equipment and tools</td>
                    <td><input type="checkbox" id="ageTwo" name="checkG4" value="1"onClick="GFour(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkG4" value="2"onClick="GFour(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkG4" value="3"onClick="GFour(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkG4" value="4"onClick="GFour(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkG4" value="5"onClick="GFour(this)"></td>
                    <td><input type="checkbox" id="ageTwo" name="checkG4" value="NA"onClick="GFour(this)"></td>
                    <td><p id="promptG4" style="display:none;color:red;font-style:italic;"> Required </p></td>

                    <script>
                         function GFour(checkbox) {
                        var checkboxes = document.getElementsByName('checkG4')
                        checkboxes.forEach((item) => {
                            if (item !== checkbox) item.checked = false
                        })
                        }
                    </script>
                </tr>
                
            </table>
            <!-- Rating:end -->

            <input type="submit" name="submit" value="submit" onclick="checkSubmit()"/>
            </div>
        </form>
        </div>
    </body>
    </html>
 
    
    <?php
    $host ='localhost';
    $database ='ipas';
    $username ='root';
    $password='';
    $mysqli = mysqli_connect($host,$username,$password,$database);

    

    /**
     * mysql_connect is deprecated
     * using mysqli_connect instead
     */
    
    // $databaseHost = 'localhost';
    // $databaseName = 'u870144098_crud_with_logi';
    // $databaseUsername = 'u870144098_root';
    // $databasePassword = 'Human143!';
    
    // $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
    
    ?>

    


<?php

error_reporting(E_ERROR | E_PARSE);


if(isset($_POST['submit'])){
    
    $time="";
$name= "";
$checkAge= "";
$checkGender= "";
$checkSY= "";
$skills ="";
$trainings="";
$checkA1= "";
$checkA2= "";
$checkA3= "";
$checkA4= "";
$checkA5= "";
$checkA6= "";
$checkB1= "";
$checkB2= "";
$checkB3= "";
$checkB4= "";
$checkB5= "";
$checkC1= "";
$checkC2= "";
$checkC3= "";
$checkC4= "";
$checkC5= "";
$checkC6= "";
$checkD1= "";
$checkD2= "";
$checkD3= "";
$checkD4= "";
$checkD5= "";
$checkD6= "";
$checkE1= "";
$checkE2= "";
$checkE3= "";
$checkE4= "";
$checkE5	= "";
$checkE6= "";
$checkE7= "";
$checkE8= "";
$checkG1= "";
$checkG2= "";
$checkG3= "";
$checkG4= "";

    $name= $_POST['name'];
$checkAge= $_POST['checkAge'];
$checkGender= $_POST['checkGender'];
$checkSY= $_POST['checkSY'];
$skills = $_POST['skills'];
$trainings = $_POST['trainings'];
$checkA1= $_POST['checkA1'];
$checkA2= $_POST['checkA2'];
$checkA3= $_POST['checkA3'];
$checkA4= $_POST['checkA4'];
$checkA5= $_POST['checkA5'];
$checkA6= $_POST['checkA6'];
$checkB1= $_POST['checkB1'];
$checkB2= $_POST['checkB2'];
$checkB3= $_POST['checkB3'];
$checkB4= $_POST['checkB4'];
$checkB5= $_POST['checkB5'];
$checkC1= $_POST['checkC1'];
$checkC2= $_POST['checkC2'];
$checkC3= $_POST['checkC3'];
$checkC4= $_POST['checkC4'];
$checkC5= $_POST['checkC5'];
$checkC6= $_POST['checkC6'];
$checkD1= $_POST['checkD1'];
$checkD2= $_POST['checkD2'];
$checkD3= $_POST['checkD3'];
$checkD4= $_POST['checkD4'];
$checkD5= $_POST['checkD5'];
$checkD6= $_POST['checkD6'];
$checkE1= $_POST['checkE1'];
$checkE2= $_POST['checkE2'];
$checkE3= $_POST['checkE3'];
$checkE4= $_POST['checkE4'];
$checkE5= $_POST['checkE5'];
$checkE6= $_POST['checkE6'];
$checkE7= $_POST['checkE7'];
$checkE8= $_POST['checkE8'];
$checkG1= $_POST['checkG1'];
$checkG2= $_POST['checkG2'];
$checkG3= $_POST['checkG3'];
$checkG4= $_POST['checkG4'];
if($name=="" ||  $checkAge=="" ||$checkGender=="" ||$checkSY=="" || $skills=="" || $trainings==""||
$checkA1=="" || $checkA2=="" || $checkA3=="" || $checkA4=="" || $checkA5=="" ||
$checkA6=="" || $checkB1=="" || $checkB2=="" || $checkB3=="" || $checkB4=="" ||
$checkB5=="" || $checkC1=="" || $checkC2=="" || $checkC3=="" || $checkC4=="" ||
$checkC5=="" || $checkC6=="" || $checkD1=="" || $checkD2=="" || $checkD3=="" ||
$checkD4=="" || $checkD5=="" || $checkD6=="" || $checkE1=="" || $checkE2=="" ||
$checkE3=="" || $checkE4=="" || $checkE5=="" || $checkE6=="" || $checkE7=="" ||
$checkE8=="" || $checkG1=="" || $checkG2=="" || $checkG3=="" || $checkG4=="" 
){
    echo "<script>alert('Please answer/rate all items')</script>";
}else{
    mysqli_query($mysqli,
    "INSERT INTO answers VALUES('','$name','$checkAge','$checkGender','$checkSY', '$skills','$trainings'
    ,'$checkA1','$checkA2','$checkA3','$checkA4','$checkA5','$checkA6','$checkB1','$checkB2'
    ,'$checkB3','$checkB4','$checkB5','$checkC1','$checkC2','$checkC3','$checkC4','$checkC5','$checkC6'
    ,'$checkD1','$checkD2','$checkD3','$checkD4','$checkD5','$checkD6','$checkE1','$checkE2','$checkE3'
    ,'$checkE4','$checkE5','$checkE6','$checkE7','$checkE8','$checkG1','$checkG2','$checkG3','$checkG4'
    )")
    or die("could not execute");
    echo "<script>alert('Successfully submitted. Thank you!')</script>";
}
}


?>