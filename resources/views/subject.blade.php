
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subject Management</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
    <!-- Navigation Bar -->
    <nav>
        <ul>
            <li><a href="{{url('/dashboard') }}">Home</a></li>
            <li><a href="{{url('/subject.index') }}">Subject List</a></li>
        </ul>
    </nav>

    <!-- Header -->
    <header>
        <h1>Subject Management</h1>
    </header>

    <!-- Form for Adding Subject -->
    <section>
        <h2>Add Subject</h2>
        <form action="{{url('/subject/insert')}}" method="POST">
            @csrf
            <label for="subject_name">Subject Name:</label>
            <input type="text" id="subject_name" name="subj_name" required><br><br>

            <label for="credit">Credit:</label>
            <input type="number" id="cradit" name="cradit" required><br><br>

            <label for="faculty">Faculty:</label>
            <select id="faculty" name="faculty" required>
                <option value="Faculty of Science">Faculty of Science</option>
                <option value="College of Computing">College of Computing</option>
                <option value="Faculty of Engineering">Faculty of Engineering</option>
                <option value="Faculty of Education">Faculty of Education</option>
                <option value="Faculty of Law">Faculty of Law</option>
                <option value="Faculty of Economics">Faculty of Economics</option>
            </select><br><br>

            <button type="submit">Add Subject</button>
        </form>
    </section>

    <!-- Display List of Subjects -->
    <section>
        <h2>Subject List (Total: {{ $subjects->count() }})</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>Subject ID</th>
                    <th>Subject Name</th>
                    <th>Credit</th>
                    <th>Faculty</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subjects as $subject)
                    <tr>
                        <td>{{$subject->id }}</td>
                        <td>{{$subject->subj_name }}</td>
                        <td>{{$subject->cradit }}</td>
                        <td>{{$subject->faculty }}</td>
                        <td><button class="delete-button" onclick="confirmDelete({{$subject->id}})">Delete</button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</body>
<script>
    function confirmDelete(subjectID){
        if(confirm("Are you sure you want to delete this subject?")){
        window.location.href=`/subject/delete/${subjectID}`};
    }
    
    
</script>
</html>

