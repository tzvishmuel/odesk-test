<?php
	$dspArray = array(
		array(
			'Name' => 'Trixie',
			'Color' => 'Green',
			'Element' => 'Earth',
			'Likes' => 'Flowers'
			),
		array(
			'Name' => 'Tinkerbell',
			'Element' => 'Air',
			'Likes' => 'Singning',
			'Color' => 'Blue'
			), 
		array(
			'Element' => 'Water',
			'Likes' => 'Dancing',
			'Name' => 'Blum',
			'Color' => 'Pink'
			),
	);

?>
<html>
	<head>
		<style>
			.redcell {
			text-align: center;
			background-color: red;
			}
		</style>
		<style>
			.bluecell {
			text-align: center;
			background-color: blue;
			}
		</style>
		<style>
			.greencell {
			text-align: center;
			background-color: green;
			}
		</style>
		<style>
			.yellowcell {
			text-align: center;
			background-color: yellow;
			}
		</style>
	
	</head>
	<body>
		<table border=1>
			<tr>
				<th class='redcell'>Name</th>
				<th class='bluecell'>Color</th>
				<th class='greencell'>Element</th>
				<th class='yellowcell'>Likes</th>
			</tr>
			<?php foreach($dspArray as $dspRow)
			{
				extract ($dspRow);
				echo "
				<tr>
					<td class='redcell'>$Name</td>
					<td class='bluecell'>$Color</td>
					<td class='greencell'>$Element</td>
					<td class='yellowcell'>$Likes</td>
				</tr>
				";
			}
			?>
		</table>
	</body>
</html>