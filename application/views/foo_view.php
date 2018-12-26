<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>CodeIgniter 3 Benchmark Features</title>
		<style>
            table {
                border: solid 1px black;
                border-collapse: collapse;
            }
            table th {
                background-color: #969896;
                color: white;
            }
            table td, table th {
                border: solid 1px black;
                min-width: 150px;
            }
        </style>	</head>
	<body>

		<div id="container">
			<h1>"Foo" benchmark using session {key}</h1>

			<div id="body">
				<table>
					<thead>
						<tr>
							<th>Hour</th>
							{calhead}
							<th>Day {day}</th>
							{/calhead}
						</tr>
					</thead>
					<tbody>
						{calrows}
						<tr>
							<td>{hour}</td>
							{row}
						</tr>
						{/calrows}
					</tbody>
				</table>
			</div>

		</div>

	</body>
</html>