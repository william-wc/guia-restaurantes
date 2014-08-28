<?php
	function mediaAvaliacoes ($avaliacoes) {
		$total = count($avaliacoes);
		$media = 0;
		for ($i=0; $i<$total; $i++)
			$media += $avaliacoes[$i];
		return $media/$total;
		
	}
?>