<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Challenge Team</title>


    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
<h1>' To Dr/eslam '</h1>
<h2>From  {{Auth::user()->name}}</h2>


<p></p>

<table>

    <tbody>
    <tr>
        <th>Name</th>
        <td>{{$name}}</td>

    </tr>
    <tr>
        <th>subject</th>
        <td>{{$subject}}</td>

    </tr>
    <tr>
        <th>Content</th>
        <td>{{$body}}</td>

    </tr>


    </tbody>
</table>



</body>
</html>