<div class="loads" id="loads">

        <div class="table-con-con">

            <div class="table-con">
            
            <p style="font-size:30px;color:rgb(50,50,50)">Instructor's Subject</p>

            <div class="in_info">
                <p>Full Name: <span>Mr. Ericson Brigildo</span></p>
                <p>Sex: <span>Male</span></p>
                <p>Employment Status: <span>Probationary</span></p>
                <p>Specialization: <span>Computer Etc.</span></p>
                <p>Address: <span>Ambot</span></p>
            </div>

            <br>

            <div class="filter">
                
                <div class="filter1">
                <p>Show</p>
                <select name="" id="">
                    <option value="">10</option>
                    <option value="">25</option>
                    <option value="">50</option>
                    <option value="">100</option>
                </select>
                <p>Entries</p>
                </div>

                <div>
                    <label for="">Search:</label>
                    <input type="search">
                </div>


            </div>

            <table>
                <tr>
                    <th>No</th>
                    <th><input type="checkbox">Subject</th>
                    <th>Description</th>
                    <th>Year Level</th>
                    <th>Room</th>
                    <th>Day and Time</th>
                    <th>Students</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td><input type="checkbox">Subject</td>
                    <td>Description</td>
                    <td>Year Level</td>
                    <td>Room</td>
                    <td>Day and Time</td>
                    <td><a href="#" onclick="showStudentList()">View</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><input type="checkbox">Subject</td>
                    <td>Description</td>
                    <td>Year Level</td>
                    <td>Room</td>
                    <td>Day and Time</td>
                    <td><a href="">View</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><input type="checkbox">Subject</td>
                    <td>Description</td>
                    <td>Year Level</td>
                    <td>Room</td>
                    <td>Day and Time</td>
                    <td><a href="">View</a></td>
                </tr>

            </table>
            <p class="hr"></p>


            <div style="display:flex;justify-content:space-between;align-items:center">
                <div class="user-table-btn">
                    <p class="entries">Showing 1 to 3 of 3 entries</p>
                </div>

                <div class="pages">
                    <button>Prev</button>
                    <p>1</p>
                    <button>Next</button>
                </div>
            </div>


            <div class="user-table-btn">
                    <button onclick="showTeacherStudent()">Back</button>
                    <button onclick="showAssignSubject()">Assign Subjects</button>
                    <button>Delete Selected</button>
            </div>
            
            </div>

        </div>
</div>