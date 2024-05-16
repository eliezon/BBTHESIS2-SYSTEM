<div class="student-table" id="student-table">
    <div>
        <p style="font-size:30px;color:rgb(50,50,50)">List of Student</p>
        <div style="display:flex;align-items:center;padding-top:20px;gap:5px">
        <select name="" id="">
            <option value="">BSIT</option>
            <option value="">BSBA</option>
            <option value="">BSED</option>
            <option value="">BSCRIM</option>
            <option value="">BSTM</option>
            <option value="">BSHM</option>
        </select>

        <select name="" id="">
            <option value="">1st Year</option>
            <option value="">2nd Year</option>
            <option value="">3rd Year</option>
            <option value="">4th Year</option>
        </select>

        <select name="" id="">
            <option value="">Section A</option>
            <option value="">Section B</option>
            <option value="">Section C</option>
            <option value="">Section D</option>
        </select>
    </div>
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
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID#</th>
                    <th><input type="checkbox">Fullname</th>
                    <th>Address</th>
                    <th>Sex</th>
                    <th>Birthdate</th>
                    <th>Email Address</th>
                    <th>Option</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>ID#</td>
                    <td><input type="checkbox">Fullname</td>
                    <td>Address</td>
                    <td>Sex</td>
                    <td>Birthdate</td>
                    <td>Email Address</td>
                    <td><a href="#" onclick="showSubjectEnrolled()">View</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>ID#</td>
                    <td><input type="checkbox">Fullname</td>
                    <td>Address</td>
                    <td>Sex</td>
                    <td>Birthdate</td>
                    <td>Email Address</td>
                    <td><a href="#">View</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>ID#</td>
                    <td><input type="checkbox">Fullname</td>
                    <td>Address</td>
                    <td>Sex</td>
                    <td>Birthdate</td>
                    <td>Email Address</td>
                    <td><a href="#">View</a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>ID#</td>
                    <td><input type="checkbox">Fullname</td>
                    <td>Address</td>
                    <td>Sex</td>
                    <td>Birthdate</td>
                    <td>Email Address</td>
                    <td><a href="#">View</a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>ID#</td>
                    <td><input type="checkbox">Fullname</td>
                    <td>Address</td>
                    <td>Sex</td>
                    <td>Birthdate</td>
                    <td>Email Address</td>
                    <td><a href="#">View</a></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>ID#</td>
                    <td><input type="checkbox">Fullname</td>
                    <td>Address</td>
                    <td>Sex</td>
                    <td>Birthdate</td>
                    <td>Email Address</td>
                    <td><a href="#">View</a></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>ID#</td>
                    <td><input type="checkbox">Fullname</td>
                    <td>Address</td>
                    <td>Sex</td>
                    <td>Birthdate</td>
                    <td>Email Address</td>
                    <td><a href="#">View</a></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>ID#</td>
                    <td><input type="checkbox">Fullname</td>
                    <td>Address</td>
                    <td>Sex</td>
                    <td>Birthdate</td>
                    <td>Email Address</td>
                    <td><a href="#">View</a></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>ID#</td>
                    <td><input type="checkbox">Fullname</td>
                    <td>Address</td>
                    <td>Sex</td>
                    <td>Birthdate</td>
                    <td>Email Address</td>
                    <td><a href="#">View</a></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>ID#</td>
                    <td><input type="checkbox">Fullname</td>
                    <td>Address</td>
                    <td>Sex</td>
                    <td>Birthdate</td>
                    <td>Email Address</td>
                    <td><a href="#">View</a></td>
                </tr>
            </tbody>
        </table>
        <p class="hr"></p>

        <div style="display:flex;justify-content:space-between;align-items:center">
            <div class="user-table-btn" style="display:block">
                <p class="entries">Showing 1 to 10 of 10 entries</p>
            </div>

            <div class="pages">
                <button>Prev</button>
                <p>1</p>
                <button>Next</button>
            </div>
        </div>

        <div class="user-table-btn">
                <button onclick="showAddStudent()">New</button>
                <button>Delete Selected</button>
            </div>

    </div>
</div>