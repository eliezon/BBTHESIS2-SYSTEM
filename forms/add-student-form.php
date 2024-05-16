<div class="add-student-form" id="add-student-form">
         <div class="student-form">
            <p class="add-student">Add Student</p>
            <button onclick="closeAddStudent()" class="close-add-student">&#10006</button>
            <br><br><br><br>
            <form action="">
                <label for="">ID Number</label>
                <input type="text" class="first-3">

                <label for="">First Name</label>
                <input type="text">

                <label for="">Last Name</label>
                <input type="text">

                <label for="">Address</label>
                <input type="text">

                <label for="">Sex</label>
                <div class="gender">
                    <div>
                        <label for="male">Male</label>
                        <input type="radio" id="male" name="sex">
                    </div>
                    <div>
                        <label for="female">Female</label>
                        <input type="radio" id="female" name="sex">
                    </div>
                </div>
                <br>

                <label for="">Birthdate</label>
                <input type="date">

                <label for="">Email Address</label>
                <input type="text">
                <br>
                <button type="submit" class="save">Save</button>
            </form>
        </div>
</div>