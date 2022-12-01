<!DOCTYPE html>
<html>

<head>
    <title></title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 5px;
            text-align: left;
        }
    </style>
</head>

<body>

    <h2>Join Our Team</h2>

    <table style="width:100%">
        <tr>
            <th>Name:</th>
            <td>{{$career_row['name']}}</td>
        </tr>
        <tr>
            <th>Email:</th>
            <td>{{$career_row['email']}}</td>
        </tr>
        <tr>
            <th>Number:</th>
            <td>{{$career_row['phone']}}</td>
        </tr>
        <tr>
            <th>Lead Type</th>
            <td>{{ $career_row['resume_title']}}</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>{{$career_row['msg']}}</td>
        </tr>
        <tr>
            <th>Resume File</th>
            <td>{{$career_row['resume_file']}}</td>
        </tr>
    </table>
    <!-- Xcellent Insights Team</p> -->
</body>

</html>