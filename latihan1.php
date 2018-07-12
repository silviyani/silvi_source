<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Latihan 1</title>
	<style type="text/css">
		.warna-baris{
			background-color: silver;
		}
	</style>
</head>
<body>

		A. Memakai penulisan template
		<table border='1' cellpadding="10" cellspacing="0">
			<?php for($i=1; $i<=5; $i++): ?>
				<?php if($i%2==1)  : ?>
					<tr class="warna-baris">
				<?php else : ?>
					<tr>
				<?php endif; ?>
						<?php for ($j=1; $j<=5; $j++) : ?> 
							<td><?php echo "$i, $j"; ?></td>
						<?php endfor; ?>
					</tr>
			<?php endfor; ?>
		</table>
		<br>
		<br>

		B. Penulisan Biasa
		<table border=1 cellpadding="10" cellspacing="0"l>
			<?php 
				//pengulangan baris
				for ($i=1; $i <=3 ; $i++) { 
					if($i%2==0){
						echo "<tr class='warna-baris'>";
					} else {
						echo "<tr>";
					}
					//pengulangan kolo,
					for ($j=1; $j <=4 ; $j++) { 
						echo "<td>$i,$j</td>";
					}
					echo "</tr>";
				}

			?>
		</table>
</body>
</html>