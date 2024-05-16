<div class="manage-users" id="manage-users">

    <div class="table-con-con">

    <div class="table-con">
    
    <p style="font-size:30px;color:rgb(50,50,50)">List of Users</p>
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
            <th><input type="checkbox">Username</th>
            <th>Email</th>
            <th>Option</th>
        </tr>
        <tr>
            <td>1</td>
            <td><input type="checkbox">Username</td>
            <td>Email</td>
            <td><a href="#">Edit</a></td>
        </tr>
        <tr>
            <td>2</td>
            <td><input type="checkbox">Username</td>
            <td>Email</td>
            <td><a href="#">Edit</a></td>
        </tr>
        <tr>
            <td>3</td>
            <td><input type="checkbox">Username</td>
            <td>Email</td>
            <td><a href="#">Edit</a></td>
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
            <button onclick="showAddUser()">New</button>
            <button>Delete Selected</button>
    </div>
    
    </div>

 </div>
</div>

<link rel="stylesheet" href="../../styles/phead.css">