<div class="card mb-3">
    <img src="https://etimg.etb2bimg.com/photo/75729614.cms" class="card-img-top" alt="...">
     
    <div class="card-body">
        <h5 class="card-title">List of students</h5>
        <div  align="left">
    
    </div>

    <br>
        <p class="card-text">You can find here all the informations about students in the system</p>
        
   
    
   

        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">RollNo</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Age</th>
                <th scope="col">Gender</th>
                <th scope="col">Attendence</th>
                <th scope="col">Speciality</th>
                <th scope="col">Operations</th>

            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->RollNo }}</td>
                    <td>{{ $student->FirstName }}</td>
                    <td>{{ $student->LastName }}</td>
                    <td>{{ $student->Age }}</td>
                    <td>{{ $student->Gender }}</td>
                    <td>{{ $student->Attendence }}</td>
                    <td>{{ $student->Speciality }}</td>
                    <td>

                        <a href="{{ url('/edit/'.$student->RollNo) }}" class="btn btn-sm btn-warning">Edit</a>


                        <a href="{{ url('/delete/'.$student->RollNo) }}" class="btn btn-sm btn-danger">Delete</a>

                    </td>


                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
     <div class="card-body">
        <img src="https://img-a.udemycdn.com/course/750x422/528106_99dd_4.jpg" class="img-thumbnail" alt="..." width="193" height="130">
     <a href="{{ url('dynamic_pdf/pdf') }}" class="btn btn-danger">Convert into PDF</a>
     <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a>
     <a href="{{ url('sendemail') }}" class="btn btn-success">Send Feedback</a>
 </div>
</div>
