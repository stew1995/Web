<form name="uniRegister" class="registrationForm" method="post">
          <h1>University Information</h1>
          <p id="requni"><span class="required">* required field.</span></p>
          <!--<p>Course: <input type="text" name="Course" id="Course"></p>-->
          <p>Course<form name="courseList">
            <select id="courseList">
             <option value="">Select the course your studying:</option>
             <option value="ANIM">Animation</option>
             <option value="BIOCH">Biochemistry</option>
             <option value="BIO">Biology</option>
             <option value="BUSI">Business</option>
             <option value="BE">Business and Economics</option>
             <option value="CENG">Civil Engineering</option>
             <option value="CE">Computer Engineering</option>
             <option value="CS">Computer Science</option>
             <option value="COMP">Computing</option>
             <option value="CP">Criminology with Psychology</option>
             <option value="DHDT">Dental Hygiene and Dental Therapy</option>
             <option value="DM">Digital Marketing</option>
             <option value="ECO">Economics</option>
             <option value="EH">English and History</option>
             <option value="EL">English Literature</option>
             <option value="FS">Film Studies</option>
             <option value="GPH">Geography</option>
             <option value="GEO">Geology</option>
             <option value="GD">Graphic Design</option>
             <option value="HMT">Hospitality Management with Tourism</option>
             <option value="IR">Internation Relations</option>
             <option value="JRN">Journalism</option>
             <option value="LAW">Law with Criminology</option>
             <option value="MATH">Mathmatics</option>
             <option value="MS">Media Studies</option>
             <option value="PHR">Pharmacy</option>
             <option value="SC">Sociology with Criminology</option>
             <option value="SSP">Sports Science and Management</option>
             <option value="TFP">Television and Film Production</option>
           </select>
         </form></p>
         <div id="courseTxt"> </div>
          <p id="reqcourse"><span class="required">*<span id="courseErr"> </span></span></p>
          <p>Year of Study: <select id="StudyYear">
                              <option value="">Select your current study year:</option>
                              <option value="one">1</option>
                              <option value="two">2</option>
                              <option value="three">3</option>
                              <option value="four">4</option>
                            </select>
                          </p>
          <p id="reqyear"><span class="required">*<span id="yearErr"> </span></span></p>
          <p>Accomodation: <select id="Accomodation">
                            <option value="">Where will you be staying: </option>
                            <option value="Halls">Halls</option>
                            <option value="House">House</option>
                            </select>
                          </p>
          <p id="reqaccom"><span class="required">*<span id="accomErr"> </span></span></p>
        </form>