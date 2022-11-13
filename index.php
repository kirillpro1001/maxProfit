<!-- 
Дан список, содержащий прогноз будущих цен на акции. Найдите максимальную прибыль, которую можно получить, покупая и продавая акции любое количество раз с ограничением, что новая транзакция может начаться только после завершения предыдущей.

Например,
Цены на акции: 1 3 2 1 7

Покупаем в 1 день и продаем на 2 день
Покупаем в 4 день и продаем на 5 день

Максимальная прибыль: 7
-->


<?php

function maxProfit ($listStock) {
	$arrStock = explode(" ", $listStock);
	$profit = 0;
	foreach ($arrStock as $thisKey => $thisValue) {
		foreach ($arrStock as $twoKey => $twoValue) {
			if ($thisKey === $twoKey) {
				continue;
			}
			if (($thisValue < $twoValue) && ($thisKey===($twoKey-1))) {
				$profit+=$twoValue-$thisValue;
			}
		}
	}
	return $profit;

}

echo maxProfit('1 3 2 1 7');

?>