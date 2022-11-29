<!DOCTYPE html>
<html>
<head>
    <title></title>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;
}
</style>
</head>

<body>

    <h2>Lead Details:</h2>

    <table style="width:100%">
    <tr>
        <th>Name:</th>
        <td> {{ $Name }}</td>
    </tr>
    <tr>
        <th>Email:</th>
        <td>{{ $Email }}</td>
    </tr>
    <tr>
        <th>Number:</th>
        <td> {{ $Number }}</td>
    </tr>
    <tr>
        <th>Description</th>
        <td>{{ $Description }}</td>
    </tr>
    <tr>
        <th>Company</th>
        <td>{{ $Company }}</td>
    </tr>
    <tr>
        <th>Job Title</th>
        <td>{{ $Job_Title }}</td>
    </tr>
    </table>
</body>
</html>

