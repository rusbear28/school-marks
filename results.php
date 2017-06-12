<?php 

/**
 * Расчет успеваемости и качества обученности.
 *
 * Успеваемость: 	У = (А * 100) / К, где: А - количество 3, 4 и 5; К - количество учащихся.
 * Качество:		К = (А * 100) / К, где: А - количество 4 и 5; К - количество учащихся.
 *
 */

if ($_POST["marks"]) 
{
	if (count($_POST["marks"]) == 4)
	{
		$mark_5 = (int) $_POST["marks"][5];
		$mark_4 = (int) $_POST["marks"][4];
		$mark_3 = (int) $_POST["marks"][3];
		$mark_2 = (int) $_POST["marks"][2];

		$total_students = array_sum($_POST["marks"]); 
		$total_marks_progress = $mark_3 + $mark_4 + $mark_5;
		$total_marks_quality = $mark_4 + $mark_5;

		$progress = round(($total_marks_progress * 100) / $total_students, 1);
		$quality = round(($total_marks_quality * 100) / $total_students, 1);

		echo 'Успеваемость: ' . $progress . '% <br/>';
		echo 'Качество: ' . $quality . '% <br/><br/>';
	}
	
}

echo '<a href="index.php">Return to back</a>';

